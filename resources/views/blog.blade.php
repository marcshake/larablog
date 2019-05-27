@extends('layouts.larablog')

@section('title')
Übersicht
@endsection

@section('maincontents')
<div class="container">

    <div class="mt-4">
        <div class="row">
            <div class="nine columns">
                @forelse ($blogposts as $item)
                <article class="mt-4 has-bottom-border">
                    <section>
                        <h2 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">
                            <a href="{{url('blog/'.$item->title,$item->id)}}">
                                {{$item->title}}
                            </a>
                        </h2>
                        <img src="{{$item->mainImage ? asset('storage/thumbnail/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}"
                            class="u-full-width" alt="{{$item->title}}">

                        {!! $item->shortcontents !!}
                        <div class="row">
                            <div class="twelve columns">
                            Geschrieben: {{$item->created_at->formatLocalized('%d.%m.%Y')}} von
                            {{$item->authorname->name}}
                            <a href="{{url('blog/'.$item->title,$item->id)}}"
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
            <div class="three columns">
                @include('partial.submenu')
            </div>
        </div>
    </div>
</div>
@endsection
