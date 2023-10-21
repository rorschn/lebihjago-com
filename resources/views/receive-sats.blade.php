@extends('layouts.master')

@section('title', 'Add Sats to '.$name)

@section('content')

        @include('layouts.header')

        <div class="main-container container col-lg-6 col-md-12">

            <div class="row mb-3">
                <h3 class="title mb-3">Add sats to {{$name}} LN wallet</h3>
            </div>
<!--
            <hr class="mb-4">

            <h5 class="mb-4">1. Move in your Petty Cash wallet sats</h5>

            <div class="row h-100 mb-2">
                <div class="col-12">
                    <div class="form-group form-floating  mb-3">
                        <input type="number" class="form-control" value="" placeholder="" id="amount">
                        <label for="amount">Amount expected (in sats)</label>
                    </div>
                </div>                
            </div>

            <div class="row h-100 ">
                <div class="col-12 mb-4">
                    <a href="settings.html" target="_self" class="btn btn-default btn-lg w-100">Move it here</a>
                </div>
            </div>

            <hr class="mb-4">

            <h5 class="mb-4">2. Buy with QRIS</h5>

            <div class="row h-100 mb-2">
                <div class="col-auto">
                    <p>Buy some sats from this <a href="https://btcln.app/atm/">this ATM</a>.</p>

                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="https://btcln.app/atm/" class="stretched-link"></a>
                            <img src="{{ asset('/img/ayamjago/btcln.app.png') }}" alt="" style="width:100%;"> 
                        </div>
                    </div>

                    <p>Copy the LNRUL after the buy</p>

                    <div class="card mb-3">
                        <div class="card-body">
                            <img src="{{ asset('/img/ayamjago/btcln.copylnrul.png') }}" alt="" style="width:100%;"> 
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group form-floating  mb-3">
                            <input type="text" class="form-control" value="" placeholder="" id="lnurl">
                            <label for="lnurl">Paste the LNURL here</label>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <a href="settings.html" target="_self" class="btn btn-default btn-lg w-100">Withdraw the sats you bought from this LNURL</a>
                    </div>
                </div>
            </div>

            <hr class="mb-4">
        -->
            <h5 class="mb-4">Create an invoice (money request)</h5>

            <form method="POST" action="{{ url('create-invoice') }}">
                @csrf

                <input type="hidden" name="inkey" value="{{$inkey}}">

                <div class="row h-100 mb-2">
                    <div class="col-12">
                        <div class="form-group form-floating  mb-3">
                            <input type="number" class="form-control" value="" placeholder="" name="amount">
                            <label for="amount">Amount (in sats)</label>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group form-floating  mb-3">
                            <input type="text" class="form-control" value="" placeholder="" name="memo">
                            <label for="memo">Memo</label>
                        </div>
                    </div>
                    
                </div>
    
                <div class="row h-100 ">
                    <div class="col-12 mb-4">
                        <button type="submit" class="btn btn-default btn-lg w-100">Create an invoice code to receive sats from an LN wallet</button>
                    </div>
                </div>
            </form>

            <hr class="mb-4">

        </div>
        <!-- main page content ends -->

@endsection