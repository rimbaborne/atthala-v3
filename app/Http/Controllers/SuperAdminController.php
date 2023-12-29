<?php

namespace App\Http\Controllers;

use App\Models\LogDML;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use App\Models\User;
use App\Repositories\Interface\DivisiRepoInterface;
use Maatwebsite\Excel\Excel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use ProtoneMedia\Splade\Facades\Toast;
use App\Http\Controllers\Modules\DivisiController;
use App\Models\Modules\Divisi;

use function App\Providers\log_dml;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['role:super-admin']);
    }

    public function index() {
        return view('dashboard.super-admin.index');
    }

    public function users() {
        return view('modules.users.index', [
            'users' => SpladeTable::for(User::class)
        ->withGlobalSearch(columns: ['name', 'email'])
        ->searchInput('name')
        ->searchInput(
            key: 'email',
            label: 'Find your email',
        )
        ->selectFilter('name', [
            'en' => 'English',
            'nl' => 'Dutch',
        ])
        ->selectFilter('email', [
            'en' => 'oke',
            'nl' => 'okeeok',
        ])
        ->defaultSort('name')
        ->column(key: 'name', searchable: true, sortable: true, canBeHidden: false)
        ->column(key: 'email', searchable: true, sortable: true)
        ->column(label: 'Action')
        // ->export()
        ->paginate(15),
        ]);
    }

    public function users_create() {
        return view('modules.users.create');
    }

    public function users_store() {
        request()->validate([
            'name' => 'required|string|min:3|max:50',
        ]);

        try {
            $user = user::create(['name' => request()->name]);

            Toast::title('Data Berhasil Ditambahkan');
            return redirect()->route('superadmin.users.index');
        } catch (\Throwable $th) {
            Toast::warning('Terjadi Kesalahan, Mohon Ulangi');
            return redirect()->route('superadmin.users.index');
        }

    }

    public function coa() {
        $roles = SpladeTable::for(Role::class)
        ->column('name')
        ->paginate(10);

        $permissions = Permission::all();

        return view('modules.coa.index', compact('roles', 'permissions'));
    }

    public function roles() {
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
            log_dml('CREATED', null, $role);

            Toast::title('Data Berhasil Ditambahkan');
            return redirect()->route('superadmin.roles.index');
        } catch (\Throwable $th) {
            Toast::warning($th, 'Terjadi Kesalahan, Mohon Ulangi');
            return redirect()->route('superadmin.roles.index');
        }

    }

    public function log_dml() {
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

    public function divisi(DivisiRepoInterface $divisiRepo) {

        $divisi = $divisiRepo->getDivisi();

        return view('modules.divisi.index', compact('divisi'));
    }
}
