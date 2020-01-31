@extends('layouts.larablog')
@section('title') Free Music @endsection


@section('maincontents')
<div class="container contentsbg">
        <h1>Musik</h1>
    <h2>Album</h2>
    <div class="albums">
    @foreach ($albums as $item)
        <a href="#" data-albid="{{$item->alb_id}}" class="button button_primary" style="padding:5em">{{$item->alb_title}}</a>
    @endforeach
</div>
    <hr>
    <p>Download all my music</p>
    @foreach($songs->chunk(3) as $chunk)
    <div class="row">
        @foreach ($chunk as $item)
        <div class="four columns">
            <div data-alb="{{$item->alb_id}}" class="myAlbum">
                <img class="u-full-width" data-src="{{asset('images/wall.jpg')}}"
                    alt="Album Art">
                <a class="button" href="{{url('music/download',$item->song_id)}}">{{$item->song_name}}</a>
            </div>
        </div>
        @endforeach

    </div>






    @endforeach
</div>
@endsection
