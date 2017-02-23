<?php

namespace App\Http\Controllers;

use App\LocalObject;
use App\User;
use App\Region;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $user = User::findOrFail($id);
        $region = $user->getParentLocal;
        if(is_null($user)) {
            abort(404);
        }
        return view('users.show', compact('user', 'region'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {

        $user = Auth::user();
        $region = $user->getParentLocal;

        return view('users.profile', compact('user', 'region'));

    }
}
