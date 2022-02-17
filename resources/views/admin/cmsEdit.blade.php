@extends('admin.administration')
@section('title')
    {{ __('Edit File') }}
@endsection

@section('contents')
    <form action="{{ url('admin/cms/edit', $page->id) }}" method="post">
        @csrf

        <div class="row">
            <div class="three columns">
                <label for="filename">
                    {{ __('filename') }}
                </label>

            </div>
            <div class="five columns">
                <input type="text" id="filename" class="u-full-width" name="filename"
                    value="{{ $page->filename ?? time() }}">
            </div>
            <div class="one column">
                <label for="hide">{{ __('hidden') }}</label>
                <input type="checkbox" name="hidden" id="hide" />
            </div>
        </div>
        <div class="row">
            <div class="three columns">
                <label for="title">
                    {{ __('title') }}
                </label>
            </div>
            <div class="six columns">
                <input type="text" id="title" class="u-full-width" name="title" value="{{ $page->title ?? 'unnamed' }}">
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
                <textarea name="contents" id="contents" cols="80" rows="25">{{ $page->contents }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <input class="button button-primary" type="submit" value="{{__('save')}}">

            </div>
            <div class="six columns">
                <a href="{{url('admin/cms')}}" class="button">{{__('cms')}}</a>
            </div>

        </div>


    </form>
@endsection
