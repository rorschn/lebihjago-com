@extends('layouts.master')

@section('title', 'Home')
@section('data-type', "dashboard")

@section('content')

        @include('layouts.header')

        <!-- main page content -->
        <div class="main-container container col-lg-6 col-md-12">            
            <!-- welcome user -->
            <div class="row mb-4">
                <div class="col-auto">
                    <div class="avatar avatar-50 shadow rounded-10">

                        <img src="https://www.gravatar.com/avatar/{{md5( strtolower( trim( Auth::user()->email ) ) )}}" alt="">
                    </div>
                </div>
                <div class="col align-self-center ps-0">
                    <h4 class="text-color-theme">{{ Auth::user()->name }}</h4>
                    <p class="text-muted mb-1">Made unrealized Rp 8,850,000 profit so far <a href="#" id="profit-toggle">►</a></p>
                    <ul id="profit-breakdown" class="text-muted small mb-0">
                        <li>Petty Cash: Rp 100,000</li>
                        <li>📱 iPhone 15: Rp 7,650,000</li>
                        <li>🏍️ Motorcycle: Rp 1,200,000</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col align-self-center click" >
                            <div class="row mb-0">
                                <div class="col">
                                    <p class="text-muted mb-0 strong"><strong>Petty Cash</strong></p>
                                    <p class="mb-0 small">
                                        <span>Rp 440,000</span>  in ₿ (100,000 sats)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="petty-cash.html" class="stretched-link"></a>
                </div>
            </div>

            <!-- Saving targets -->
            <div class="row mb-4">
                <h6 class="title mb-3">Stacking Sats to Reach My Dreams</h6>
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogresstwo"></div>
                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                            <span class="small">93%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0 click" >
                                    <div class="row mb-0">
                                        <div class="col">
                                            <p class="text-muted mb-0 strong"><strong>📱 iPhone 15</strong></p>
                                            <p class="mb-0 small">
                                                <span class="small">Rp</span> 14,000,000 in ₿ 
                                                <span class="text-muted">from <span class="small">Rp</span> 6,350,000 💵</span>
                                                (<strong style="color: green;">120%</strong>)
                                            </p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <p class="small text-muted mb-0">🎯 15 mil</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="a-dream.html" class="stretched-link"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressone"></div>
                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                            <span class="small">11%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <div class="row mb-0">
                                        <div class="col">
                                            <p class="text-muted mb-0 strong"><strong>🏍️ Motorcycle</strong></p>
                                            <p class="mb-0 small">
                                                <span class="small">Rp</span> 2,200,000 in ₿ 
                                                <span class="text-muted">from <span class="small">Rp</span> 1,000,000 💵</span>
                                                (<strong style="color: green;">120%</strong>)
                                            </p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <p class="small text-muted mb-0">🎯 20 mil</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="{{ url('dreams/create') }}" class="stretched-link"></a>
                            <div class="row">
                                <div class="col align-self-center click" >
                                    <div class="row mb-0">
                                        <p class="text-center text-muted">
                                            ✨ click me, to add your dream ✨
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- smart DCA guidance -->
            <div class="row mb-3">
                <h6 class="title mb-3">Is It Good to Buy Sats Now?</h6>
                <div class="col-12">
                    <div class="card bg-textbox">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6>Yes! Coz' there won't be a <span class="text-danger">Mihal Pobul</span> mountain in the near future.</h6>
                                    <p class="size-12 text-muted">
                                        <strong class="text-danger">Mihal</strong> = mid-halving (a period between the 4-year cycle events of bitcoin mining reward half cut). 
                                        <strong class="text-danger">Pobul</strong> = post-bullrun (bullrun is a prolonged significant price increase).
                                    </p>
                                    <img src="assets/img/ayamjago/mihal-pobull.png" alt="" class="mw-100 mb-3">
                                    <h6 class="mt-2">Will bitcoin price keeps increasing, despite of these Mihal Pobul mountains?</h6>
                                    <p class="size-12 text-muted">
                                        Yes it will. Because price is defined by supply & demand. And bitcoin has some unique supply & demand characteristics. <a href="#" id="mihal-pobul-explanation" class="text-primary"><strong>Click to read more</strong>.</a>
                                    </p>
                                    <div id="mihal-pobul-explanation-text">
                                        <p id="test" class="size-12 text-muted">
                                            The value proposition of bitcoin is its fixed-predictable amount & eternally unchangeable monetary policy, unlike the government-issued monies we use & other crypto currencies. Thus, bitcoin owners tend to save their bitcoin, since it'll increase their investment profit. This 'hoarding' behavior creates stable demand & protects bitcoin from sudden supply increase (which will crash the price).
                                        </p>
                                        <p class="size-12 text-muted">
                                            Another fact related to its supply: Every 10 minutes, there'll be a fixed amount of new bitcoin coming to circulation as a reward for miners. Every 4 years, this amount is cut into halves. This predictable yet sudden reduce creates a supply shock, which will increases bitcoin price.
                                        </p>
                                        <p class="size-12 text-muted">
                                            This halving-triggered 4-years-cycle price increase attract some no-coiners (crypto-currency's virgin) to take some risk buying this leaderless money named bitcoin. The buys increases the price more, which'll attract more no-coiners to buy. The price increases even more & the cycle continues. Soon, a Mihal Pobul mountain started to build, which the peak(s) will eventually crash when you have no more new buyers. For a new buyer, the Mihal Pobul mountain is a risky time to buy bitcoin. An investment lost is guaranteed for couple of years.
                                        </p>
                                        <p class="size-12 text-muted">
                                            Some percentage of these new bitcoin buyers swallow the orange-pill (a fancy phrase for 'learning the disastrous effects of the fiat currency system we're using now'). Equipped with this understanding, they keep their bitcoin despite of its recent significant lost & start to routinely buy some sats (bitcoin's fraction) after receiving their paycheck. A new stable demand for bitcoin onboarded! For those who missed the orange-pill (either as pure no-coiner or alt-coiners), they'll have their next chance in the next 4 years.
                                        </p>
                                        <p class="size-12 text-muted">
                                            Because of the increasing demand (no one can un-swallow the orange-pill a.k.a. go back supporting fiat after understanding the problems it brings) & the decreasing supply (the steadily mining rewards cuts into halves), <strong>bitcoin price will keep increasing</strong>. However, as long as the majority of the world citizen still don't have a clue about the problems fiat money brings and understand bitcoin, a post-halving bullrun with its followup crash (a Mihal Pobul mountain) will still be exist. We will keep you updated when it's no longer the case.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assurance of safety -->
            <div class="row mb-3">
                <h6 class="title mb-3">Is It Save to Store my Sats Here?</h6>
                <div class="col-12">
                    <div class="card bg-textbox">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6>Yes. It's waaay safer than an exchange.</h6>
                                    <p class="size-12 text-muted">
                                        If you buy some sats from an exchange, you'll just get a number on a screen. There's no way to verify your bitcoin in their custody. Exchange is just one step closer to be a bank that Satoshi Nakamoto fight. No wonder fraud cases like the FTX are still happening. 
                                    </p>
                                    <p class="size-12 text-muted">
                                        Our LN technology can be easily veriy by sending / receiving some sats to another LN wallet. The communication & transaction won't be settled if this app is not using Lightning Network.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- main page content ends -->

        @include('layouts.install-pwa-toast')

@endsection