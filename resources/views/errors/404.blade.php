@extends('layouts.larablog')

@section('title')
Whoops - four oh four
@endsection

@section('maincontents')
<div class="container">
    <h1 class="title primary">four oh four</h1>
    <h2 class="title secondary">
        This is not the page, you were looking for.
    </h2>
    <div class="row">
        <div class="six columns">
            <h2>
                Ouch
            </h2>
            <p>
                This was not supposed to happen. Well - no, that is a lie. I was expecting that. You see, this website
                is quite new. I have some links to fix and some business to make. So have fun and look around.
            </p>
        </div>
        <div class="six colums">
            <h2>What happened</h2>
            <p>
                Either you followed a link or somebody told you about an outdated link. Maybe you will find the page
                somewhere else.

            </p>
            <p>
                We have some really nice links here. Maybe you like one of these:
                @include('partial.submenu')
            </p>
        </div>
    </div>
</div>
@endsection
