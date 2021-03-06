@extends('layouts.administration') @section('title')
{{$contents->title}} bearbeiten
@endsection

@section('script')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
<form action="{{ url('admin/update',$contents->id)}}" method="post">
    @csrf
    <input type="hidden" name="mainImage" id="imageID" value="{{$contents->mainImage}}">
    <div class="field">
        <label class="label" for="title">Überschrift</label>
        <div class="control">
            <input autocomplete="false" class="input" type="text" placeholder="Überschrift" value="{{$contents->title}}"
                name="title" id="title">
        </div>
    </div>
    <div class="field">
    <label class="label" for="description">Kurzbeschreibung</label>
    <div class="control">
    	<input autocomplete="false" class="input" type="text" id="description" value="{{$contents->description}}" name="description" maxlength="255">
    </div>
    </div>
    
    <div class="field">
        <label for="contents" class="label">Inhalt</label>
        <div class="control">
            <textarea name="contents" class="textarea" placeholder="Textarea"
                id="contents">{{$contents->contents}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            <div class="field">
                <label for="tags" class="label">Tags</label>
                <div class="control">
                    <input class="input" type="text" name="tags" id="tags"
                        value="@forelse ($contents->Tags as $tags){{$tags->tag}}, @empty @endforelse">
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="field">
                <label for="kategorie" class="label">Kategorien</label>
                <div class="control">
                    <input class="input" type="text" name="kategorie" id="kategorie"
                        value="@forelse ($contents->categories as $tags){{$tags->name}}, @empty @endforelse">
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="field">
                <label for="artikelbild" class="label">Artikelbild</label>
                <div class="control">
                    @if ($contents->mainImage == null)
                    Kein Artikelbild
                    <span id="previewImag"></span>
                    @else
                    <span id="previewImag">
                        <img src="{{asset('storage/thumbnail/tiny_'.$contents->mainImagePath->filename)}}"
                            alt="Upload by User">
                    </span>
                    @endif
                    <div class="row">
                        <a href="#modal" class="imageBrowser button open-modal">Artikelbild</a>
                    </div>
                </div>
            </div>
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
