<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class KontoController extends Controller
{
    /**
     * Wyświetl stronę konta.
     */
    public function index()
    {
        return view('konto');
    }

    /**
     * Zmiana hasła.
     */
    public function changePassword(Request $request)
    {
        // Walidacja hasła
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        // Sprawdź poprawność obecnego hasła
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'Obecne hasło jest nieprawidłowe.']);
        }

        // Zaktualizuj hasło
        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return back()->with('success', 'Hasło zostało zmienione.');
    }
}
