<?php

namespace App\Http\Controllers;

use App\User;
use App\Region;
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
        $region = Region::findOrFail($user->region);
        if(is_null($user)) {
            abort(404);
        }
        return view('users.show', compact('user', 'region'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile() {
        $user = Auth::user();
        $region = $user->getRegion;
        $city = $user->getCity;
        $departament = $user->getDepartament;
        return view('users.profile', compact('user', 'region', 'city', 'departament'));
    }
}
