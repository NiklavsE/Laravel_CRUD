@extends('layouts.app')
@section('content')
    <br>
        <h1 class='title has-text-left'>PRODUCTS</h1>
    <br>

    @if (count($prod) == 0)
        {{ 'Nothing to display, please add a product' }}
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

