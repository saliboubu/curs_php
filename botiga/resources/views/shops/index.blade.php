@extends('layouts.admin') 

@section('titol')
    Categories

    <a href="{{route('shops.create')}}" class="btn btn-dark pull-right">Afegir Botiga</a>
@endsection

@section('contingut')
    <div class="col-12">
        <table width="90%" class="table table-striped">
            <thead>
                <tr>
                    <th>Codi botiga</th>
                    <th>Nom botiga</th>
                    <th>Descripcio</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shops as $shop)
                    <tr>
                        <td>{{$shop->id}}</td>
                        <td>{{$shop->name}}</td>
                        <td>{{$shop->country_id}}</td>
                        <td>
                            <!-- Els elements a editar o eliminar, són uns en concret, és per això que fa falta l'identificatiu de l'id per saber quin és el que s'ha de modificar -->
                            <a href="{{route('shops.edit', ['shop'=>$shop->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('shops.destroy', ['shop'=>$shop->id])}}" data-method="DELETE" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>

@endsection