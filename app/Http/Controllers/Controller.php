<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\products;
use Illuminate\Http\Request;
use App\Http\Controllers\User; 

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->id() == 3) { 
            $prod = products::all(); 
        } else {
            $prod = auth()->user()->products;
        }
        
        return view('products.index', compact('prod'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $validated = $this->validateProduct();

        $validated['owner_id'] = auth()->id();

        $product = products::create($validated);

        session()->flash('message', 'Your product has been created');
        
        return redirect('/products');
    }

    public function show(products $product)
    {
        $this->authorize('view', $product);
        return view('products.show', compact('product'));
    }

    public function edit(products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(products $product)
    {
        $product->update($this->validateProduct());
        return view('products.show', compact('product'));
    }

    public function destroy(products $product)
    {
        if (auth()->id() == 3) { 
        $product->delete();
        } else {
        abort_if($product->owner->name != auth()->user()->name,403);
        $product->delete();
        }
        
        return redirect('/products'); 
    }

    protected function validateProduct() 
    {
        return request()->validate([
            'name' => ['required','min:4', 'max:100'],
            'description' => ['required','min:10', 'max:190'], 
            'price' => ['required', 'max:15','gte:0'], 
            'in_stock' => ['required','max:100','gte:0']
        ]);
    }
    public function about() 
    { 
        return view('about');
    }
}
