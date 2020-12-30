@extends('layouts.base')

@section('titlePage')
    Qui som?
@endsection

@section('contingut')

    <div class="content">
        <div class="title m-b-md">
            Qui som?
        </div>

        <div class="text">
            <p>{{ $client }}</p>
            <p>{{ $producte }}</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nostrum voluptates corrupti sapiente
                quidem quasi, fugiat doloribus magnam unde harum quo officia dolore officiis ipsa assumenda fuga quaerat
                voluptas vero?</p>
        </div>

    </div>

@endsection