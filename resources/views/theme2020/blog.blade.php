@extends('theme2020.layout')

@section('title') Blog {{$topic ?? ''}} @endsection

@section('opengraph')

@forelse ($blogposts as $item)
<meta property="og:image"
    content="{{$item->mainImage ? asset('storage/thumbnail/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}">
@empty

@endforelse
@endsection

@section('maincontents')
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Blogposts
      <small>Liste</small>
    </h1>
    @forelse ($blogposts as $item)

    <!-- Project One -->
    <div class="row">
      <div class="col-md-5">
        <a href="{{url('blog/'.$item->url,$item->id)}}">            
          <img data-src="{{$item->mainImage ? asset('storage/thumbnail/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}"
            class="img-fluid" alt="{{$item->title}}">
        </a>
      </div>
      <div class="col-md-7">
        <h3>
            {{$item->title}}
        </h3>
        {!! $item->shortcontents !!}
        <a href="{{url('blog/'.$item->url,$item->id)}}">

        Weiter
        </a>
      </div>
    </div>
    <!-- /.row -->
    @empty
    Dein Blog ist leer.

    <hr>
    @endforelse
    {{$blogposts->links()}}


</div>
  <!-- /.container -->
@endsection
