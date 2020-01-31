@forelse ($comments as $item)

    <div class="row" style="border-top:1px solid #aaa">
        <div class="six columns">{{$item->name}}</div>
        <div class="six columns">...</div>
    </div>
    <div class="row">
        <div class="twelve columns">
            {{$item->comment}}
        </div>
    </div>

@empty
    Keine Kommentare
@endforelse
