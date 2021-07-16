<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/NewLogo.svg')}}" height="64" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @if ($MAINMENU)

            {!! $MAINMENU !!}
            @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ueber-mich">Über mich</a>
                </li>

            </ul>
            @endif
            <form class="form-inline my-2 my-lg-0" method="post" action="{{url('search')}}">
                @csrf

                <input class="form-control mr-sm-2" type="search" placeholder="Suche" aria-label="Suche"
                       name="Suchbegriff">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
            </form>
        </div>
    </div>
</nav>
