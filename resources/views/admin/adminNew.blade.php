@extends('layouts.administration')

@section('script')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

@section('title')
Neuen Eintrag anlegen
@endsection

<form action="{{ url('admin/save')}}" method="post">
    @csrf
    <div class="field">
        <label class="label" for="title">Überschrift</label>
        <div class="control">
            <input class="input" type="text" placeholder="Überschrift" value="" name="title" autocomplete="false"
                id="title">
        </div>
    </div>
    <div class="field">
        <label for="contents" class="label">Inhalt</label>
        <div class="control">
            <textarea name="contents" class="textarea" placeholder="Textarea" id="contents"></textarea>
        </div>
    </div>
    <div class="field">
        <label for="tags" class="label">Tags</label>
        <div class="control">
            <input class="input" type="text" name="tags" id="tags" value="">
        </div>
    </div>
    <div class="field">
        <label for="kategorie" class="label">Kategorien</label>
        <div class="control">
            <input class="input" type="text" name="kategorie" id="kategorie" value="">
        </div>
    </div>
    <div class="buttons">
        <input value="Speichern" class="button button-primary" type="submit">
        <a href="{{url('admin/blogs')}}" class="button">Verwerfen</a>

    </div>
</form>
<script>
   CKEDITOR.config.allowedContent = true;
   CKEDITOR.replace('contents');
</script>
@endsection
