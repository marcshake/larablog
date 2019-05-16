@extends('layouts.larablog')

@section('title')
Larablog - Testseite
@endsection

@section('maincontents')
<div class="slideShow">
    @forelse ($posts as $item)
    <div class="slide" style="background-image: url({{asset('images/wall.jpg')}})">
        <div class="container">

            <h2 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">{{$item->title}}</h2>
            <div class="halftone mt-4">
                {!! $item->contents !!}
            </div>
        </div>
    </div>
    @empty
    Keine Inhalte?
    @endforelse
</div>
<div class="container">
    <div class="mt-4">
        @forelse ($morePosts->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $items)
            <div class="four columns">
                <div class="image-header">
                    <img src="{{asset('images/wall.jpg')}}" class="u-full-width" alt="Bild">
                </div>
                <div class="headline">
                    <h3 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">{{$items->title}}</h3>
                </div>
                <div class="previewContents">
                    {!!$items->contents!!}
                </div>
            </div>
            @endforeach
        </div>
        @empty
        Blog ist leer
        @endforelse
    </div>
</div>
@endsection
