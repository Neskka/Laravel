<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MojeController extends Controller
{
    public function index()
    {
        return view('moje'); 
    }
}
