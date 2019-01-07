@extends('layouts.app')

@section('content')

    <div class="box">
        <div class='title'> 
            {{ $product->name }} 
        </div>
        
        <div class='level'>
            <div class='level-item'>
                {{ $product->description }}
            </div>
        </div>

        <div class="level">
            <div class='level-item'>
                {{ $product->price }} $
            </div>
        </div>

        <div class="level">
            <div class='level-item'>
                Available: {{ $product->in_stock }} 
            </div>
        </div>

        <nav class="level">
            <div class="level-left">
                <div class="level-item">
                    <form method="GET" action="/products/{{ $product->id }}/edit">
                        {{ csrf_field() }}
                    <button class='button is-dark' value="EDIT">EDIT</button>
                    </form>
                </div>
            </div>

            <div class="level-right">
                <div class="level-item">
                
                    <form method="POST" action='/products/{{ $product->id }}' onsubmit="return confirm('Do you really want to delete?');">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="button is-dark">Delete</button>
                    </form>
                </div>
            </div>
        </nav>

    </div>


</div>
    
@endsection