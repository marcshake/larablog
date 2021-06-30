@extends('layouts.administration')
@section('title')
Eintragsübersicht
@endsection

@section('content')
    <div class="row">
    <a href="{{url('admin/blogs/')}}">Beiträge</a>
        <a href="{{url('admin/blogs/')}}?dev=1">Entwürfe</a>
    </div>
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
            <td>{{$item->created_at->formatLocalized('%d.%m.%Y')}}
                @if ($item->visible==0)
                <span class="tag is-light">entwurf</span>
                @endif

            </td>
            <td>
                <a href="{{url('admin/edit',$item->id)}}">
                    {{$item->title}}
                </a>
                <span class="subaction">
                    <a href="{{url('admin/delete',$item->id)}}">Löschen</a>
                    <a target="_blank" href="{{url('preview/'.$item->url,$item->id)}}">Vorschau</a>
                    <a href="{{url('admin/status',$item->id)}}">
                        {{$item->visible ? 'Verstecken' : 'Veröffentlichen'}}
                    </a>

                </span>
            </td>
            <td>{{$item->authorname->name}}</td>
            <td>
                @forelse ($item->Tags as $tags)
                    <span class="tag">{{$tags->tag}}</span>
                @empty

                @endforelse
            </td>
            <td>
                @forelse ($item->categories as $cats)
                    <span class="tag">{{$cats->name}}</span>
                @empty

                @endforelse


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$collection->links()}}

@endsection
