@extends('layouts.master')

@section('title', 'Why LebihJago.com?')
@section('data-type', "welcome")

@section('content')

<a href="{{ url("login")}}" class="skipbtn">Skip</a>

<!-- Swiper -->
<div class="swiper-container introswiper">
    <div class="swiper-wrapper" style="margin-top: 150px;">
        <div class="swiper-slide">
            <div class="row h-100">
                <div class="col-11 col-md-8 col-lg-6 col-xl-4 mx-auto align-self-center text-center">
                    <div class="row">
                        <div class="col-ld-6">
                            <img src="assets/img/intro1.png" alt="" class="mw-100 mx-auto mb-5">
                        </div>
                        <div class="col-ld-6">
                            <h1 class="text-color-theme mb-4">Keep your eye on your budget</h1>
                            <p class="size-18 text-muted">Manage your daily expenses & track your incomes with
                                easy
                                steps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="row h-100">
                <div class="col-11 col-md-8 col-lg-6 col-xl-4 mx-auto align-self-center text-center">
                    <div class="row">
                        <div class="col-ld-6">
                            <img src="assets/img/intro2.png" alt="" class="mw-100 mx-auto mb-5">
                        </div>
                        <div class="col-ld-6">
                            <h1 class="text-color-theme mb-4">Never feel low balance </h1>
                            <p class="size-18 text-muted">Best tracking & Future investment gives idea about
                                expenses risk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="row h-100">
                <div class="col-11 col-md-8 col-lg-6 col-xl-4 mx-auto align-self-center text-center">
                    <div class="row">
                        <div class="col-ld-6">
                            <img src="assets/img/intro3.png" alt="" class="mw-100 mx-auto mb-5">
                        </div>
                        <div class="col-ld-6">
                            <h1 class="text-color-theme mb-4">Ask for money in emergency </h1>
                            <p class="size-18 text-muted">If you really get tie, Its simple to ask for help
                                & support from contacts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination" style="bottom: -1px;"></div>
</div>

@endsection