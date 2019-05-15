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
<div class="row">
@forelse ($collection as $item)

    <div class="u-pull-left">
        <img class="thumb" src="{{asset('storage/thumbnail/tiny_'.$item->filename)}}" alt="Upload by User">

    </div>




@empty
        Leider sind noch keine Mediendateien hinterlegt
{{$collection->links()}}
@endforelse
</div>
@endsection
