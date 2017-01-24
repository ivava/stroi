<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function allUsers() {
        $users = User::all();
        return view('users', compact('users'));
    }
}
