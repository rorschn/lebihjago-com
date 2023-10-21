@extends('layouts.master')

@section('title', 'Send sats from '.$name)

@section('content')

        @include('layouts.header')


        <!-- main page content -->
        <div class="main-container container col-lg-6 col-md-12">

            <form method="POST" action="{{ url('send-sats') }}">
                @csrf

                <input type="hidden" name="adminkey" value="{{$adminkey}}">

                @if($is_pc)
                    <input type="hidden" name="is_pc" value="true">
                @else
                    <input type="hidden" name="dream_id" value="{{$dream_id}}">
                @endif

                <div class="row mb-3">
                    <h3 class="title mb-3">Send sats from {{$name}} wallet</h3>
                </div>

                <div class="row h-100 mb-2">

                    <div class="col-12">
                        <div class="form-group form-floating  mb-3">
                            <input type="text" class="form-control" value="" placeholder="" name="lnurl">
                            <label for="lnurl">Paste a payment request or an LNURL</label>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <button type="submit" target="_self" class="btn btn-default btn-lg w-100">Process it</button>
                    </div>
                
                </div>

            </form>

        </div>


@endsection