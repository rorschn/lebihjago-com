@extends('layouts.master')

@section('title', 'Register')
@section('data-type', "register")

@section('content')

        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
                <h1 class="mb-4 text-color-theme text-center">Register</h1>

                <form action="{{ route('register') }}" method="POST" class="was-validated">
                    @csrf
                    @error('email')
                        <span class="text-danger small text-left"><strong>{{$message}}</strong></span><br>
                    @enderror
                    <div class="form-floating is-valid @error('email') is-invalid @enderror mb-3">
                        <input type="text" class="form-control" value="{{ old('email') }}"
                            placeholder="Email" id="email" name="email">
                        <label for="email">Email (preferably also registered at gravatar.com)</label>
                    </div>
                    @error('name')
                        <span class="text-danger small text-left"><strong>{{$message}}</strong></span><br>
                    @enderror
                    <div class="form-floating is-valid @error('name') is-invalid @enderror mb-3">
                        <input type="text" class="form-control" value="{{ old('name') }}" placeholder="name"
                            id="name" name="name">
                        <label for="name">Name</label>
                    </div>
                    @error('password')
                        <span class="text-danger small text-left"><strong>{{$message}}</strong></span><br>
                    @enderror
                    <div class="form-floating is-valid @error('password') is-invalid @enderror mb-3">
                        <input type="password" class="form-control" value="" placeholder="Password"
                            id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger small text-left"><strong>{{$message}}</strong></span><br>
                    @enderror
                    <div class="form-floating is-invalid mb-3">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                        <label for="confirmpassword">Confirm Password</label>
                    </div>
                    <p class="mb-3"><span class="text-muted">
                        <strong>Proof-of-concept purpose only!</strong> By clicking on Signup button, you acknowledge that the data will only be .</p>
                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">
                        Sign up
                    </button>
                </form>

                <div class="text-center">
                    <p class="mb-2 text-muted">Already have an account?</p>
                    <a href="{{ route('login') }}" target="_self" class="">
                        Log in <i class="bi bi-arrow-right"></i>
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