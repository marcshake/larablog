@extends('theme2020.layout')

@section('title') {{$page->title}} @endsection
@section('maincontents')
<div class="container mt-4 bg-light">
    <h1>{{$page->title}}</h1>

                    {!!$page->contents!!}


</div>
@endsection
