<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\NotificationService;
use App\Repositories\Interface\UserRepoInterface;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthPhoneRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Traits\TempPesanNotifTrait;
use App\Traits\ToastTrait;
use App\Exceptions\DataException;




class AuthPhoneController extends Controller
{
    use TempPesanNotifTrait;
    use ToastTrait;
    private $notifService;
    private $userRepo;
    public function __construct(UserRepoInterface $userRepo, NotificationService $notifService)
    {
        $this->userRepo = $userRepo;
        $this->notifService = $notifService;
    }
    public function akses()
    {
        return view('auth.phone.akses');
    }

    public function akses_validasi(Request $request)
    {
        $data = $request->validate([
            'phone_number' => ['required', 'min:9', 'max:14', new PhoneNumber],
            'phone_code'   => ['max:6', 'nullable'],
        ]);
        if (User::where('phone_number', $request->phone_number)->doesntExist()) {
            $user = $this->userRepo->storeDataValidasi($data);
            event(new Registered($user));
        }

        return redirect()->route('akses.nomor', ['nomor' => $request->phone_number]);
    }

    public function akses_nomor($nomor)
    {
        $user = $this->userRepo->findDataPhone($nomor);
        return view('auth.phone.kode', compact('nomor', 'user'));
    }

    public function akses_nomor_kirim_otp($nomor)
    {
        $kode = rand(1000,9999);
        $user = $this->userRepo->findDataPhone($nomor);
        $this->userRepo->updateOTP($nomor, $kode);
        $kirim = $this->notifService->kirimNotifWa($user->phone_code.ltrim($user->phone_number, '0'), $this->formatPesanAksesWa($kode));
        if (!$kirim) { throw DataException::errorSendOTP(); }
        $this->successSendOTP($nomor);

        return $this->successSendOTP($nomor);
    }

    public function akses_login(AuthPhoneRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
