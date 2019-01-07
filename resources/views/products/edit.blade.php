@extends('layouts.app')

@section('content')
 
    <h1 class="Title">Edit Project</h1>

    <form method="POST" action="/products/ {{ $product->id }}"> 
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="name">Name</label>
            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }} is-medium" type="text" name="name" placeholder="Name" value="{{ $product->name }}" required >
        </div>

        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="description">Description</label>
            <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }} is-medium" placeholder="Medium textarea" name="description" required>{{ $product->description }}</textarea>
        </div>

        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="price">Price</label>
            <input class="input {{ $errors->has('price') ? 'is-danger' : '' }} is-medium" name="price" type="number" placeholder="Price" value="{{ $product->price }}" required>
        </div>

        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="in_stock">Number of items in stock</label>
            <input class="input {{ $errors->has('in_stock') ? 'is-danger' : '' }} is-medium" type="number" name="in_stock" placeholder="in_stock" value="{{ $product->in_stock }}" required>
        </div>

    <div class="field is-grouped">
        <p class="control">
            <button class="button is-dark">Save</button>
        </p>
    </form>
    </div>

@include('errors')

@endsection