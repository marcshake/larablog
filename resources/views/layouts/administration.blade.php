<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="{{asset('js/admin.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('script')
    <title>
        @yield('title')
    </title>
</head>

<body>
    <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="https://www.trancefish.de/assets/tlog.svg.svg"
                        alt="TLOG5 - Laravel based Blogging Solution" height="32">
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

    <div class="mt-4">
        <div class="row">
            <div class="columns three">
                <aside class="menu has-background-black-bis">
                    <p class="menu-label">Dashboard</p>
                    <ul class="menu-list">
                        <li>
                            <a href="{{url('admin')}}" {!!Request::is('admin')?'class="active"':''!!}>
                                Startseite
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Beiträge
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="{{url('admin/blogs')}}" {!!Request::is('admin/blogs')?'class="active"':''!!}>Alle Beiträge</a>
                        </li>
                        <li>
                            <a href="{{url('admin/new')}}" {!!Request::is('admin/new')?'class="active"':''!!}>Neuer Beitrag</a>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Bilder / Videos
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="{{url('admin/filer')}}" {!!Request::is('admin/filer')?'class="active"':''!!}>Bilder</a>
                        </li>
                    </ul>

                </aside>
            </div>
            <div class="columns nine">
                    @if (session('warning'))
                    <div class="alert alert-fail">
                        {{ session('warning') }}
                    </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
