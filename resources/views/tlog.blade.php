@extends('layouts.larablog')

@section('title')
{{$home->title}}
@endsection


@section('maincontents')

<div class="has-background-black-bis hugecover">
    {!!$home->contents!!}
</div>

<div class="container contentsbg">
    <div class="mt-4">
        <h2 class="title secondary">NEU im Blog:</h2>
        @forelse ($morePosts->chunk(3) as $chunk)
        <div class="row mt-4">
            @foreach ($chunk as $items)
            <div class="four columns">
                <div class="image-header">
                    <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <a href="{{url('blog/'.$items->url,$items->id)}}">
                    <img src="{{$items->mainImage ? asset('storage/thumbnail/tiny_'.$items->mainImagePath->filename): asset('images/wall.jpg')}}" class="u-full-width" alt="{{$items->title}}">
                </a>
                    </div>
                </div>
                <div class="headline">
                    <h3 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">
                        <a href="{{url('blog/'.$items->url,$items->id)}}">
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
