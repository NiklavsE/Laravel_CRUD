@extends('layouts.app')

@section('content')

<h1 class="title" > Create a new product </h1>
<form method="POST" action='/products'>

    {{ csrf_field() }}

    <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input class="input {{ $errors->has('name') ? 'is-danger' : '' }} is-medium" type="text" name="name" placeholder="Name" required value="{{ old('name') }}">
            </div>
    </div>

    <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }} is-medium" placeholder="Product description" name="description" required>{{ old('description') }}</textarea>
            </div>
    </div>
    
    <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="price">Price</label>
            <div class="control">
                <input class="input {{ $errors->has('price') ? 'is-danger' : '' }} is-medium" type="number" name="price" placeholder="Price" required value="{{ old('price') }}">
            </div>
    </div>

    <div class="field" style="padding-top:10px;padding-bottom:10px">
            <label class="label" for="in_stock">In Stock</label>
            <div class="control">
                <input class="input {{ $errors->has('in_stock') ? 'is-danger' : '' }} is-medium"type="number" name="in_stock" placeholder="Number of items in stock" required value="{{ old('in_stock') }}">
            </div>
    </div>

    <div class="field is-grouped">
        <p class="control">
            <button class="button is-grey">Save</button>
        </p>

</form>
<form method="GET" action="/products">
        <p class="control">
            <button class="button is-black">Cancel</button>
        </p>
    </div>
</form>


@include('errors')

@endsection