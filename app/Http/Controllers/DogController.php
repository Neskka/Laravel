<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\DogPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DogController extends Controller
{
    public function index()
    {
        return view('dodaj');
    }

    public function create()
    {
        return view('dodaj');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sex' => 'required|in:piesek,suczka',
            'age' => 'required|integer|min:0',
            'size' => 'required|string|max:255',
            'weight' => 'required|integer|min:1',
            'height' => 'required|integer|min:1',
            'hair' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'adopted' => 'nullable|boolean',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('dog_photos', 'public');
        } else {
            $path = null;
        }

        $slug = Str::slug($validated['name']);

        $dog = Dog::create([
            'name' => $validated['name'],
            'slug' => $slug,
            'sex' => $validated['sex'],
            'age' => $validated['age'],
            'size' => $validated['size'],
            'weight' => $validated['weight'],
            'height' => $validated['height'],
            'hair' => $validated['hair'],
            'description' => $validated['description'],
            'photo_path' => $path,
            'adopted' => (bool) $request->input('adopted', false),

        ]);

        if ($request->has('gallery_photos')) {
            foreach ($request->file('gallery_photos') as $photo) {
                $path = $photo->store('dog_photos', 'public'); // Zapis pliku
                $dog->photos()->create(['photo_path' => $path]);
            }
        }

        return redirect()->route('dogs.index')->with('success', 'Pies został dodany wraz z galerią zdjęć!');
    }

    public function update(Request $request, $id)
{
    // Walidacja danych
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'sex' => 'required|in:piesek,suczka',
        'age' => 'required|integer|min:0',
        'size' => 'required|string|max:255',
        'weight' => 'required|integer|min:1',
        'height' => 'required|integer|min:1',
        'hair' => 'required|string|max:255',
        'description' => 'nullable|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'gallery_photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'adopted' => 'required|boolean',
    ]);

    // Znajdź psa w bazie
    $dog = Dog::findOrFail($id);

    // Zaktualizuj dane psa
    $dog->update([
        'name' => $validated['name'],
        'sex' => $validated['sex'],
        'age' => $validated['age'],
        'size' => $validated['size'],
        'weight' => $validated['weight'],
        'height' => $validated['height'],
        'hair' => $validated['hair'],
        'description' => $validated['description'],
        'adopted' => $request->boolean('adopted'),
    ]);

    // Obsługa zdjęcia
    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('dog_photos', 'public');
        $dog->update(['photo_path' => $path]);
    }

    // Obsługa zdjęć galerii
    if ($request->has('gallery_photos')) {
        foreach ($request->file('gallery_photos') as $photo) {
            $path = $photo->store('dog_photos', 'public');
            $dog->photos()->create(['photo_path' => $path]);
        }
    }

    // Powrót do panelu z komunikatem sukcesu
    return redirect()->route('panel')->with('success', 'Dane psa zostały zaktualizowane!');
}


}
