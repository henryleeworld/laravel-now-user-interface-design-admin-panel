@extends('layouts.guest')
@section('content')
<div class="content">
    <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
            <form role="form" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}" />
                <div class="card card-login card-plain">
                    <div class="card-header">
                        <div class="logo-container text-center">
                            <img src="{{ asset('img/now-logo.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                        <div class="input-group no-border form-control-lg {{ $errors->has('email') ? ' has-danger' : '' }}">
                            <span class="input-group-prepend">
                                <div class="input-group-text text-light">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </div>
                            </span>
                            <input id="email" type="email" class="form-control text-light @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="{{ __('Email') }}" required autocomplete="email" autofocus />
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group no-border form-control-lg mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text text-light">
                                    <i class="now-ui-icons objects_key-25"></i>
                                </div>
                            </div>
                            <input id="password" type="password" class="form-control text-light @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password" />
                        </div>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <div class="input-group no-border form-control-lg mt-3 {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text text-light">
                                    <i class="now-ui-icons objects_key-25"></i>
                                </div>
                            </div>
                            <input id="password-confirm" type="password" class="form-control text-light" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password" />
                        </div>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">{{ __('Reset Password') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
