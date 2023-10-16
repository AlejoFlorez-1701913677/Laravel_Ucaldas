<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|max:10',
            'name' => 'required',
            'email' => 'required',
            'eps' => 'required',
            'stateSubsidy' => 'required',
            'confirmationDate' => 'required',
            'legalizationDate' => 'required'
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')->with('success', 'Empleado creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = Empleado::find($id);

        return view('empleados.show', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'phone' => 'required|max:10',
            'name' => 'required',
            'email' => 'required',
            'eps' => 'required',
            'stateSubsidy' => 'required',
            'confirmationDate' => 'required',
            'legalizationDate' => 'required'
        ]);

        $empleado = Empleado::find($id);
        $empleado->update($request->all());

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();

        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado con éxito.');
    }

    /**
     * Mostrará el Formulario para crear un nuevo empleado.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Mostrará el Formulario para editar un empleado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);

        return view('empleados.edit', compact('empleado'));
    }
}
