<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Region;

class CitiesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $city = City::findOrFail($id);
        return view('cities', compact('city'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        $regions = Region::all();
        return view('cities.create', compact('regions'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        City::create([
           'name' => $request->name,
            'region' => $request->region
        ]);

        return redirect('cities');
    }

}
