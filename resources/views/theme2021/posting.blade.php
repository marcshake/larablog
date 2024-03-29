@extends('theme2021.layout')
@section('title') {{ $posting->title }} @endsection
@section('opengraph')
    <meta content="{{ $posting->title }}" property="og:title">
    <meta
        content="{{ $posting->mainImage? asset('storage/uploads/' . $posting->mainImagePath->filename): asset('images/wall.jpg') }}"
        property="og:image">
@endsection
@section('contents')
    <div class="container contents">
        <article>
            <div class="headimage">
                <img class="img-fluid" src="{{ $posting->mainImage? asset(env('IMAGE_PATH', '') . 'storage/uploads/' . $posting->mainImagePath->filename): asset('images/wall.jpg') }}"
                    alt="{{ $posting->title }}" width="100" height="200">
            </div>
            <h1>{{ $posting->title }}</h1>

            {!! $posting->output !!}
        </article>
        {!! $BLOGREPEAT ?? '' !!}
        <div class="tags">
            Tags:
            @forelse ($posting->Tags as $tags)
                <a href="{{ url('tag', $tags->tag) }}" class="tag is-dark">{{ $tags->tag }}</a>
            @empty
            @endforelse
            <br>Kategorie:
            @forelse ($posting->categories as $cats)
                <a class="tag is-dark" href="{{ url('category', $cats->name) }}">{{ $cats->name }}</a>
            @empty
            @endforelse
        </div>
    </div>
@endsection
