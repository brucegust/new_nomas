@extends('layouts.auth')

@section('title') Login @endsection

@section('content')
    <div class="row w-100">
        <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label class="label">Email</label>
                        <div class="input-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:95%;">
                            @error('email')
                            <span class="invalid-feedback" role="alert"
                            <strong>{{ $message }}</strong><br><br>
                            </span>
                            @enderror
                        </div><br>
                    </div>
                    <div class="form-group">
                        <label class="label">Password</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*********">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary submit-btn btn-block">Login</button>
                    </div>
                </form>
                <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
                <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="{{ route('register') }}" class=""text-black text-small">Create new account</a>
                </div>
            </div>
        </div>
    </div>
    @endsection