@extends('layouts.administration')
@section('script')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
<form action="{{ url('admin/cms/edit',$page->id)}}" method="post">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    @csrf
    <div class="field">
        <label class="label" for="title">Headline</label>
        <div class="control">
            <input autocomplete="false" class="input" type="text" placeholder="Überschrift" value="{{$page->title}}"
                name="title" id="title">
        </div>
    </div>
    <div class="field">
        <label class="label" for="title">Slug<sup>*</sup></label>
        <div class="control">
            <input autocomplete="false" class="input" type="text" placeholder="Überschrift" value="{{$page->filename}}"
                name="filename" id="filename">
        </div>
    </div>

    <div class="field">
        <label for="contents" class="label">Inhalt</label>
        <div class="control editor">
            <textarea name="contents" class="textarea" placeholder="Textarea"
                id="contents">{{$page->contents}}</textarea>
        </div>
    </div>
    <div class="buttons">
        <input value="Speichern" class="button button-primary" type="submit">
        <a href="{{url('admin/blogs')}}" class="button">Verwerfen</a>
    </div>
</form>




@endsection
