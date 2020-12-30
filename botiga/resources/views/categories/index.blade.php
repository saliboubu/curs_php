@extends('layouts.admin') 

@section('titol')
    Categories

    <a href="{{route('categories.create')}}" class="btn btn-dark pull-right">Afegir Categoria</a>
@endsection

@section('contingut')
    <div class="col-12">
        <table width="90%" class="table table-striped">
            <thead>
                <tr>
                    <th>Codi categoria</th>
                    <th>Nom categoria</th>
                    <th>Descripcio</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->name}}</td>
                        <td>{{$categoria->description}}</td>
                        <td>
                            <!-- Els elements a editar o eliminar, són uns en concret, és per això que fa falta l'identificatiu de l'id per saber quin és el que s'ha de modificar -->
                            <a href="{{route('categories.edit', ['category'=>$categoria->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('categories.destroy', ['category'=>$categoria->id])}}" data-method="DELETE" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>

@endsection