@extends('layouts.administration')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form action="{{ url('admin/update',$contents->id)}}" method="post">
    @csrf
    <div class="field">
        <label class="label" for="title">Überschrift</label>
        <div class="control">
            <input class="input" type="text" placeholder="Überschrift" value="{{$contents->title}}" name="title"
                id="title">
        </div>
    </div>
    <div class="field">
        <label for="contents" class="label">Inhalt</label>
        <div class="control">
            <textarea name="contents" class="textarea" placeholder="Textarea" id="contents">{{$contents->contents}}</textarea>
        </div>
    </div>
    <div class="field">
        <label for="tags" class="label">Tags</label>
        <div class="control">
            <input class="input" type="text" name="tags" id="tags" value="{{$contents->tags}}">
        </div>
    </div>
    <div class="field">
        <label for="kategorie" class="label">Kategorien</label>
        <div class="control">
            <input class="input" type="text" name="kategorie" id="kategorie" value="{{$contents->kategorie}}">
        </div>
    </div>
    <div class="buttons">
        <input value="Speichern" class="button button-primary" type="submit">
        <a href="{{url('admin/blogs')}}" class="button">Verwerfen</a>
        <a href="{{url('admin/status',$contents->id)}}" class="button button-secondary">
            {{$contents->visible ? 'Verstecken' : 'Veröffentlichen'}}
        </a>
    </div>
</form>
<script>
    CKEDITOR.replace('contents');
</script>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
@endsection
