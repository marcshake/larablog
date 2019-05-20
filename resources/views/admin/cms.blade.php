@extends('layouts.administration')
@section('title')
Content-Seiten bearbeiten
@endsection

@section('content')
<div class="row">
    <table class="table is-striped is-hoverable">
        <thead>
            <tr>
                <th>Nummer</th>
                <th>Dateiname</th>
                <th>Seitentitel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->filename}}</td>
                <td>
                    <a href="{{url('admin/cms/edit',$item->id)}}">
                        {{$item->title}}
                    </a>
                    <span class="subaction">
                        <a href="{{url('admin/cms/delete',$item->id)}}">Löschen</a>
                        <a href="#">Vorschau</a>
                    </span>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection
