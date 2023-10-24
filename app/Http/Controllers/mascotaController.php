<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use App\Http\Requests\MascotaRequest;

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
    public function store(MascotaRequest $request)
    {
        Mascota::create($request->all());
        return redirect('/Mascota');
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
    public function edit(Mascota $mascota)
    {
        return view('Mascota.edit', ['mascota' => $mascota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MascotaRequest $request, Mascota $mascota)
    {
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

        return redirect()->route('Mascota.index')->with('success', 'Mascota eliminada con éxito.');
    }
}
