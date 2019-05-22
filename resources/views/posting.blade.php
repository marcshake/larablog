@extends('layouts.larablog')

@section('maincontents')
<div class="headerimage">
    <img src="{{$posting->mainImage ? asset('storage/thumbnail/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}" data-src="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}" alt="{{$posting->title}}" class="u-full-width">
</div>
<div class="container">
    <article class="mt-4">
    <h1 class="title primary superHeadline">{{$posting->title}}</h1>

    <div class="contents">{!!$posting->contents!!}</div>
        <div class="row">
            <div class="twelve columns">
            Tags:
            @forelse ($posting->Tags as $tags)
            <span class="tag is-dark">{{$tags->tag}}</span>
            @empty

            @endforelse
          Datum: {{ $posting->updated_at}}

            Autor: {{$posting->authorName->name}}
            <br>Kategorie:
            @forelse ($posting->categories as $cats)
            <a class="tag is-dark" href="{{url('category/'.$cats->name,$cats->id)}}">{{$cats->name}}</a>
            @empty

            @endforelse
        </div>
    </div>

    </article>
</div>
@endsection
