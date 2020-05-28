@extends('layouts.administration')
@section('title')
    Benutzermanager - &gt; {{$edit->name}} bearbeiten
@endsection

@section('content')
    <form action="{{url('admin/user/edit',$edit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="field">
            <label for="name" class="label">Benutzername</label>
            <div class="control">
                <input type="text" autocomplete="false" id="name" name="name" value="{{$edit->name}}" class="input">
            </div>
        </div>


        <div class="field">
            <label for="email" class="label">Email</label>
            <div class="control">
                <input type="email" autocomplete="false" id="email" name="email" value="{{$edit->email}}" class="input">
            </div>
        </div>


        <div class="field">
            <label for="password" class="label">Passwort</label>
            <div class="control">
                <input type="text" autocomplete="false" id="password" name="password" value="" class="input">
                <a href="#" id="generator" class="button">Generate Password</a>
            </div>
        </div>

        <div class="field">
            <label for="bio">Biography</label>
            <div class="control">
                <textarea class="u-full-width" name="bio" id="bio" cols="30"
                          rows="10">{{$edit->UserInfo->bio ?? ''}}</textarea>
            </div>
        </div>
        <div class="field">
            <label for="avatar">Profilbild</label>
            <div class="control">
                @if(isset($edit->UserInfo->avatar))
                    <img src="{{$edit->UserInfo->avatar}}" alt="{{$edit->name}}">
                @endif
                <input type="file" name="avatar" id="avatar">
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Speichern">
        </div>
    </form>
@endsection
