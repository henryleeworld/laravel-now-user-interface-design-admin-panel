@extends('layouts.guest')
@section('content')
<div class="content">
    <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
            <form role="form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="card card-login card-plain">
                    <div class="card-header">
                        <div class="logo-container">
                            <img src="{{ asset('assets/img/now-logo.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                        <div class="input-group no-border form-control-lg mt-5 {{ $errors->has('email') ? ' has-danger' : '' }}">
                            <span class="input-group-prepend">
                                <div class="input-group-text text-light">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </div>
                            </span>
                            <input id="email" type="email" class="form-control text-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autocomplete="email" autofocus />
                        </div>
                        @error('email')
                        <span style="display: block;" class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
