@extends('layouts.base')

@section('titlePage')
    Qui som?
@endsection

@section('contingut')

    <div class="content">
        <div class="title m-b-md">
            {{$categoria->name}}
        </div>

        <div class="text">
            {{$categoria->description}}
        </div>

        @foreach($productes as $producte)
            <p><a href="{{route('product',['id' => $producte->id])}}">{{$producte->name}}</a></p>
        @endforeach
    </div>

@endsection