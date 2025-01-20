<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use Illuminate\Support\Facades\Auth;

class MojeController extends Controller
{
    public function index()
    {
        // Pobierz psy przypisane do aktualnego użytkownika
        $dogs = Dog::where('user_id', Auth::id())->get();

        return view('moje', compact('dogs'));
    }

    public function show($slug)
    {
        $dog = Dog::where('slug', $slug)->firstOrFail();

        $dog->size = mb_convert_case($dog->size, MB_CASE_TITLE, "UTF-8");

        return view('show', compact('dog'));
    }

    public function cancel($id)
    {
    $dog = Dog::where('id', $id)
        ->where('user_id', Auth::id()) // Upewnij się, że pies należy do aktualnego użytkownika
        ->firstOrFail();

    $dog->adopted = 0; // Ustaw na "nieadoptowany"
    $dog->user_id = null; // Usuń przypisanie użytkownika
    $dog->save();

    return redirect()->route('moje')->with('success', 'Zrezygnowałeś/aś z adopcji psa.');
}


}
