@extends('theme2020.layout')
@section('title') {{ $home->title }} @endsection


@section('maincontents')
<div class="bg-light rounded hugecover text-height-2">
    {!!$home->contents!!}
</div>

@endsection
