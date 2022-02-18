@extends('admin.administration')

@section('title')
    {{ __('All Pages') }}
@endsection

@section('contents')
    <h2>{{ __('All Pages') }}</h2>
    <table class="u-full-width">
        <thead>
            <tr>
                <th>{{ __('title') }}</th>
                <th>{{ __('filename') }}</th>
                <th colspan="2">
                    {{ __('actions') }}
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($collection as $item)
                <tr>
                    <td>
                        {{ $item->title }}
                    </td>
                    <td>
                        {{ $item->filename }}
                    </td>
                    <td>
                        <a href="{{ url('admin/cms/edit', $item->id) }}">{{ __('edit') }}</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/cms/delete', $item->id) }}">{{ __('delete') }}</a>
                    </td>
                </tr>
            @empty
        </tbody>
    </table>
    {{ __('No Pages available') }}
    @endforelse
@endsection
