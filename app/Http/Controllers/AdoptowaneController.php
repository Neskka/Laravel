<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoptowaneController extends Controller
{
    public function index()
    {
        return view('adoptowane'); 
    }
}
