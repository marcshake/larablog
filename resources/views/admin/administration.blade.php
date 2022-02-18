<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
    <script src="{{ mix('js/admin.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') </title>

</head>

<body>
    <div class="modal modal-open hidden">
        <div class="modal-inner">
            <div class="modal-content">
                <div class="modal-close-icon u-pull-right">
                    <a href="#" class="close-modal"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
                    &nbsp;
                </div>
                <div class="modal-content-inner">
                    <h4 id="modalTitle">Loading...</h4>
                    <div id="modalContents" class="ibrowser modal-contents-ajax">
                        Loading...
                    </div>
                </div>
                <hr class="modal-buttons-seperator">
                <div class="modal-buttons">
                    <button class="button close-modal">Cancel</button>
                    <button class="button button-primary close-modal doSubmit">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <a class="button" href="{{ url('admin') }}">{{ __('admin home') }}</a>
        <a class="button" href="{{ url('/') }}">{{ __('home') }}</a>
    </div>

    <div class="row">
        <div class="three columns">
            @include('admin.navigation')
        </div>
        <div class="columns nine">
            @yield('contents')
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/markdown-it/12.2.0/markdown-it.min.js"
        integrity="sha512-cTQeM/op796Fp1ZUxfech8gSMLT/HvrXMkRGdGZGQnbwuq/obG0UtcL04eByVa99qJik7WlnlQOr5/Fw5B36aw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>
