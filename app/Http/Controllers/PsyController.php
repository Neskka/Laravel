<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class PsyController extends Controller
{
    public function index()
    {
        $dogs = Dog::where('adopted', false)->get();
    
        return view('psy', compact('dogs'));
    }
    

    public function show($slug)
    {
        $dog = Dog::where('slug', $slug)->firstOrFail();

        $dog->size = mb_convert_case($dog->size, MB_CASE_TITLE, "UTF-8");

        return view('show', compact('dog'));
    }
}
