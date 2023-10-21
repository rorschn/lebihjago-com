@extends('layouts.master')

@section('title', 'Login')
@section('data-type', "login")

@section('content')

        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
                <h1 class="mb-4 text-color-theme">Sign in</h1>

                <form method="POST" action="{{ route('login') }}" class="was-validated needs-validation" novalidate>
                    @csrf
                    
                    @error('email')
                        <span class="text-danger small text-left"><strong>{{$message}}</strong></span><br>
                    @enderror
                    <div class="form-group form-floating mb-3 is-valid @error('email') is-invalid @enderror">
                        <input type="text" class="form-control" value="{{old('email')}}" id="email" placeholder="email" name="email">
                        <label class="form-control-label" for="email" value="{{__('Email')}}">email</label>            
                    </div>

                    @error('password')
                        <span class="text-danger small text-left"><strong>{{$message}}</strong></span><br>
                    @enderror
                    <div class="form-group form-floating is-valid @error('email') is-invalid @enderror mb-3">
                        <input type="password" class="form-control " id="password" placeholder="Password" name="password">
                        <label class="form-control-label" for="password">Password</label>
                    </div>
                    <!--<p class="mb-3 text-center">
                        <a href="forgot-password.html" class="">
                            Forgot your password?
                        </a>
                    </p>-->

                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">
                        Sign in
                    </button>
                </form>
                <div class="text-center">
                    <p class="mb-2 text-muted">Don't have account?</p>
                    <a href="{{ route('register') }}" target="_self" class="">
                        Sign up <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
            <!-- <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
                    <div class="col-auto">
                        <p class="text-muted">Or you can continue with </p>
                    </div>
                    <div class="col-auto ps-0">
                        <a href="#" class="p-1"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="p-1"><i class="bi bi-google"></i></a>
                        <a href="#" class="p-1"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
@endsection