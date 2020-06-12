@extends('theme2020.layout')


  @section('maincontents')


  <header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{asset('images/tunnelmotionstunnel.mp4')}}" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">{{$home->title}}</h1>
          <p class="lead mb-0">
            {!!$home->contents!!}

          </p>
        </div>
      </div>
    </div>
  </header>

<div class="container mt-4">

    <div class="row">
        @foreach ($morePosts as $items)
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card h-100">
                <a href="{{url('blog/'.$items->url,$items->id)}}">
                    <img class="card-img-top"
                        src="{{$items->mainImage ? asset('storage/thumbnail/tiny_'.$items->mainImagePath->filename): asset('images/wall.jpg')}}"
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
@endsection
