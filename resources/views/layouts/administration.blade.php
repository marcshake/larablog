<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/admin.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/30.0.0/ckeditor.min.js" integrity="sha512-4/p6jGVEkS3BF73j6gLWSn1qRLiAo1Wgsu7wiFwD3HtrnVcEGfAUmt5hhOw5TgpKPur0WPrvubFEbvXQKG3jBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{mix('js/admin.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('script')
    <title>
        @yield('title')
    </title>
</head>

<body>
    <nav class="has-background-black-bis" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.svg') }}" alt="TLOG5 - Laravel based Blogging Solution" height="32">
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

    <div class="mt-4 fluidContainer">
        <div class="row">
            <div class="columns two">
                @include('partial.adminMenu')
            </div>
            <div class="columns ten">
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
    @include('partial.modal')

    <script>
    ClassicEditor
        .create( document.querySelector( '#contents' ), {})
        .catch( error => {
            console.error( error );
        } );
</script>
</body>

</html>
