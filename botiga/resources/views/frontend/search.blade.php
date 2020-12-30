@extends('layouts.base') 

@section('titol')
    Buscador de botigues
@endsection

@section('contingut')
<div class="container">
    <form method="POST" action="{{route('result_search')}}">
    @csrf
        <label for="nom">Nom de la botiga:</label>
        <input type="text" id="nom" name="nom">
        <input type="submit" value="BUSCAR">
    </form>
</div>
@endsection