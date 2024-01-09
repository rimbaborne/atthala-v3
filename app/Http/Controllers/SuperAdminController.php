<?php

namespace App\Http\Controllers;

use App\Models\LogDML;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use App\Models\User;
use App\Repositories\Interface\DivisiRepoInterface;
use App\Repositories\Interface\UserRepoInterface;
use App\Repositories\Interface\RoleRepoInterface;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use ProtoneMedia\Splade\Facades\Toast;
use App\Exceptions\DataException;
use App\Traits\ToastTrait;

use function App\Providers\log_dml;
use App\Contracts\NotificationService;
use App\Http\Requests\UserRequest;
use App\Contracts\LogService;

class SuperAdminController extends Controller
{
    use ToastTrait;
    private $notification, $log;
    private $divisiRepo, $userRepo, $roleRepo;
    public function __construct(
        DivisiRepoInterface $divisiRepo,
        UserRepoInterface $userRepo,
        RoleRepoInterface $roleRepo,
        NotificationService $notification,
        LogService $log
    )
    {
        $this->divisiRepo     = $divisiRepo;
        $this->userRepo       = $userRepo;
        $this->roleRepo       = $roleRepo;
        $this->notification   = $notification;
        $this->log            = $log;
    }

    public function index() {
        return view('dashboard.super-admin.index');
    }

    public function users_index() {
        $users = $this->userRepo->getDataTable();
        return view('modules.users.index', compact('users'));
    }

    public function users_show($id) {
        $roles = $this->roleRepo->getData();
        $user  = $this->userRepo->findData($id);
        return view('modules.users.show', compact('user', 'roles'));
    }

    public function users_create() {
        return view('modules.users.create');
    }

    public function users_store(UserRequest $request) {
        $data = $request->validated();
        $user = $this->userRepo->storeData($data);
        if (!$user) { throw DataException::errorCreate(); }
        $this->log->create(null, $user);
        $this->successCreate($request->email);
        return redirect()->route('superadmin.users.index');
    }

    public function users_update($id, UserRequest $request) {
        $data   = $request->validate($request->rulesUpdate());
        $user   = $this->userRepo->updateData($id, $data);
        if (!$user) { throw DataException::errorUpdate(); }
        $this->successUpdate($request->email);
        return redirect()->route('superadmin.users.index');
    }

    public function users_password($id) {
        return view('modules.users.password', compact('id'));
    }

    public function users_password_update($id, UserRequest $request) {
        $data   = $request->validate($request->rulesUpdatePassword());
        $user_b = $this->userRepo->findData($id);
        $user   = $this->userRepo->updateDataPassword($id, $data);
        if (!$user) { throw DataException::errorUpdate(); }
        $this->successUpdate('Password '.$user_b->email);
        return redirect()->route('superadmin.users.index');
    }

    public function coa() {
        $roles = SpladeTable::for(Role::class)
        ->column('name')
        ->paginate(10);

        $permissions = Permission::all();

        return view('modules.coa.index', compact('roles', 'permissions'));
    }

    public function roles_index() {
        $roles = SpladeTable::for(Role::class)
                ->column('name')
                ->column('created_at')
                ->paginate(10);

        $permissions = Permission::all();

        return view('modules.roles.index', compact('roles', 'permissions'));
    }

    public function roles_create() {
        return view('modules.roles.create');
    }

    public function roles_store() {
        request()->validate([
            'name' => 'required|string|min:3|max:50',
        ]);

        try {
            $role = Role::create(['name' => request()->name]);
            $this->log->create(null, $role);

            Toast::title('Data Berhasil Ditambahkan');
            return redirect()->route('superadmin.roles.index');
        } catch (\Throwable $th) {
            Toast::warning($th, 'Terjadi Kesalahan, Mohon Ulangi');
            return redirect()->route('superadmin.roles.index');
        }

    }

    public function log_dml_index() {
        $log_dml = SpladeTable::for(LogDML::class)
        ->column(
            key     : 'user.name',
            label   : 'user'
        )
        ->column('status')
        ->column('from')
        ->column('to')
        ->paginate(10);

        return view('modules.log-dml.index', compact('log_dml'));
    }

    public function divisi_index() {
        $divisi = $this->divisiRepo->getDivisi();

        return view('modules.divisi.index', compact('divisi'));
    }

    public function teskirim() {
        return $this->notification->kirimNotifWa('tess');
    }
}
