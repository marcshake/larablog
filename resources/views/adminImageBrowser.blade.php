@extends('layouts.administration')
@section('title')
Bilder / Mediendateien
@endsection

@section('content')
<form action="{{ url('admin/filer/save')}}" method="post" enctype="multipart/form-data" id="uploader">
@csrf
    <div class="row">
        <div class="three columns"><label for="filebox">Datei auswählen</label></div>
        <div class="nine columns"><input type="file" name="mediaFile" id="filebox"></div>

    </div>
    <div class="row">
        <div class="twelve columns">
            <input type="submit" class="button button-primary" value="Hochladen">
        </div>
    </div>
</form>
<div class="progress hidden">
    <div class="bar"></div>
    <div class="percent">0%</div>
</div>

<div id="status"></div>
@forelse ($collection->chunk(6) as $chunk)
<div class="row">
    @foreach ($chunk as $item)

    <div class="columns two">
        {{$item->filename}}
    </div>


    @endforeach
</div>
@empty
<div class="row">
    <div class="twelve columns">
        Leider sind noch keine Mediendateien hinterlegt
    </div>
</div>

@endforelse
@endsection
