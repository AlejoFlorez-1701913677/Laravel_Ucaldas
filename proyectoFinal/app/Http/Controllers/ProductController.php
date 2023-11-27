<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = Product::all();
        return view('Product.index', [
            'Products' => $Products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ProductCategory = ProductCategory::all();
        return view('Product.create', [
            'ProductCategory' => $ProductCategory
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $request['available'] = $request->has('available');
        Product::create($request->all());
        return redirect('/productDashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $Product = Product::where('slug', $slug)->firstOrFail();
        return view('Product.show', compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        $ProductCategory = ProductCategory::all();
        return view('Product.edit', [
            'Product' => $Product,
            'ProductCategory' => $ProductCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $Product)
    {
        $Product->update($request->all());

        return redirect()->route('productDashboard')->with('success', 'Producto actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Product = Product::find($id);
        $Product->delete();

        return redirect()->route('productDashboard')->with('success', 'Producto eliminado con éxito.');
    }
}
