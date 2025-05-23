@extends('layouts.guest')
@section('content')
<div class="content">
    <div class="container">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-9">
                                <p class="text-lead text-light mt-3 mb-0">
                                    @if (!\Schema::hasTable((new \App\Models\User)->getTable()))
                                    <div class="alert alert-danger fade show" role="alert">
                                        {{ __('You did not run the migrations and seeders! The login information will not be available!') }}
                                    </div>
                                    @endif
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-auto mr-auto">
            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card card-login card-plain">
                    <div class="card-header">
                        <div class="logo-container text-center">
                            <img src="{{ asset('img/now-logo.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="input-group no-border form-control-lg {{ $errors->has('email') ? ' has-danger' : '' }}">
                            <span class="input-group-prepend">
                                <div class="input-group-text text-light">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </div>
                            </span>
                            <input class="form-control text-light @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        </div>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <div class="input-group no-border form-control-lg {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text text-light">
                                    <i class="now-ui-icons objects_key-25"></i>
                                </div>
                            </div>
                            <input placeholder="{{ __('Password') }}" class="form-control text-light @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" type="password" required autocomplete="current-password" />
                        </div>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">{{ __('Get Started') }}</button>
                        <div class="pull-left">
                            <h6>
                                <a href="{{ route('register') }}" class="link footer-link">{{ __('Create Account') }}</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Forgot Password?') }}</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
