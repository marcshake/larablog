<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="columns">
            <div class="column is-4">
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
                            <a href="{{url('adminBlogs')}}">Alle Beiträge</a>
                        </li>
                        <li>
                            <a href="{{url('adminNew')}}">Neuer Beitrag</a>
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
