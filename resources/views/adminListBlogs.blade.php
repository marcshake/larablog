@extends('layouts.administration')

@section('content')
<table class="table is-striped is-hoverable">
    <thead>
        <tr>
            <th>Nummer</th>
            <th>Beitragsdatum</th>
            <th>Seitentitel</th>
            <th>Autor</th>
            <th>Tags</th>
            <th>Kategorien</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($collection as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                {{$item->title}}
                <span class="tag is-light">entwurf</span>
            </td>
            <td>{{$item->authorName->name}}</td>
            <td>just, a, bunch, of, tags</td>
            <td>just, a, bunch, of, categories</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
