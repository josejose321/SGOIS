@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    <center>
        <div class="card col-md-5 text-white" data-aos="fade-down" style="background-color: rgba(61, 61, 61, 0.95)">
            <center>

                <div class="card-header">
                    <img src="{{ asset('unc-logo.png') }}" class="img-round w-25" alt="">
                </div>
            </center>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control text-light  @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                style="background-color: rgba(61, 61, 61, 0.95)">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control text-light @error('password') is-invalid @enderror" name="password"
                                autocomplete="current-password" style="background-color: rgba(61, 61, 61, 0.95)">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">

                        <div class="col-md-8 offset-md-4">

                            <button type="submit" class="btn btn-danger">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="link link-info" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <center>
                            <a class="link link-info float-left fw-bold" href="{{ url('/') }}"> Go to Homepage</a>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </center>
@endsection
