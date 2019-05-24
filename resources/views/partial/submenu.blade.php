    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Neueste Beiträge</h3>
        </div>
        <div class="card-body">
            <ul>
                @forelse ($blogposts as $blog)
                <a href="{{url('blog/'.$blog->title,$blog->id)}}">
                    {{$blog->title}}
                </a>

                @empty
                <li>Keine Beiträge</li>
                @endforelse
            </ul>
        </div>
    </div>
