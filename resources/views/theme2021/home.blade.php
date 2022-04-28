@extends('theme2021.layout')
@section('title')
    {{$home->title}}
@endsection
@section('contents')
<div class="container contents">
    {!!$home->contents!!}    
</div>    

<div class="container">
    @forelse ($blogposts as $item)

        <!-- Project One -->
        <div class="row spaced bottomborder">
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