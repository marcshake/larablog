<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/admin.css')}}">
    <script src="{{ mix('js/admin.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/markdown-it/12.2.0/markdown-it.min.js" integrity="sha512-cTQeM/op796Fp1ZUxfech8gSMLT/HvrXMkRGdGZGQnbwuq/obG0UtcL04eByVa99qJik7WlnlQOr5/Fw5B36aw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>@yield('title') </title>


</head>

<body>
    <div class="container">
        <a href="{{url('admin')}}">{{__('admin home')}}</a>
    </div>
    
        <div class="row">
            <div class="three columns">
                @include('admin.navigation')
            </div>
            <div class="columns nine">
                @yield('contents')
            </div>
        </div>

        <div class="modal modal-open hidden">
            <div class="modal-inner">
                <div class="modal-content">
                    <div class="modal-close-icon">
                        <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="modal-content-inner">
                        <h4 id="modalTitle">Loading...</h4>
                        <div id="modalContents" class="ibrowser">
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
        
</body>

</html>
