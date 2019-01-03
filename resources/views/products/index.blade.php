@extends('layout')
@section('content')
    <br>
    <h1 class='title has-text-left'>PRODUCTS</h1>
    <br>
    @foreach ($prod as $product)
    <a href="/products/ {{ $product->id }}">
    <div class="box is-dark">
      <h1 class="title">
      {{ $product->name }}
      </h1>
      <h2 class="subtitle">
        {{ $product->description }}
      </h2>
    </div>
    </a>
    <br>
    @endforeach
@endsection 

