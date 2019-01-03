@extends('layout')

@section('content')
    <br>
    <h1 class="Title">Edit Project</h1>

    <form method="POST" action="/products/ {{ $product->id }}"> 
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="name">Name</label>
            <div class="control">
            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }} is-medium" type="text" name="name" placeholder="Name" value="{{ $product->name }}" required >
        </div>

        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="description">Description</label>
            <div class="control">
            <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }} is-medium" placeholder="Medium textarea" name="description" required>{{ $product->description }}</textarea>
        </div>

        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="price">Price</label>
            <div class="control">
            <input class="input {{ $errors->has('price') ? 'is-danger' : '' }} is-medium" name="price" type="number" placeholder="Price" value="{{ $product->price }}" required>
        </div>

        <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="in_stock">Number of items in stock</label>
            <div class="control">
            <input class="input {{ $errors->has('in_stock') ? 'is-danger' : '' }} is-medium" type="number" name="in_stock" placeholder="in_stock" value="{{ $product->in_stock }}" required>
        </div>
        <br>

    <div class="field is-grouped">
        <p class="control">
            <button class="button is-grey-darker">Save</button>
        </p>
    </form>
    <form method="POST" action='/products/{{ $product->id }}'>
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
        <p class="control">
            <button class="button is-dark">Delete</button>
        </p>
    </form>
    </div>

@include('errors')

@endsection