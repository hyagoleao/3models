<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserModelController extends Controller
{
     public function index()
    {
        $models = UserModel::all();

        return view('newModel.newModel',[ 'models' => $models ]);
    }

    public function create()
    {
        return view('newModel.newModel');
    }

    public function store(Request $request)
    {
        $models = new UserModel();
        $models = $models->create($request->all());
       

        return redirect('/newModel');
    }

}
