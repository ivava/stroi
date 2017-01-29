<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use app\Repositories\UserRepository;

class UserListController extends Controller

{

    /*
     * Экземпляр UserPepository
     * @var UserRepository $users
     */
    protected $users;


    /**
     * UserListController constructor.
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users) {
        $this->users = $users;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allUsers() {
        $users = User::all();
        return view('users', compact('users'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userLocationList(Request $request) {
        return view('locationList', [
            'users' => $this->users->getAllUsersInRegion($request->region)
        ]);
    }
}
