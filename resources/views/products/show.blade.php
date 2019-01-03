@extends('layout')

@section('content')
    <br>
    <h1 class='title has-text-left'> {{ $product->name }} </h1>
    <br>
    <div class='level'> 
    <div class='level-left'>
    <div class='level-item'>
    {{ $product->description }}
    </div>
    </div>
    </div>
    <div class='level'>
    <div class='level-left'>
    <div class='level-item'>
    {{ $product->price }} $
    </div>
    </div>
    </div>
    <div class='level'>
    <div class='level-right'>
    <div class='level-item'>
    Available: {{ $product->in_stock }} 
    </div>
    </div>
    </div>
    <div class='level'>
    <div class='level-right'>
    <div class='level-item'>
    <a href="/products/{{ $product->id }}/edit"><button class='button is-dark' value="EDIT">EDIT</button></a>
    </div>
    </div>
    </div>
@endsection