<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        $images = Images::get();
        return view('singinAdmin', ['images' => $images]);
        
    }

    public function create()
    {
        return view('singin');
    }
    
    public function upload(Request $request)
    {
        $request->file('image')->store('teste');
        var_dump($request->file('image'), $request->all());
    }
    
    
}
