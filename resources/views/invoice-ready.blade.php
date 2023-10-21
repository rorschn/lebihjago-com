@extends('layouts.master')

@section('title', 'Invoice Code is Ready!')

@section('content')

        @include('layouts.header')

        <div class="main-container container col-lg-6 col-md-12">

            <div class="row mb-3">
                <h3 class="title mb-3">Invoice Code is Ready!</h3>
            </div>

            <h5 class="mb-4">Click the button below to copy the code</h5>

            <button onclick="navigator.clipboard.writeText('{{$payment_request}}')"
                class="btn btn-default btn-lg w-100 mb-4" >
                Click me to copy!
            </button>

            <h5>...then paste it to a wallet which has enough sats.</h5>

        </div>

@endsection