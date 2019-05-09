@extends('layouts.larablog')

@section('maincontents')
<div class="container">
        @foreach ($posts as $item)
        <article>
            <header><h2>{{ $item->title }}</h2></header>
            <section>
                {{ $item->contents }}
            </section>
        </article>
        @endforeach

</div>
@endsection
