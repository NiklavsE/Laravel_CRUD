<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $prod = products::all();
        return view('products.index', compact('prod'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => ['required','min:4', 'max:100'],
            'description' => ['required','min:10', 'max:250'], 
            'price' => ['required', 'max:15'], 
            'in_stock' => ['required','max:15']
        ]);

        products::create($validated);
        
        return redirect('/products');

    }

    public function show(products $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(products $product)
    {
        $validated = request()->validate([
            'name' => ['required','min:4', 'max:100'],
            'description' => ['required','min:10', 'max:250'], 
            'price' => ['required', 'max:15'], 
            'in_stock' => ['required','max:15']
        ]);

        $product->update($validated);

        return redirect('/products');
    }

    public function destroy(products $product)
    {
        $product->delete();

        return redirect('/products'); 
    }
}
