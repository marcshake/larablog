@extends('admin.administration')

@section('title')
    {{__('All Pages')}}
@endsection

@section('contents')
    <h2>{{__('All Pages')}}</h2>
    @forelse ($collection as $item)
        
    @empty
        {{__('No Pages available')}}
    @endforelse
@endsection