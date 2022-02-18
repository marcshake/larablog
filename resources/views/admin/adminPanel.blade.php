@extends('admin.administration')
@section('title')
    {{ __('administration') }}
@endsection
@section('contents')

<p>
        {{ __('new blog entry') }}</p>

    <form action="{{ url('admin/update') }}" method="post">
        @csrf
        <div class="field">
            <label class="label" for="title">{{ __('headline') }}</label>
            <div class="control">
                <input autocomplete="false" class="input u-full-width" type="text" placeholder="{{ __('headline') }}"
                    value="" name="title" id="title">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">{{ __('shortdescription') }}</label>
            <div class="control">
                <input autocomplete="false" class="input u-full-width" type="text" id="description" value=""
                    name="description" maxlength="255">
            </div>
        </div>

        <div class="field">
            <label for="contents" class="label">{{ __('Contents') }}</label>
            <div class="control editor">
                <textarea name="contents" class="u-full-width editor" placeholder="Textarea" id="contents"></textarea>
            </div>


            <div class="buttons">
                <input value="{{ __('save article') }}" class="button button-primary" type="submit">
                <a href="{{ url('admin/blogs') }}" class="button">{{ __('cancel') }}</a>
            </div>
    </form>


    <p>{{ __('statistics') }}</p>


@endsection
