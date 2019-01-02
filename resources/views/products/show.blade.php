@extends('layout')

@section('content')

    <h1 class='title'> {{ $product->name }} </h1>
    <div class='content'> {{ $product->description }}</div>
    <div class='content'> {{ $product->price }} $</div> 
    <div class='content'> Available: {{ $product->in_stock }} </div>

    <p> 
        <a href="/products/{{ $product->id }}/edit">EDIT</a>
    </p>
@endsection