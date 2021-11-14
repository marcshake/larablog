@extends('admin.administration')

@section('title')
{{$contents->title}}
@endsection

@section('contents')
<form action="{{ url('admin/update',$contents->id)}}" method="post">
    @csrf
    <input type="hidden" name="mainImage" id="imageID" value="{{$contents->mainImage}}">
    <div class="field">
        <label class="label" for="title">{{__('headline')}}</label>
        <div class="control">
            <input autocomplete="false" class="input u-full-width" type="text" placeholder="{{__('headline')}}" value="{{$contents->title}}" name="title" id="title">
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">{{__('shortdescription')}}</label>
        <div class="control">
            <input autocomplete="false" class="input u-full-width" type="text" id="description" value="{{$contents->description}}" name="description" maxlength="255">
        </div>
    </div>

    <div class="field">
        <label for="contents" class="label">{{__('Contents')}}</label>
        <div class="control editor">

            <textarea name="contents" class="u-full-width" placeholder="Textarea" id="contents">{{$contents->contentsmd}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            <div class="field">
                <label for="tags" class="label">{{__('tags')}}</label>
                <div class="control">
                    <input class="input u-full-width" type="text" name="tags" id="tags" value="@forelse ($contents->Tags as $tags){{$tags->tag}}, @empty @endforelse">
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="field">
                <label for="kategorie" class="label">{{__('categories')}}</label>
                <div class="control">
                    <input class="input u-full-width" type="text" name="kategorie" id="kategorie" value="@forelse ($contents->categories as $tags){{$tags->name}}, @empty @endforelse">
                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="field">
                <label for="artikelbild" class="label">{{__('article image')}}</label>
                <div class="control">
                    @if ($contents->mainImage == null)
                    {{__('no image set')}}
                    <span id="previewImag"></span>
                    @else
                    <span id="previewImag">
                        <img src="{{asset('storage/thumbnail/tiny_'.$contents->mainImagePath->filename)}}" alt="Upload by User">
                    </span>
                    @endif
                    <div class="row">
                        <a href="#modal" class="imageBrowser button open-modal">{{__('Select Image')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <input value="{{__('save article')}}" class="button button-primary" type="submit">
        <a href="{{url('admin/blogs')}}" class="button">{{__('cancel')}}</a>
    </div>
</form>


@endsection