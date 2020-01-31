<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="{{Request::fullUrl()}}">
    <meta property="og:type" content="website">
	<meta property="og:title" content="@yield('title')" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$metadescription ?? env('DESCRIPTION','')}}">
    <link rel="stylesheet" href="{{ asset('css/trancefish.css')}}">
    @yield('opengraph')
    <script src="{{asset('js/app.js')}}"></script>
    <title>@yield('title')</title>
</head>

<body>
    @include('cookieConsent::index')
    @include('partial.modal')

    <div class="navbar has-shadow" role="navigation" aria-label="main navigation">
        @include('partial.mainmenu')


    </div>
    <div class="leaveTopSpace">
        @yield('maincontents')
    </div>
    <footer class="is-dark">
        <div class="container">
            Made with &hearts; in germany by Marcel Schindler
            {!! $snippets !!}
        </div>
    </footer>




</body>

</html>
