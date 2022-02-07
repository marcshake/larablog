@section('opengraph')

    @forelse ($blogposts as $item)
        <meta property="og:image"
            content="{{ $item->mainImage ? asset('storage/thumbnail/' . $item->mainImagePath->filename) : asset('images/wall.jpg') }}">
    @empty

    @endforelse
@endsection

@section('title') Blog {{ $topic ?? '' }} @endsection

@extends('theme2021.layout')

@section('contents')
    <div class="container">
        @forelse ($blogposts as $item)

            <!-- Project One -->
            <div class="row">
                <div class="three columns">
                    <a href="{{ url('blog/' . $item->url, $item->id) }}">
                        <img src="{{ $item->mainImage ? asset(env('IMAGE_PATH', '') . 'storage/thumbnail/' . $item->mainImagePath->filename) : asset('images/wall.jpg') }}"
                            class="img-fluid" alt="{{ $item->title }}" width="350" height="199">
                    </a>
                </div>
                <div class="nine columns">
                    <a href="{{ url('blog/' . $item->url, $item->id) }}">

                        <h3>
                            {{ $item->title }}
                        </h3>
                    </a>
                    {!! $item->shortcontents !!}
                    <a href="{{ url('blog/' . $item->url, $item->id) }}">

                        Weiter
                    </a>
                </div>
            </div>
            <!-- /.row -->
        @empty
            Dein Blog ist leer.

            <hr>
        @endforelse
        {{ $blogposts->links() }}
    </div>
@endsection
