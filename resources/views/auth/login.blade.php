@extends('layouts.app')

@section('content')

    <h2>Admin Login</h2>
        <form class="pt-5" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                <i class="mdi mdi-account"></i>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <i class="mdi mdi-eye"></i>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="mt-5">
                <button class="btn btn-block btn-success btn-lg font-weight-medium" type="submit">{{ __('Login') }}</button>
            </div>
            <div class="mt-3 text-center">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="mt-2 text-center">
                <a href="{{ route('register') }}" class="auth-link text-black">Create new account <span class="font-weight-medium">Sign up</span></a>
            </div>
        </form>

@endsection
