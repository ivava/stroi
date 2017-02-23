<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocalObject;

class PagesController extends Controller
{
    /**
     * @return bool
     */
    public function index()
    {

        return true;

    }

    /**
     * @param Integer $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLocale($id)
    {

        $locales = LocalObject::getAllLocalObjects();
        $locale = LocalObject::findOrFail($id);
        $users = $locale->getUsers;

        return view('regions.show', compact('locale', 'users', 'locales'));

    }


}
