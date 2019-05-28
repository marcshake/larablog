<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="navbar has-shadow" role="navigation" aria-label="main navigation">
        @include('partial.mainmenu')


    </div>
    @yield('maincontents')
    <footer class="is-dark">
        <div class="container">
            Made with &hearts; in germany by Marcel Schindler
        </div>
    </footer>
</body>

</html>
