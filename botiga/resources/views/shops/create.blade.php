@extends('layouts.admin') 

@section('titol')
    Nova Botiga
@endsection

@section('contingut')
    <div class="col-12">
        <form method="post" action="{{route('categories.store')}}">
        @csrf
            <label for="name">Nom: </label><br>
            <input type="text" id="name" name="name">
            <br><br>
            <label for="address">Adreça:</label><br>
            <input id="address" name="address">
            <br><br>
            <select name="country" id="country">
                <option value="0">Escull pais</otpion>
                @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="CREATE" class="btn btn-success">
        </form>
    </div>
@endsection