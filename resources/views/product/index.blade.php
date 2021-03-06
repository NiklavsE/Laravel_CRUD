@extends('layouts.app')
@section('content')
    <br>
        <h1 class='title has-text-left'>PRODUCTS</h1>
        @if (Auth::user()->role == 'a')
            {{ 'Logged in as administrator' }}
            <br>
        @endif 
    <br>
    @if (count($prod) == 0)
        {{ 'Nothing to display, please add a product' }}
    @endif
    

    @if (session('message'))
        <article class="message is-dark">
            <div class="message-header">
                <p>Product is created</p>
                <button class="delete" aria-label="delete"></button>
            </div>
            <div class="message-body">
                {{ session('message') }}   
            </div>
        </article>




        <div class="hero is-black">
            <strong></strong>
        </div> 
    @endif

    @foreach ($prod as $product)
        <a href="/products/ {{ $product->id }}">
            <div class="box is-dark">
                <h1 class="title">
                    {{ $product->name }}
                </h1>
                <h2 class="subtitle">
                      {{ $product->description }}
                </h2>
                <h3 class="subtitle">
                        Created by 
                        @if ($product->owner->name == Auth::user()->name)
                            You
                        @else
                            {{ $product->owner->name }}
                        @endif
                </h3>
            </div>
        </a>
        <br>
    @endforeach

@endsection 

