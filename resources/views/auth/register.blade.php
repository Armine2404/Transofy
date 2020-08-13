@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="https://crmitservice.com/transofy/assets/images/login-logo.png" />
            <div class="text-right">
                <button class="btn btn-lg font-weight-bold " style="background:blue;color:white;"><i
                        class="fas fa-user"></i> SIGN
                    UP</button>
            </div>

            <div class="card" style="border-top:8px solid blue">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <label for="name" class="font-weight-light">{{ __('Name') }}</label>

                                <input id="name" type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <label for="email" class="font-weight-light">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control  form-control-lg  @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <label for="password" class="font-weight-light">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control  form-control-lg @error('password') is-invalid @enderror"
                                    name="password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                                <label for="password-confirm"
                                    class="font-weight-light">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control form-control-lg"
                                    name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                            <div class="col-sm-4 ml-auto">
                                <button type="submit" class="btn btn-success  btn-lg visible-xs mt-lg">Sign
                                    Up</button>
                            </div>
                    </form>
                    <div class="d-flex">
                        <hr style="width:180px">OR
                        <hr  style="width:180px">
                    </div>
                    <p class="text-center">Already have an account? <a href="/login"
                            style="color: #1B71A7;">Sign In!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection