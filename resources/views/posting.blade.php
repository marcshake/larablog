@extends('layouts.larablog')

@section('maincontents')
<div class="headerimage">
    <img src="{{$posting->mainImage ? asset('storage/thumbnail/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}" data-src="{{$posting->mainImage ? asset('storage/uploads/'.$posting->mainImagePath->filename): asset('images/wall.jpg')}}" alt="{{$posting->title}}" class="u-full-width">
</div>
<div class="container">
<h1 class="title primary superHeadline">{{$posting->title}}</h1>    
    
    <div class="contents">{!!$posting->contents!!}</div>
</div>
@endsection