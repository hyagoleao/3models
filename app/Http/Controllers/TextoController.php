<?php

namespace App\Http\Controllers;

use App\Models\Texto;
use Illuminate\Http\Request;

class TextoController extends Controller
{
    public function index()
    {
        $text = Texto::get();
        return view('textos', ['text' => $text]);
    }

    public function about()
    {
        $about = Texto::pluck('textos');
        return view('about')->with('about', $about);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
         $text = new Texto();
         $text = $text->create($request->all());
         return redirect('/textos');

    }

    public function edit($id)
    {
        $text = Texto::findOrFail($id);
        return view('form', ['text' => $text]);
    }

    public function update(Request $request, $id)
    {
        $text = Texto::findOrFail($id);
        $text->update($request->all());
        return redirect('/textos');
    }

    public function destroy($id)
    {
        $text = Texto::findOrFail($id);
        $text->delete();
        return redirect('/textos');
    }
}   
