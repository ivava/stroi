<?php

namespace App\Http\Controllers;

use App\User;
use App\Region;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id) {
        $user = User::findOrFail($id);
        $region = Region::findOrFail($user->region);
        if(is_null($user)) {
            abort(404);
        }
        return view('users.show', compact('user', 'region'));
    }
}
