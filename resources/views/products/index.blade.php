@extends('layout')
@section('content')
    <h1 class='title'>PRODUCTS</h1>
    <ul>
    @foreach ($prod as $product)
        <li> 
            <a href="/products/ {{ $product->id }}">
            {{ $product->name }} 
        </li>
    @endforeach
    </ul>
@endsection