@extends('layouts.administration')

@section('content')


<form action="{{ url('admin/save')}}" method="post">
    @csrf
    <div class="field">
        <label class="label" for="title">Überschrift</label>
        <div class="control">
            <input class="input" type="text" placeholder="Überschrift" value="" name="title"
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
    CKEDITOR.replace('contents');
</script>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
@endsection
