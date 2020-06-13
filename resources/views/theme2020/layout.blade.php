<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="{{Request::fullUrl()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$metadescription ?? env('DESCRIPTION','')}}">
    <link rel="stylesheet" href="{{ asset('css/theme2020.css')}}">
    @yield('opengraph')
    <title>@yield('title') </title>
</head>

<body>
    <!-- Navigation -->
    @include('theme2020.navigation')
    @yield('maincontents')


        <footer class="page-footer bg-dark text-white"><div class="container mt-4">
            Made with &hearts; in germany by Marcel Schindler
            {!! $snippets !!}
            </div>
        </footer>

    <script src="{{asset('js/theme2020.js')}}"></script>
</body>

</html>
