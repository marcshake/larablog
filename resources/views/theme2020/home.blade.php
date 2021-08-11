@extends('theme2020.layout')
@section('title') {{ $home->title }} @endsection


@section('maincontents')
<div class="bg-light rounded hugecover text-height-2">
    {!!$home->contents!!}
</div>


    <div class="container mt-4">

        <div class="row">
            @foreach ($morePosts as $items)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="{{ url('blog/' . $items->url, $items->id) }}">
                            <img class="card-img-top"
                                src="{{ $items->mainImage ? asset('storage/thumbnail/tiny_' . $items->mainImagePath->filename) : asset('images/wall.jpg') }}"
                                title="{{ $items->title }}" alt="{{ $items->title }}">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ url('blog/' . $items->url, $items->id) }}">{{ $items->title }}</a>
                            </h4>
                            <p class="card-text">
                                {!! $items->contents !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
