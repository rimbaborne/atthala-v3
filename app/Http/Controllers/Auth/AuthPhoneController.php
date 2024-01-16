<?php

namespace App\Http\Controllers\Auth;

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




class AuthPhoneController extends Controller
{
    private $userRepo;
    public function __construct(UserRepoInterface $userRepo)
    {
        $this->userRepo = $userRepo;
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
        return view('auth.phone.kode', compact('nomor'));
    }

    public function akses_login(AuthPhoneRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
