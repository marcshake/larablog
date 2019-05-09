<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{asset('js/app.js')}}"></script>
        <title>Document</title>
    </head>
    <body>
        <nav class="navbar is-black" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a href="#" class="navbar-item">Tlog5</a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#" class="navbar-item">Item</a>
                        <a href="#" class="navbar-item">Item</a>
                        <a href="#" class="navbar-item">Item</a>
                    </div>
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a class="button is-primary">
                                    <strong>Sign up</strong>
                                </a>
                                <a class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <div class="container">

            @yield('content')
        </div>
        <footer>
            <div class="container">
                &copy; Marcel Schindler
            </div>
        </footer>
    </body>
</html>
