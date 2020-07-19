@extends('theme2020.layout')

@section('title')Suche @endsection

@section('maincontents')
<div class="container mt-4">
<h2>Suche</h2>
<ul>
@forelse ($results as $item)
<li>
<a href="/blog/{{urlencode($item->title)}}/{{$item->id}}">    {{$item->title}}</a>
</li>
@empty
Keine Suchergebnisse
@endforelse
</ul>
</div>
@endsection
