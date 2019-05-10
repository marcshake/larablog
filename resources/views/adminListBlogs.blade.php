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
            <td>{{$item->created_at->formatLocalized('%d.%m.%Y')}}</td>
            <td>
                <a href="{{url('adminEdit',$item->id)}}">
                    {{$item->title}}
                </a>
                @if ($item->visible==0)
                <span class="tag is-light">entwurf</span>
                @endif
            </td>
            <td>{{$item->authorName->name}}</td>
            <td>just, a, bunch, of, tags</td>
            <td>just, a, bunch, of, categories</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
