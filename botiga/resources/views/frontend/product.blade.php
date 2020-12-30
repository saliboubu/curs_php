@extends('layouts.base')

@section('titlePage')
    Producte
@endsection

@section('contingut')

    <div class="content">
        <div class="title m-b-md">
            @if($product)
                {{$product->name}}
                @else
                    El producte no existeix
            @endif
        </div>

        <div class="text">
            @if($product)
                <p>{{$product->description}}</p>
                <p>Preu: {{$product->price}}€</p>
            @endif
        </div>

    </div>

@endsection