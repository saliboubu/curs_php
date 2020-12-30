<!--29/12/20-->
@extends('layouts.base')

@section('titlePage')
    Qui som?
@endsection

@section('titol')
    Categories de Productes
@endsection

@section('contingut')
    @foreach($categories as $category) <!--$categories és una col·lecció de registres, és com si recorreguès una array-->
        <br><p><a href="{{route('categoria',['id' => $category->id])}}">{{$category->name}}</a></p>
    @endforeach
@endsection