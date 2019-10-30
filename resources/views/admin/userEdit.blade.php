@extends('layouts.administration')
@section('title')
Benutzermanager - &gt; {{$edit->name}} bearbeiten
@endsection

@section('content')
<form action="{{url('admin/user/edit',$edit->id)}}" method="post">
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
            <input type="password" autocomplete="false" id="password" name="password" value="" class="input">
        </div>
    </div>
    <div class="field">
        <label for="password_confirmation" class="label">Passwort bestätigen</label>
        <div class="control">
            <input type="password" autocomplete="false" id="password_confirmation" name="password_confirmation" value=""
                class="input">
        </div>
    </div>
    <div class="field">
        <input type="submit" value="Speichern">
    </div>
</form>
@endsection
