<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/admin.css')}}">
    <script src="{{ mix('js/admin.js') }}"></script>
    
    <title>@yield('title') </title>


</head>

<body>
    
        <div class="row">
            <div class="two columns">
                @include('admin.navigation')
            </div>
            <div class="columns ten">
                @yield('contents')
            </div>
        </div>
    
</body>

</html>
