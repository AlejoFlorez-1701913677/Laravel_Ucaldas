<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ProductCategory = ProductCategory::all();
        return view('ProductCategory.index', [
            'ProductCategory' => $ProductCategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ProductCategory.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCategoryRequest $request)
    {
        ProductCategory::create($request->all());
        return redirect('/categoryDashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $Category = ProductCategory::where('slug', $slug)->firstOrFail();
        return view('ProductCategory.show', compact('Category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $ProductCategory)
    {
        return view('ProductCategory.edit', ['Category' => $ProductCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductCategoryRequest $request, ProductCategory $ProductCategory)
    {
        $ProductCategory->update($request->all());

        return redirect()->route('categoryDashboard')->with('success', 'Categoria actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ProductCategory = ProductCategory::find($id);
        $ProductCategory->delete();

        return redirect()->route('categoryDashboard')->with('success', 'Categoria eliminada con éxito.');
    }
}
