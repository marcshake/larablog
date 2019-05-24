@extends('layouts.larablog')
@section('title')
{{$posting->title}}
@endsection
@section('maincontents')
<div class="headerimage">
    <img src="{{$posting->mainImage ? asset('storage/thumbnail/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}"
        data-src="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}"
        alt="{{$posting->title}}" class="u-full-width">
</div>
<div class="container">
        <h1 class="title primary superHeadline">{{$posting->title}}</h1>

    <article class="mt-4">
        <div class="contents">
            <div class="row">
                <div class="nine columns">
                    {!!$posting->contents!!}
                </div>
                <div class="three columns">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Infos</h4>
                        </div>
                        <div class="card-body">
                            Tags:
                            @forelse ($posting->Tags as $tags)
                            <a href="{{url('tag',$tags->tag)}}" class="tag is-dark">{{$tags->tag}}</a>
                            @empty

                            @endforelse
                            <br>
                            Datum: {{ $posting->created_at->formatLocalized('%d.%m.%Y')}}

                            Autor: {{$posting->authorName->name}}
                            <br>Kategorie:
                            @forelse ($posting->categories as $cats)
                            <a class="tag is-dark" href="{{url('category',$cats->name)}}">{{$cats->name}}</a>
                            @empty

                            @endforelse
                        </div>
                    </div>

                    @include('partial.submenu')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
                Tags:
                @forelse ($posting->Tags as $tags)
                <a href="{{url('tag',$tags->tag)}}" class="tag is-dark">{{$tags->tag}}</a>
                @empty

                @endforelse
                <br>
                Datum: {{ $posting->created_at->formatLocalized('%d.%m.%Y')}}

                Autor: {{$posting->authorName->name}}
                <br>Kategorie:
                @forelse ($posting->categories as $cats)
                <a class="tag is-dark" href="{{url('category',$cats->name)}}">{{$cats->name}}</a>
                @empty

                @endforelse
                <hr><a href="{{url('blog')}}" class="button">Blog weiter lesen</a>
            </div>
        </div>

    </article>
</div>
@endsection
