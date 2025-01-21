<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dog;
use Illuminate\Support\Facades\Hash;

class KontoController extends Controller
{
    // Wyświetlenie strony konta
    public function index()
    {
        return view('konto');
    }

    // Zmiana hasła
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

    // Edycja danych użytkownika
    public function edit(Request $request)
    {
        // Walidacja danych użytkownika
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::id()],
            'phone' => ['required', 'string', 'max:15'],
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        return back()->with('success', 'Dane zostały zaktualizowane.');
    }

    // Usunięcie konta
    public function destroy()
    {
        $user = Auth::user();

        if ($user) {
            // Sprawdź, czy użytkownik ma adoptowane psy
            $dogs = Dog::where('user_id', $user->id)->where('adopted', 1)->get();

            if ($dogs->isNotEmpty()) {
                // Jeśli użytkownik ma adoptowane psy, wyświetl komunikat
                return redirect()->back()->with('error', 'Aby usunąć konto, musisz najpierw zrezygnować z adopcji wszystkich psów.');
            }

            // Jeśli użytkownik nie ma adoptowanych psów, usuń konto
            $user->delete(); // Usunięcie użytkownika z bazy danych
            Auth::logout(); // Wylogowanie użytkownika
            return redirect('/')->with('success', 'Twoje konto zostało pomyślnie usunięte.');
        }

        return redirect()->back()->with('error', 'Wystąpił problem podczas usuwania konta.');
    }
}
