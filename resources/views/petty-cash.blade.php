@extends('layouts.master')

@section('title', 'Petty Cash')

@section('content')

        @include('layouts.header')

        <!-- main page content -->
        <div class="main-container container col-lg-6 col-md-12">

            <!-- wallet balance -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col align-self-center">
                            <h4 class="mb-0">Petty Cash</h4>
                        </div>
                        <div class="col-auto">
                            <p class="text-muted"></span></p>
                        </div>
                    </div>
                </div>
                <div class="card theme-bg text-white border-0 text-center">
                    <div class="card-body">
                        <h1 class="display-1 my-2">Rp <span class="currency">{{$balance_in_idr}}</span>
                            </h1>
                        <p class="text-muted mb-2">is the current value of your <span class="currency">{{$balance}}</span> sats now.</p>
                        <div class="mt-4 mb-3">
                            <a href="{{url('')."/".$inkey."/receive-sats"}}" class="btn btn-44 btn-default shadow-sm ms-1 border-white">
                                <i class="bi bi-arrow-down-left-circle"></i>
                            </a>
                            <a href="{{url('')."/".$inkey."/send-sats"}}" class="btn btn-44 btn-default shadow-sm ms-1 border-white">
                                <i class="bi bi-arrow-up-right-circle"></i>
                            </a>
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