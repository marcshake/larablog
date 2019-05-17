@extends('layouts.larablog')

@section('title')
Übersicht
@endsection

@section('maincontents')
<div class="container mt-4">
    <h1 class="title primary">Newsübersicht</h1>
    @forelse ($blogposts as $item)
    <article>
        <section>
            <div class="row">
                <div class="three columns">
                    <img src="{{$item->mainImage ? asset('storage/thumbnail/tiny_'.$items->mainImagePath->filename): asset('images/wall.jpg')}}"
                        class="u-full-width" alt="Bild">
                    <br>
                    Tags:
                    @forelse ($item->Tags as $tags)
                    <span class="tag is-dark">{{$tags->tag}}</span>
                    @empty

                    @endforelse
                    <br>Datum: {{ $item->updated_at}}

                </div>
                <div class="nine columns">
                    <h2 class="title {{$loop->iteration % 2 == 0 ? 'primary' : 'secondary' }}">
                        <a href="{{url('blog/show/'.$item->categories[0]->name,$item->title)}}">
                            {{$item->title}}
                        </a>
                    </h2>

                    {!! $item->contents !!}
                </div>
            </div>

        </section>

    </article>
    @empty
    Dein Blog ist leer.
    @endforelse
    {{$blogposts->links()}}
</div>
@endsection
