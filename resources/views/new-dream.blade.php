@extends('layouts.master')

@section('title', 'New Dream')

@section('content')

        @include('layouts.header')

        <!-- main page content -->
        <div class="main-container container col-lg-6 col-md-12">
            <form method="POST" action="{{ url('dreams') }}" class="was-validated needs-validation" novalidate>
                @csrf

                <div class="row h-100 mb-4">
                    <div class="col-12">
                        <div class="form-group form-floating  mb-3">
                            <input type="text" class="form-control" value="" placeholder="" name="name">
                            <label for="name">Dream's name (tips: start with an emoji)</label>
                        </div>
                    </div>
                    <!-- TO-DO : Make the target rupiah easy to read (1,000,000)  -->
                    <div class="col-12">
                        <div class="form-group form-floating  mb-3">
                            <input type="number" class="form-control" value="" placeholder="" name="target">
                            <label for="target">Dream's price (in IDR)</label>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I'm aware that I CAN NOT WITHDRAW/SEND ALL of the bitcoin I put here if it hasn't reached the price target above. 
                            </label>
                        </div>
                    </div>
                    
    
                    <!-- TO-DO : Add target date feature & calculator -->
                </div>
    
                <div class="row h-100 ">
                    <div class="col-12 mb-4">
                        <button type="submit" class="btn btn-default btn-lg w-100">Create a LN Wallet for this dream</a>
                    </div>
                </div>
            </form>
            <hr>

            <div class="row mb-3">
                <h6 class="title mb-3">Why I can't withdraw before the saving target has reached?</h6>
                <div class="col-12">
                    <div class="card bg-textbox">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6>This restriction is actually our killer feature.</h6>
                                    <p class="size-12 text-muted">
                                        We are using Lightning Network technology, which you can prove it by sending/receiving sats from other wallet. So, your sats is safe here. This app is not a bank. Your sats isn't locked/deposited so that we can lend it to others. Satoshi Nakamoto created bitcoin because of the fragility of credit bubbles created by the banks.
                                    </p>
                                    <p class="size-12 text-muted">
                                        Our goal is to help you reach your dreams, sooner, & safer. Without this restriction, it'll be harder for you to reach your dream. One of the main benefits of bank's loan is the discipline to pay. The bank gives you what you want, then you need to pay back religiously, if you want to avoid 'the negative consequence'. Other planned or unplanned expenses need to wait. It's basically a service for someone who can not save.
                                    </p>
                                    <p class="size-12 text-muted">
                                        With this restriction, you get the best of the two worlds: the discipline of the old banking & the big profit of new banking. Now, you can honestly say to yourself or your friends/family, "sorry, I'm no longer having any money to spare".  
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <h6 class="title mb-3">What if I urgently need my money?</h6>
                <div class="col-12">
                    <div class="card bg-textbox">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6>We advice you to save sats in with the Petty Cash wallet feature</h6>
                                    <p class="size-12 text-muted">
                                        Having a liquid emergency fund is a good financial habit. Some people are even targeting 6 monthes living expense as emergency fund.
                                    </p>
                                    <p class="size-12 text-muted">
                                        You can put some of the emergency fund in the sats (as long as you don't buy it where you're on the Mihal Pobul mountain). We have Petty Cash wallet where there's no limit on sending & receiving. You can quickly sell your sats to Rupiah.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row h-100"></div>

        </div>
        <!-- main page content ends -->

@endsection