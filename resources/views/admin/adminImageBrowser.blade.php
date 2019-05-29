@extends('layouts.administration')
@section('title')
Bilder / Mediendateien
@endsection

@section('content')
<div class="row">
    <div class="three columns">Hochladen</div>
    <div class="nine columns">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form action="{{url('admin/filer')}}" enctype="multipart/form-data" method="post">
            @csrf
            <input type="file" name="file" id="file">
            <input type="submit" value="hochladen" class="button button-primary">
        </form>
    </div>
</div>
<div class="idetails">
    <div class="row">
    @include('partial.imagebrowser')
</div>
</div>
@endsection
