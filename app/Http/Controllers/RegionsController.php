<?php

namespace App\Http\Controllers;

use App\Region;
use App\User;
use Illuminate\Http\Request;
use Validator;


class RegionsController extends Controller
{
    /**
     * Возвтращает представление для списка всех статей
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $regions  = Region::latest()->get();
        return view('regions.index', compact('regions'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $region = Region::findOrFail($id);
        $users = User::where('region', $region->id)->get();
        if (is_null($region)) {
            abort(404);
        }

        return view('regions.show', compact('region', 'users'));
    }

    /**
     * Возвращает представление для создания нового региона
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        return view('regions.create');
    }

    /**
     * Создает новый регион
     * @param Request $request
     * @return Redirector
     */
    public function store(Request $request) {
        $this->validate($request, [
           'name' => 'required||min:4'
        ]);

        Region::create([
            'name' => $request->name
        ]);

        return redirect('/regions');
    }
}
