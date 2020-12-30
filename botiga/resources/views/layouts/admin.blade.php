<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Si no m'envien titolPage posa'l + si no m'envien posa el valor per defecte (2n)
    --}}
    <title>@yield('titlePage', "La botigueta")</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .links {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 20px;
        }
        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .copyright {
            position: absolute;
            bottom: 0;
            left: 0px;
            padding: 10px;
        }
        .contingut{
            margin-top:100px;
        }

    </style>
</head>
<body>
    <div class="container">

        @include('partials.menu_frontend')


        <div class="row contingut">
            <h1>@yield('titol')</h1>
            @yield('contingut')
        </div>

        @include('partials.footer_frontend')
    </div>
</body>