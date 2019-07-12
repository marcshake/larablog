@extends('layouts.larablog')
@section('title')
{{$posting->title}}
@endsection

@section('opengraph')
<meta content="{{$posting->title}}" property="og:title">
<meta
    content="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}"
    property="og:image">
@endsection

@section('maincontents')
<div class="headerimage">
    <img src="{{$posting->mainImage ? asset('storage/thumbnail/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}"
        data-src="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}"
        alt="{{$posting->title}}" class="u-full-width">
</div>
<div class="container">
    <h1 class="title primary superHeadline">{{$posting->title}}</h1>

    <article class="mt-4">
        <div class="contents">
            <div class="row">
                <div class="twelve columns">
                    {!!$posting->contents!!}
                </div>

            </div>
        </div>
        <div class="row">
            <div class="eight columns">
                Tags:
                @forelse ($posting->Tags as $tags)
                <a href="{{url('tag',$tags->tag)}}" class="tag is-dark">{{$tags->tag}}</a>
                @empty

                @endforelse
                <br>
                <br>Kategorie:
                @forelse ($posting->categories as $cats)
                <a class="tag is-dark" href="{{url('category',$cats->name)}}">{{$cats->name}}</a>
                @empty

                @endforelse

            </div><div class="four columns">
                Datum: {{ $posting->created_at->formatLocalized('%d.%m.%Y')}}

                Autor: {{$posting->authorName->name}}
            </div>

            </div>
            <hr><a href="{{url('blog')}}" class="button">Blog weiter lesen</a>
        </div>

    </article>
</div>
@endsection
