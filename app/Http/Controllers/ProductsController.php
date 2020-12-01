<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(Product $product)
    {
        $product->load('deliveries');
        $product->deliveries();

        return view('products.index', ['products' => (new Product)->all()]);
    }

    public function create()
    {
        return view('products.create', [Product::class]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {
        $product = (new Product)->fill($request->all());
        $product->save();

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        // Loads relations between models.
        $product->load('deliveries');
        $product->deliveries();

        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
