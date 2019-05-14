@extends('layouts.administration')
@section('title')
    Bilder / Mediendateien
@endsection

@section('content')
<div class="row">
    Todo: Image Uploader / Scaler / Resizer
</div>
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
