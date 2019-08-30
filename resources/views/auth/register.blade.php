@extends('layouts.app')

@section('content')
    <h2>Register</h2>
        <form class="pt-4" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
                <i class="mdi mdi-account"></i>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                <i class="mdi mdi-eye"></i>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <i class="mdi mdi-eye"></i>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                <i class="mdi mdi-eye"></i>
            </div>
            <div class="mt-5">
                <button class="btn btn-block btn-success btn-lg font-weight-medium" type="submit">{{ __('Register') }}</button>
            </div>
            <div class="mt-2 text-center">
                <a href="{{ route('login') }}" class="auth-link text-black">Already have an account? <span class="font-weight-medium">Sign in</span></a>
            </div>
    </form>
@endsection
