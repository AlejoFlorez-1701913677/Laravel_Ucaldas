<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarroCreateRequest;
use App\Http\Requests\CarroUpdateRequest;
use App\Models\Carro;
use \Illuminate\Http\Response;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Carro::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarroCreateRequest $request)
    {
        $carro = Carro::create($request->all());
        return response()->json(['carro' => $carro], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro)
    {
        return response()->json(['carro' => $carro], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarroUpdateRequest $request, Carro $carro)
    {
        $carro->update($request->all());
        return response()->json(['carro' => $carro], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carro $carro)
    {
        $carro->delete();
        return response()->json(null, Response::HTTP_ACCEPTED);
    }
}
