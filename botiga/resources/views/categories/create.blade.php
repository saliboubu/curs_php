@extends('layouts.admin') 

@section('titol')
    Nova Categoria
@endsection

@section('contingut')
    <div class="col-12">
        <form method="post" action="{{route('categories.store')}}">
        @csrf
            <label for="name">Nom: </label><br>
            <input type="text" id="name" name="name">
            <br><br>
            <label for="description">Descripcio:</label><br>
            <textarea id="description" name="description"></textarea>
            <br><br>
            <input type="submit" value="CREATE" class="btn btn-success">
        </form>
    </div>
@endsection