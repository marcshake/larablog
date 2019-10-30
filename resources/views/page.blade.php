@extends('layouts.larablog')

@section('title')
{{$page->title}}
@endsection
@section('maincontents')
<div class="container contentsbg">
    <h1>{{$page->title}}</h1>
    <article class="mt-4">
        <div class="contents">
            <div class="row">
                <div class="nine columns">
                    {!!$page->contents!!}
                </div>
                <div class="three columns">
                    @include('partial.submenu')
                </div>
            </div>
        </div>

    </article>

</div>
@endsection
