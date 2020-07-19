<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{asset('images/tunnelmotionstunnel.mp4')}}" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1>{{$home->title}}</h1>
          <p class="lead mb-0">
            {!!$home->contents!!}

          </p>
        </div>
      </div>
    </div>
  </header>
