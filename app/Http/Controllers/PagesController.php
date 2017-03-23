<?php

namespace App\Http\Controllers;

use App\LocaleType;
use App\User;
use Illuminate\Http\Request;
use App\LocalObject;
use Validator;

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

    /**
     * Возвращает представление для создания нового региона
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createLocalObject()
    {

        $types = LocaleType::getTypes();
        $locales = LocalObject::getAllLocalObjects();
        $allLocales = LocalObject::all();
        $users = User::all();
        return view('regions.create', compact('locales', 'types', 'users', 'allLocales'));

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function localObjectStore(Request $request)
    {

        $this->validate($request, [
            'name' => 'required||min:5'
        ]);

        LocalObject::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'lead_id' => $request->lead_id,
            'type' => $request->type
        ]);

        \Flash::success('Молодец Максим, ты создал новый регион');
        return redirect('/regions/create');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAllLocale()
    {

        $locales = LocalObject::paginate(30);
        $types = LocaleType::getTypes();

        return view('regions.all', compact('locales', 'types'));

    }

    /**
     * @param $id
     */
    public function deleteLocale($id)
    {

        LocalObject::destroy($id);

        \Flash::success('Регион удален :(');
        return redirect('/regions/');

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAddTaskForm()
    {
        $locales = LocalObject::getAllLocalObjects();
        return view('tasks.add', compact('locales'));

    }

    public function taskStore()
    {

        \Flash::success('Данные успешно сохранены');
        return redirect('tasks/add');

    }




}
