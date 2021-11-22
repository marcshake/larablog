@extends('theme2021.layout')
@section('title')
    Einloggen
@endsection

@section('contents')
    <div class="container contentsbg">
        <div class="content">
            <h1>Login?</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf


                <label for="email" class="u-full-width">{{ __('E-Mail Address') }}</label>


                <input id="email" type="email" class="u-full-width @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password" class="u-full-width">{{ __('Password') }}</label>

                <input id="password" type="password" class="u-full-width @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>

                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
    @endsection
