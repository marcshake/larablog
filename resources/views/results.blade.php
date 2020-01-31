@extends('layouts.larablog')

@section('title')Suche @endsection

@section('maincontents')
<div class="container contentsbg">
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
