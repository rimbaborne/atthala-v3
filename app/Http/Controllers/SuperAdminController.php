<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use App\Models\User;
use Maatwebsite\Excel\Excel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use ProtoneMedia\Splade\Facades\Toast;

class SuperAdminController extends Controller
{
    public function index() {
        return view('dashboard.super-admin.index');
    }

    public function users() {
        return view('managements.users.index', [
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

    public function coa() {
        $roles = SpladeTable::for(Role::class)
        ->column('name')
        ->paginate(10);

        $permissions = Permission::all();

        return view('dashboard.super-admin.coa.index', compact('roles', 'permissions'));
    }

    public function roles() {
        $roles = SpladeTable::for(Role::class)
                ->column('name')
                ->column('actions')
                ->paginate(10);

        $permissions = Permission::all();

        return view('dashboard.super-admin.roles.index', compact('roles', 'permissions'));
    }

    public function roles_create() {
        return view('dashboard.super-admin.roles.create');
    }

    public function roles_store() {
        request()->validate([
            'name' => 'required|string|min:3|max:50',
        ]);

        try {
            $role = Role::create(['name' => request()->name]);

            Toast::title('Data Berhasil Ditambahkan');
            return redirect()->route('superadmin.roles.index');
        } catch (\Throwable $th) {
            Toast::warning('Terjadi Kesalahan, Mohon Ulangi');
            return redirect()->route('superadmin.roles.index');
        }

    }
}
