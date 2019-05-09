<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="https://www.trancefish.de/assets/tlogW.svg.svg"
                        alt="TLOG5 - Laravel based Blogging Solution" height="16">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navnar-menu" id="navMenu">
                <div class="navbar-start">
                    <a href="{{ url('/')}}" class="navbar-item">Home</a>
                    <a href="{{ url('blog/')}}" class="navbar-item">Blog</a>
                </div>
            </div>

            <div class="navbar-end">
                @guest
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="#login" class="button is-light">Einloggen</a>
                    </div>
                </div>
                @endguest

            </div>
        </div>
    </nav>
    @yield('maincontents')

</body>

</html>
