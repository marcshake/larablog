<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="{{Request::fullUrl()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$metadescription ?? env('DESCRIPTION','')}}">
    <link rel="stylesheet" href="{{ asset('css/theme2020.css')}}">

    @yield('opengraph')
    <title>@yield('title') - </title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                Larablog
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ueber-mich">Services</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <h1 class="my-4"> {{$home->title}}
            <small>Neu im Blog</small>
        </h1>

        <div class="row">

            @foreach ($morePosts as $items)

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="{{url('blog/'.$items->url,$items->id)}}">
                    {{--     <img class="card-img-top"
                            src="{{$items->mainImage ? asset('storage/thumbnail/tiny_'.$items->mainImagePath->filename): asset('images/wall.jpg')}}"
                            alt="{{$items->title}}">--}}
                            <img class="card-img-top"
                            src="//trancefish.de/storage/thumbnail/tiny_{{$items->mainImagePath->filename}}"
                            alt="{{$items->title}}">
                        </a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url('blog/'.$items->url,$items->id)}}">{{$items->title}}</a>
                        </h4>
                        <p class="card-text">
                            {!!$items->contents!!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>



    </div>

    <script src="{{asset('js/theme2020.js')}}"></script>
</body>

</html>
