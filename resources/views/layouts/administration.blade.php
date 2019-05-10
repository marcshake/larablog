<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('script')
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
                    <a href="{{ url('admin')}}" class="navbar-item">Admin-Start</a>
                </div>
            </div>

            <div class="navbar-end">
                @auth
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ url('logout')}}" class="button is-light">Ausloggen</a>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="columns">
            <div class="column is-3">
                <aside class="menu has-background-black-bis">
                    <p class="menu-label">Dashboard</p>
                    <ul class="menu-list">
                        <li>
                            <a href="{{url('admin')}}">Startseite</a>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Beiträge
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="{{url('admin/blogs')}}">Alle Beiträge</a>
                        </li>
                        <li>
                            <a href="{{url('admin/new')}}">Neuer Beitrag</a>
                        </li>
                    </ul>

                </aside>
            </div>
            <div class="column">

                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
