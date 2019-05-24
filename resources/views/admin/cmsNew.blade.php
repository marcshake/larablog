@extends('layouts.administration')
@section('script')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
<form action="{{ url('admin/cms/new')}}" method="post">
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
        <label class="label" for="title">Überschrift</label>
        <div class="control">
            <input autocomplete="false" class="input" type="text" placeholder="Überschrift" name="title" id="title">
        </div>
    </div>
    <div class="field">
        <label class="label" for="title">Dateiname</label>
        <div class="control">
            <input autocomplete="false" class="input" type="text" placeholder="Überschrift"
                name="filename" id="filename">
        </div>
    </div>

    <div class="field">
        <label for="contents" class="label">Inhalt</label>
        <div class="control">
            <textarea name="contents" class="textarea" placeholder="Textarea"
                id="contents"></textarea>
        </div>
    </div>
    <div class="buttons">
        <input value="Speichern" class="button button-primary" type="submit">
        <a href="{{url('admin/cms')}}" class="button">Verwerfen</a>
    </div>
</form>

<script>
    CKEDITOR.config.contentsCss = "{{asset('css/admin.css')}}";
       CKEDITOR.config.allowedContent = true;
       CKEDITOR.replace('contents');
</script>
@endsection
