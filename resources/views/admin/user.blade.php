@extends('layouts.administration')
@section('title')
Benutzermanager
@endsection

@section('content')
<h2>Benutzer</h2>
@foreach ($users as $user)
<div class="u-pull-left">
    {{$user->name}}
    <a class="button" href="{{url('admin/user/edit',$user->id)}}">bearbeiten</a>
    <a class="button" href="{{url('admin/user/delete',$user->id)}}">löschen</a><br>
</div>

@endforeach
{{$users->links()}}


@endsection
