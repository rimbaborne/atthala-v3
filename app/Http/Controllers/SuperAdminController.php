<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use App\Models\User;
use Maatwebsite\Excel\Excel;

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
}
