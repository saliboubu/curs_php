@extends('layouts.admin') 

@section('titol')
    Edita la Categoria
@endsection

@section('contingut')
    <div class="col-12">
        <form method="POST" action="{{route('shops.update',['shop'=>$shop->id])}}"> <!-- No posem directament el metuode PUT pq molts navegadors no ho saben interpretar-->
        @csrf
            <input type="hidden" name="_method" value="PUT"> <!-- Cal afegir el metode PUT de la següent forma-->
            <label for="name">Nom: </label><br>
            <input type="text" id="name" name="name" value="{{$shop->name}}">
            <br><br>
            <label for="description">ID Pais:</label><br>
            <textarea id="description" name="description">{{$shop->country_id}}</textarea>
            <br><br>
            <input type="submit" value="MODIFY" class="btn btn-success">
        </form>
    </div>
@endsection