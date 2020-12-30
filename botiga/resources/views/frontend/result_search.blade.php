@extends('layouts.base') 

@section('titol')
    Resultat de les nostres botigues
@endsection

@section('contingut')
    @foreach($botigues as $botiga)
        <p><a href="{{route('botiga', ['id'=>$botiga->id])}}">{{$botiga->name}}</a></p>
    @endforeach
@endsection