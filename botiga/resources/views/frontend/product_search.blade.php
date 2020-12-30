@extends('layouts.base') 

@section('titol')
    Buscador de productes<br>
@endsection

@section('contingut')
<div class="container">
    <form method="POST" action="{{route('result_product_search')}}">
    @csrf
        <label for="nom">Busca els teu producte:</label>
        <input type="text" id="nom" name="nom_prod"><br><br>

        <label for="categoria">Categoria:</label>
        <select name="categoria" id="categoria">
            @foreach($categories as $categoria)
               <option value="{{$categoria->id}}">{{$categoria->name}}</option>
            @endforeach
        </select><br><br>

        <label for="min">Preu minim:</label>
        <input type="text" id="min" name="min"><br><br>

        <label for="max">Preu maxim:</label>
        <input type="text" id="max" name="max"><br><br>

        <input type="submit" value="BUSCAR">
    </form>
</div>
@endsection