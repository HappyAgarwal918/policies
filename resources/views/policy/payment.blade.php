@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/card.css') }}" />
@endsection

@section('content')

@php 
$id = $_GET['form-id'];
$a = DB::table('policy')->where('unique_id', $id)->first();
$price = DB::table('billing')
->join('policy','policy.newunique','billing.billunique')
->join('price','policy.type','price.policy')
->where('policy.unique_id', $id)->first();
$stripe = DB::table('stripe')->where('id', 1)->first();
@endphp

<div id="header-holder" class="inner-header">
  <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Payment</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container col-xl-6 text-center">
        <div class="card">
            <div class="card-body">
        <form action="{{ url('charge') }}" method="post" id="payment-form">
            <div class="row">
                <div class="mb-3 col-md-12">
                    <h3>Legal Policies</h3>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="{{$price->deal_price}}" readonly="readonly" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{$a->email}}" readonly="readonly" />
                </div>
            </div>
            <div class="mb-3 d-none">
                <label for="exampleInputEmail1" class="form-label">newunique</label>
                <input type="text" name="newunique" class="form-control" placeholder="Enter newunique" value="{{$a->newunique}}" readonly="readonly" />
            </div>
            <div class="mb-3">
            <label for="card-element">Credit or debit card</label>
            <div id="card-element"><!-- A Stripe Element will be inserted here. --></div>
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>
            <div class="mb-3 mt-5">
            <button class="button ybtn ybtn-header-color">Submit Payment</button>
            {{ csrf_field() }}
        </div>
        </form>
    </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://js.stripe.com/v3/"></script>
<script>
var publishable_key = "{{$stripe->values}}";
</script>
<script src="{{ asset('asset/js/card.js') }}"></script>
@endsection