@extends('layouts.larablog')

@section('title')
Übersicht
@endsection

@section('maincontents')
<div class="container">
    <h1 class="title primary">Blogübersicht</h1>
    <div class="mt-4">
        @forelse ($blogposts as $item)
        <article class="mt-4 has-bottom-border">
            <section>
                <div class="row">
                    <div class="three columns">
                        <img src="{{$item->mainImage ? asset('storage/thumbnail/tiny_'.$item->mainImagePath->filename): asset('images/wall.jpg')}}"
                             class="u-full-width" alt="Bild">
                        <br>
                        Tags:
                        @forelse ($item->Tags as $tags)
                        <span class="tag is-dark">{{$tags->tag}}</span>
                        @empty

                        @endforelse
                        <br>Datum: {{ $item->updated_at}}
                        <br>
                        Autor: {{$item->authorName->name}}
                        <br>Kategorie:
                        @forelse ($item->categories as $cats)
                        <a class="tag is-dark" href="{{url('category',$cats->name)}}">{{$cats->name}}</a>
                        @empty

                        @endforelse

                    </div>

                    <div class="nine columns">
                        <h2 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">
                            <a href="{{url('blog/'.$item->title,$item->id)}}">
                                {{$item->title}}
                            </a>
                        </h2>

                        {!! $item->shortcontents !!}
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
@endsection
