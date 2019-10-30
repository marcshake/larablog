@extends('layouts.larablog')

@section('title')
Blogeinträge auf Trancefish.de
@endsection

@section('opengraph')

@forelse ($blogposts as $item)
<meta property="og:image"
    content="{{$item->mainImage ? asset('storage/thumbnail/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}">
@empty

@endforelse
@endsection

@section('maincontents')
<div class="container contentsbg">

    <div class="mt-4">
        <div class="row">
            <div class="twelve columns">
                @forelse ($blogposts as $item)
                <article class="mt-4 has-bottom-border">
                    <section>
                        <h2 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">
                            <a href="{{url('blog/'.$item->url,$item->id)}}">
                                {{$item->title}}
                            </a>
                        </h2>
                        <div class="row">
                            <div class="three columns">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <img data-src="{{$item->mainImage ? asset('storage/thumbnail/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}"
                                class="u-full-width" alt="{{$item->title}}">
                        </div></div>
                        <div class="nine columns">
                        {!! $item->shortcontents !!}
                    </div>

                    </div>
                        <div class="row">
                            <div class="twelve columns">
                                Geschrieben: {{$item->created_at->formatLocalized('%d.%m.%Y')}} von
                                {{$item->authorname->name}}
                                <a href="{{url('blog/'.$item->url,$item->id)}}"
                                    class="u-pull-right button button-primary">
                                    weiterlesen
                                </a>
                            </div>
                        </div>
                    </section>

                </article>
                @empty
                Dein Blog ist leer.
                @endforelse
                {{$blogposts->links()}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns">
            @include('partial.submenu')
        </div>
    </div>
</div>
@endsection
