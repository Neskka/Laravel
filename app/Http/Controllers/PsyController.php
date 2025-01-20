<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use Illuminate\Support\Facades\Auth;

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

    public function adoptDog(Request $request)
{
    // Debugging
    \Log::info('Rozpoczęto adopcję psa', $request->all());

    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefon' => 'required|numeric',
        'dogname' => 'required|string',
        'regulamin' => 'required',
    ]);

    $dog = Dog::where('name', $request->dogname)->first();

    if (!$dog) {
        return redirect()->back()->with('error', 'Nie znaleziono psa o podanym imieniu.');
    }

    if ($dog->adopted) {
        return redirect()->back()->with('error', 'Ten pies został już adoptowany.');
    }

    $dog->adopted = true;
    

    if (Auth::check()) {
        $dog->user_id = Auth::id();
    }

    try {
        $dog->save();
        return redirect()->route('psy.index')->with('success', 'Pies został pomyślnie adoptowany!');
    } catch (\Exception $e) {
        \Log::error('Błąd podczas adopcji psa: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Wystąpił problem podczas adopcji psa.');
    }
}



}
