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
@endsection
