<?php

namespace App\Http\Controllers;



use App\products;

class ProductsController extends Controller
{
    public function list() 
    { 
        $prod = products::all();

        return view('products.list', compact('prod'));
    }
    
    public function create() 
    { 
        return view('products.create');
    }

    public function store() 
    { 
        return request()->all();
    }
}
