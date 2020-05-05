@extends('layouts.administration')
@section('title')
Benutzermanager
@endsection

@section('content')
<h2>Benutzer</h2>
<table class="table u-full-width">
    <thead>
    <tr>
        <th>
            Username
        </th>

        <th>
            Email
        </th>
        <th>
            Level
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)

    <tr>
        <td>
            {{$user->name}}
            <span class="subaction">
                <a href="{{url('admin/user/edit',$user->id)}}">Edit</a>
            </span>
        </td>
        <td>{{$user->email}}</td>
        <td>
            // Todo
        </td>
    </tr>
    @endforeach

    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            <a href="{{url('admin/user/new')}}" class="u-pull-right button button-primary">
                Create User
            </a>
        </td>
    </tr>
    </tfoot>
</table>

{{$users->links()}}


@endsection
