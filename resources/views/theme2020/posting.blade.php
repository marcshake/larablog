@extends('theme2020.layout')
@section('title') {{$posting->title}} @endsection
@section('opengraph')
<meta content="{{$posting->title}}" property="og:title">
<meta content="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}" property="og:image">
@endsection
@section('maincontents')
<div id="parascroll" class="header-image" style="background-image: url('{{$posting->mainImage ? asset(env('IMAGE_PATH','').'storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}')">
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center text-white">
            <h1>{{$posting->title}}</h1>
        </div>
    </div>
</div>
<div class="container bg-light rounded mt-4">
    <div class="row">
        <div class="col-md-9">
            <article class="mt-4 text-height-2">
                {!! $posting->output !!}
            </article>
            {!! $BLOGREPEAT ?? ''!!}
        </div>
        <div class="col-md-3 mt-4">
            Tags:
            @forelse ($posting->Tags as $tags)
            <a href="{{url('tag',$tags->tag)}}" class="tag is-dark">{{$tags->tag}}</a>
            @empty
            @endforelse
            <br>Kategorie:
            @forelse ($posting->categories as $cats)
            <a class="tag is-dark" href="{{url('category',$cats->name)}}">{{$cats->name}}</a>
            @empty
            @endforelse
            <hr>
        </div>
    </div>
</div>
@endsection