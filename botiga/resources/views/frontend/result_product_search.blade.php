@extends('layouts.base') 

@section('titol')
    Resultat dels nostres productes
@endsection

@section('contingut')
    @foreach($productes as $producte)
        <p><a href="{{route('product', ['id'=>$producte->id])}}">{{$producte->name}}</a></p>
    @endforeach
@endsection