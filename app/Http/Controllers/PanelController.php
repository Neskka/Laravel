<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        // Pobranie wszystkich psów do panelu administracyjnego
        $dogs = Dog::all();
        return view('panel', compact('dogs'));
    }

    // Metoda do edycji psa
    public function edit($id)
    {
        // Znalezienie psa w bazie
        $dog = Dog::findOrFail($id);
        
        // Zwrócenie widoku edycji z danymi psa
        return view('edytuj', compact('dog'));
    }

    // PanelController.php
    public function destroy($id)
    {
        // Znalezienie psa na podstawie ID
        $dog = Dog::findOrFail($id);
    
        // Usunięcie psa z bazy danych
        $dog->delete();

        // Przekierowanie z komunikatem o powodzeniu
        return redirect()->route('panel')->with('success', 'Pies został pomyślnie usunięty.');
}


}
