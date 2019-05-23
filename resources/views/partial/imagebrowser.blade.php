    @forelse ($collection as $item)
    <div class="u-pull-left">
        <img data-item="{{$item->id}}" class="thumb" src="{{asset('storage/thumbnail/tiny_'.$item->filename)}}" alt="Upload by User">
    </div>
    @empty
    Leider sind noch keine Mediendateien hinterlegt
    {{$collection->links()}}
    @endforelse
