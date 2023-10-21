@extends('layouts.master')

@section('title', 'New Dream')

@section('content')

        @include('layouts.header')

        <!-- main page content -->
        <div class="main-container container col-lg-6 col-md-12">

            <!-- wallet balance -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col align-self-center">
                            <h4 class="mb-0">{{$name}}</h4>
                        </div>
                        <div class="col-auto">
                            <p class="text-muted">🎯 Rp <span class="currency">{{$target}}</span></p>
                        </div>
                    </div>
                </div>
                <div class="card theme-bg text-white border-0 text-center">
                    <div class="card-body">
                        <h1 class="display-1 my-2">Rp <span class="currency">{{$balance_in_idr}}</span>
                            </h1>
                        <p class="text-muted mb-2">the current value of your <span class="currency">{{$balance}}</span> sats now.</p>
                        <p class="text-muted mb-2">{{100-floor(($balance_in_idr/$target)*100)}}% away to reach the target 🎯 & sell your sats.</p>
                        <div class="mt-4 mb-3">
                            <!-- To do kalkulator
                            <a href="#" id="cal-btn" class="btn btn-44 btn-default shadow-sm ms-1 border-white">
                                <i class="bi bi-calculator-fill"></i>
                            </a>
                            -->
                            <a href="receive-sats.html" class="btn btn-44 btn-default shadow-sm ms-1 border-white">
                                <i class="bi bi-arrow-down-left-circle"></i>
                            </a>
                        </div>
                        <!--
                        <div id="calculator" class="mb-3">
                            to achieve the rest of saving target above on
                            <select class="form-select form-select-sm mt-2 mx-auto" style="width: 100px;">
                                <option selected>Month</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                            <input type="number" id="year" class="form-control mt-2 mb-1 mx-auto" placeholder="year" style="width: 90px;">
                            buy at minimum <span id="cal-result">...</span> sats per day.<br>(based on bitcoin's price history)
                        </div>
                    -->
                    </div>
                </div>
            </div>
            
            <!-- offers banner-->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card shadow-sm text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h1 style="color: green;">Rp <span class="currency">{{$balance_in_idr-$total_idr_saving}}</span></h1>
                                    <p class="size-12 text-muted">
                                        The 120% profit you made. Current bitcoin value (Rp <span class="currency">{{$balance_in_idr}}</span> ) - total rupiah value from each of your bitcoin buyings (Rp <span class="currency">{{$total_idr_saving}}</span>). 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col">
                    <h6 class="title mb-0">Transactions</h6>
                    <p class="text-muted size-12">(the feature is coming soon)</p>
                </div>
            </div>
            
            <!-- Transactions
            <div class="row mb-1">
                <div class="col">
                    <h6 class="title mb-0">Transactions</h6>
                    <p class="text-muted size-12">resulting in 3,500,000 sats</p>
                </div>
                <div class="col-auto" style="text-align: right;">
                    <p class="mb-0">sats</p>
                    <p class="text-muted size-12">rupiah value when you buy</p>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush bg-none">
                        
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn btn-default shadow-sm ms-1 border-white" style="cursor: default;">
                                        <i class="bi bi-arrow-down-left-circle"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="text-color-theme mb-0 small">Memo</p>
                                    <p class="text-muted size-12">2023 August 21</p>
                                </div>
                                <div class="col align-self-center text-end">
                                    <p class="mb-0 small">+20</p>
                                    <p class="text-muted size-12">Rp. 3,000</p>
                                </div>
                            </div>
                        </li>
            
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn btn-default shadow-sm ms-1 border-white" style="cursor: default;">
                                        <i class="bi bi-arrow-down-left-circle"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="text-color-theme mb-0 small">Memo</p>
                                    <p class="text-muted size-12">2023 August 21</p>
                                </div>
                                <div class="col align-self-center text-end">
                                    <p class="mb-0 small">+20</p>
                                    <p class="text-muted size-12">Rp. 3,000</p>
                                </div>
                            </div>
                        </li>
            
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="btn btn-default shadow-sm ms-1 border-white" style="cursor: default;">
                                        <i class="bi bi-arrow-down-left-circle"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="text-color-theme mb-0 small">Memo</p>
                                    <p class="text-muted size-12">2023 August 21</p>
                                </div>
                                <div class="col align-self-center text-end">
                                    <p class="mb-0 small">+20</p>
                                    <p class="text-muted size-12">Rp. 3,000</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row mb-4">
                <p class="text-center pb-3">
                    <a href="#" class="small">Load More</a>
                </p>
            </div>
            -->
            
        </div>
        <!-- main page content ends -->

@endsection

@section('javascript')
<script>
    $( "#calculator" ).hide();
    $( "#cal-btn" ).on( "click", function() {
        $( "#calculator" ).slideToggle( );
        return false;
    });
</script>
@endsection