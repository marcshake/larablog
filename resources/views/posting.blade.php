@extends('layouts.larablog')

@section('maincontents')
<div class="headerimage">
    <img src="{{$posting->mainImage ? asset('storage/thumbnail/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}" data-src="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}" alt="{{$posting->title}}" class="u-full-width">
</div>
<div class="container">
    <h1 class="title primary superHeadline">{{$posting->title}}</h1>    

    <div class="contents">{!!$posting->contents!!}</div>
    <div class="row">
        <div class="two columns">
            Meta 
        </div>
        <div class="ten columns">
            Tags:
            @forelse ($posting->Tags as $tags)
            <span class="tag is-dark">{{$tags->tag}}</span>
            @empty

            @endforelse
            <br>Datum: {{ $posting->updated_at}}
            <br>
            Autor: {{$posting->authorName->name}}
            <br>Kategorie:
            @forelse ($posting->categories as $cats)
            <a class="tag is-dark" href="{{url('category',$cats->name)}}">{{$cats->name}}</a>
            @empty

            @endforelse

        </div>
    </div>
</div>
@endsection