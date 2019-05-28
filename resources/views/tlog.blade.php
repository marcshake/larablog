@extends('layouts.larablog')

@section('title')
{{$home->title}}
@endsection


@section('maincontents')

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
