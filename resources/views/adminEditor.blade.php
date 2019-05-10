@extends('layouts.administration')

@section('content')
<form action="{{ url('admin.save')}}" method="post">
    <div class="field">
        <label class="label" for="title">Überschrift</label>
        <div class="control">
            <input class="input" type="text" placeholder="Überschrift" value="{{$contents->title}}" name="title"
                id="title">
        </div>
    </div>
    <div class="field">
        <label class="label">Inhalt</label>
        <div class="control">
            <textarea class="textarea" placeholder="Textarea" id="contents">{{$contents->contents}}</textarea>
        </div>
    </div>
</form>
<script>CKEDITOR.replace('contents');</script>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
@endsection
