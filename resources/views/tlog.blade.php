@extends('layouts.larablog')

@section('title')
Larablog - Testseite
@endsection

@section('maincontents')

<div class="container">
    <div class="contents">
        <h1 class="title">Blogposts</h1>
        <div class="posts">
            @foreach ($posts as $item)
            <article class="article">
                <header>
                    <h2 class="title">{{ $item->title }}</h2>
                </header>
                <div class="content">
                    {!! $item->contents !!}
                </div>
                <div class="row">
                    <div class="two columns">
                        Author:
                    </div>
                    <div class="ten columns">
                        {{ $item->authorName->name}}
                    </div>
                </div>
                <div class="row">
                    <div class="two columns">
                        Tags:
                    </div>
                    <div class="ten columns">
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
</div>
@endsection
