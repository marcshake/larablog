    @forelse ($collection as $item)
    <div class="u-pull-left">
        <img data-item="{{$item->id}}" class="thumb" src="{{asset('storage/thumbnail/tiny_'.$item->filename)}}" alt="{{$item->filename}}">
    </div>
    @empty
    Leider sind noch keine Mediendateien hinterlegt
    {{$collection->links()}}
    @endforelse
