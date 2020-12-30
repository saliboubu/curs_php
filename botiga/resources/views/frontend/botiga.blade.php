@extends('layouts.base') 

@section('titol')
    @if($botiga)
       {{$botiga->name}}
    @endif
@endsection

@section('contingut')
    <p>{{$botiga->address}}</p>
@endsection