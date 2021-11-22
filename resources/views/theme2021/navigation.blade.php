<div class="dark">
    <div class="container">
        <nav class="navbar navigation">
            @if ($MAINMENU)

            @else
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="nav-item"><a href="/blog"><span class="nav-link">Blog</span></a></li>
                    <li class="nav-item"><a href="/category/Lifestyle"><span
                                class="nav-link">Lifestyle</span></a></li>
                    <li class="nav-item"><a href="/category/politik"><span class="nav-link">Politik</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/music">Musik</a></li>
                    <li class="nav-item"><a href="/category/linux"><span class="nav-link">Linux</span></a>
                    </li>
                </ul>
            @endif
            {!! $MAINMENU !!}
        </nav>
    </div>
</div>
