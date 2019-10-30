<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Neueste Beiträge</h3>
    </div>
    <div class="card-body">
            @forelse ($allposts as $blog)
<a href="{{url('blog/'.$blog->url,$blog->id)}}">
                    {{$blog->title}}
                </a> <br/>

            @empty
            <li>Keine Beiträge</li>
            @endforelse
        </ul>
    </div>
</div>
<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Tags</h3>
    </div>
    <div class="card-body">
            @forelse ($alltags as $tag)
            <a class="tag is-dark" href="{{url('tag',$tag->tag)}}">
                    {{$tag->tag}}
                </a>

            @empty

            @endforelse

    </div>
</div>

