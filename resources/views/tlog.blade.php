@extends('layouts.larablog')

@section('title')
{{$home->title}}
@endsection

@section('maincontents')
<div class="slideShow">
    @forelse ($posts as $item)
    <div class="slide"
        style="background-image: url({{$item->mainImage ? asset('storage/uploads/'.$item->mainImagePath->filename): asset('images/wall.jpg')}})">
        <div class="container">

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
<div class="container">
    <div class="mt-4">
        <h2 class="title secondary">NEU im Blog:</h2>
        @forelse ($morePosts->chunk(3) as $chunk)
        <div class="row mt-4">
            @foreach ($chunk as $items)
            <div class="four columns">
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
<div class="container">
    <h2 class="primary title">{{$home->title}}</h2>
    <div class="mt-4">
        {!!$home->contents!!}
    </div>
</div>
@endsection
