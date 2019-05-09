@extends('layouts.larablog')

@section('maincontents')
<div class="container">
    <div class="contents">
        <h1 class="title">Blogposts</h1>
        @foreach ($posts as $item)
        <article class="article">
            <header>
                <h2 class="title">{{ $item->title }}</h2>
            </header>
            <div class="content">
                {!! $item->contents !!}
            </div>
            <div class="columns">
                <div class="column is-2">
                    Author:
                </div>
                <div class="column">
                    todo:
                </div>
            </div>
            <div class="columns">
                <div class="column is-2">
                    Tags:
                </div>
                <div class="column">
                    <span class="tag is-dark">#tags </span>
                    <span class="tag is-dark">#tags </span>
                    <span class="tag is-dark">#tags </span>
                    <span class="tag is-dark">#tags </span>
                </div>
            </div>
            <hr>
        </article>
        @endforeach
    </div>
</div>
@endsection
