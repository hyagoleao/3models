<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singin;
use App\Models\Images;


class SinginController extends Controller
{
    public function index()
    {
        $singin = Singin::get();
        return view('singinAdmin', ['singin' => $singin]);
    }

    public function create()
    {
        return view('singin');
    }

    public function store(Request $request)
    {
        
        $singin = new Singin();
        $singin->name = $request->name;
        $singin->email = $request->email;
        $singin->phone = $request->phone;
        $singin->age = $request->age;
        $singin->stature = $request->stature;
        $singin->weight = $request->weight;
        $singin->genre = $request->genre;
        $singin->instagram = $request->instagram;
        $singin->tiktok = $request->tiktok;
        $singin->bust = $request->bust;
        $singin->waist = $request->waist;
        $singin->hip = $request->hip;
        $singin->save();

        for ($i = 0; $i < count($request->allFiles()['image']); $i++)
        {
            $file = $request->allFiles()['image'][$i];

            $singinImage = new Images();
            $singinImage->image = $singin->id;
            $singinImage->path = $file->store('imagens/' . $singin->id);
            $singinImage->save();
            unset($singinImage);
        
        }

        return redirect('/singin');
    }

    public function edit($id)
    {
      
        $singin = Singin::findOrFail($id);
        
        return view('singinEdit', ['singin' => $singin]);
    }

    public function update(Request $request, $id)
    {
        $singin = Singin::findOrFail($id);
        $singin->update($request->all());
        return redirect('/singinAdmin');
    }

    public function destroy($id)
    {
        $singin = Singin::findOrFail($id);
        $singin->delete();
        return redirect('/singinAdmin');
    }

  
}
