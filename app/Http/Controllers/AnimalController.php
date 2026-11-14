<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animales = Animal::orderBy('id')->get();

        return response()->json($animales);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'especie' => ['required', 'string', 'max:255'],
            'raza' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'integer', 'min:0', 'max:4294967295'],
        ]);

        $animal = Animal::create($datos);

        return response()->json($animal, 201);
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return response()->json($animal);
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);

        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'especie' => ['required', 'string', 'max:255'],
            'raza' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'integer', 'min:0', 'max:4294967295'],
        ]);

        $animal->update($datos);

        return response()->json($animal);
    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return response()->json(['message' => 'Animal eliminado']);
    }
}
