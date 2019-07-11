@extends('layouts.larablog')
@section('title')
Free Music
@endsection


@section('maincontents')
<div class="container">
    <h1>Musik</h1>
    <p>Download all my music</p>
    <table class="u-full-width">
        <thead>
            <tr>
                <th>Songname</th>
                <th>Genre</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $item)

            <tr>
                <td>{{$item->song_name}}</td>
                <td>{{$item->song_genre}}</td>
                <td><a class="button">Download</a></td>

            </tr>
            @endforeach            
        </tbody>
    </table>
</div>
@endsection