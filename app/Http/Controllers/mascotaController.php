<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class mascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Mascota.index', [
            'mascotas' => Mascota::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Mascota.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mascota::create($request->all());
        return redirect('/Mascotas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mascota = Mascota::find($id);

        return view('Mascota.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);

        $mascota = Mascota::find($id);
        $mascota->update($request->all());

        return redirect()->route('Mascota.index')->with('success', 'Mascota actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascota = Mascota::find($id);
        $mascota->delete();

        return redirect()->route('empleados.index')->with('success', 'Mascota eliminada con éxito.');
    }
}
