@extends('theme2021.layout')
@section('title')
    {{$home->title}}
@endsection
@section('contents')
<div class="container contents">
    {!!$home->contents!!}    
</div>    
@endsection