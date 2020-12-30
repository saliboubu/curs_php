@extends('layouts.base') 

@section('titlePage')
    {{$categoria->name}}
@endsection

@section('contingut')
    <div class="content">
        {{$categoria->description}}
    </div>

    <a href="{{route('categoria', ['id'=>1])}}"> Alimentació</a>
    <a href="{{route('categoria', ['id'=>2])}}"> Begudes</a>
@endsection
