@extends('theme2020.layout')
@section('title') {{$posting->title}} @endsection

@section('opengraph')
<meta content="{{$posting->title}}" property="og:title">
<meta
    content="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}"
    property="og:image">
@endsection

@section('maincontents')
<div id="parascroll" class="header-image" style="background-image: url('{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}')">
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center text-white">
        <h1 class="display-4">{{$posting->title}}</h1>
    </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">


            <article class="mt-4">
                {!!$posting->contents!!}
            </article>

            @if ($BLOGREPEAT)
            {!! $BLOGREPEAT !!}

            @endif

        </div>
        <div class="col-md-4 mt-4">
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
