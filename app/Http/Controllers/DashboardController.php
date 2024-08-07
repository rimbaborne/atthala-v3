<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interface\UserRepoInterface;
use App\Repositories\Interface\RoleRepoInterface;



class DashboardController extends Controller
{
    private $userRepo, $roleRepo;
    public function __construct(
        UserRepoInterface $userRepo,
        RoleRepoInterface $roleRepo
    ){
        $this->middleware('auth');
        $this->userRepo = $userRepo;
        $this->roleRepo = $roleRepo;


    }

    public function index() {

        $user = auth()->user();
        $roles = $this->roleRepo->getData();
        $user  = $this->userRepo->findData($user->id);

        return view('dashboard', compact('user'));
    }

}
