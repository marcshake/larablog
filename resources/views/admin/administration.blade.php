<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"
        integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
