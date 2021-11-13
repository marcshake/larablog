@extends('admin.administration')
@section('title')
    {{ __('List of Blogs') }}
@endsection
@section('contents')
    <table class="table is-striped is-hoverable">
        <thead>
            <tr>
                <th>{{ __('number') }}</th>
                <th>{{ __('date') }}</th>
                <th>{{ __('entrytitle') }}</th>
                <th>{{ __('author') }}</th>
                <th>{{ __('tags') }}</th>
                <th>{{ __('categories') }}</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->created_at->formatLocalized('%d.%m.%Y') }}
                        @if ($item->visible == 0)
                            <span class="tag is-light">{{ __('draft') }}</span>
                        @endif

                    </td>
                    <td>
                        <a href="{{ url('admin/edit', $item->id) }}">
                            {{ $item->title }}
                        </a>
                        <span class="subaction">
                            <a href="{{ url('admin/delete', $item->id) }}">Löschen</a>
                            <a target="_blank" href="{{ url('preview/' . $item->url, $item->id) }}">{{ __('preview') }}</a>
                            <a href="{{ url('admin/status', $item->id) }}">
                                {{ $item->visible ? __('hide') : __('publish') }}
                            </a>

                        </span>
                    </td>
                    <td>{{ $item->authorname->name }}</td>
                    <td>
                        @forelse ($item->Tags as $tags)
                            <span class="tag">{{ $tags->tag }}</span>
                        @empty

                        @endforelse
                    </td>
                    <td>
                        @forelse ($item->categories as $cats)
                            <span class="tag">{{ $cats->name }}</span>
                        @empty

                        @endforelse


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $collection->links() }}
@endsection
