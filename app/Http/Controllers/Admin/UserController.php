<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Interface\UserRepoInterface;
use App\Repositories\Interface\RoleRepoInterface;
use App\Exceptions\DataException;
use App\Traits\ToastTrait;

use App\Contracts\NotificationService;
use App\Http\Requests\UserRequest;
use App\Contracts\LogService;


class UserController extends Controller
{
    use ToastTrait;
    private $notification, $log;
    private $userRepo, $roleRepo;
    public function __construct(
        UserRepoInterface $userRepo,
        RoleRepoInterface $roleRepo,
        NotificationService $notification,
        LogService $log
    )
    {
        $this->middleware('role:super-admin');

        $this->userRepo       = $userRepo;
        $this->roleRepo       = $roleRepo;
        $this->notification   = $notification;
        $this->log            = $log;
    }

    public function index($unit) {
        $users = $this->userRepo->getDataTable();
        return view('modules.users.index', compact('users', 'unit'));
    }

    public function show($id) {
        $roles = $this->roleRepo->getData();
        $user  = $this->userRepo->findData($id);

        // user has role
        foreach($roles as $role_d) {
            if($user->roles->contains($role_d->id)) {
                $role[] = $role_d->id;
            }
        }
        return view('modules.users.show', compact('user', 'roles', 'role'));
    }

    public function create() {
        return view('modules.users.create');
    }

    public function store(UserRequest $request) {
        $data = $request->validated();
        $user = $this->userRepo->storeData($data);
        if (!$user) { throw DataException::errorCreate(); }
        $this->log->create(null, $user);
        $this->successCreate($request->email);
        return redirect()->route('superadmin.users.index');
    }

    public function update($id, UserRequest $request) {
        // dd($request->all());
        $data   = $request->validate($request->rulesUpdate());
        $user   = $this->userRepo->updateData($id, $data);
        if (!$user) { throw DataException::errorUpdate(); }
        $this->successUpdate($request->email);
        return redirect()->route('superadmin.users.index');
    }

    public function password($id) {
        return view('modules.users.password', compact('id'));
    }

    public function password_update($id, UserRequest $request) {
        $data   = $request->validate($request->rulesUpdatePassword());
        $user_b = $this->userRepo->findData($id);
        $user   = $this->userRepo->updateDataPassword($id, $data);
        if (!$user) { throw DataException::errorUpdate(); }
        $this->successUpdate('Password '.$user_b->email);
        return redirect()->route('superadmin.users.index');
    }

    public function destroy($unit, $id)
    {
        // Logika untuk menghapus data berdasarkan ID
    }
}
