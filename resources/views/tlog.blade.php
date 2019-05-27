@extends('layouts.larablog')

@section('title')
{{$home->title}}
@endsection


@section('maincontents')
<div class="slideShow">
    @forelse ($posts as $item)
    <div class="slide">
        <div class="container">
                <img src="{{$item->mainImage ? asset('storage/thumbnail/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}" data-src="{{$item->mainImage ? asset('storage/uploads/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}" alt="">

            <h2 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">
                {{$item->title}}
            </h2>
            <div class="halftone mt-4">
                {!! $item->contents !!}
                <div class="row">
                    @forelse ($item->Tags as $tags)
                    <span class="tag is-dark">{{$tags->tag}}</span>
                    @empty

                    @endforelse

                </div>
                <div class="row">
                    <a href="{{url('blog/'.$item->title,$item->id)}}" class="u-pull-right button button-primary">
                        Weiterlesen...
                    </a>

                </div>


            </div>
        </div>

    </div>
    @empty
    Keine Inhalte?
    @endforelse
</div>
    <div class="has-background-black-bis">
        <div class="container">
        {!!$home->contents!!}
    </div>
    </div>

<div class="container">
    <div class="mt-4">
        <h2 class="title secondary">NEU im Blog:</h2>
        @forelse ($morePosts->chunk(2) as $chunk)
        <div class="row mt-4">
            @foreach ($chunk as $items)
            <div class="six columns">
                <div class="image-header">
                    <img src="{{$items->mainImage ? asset('storage/thumbnail/tiny_'.$items->mainImagePath->filename): asset('images/wall.jpg')}}"
                        class="u-full-width" alt="Bild">
                </div>
                <div class="headline">
                    <h3 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">
                        <a href="{{url('blog/'.$items->title,$items->id)}}">
                            {{$items->title}}
                        </a>
                    </h3>

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
