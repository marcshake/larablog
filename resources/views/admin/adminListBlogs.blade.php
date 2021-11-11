@extends('admin.administration')
@section('title')
    {{__('List of Blogs')}}
@endsection
@section('contents')
<table class="table u-full-width">
@foreach ($collection as $item)
    <tr>
        <td><a href="{{url('admin/edit',$item->id)}}">
            {{ $item->title}}
        </a>
    </td>
    </tr>    
@endforeach
</table>

@endsection
