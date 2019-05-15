@extends('layouts.administration')
@section('title')
Bilder / Mediendateien
@endsection

@section('content')
<div class="row">
    <div class="three columns">Ziehe die Datei auf die Box</div>
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

@forelse ($collection->chunk(6) as $chunk)
<div class="row">
    @foreach ($chunk as $item)

    <div class="columns two">
        <img src="{{asset('storage/thumbnail/'.$item->filename)}}" class="u-full-width" alt="Upload by User">

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
