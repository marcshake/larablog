<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="{{ Request::fullUrl() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $metadescription ?? env('DESCRIPTION', '') }}">

    <script src="{{ mix('js/theme2022.js') }}"></script>
    @yield('opengraph')
    <title>@yield('title') </title>
</head>

<body>
    @include('theme2021.navigation')
    <div class="maincontents">
        @yield('contents')
    </div>
    @include('theme2021.footer')

    <link rel="stylesheet" href="{{ mix('css/theme2022.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Rowdies:wght@700&display=swap"
        rel="stylesheet">
</body>

</html>
