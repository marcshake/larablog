@extends('theme2021.layout')

@section('title') {{ $page->title }} @endsection
@section('contents')
    <div class="container contents">
        <h1>{{ $page->title }}</h1>

        {!! $page->contents !!}


    </div>
@endsection
