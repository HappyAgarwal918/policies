@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <style>
        .invoice_border {
            border-bottom: 5px solid #383ebf;
            
        }
        span.activee {
                background: #28b66e;
                color: white;
                padding: 5px;
                font-size: 0.875rem;
                font-weight: bold;
            }
            span.unpaid {
                background: #f0ad4e;
                color: white;
                padding: 5px;   
                font-size: 0.875rem;
                font-weight: bold;
            }
    </style>
@endsection

@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">View invoice</div>
                    <!-- <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="{{ asset('images/pricing.png')}}" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@php
$id = $_GET['form-id'];
$add = DB::table('address')->first();
$user = DB::table('policy')
        ->leftjoin('billing','policy.newunique','billing.billunique')
        ->leftjoin('payments','policy.newunique','payments.payunique')
        ->leftjoin('price','policy.type','price.policy')
        ->where('unique_id',$id)
        ->first();
@endphp

<div class="container-fluid mt-5">
    <div class="container">
        <a href="{{ route('settings')}}" class="ybtn ybtn-accent-color create_new">Back to Invoice</a>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
<div class="row my-2">
    <div class="row"><div class="col-md-12"><h3>Invoice</h3><span><?php if($user->payment_status == 'succeeded'){echo $user->invoice_id;} ?></span></div>  
    <div class="col-md-6  border-bottom ">
        <h4 class="invoice_border py-2">Seller</h4>
        <p><?php echo $add->seller_company_name; ?></p>
        <p><?php echo $add->seller_address; ?></p>
        <p><?php echo $add->seller_country.' '; echo $add->seller_zip; ?></p>
    </div>    
    <div class="col-md-6  border-bottom">
        <h4 class="invoice_border py-2">Purchaser</h4>
        <p><?php echo $user->first_name.' '; echo $user->last_name; ?></p>
        <p><?php echo $user->address.','; echo $user->city; ?></p>
        <p><?php echo $user->s_id.' '; echo $user->c_id.','; echo $user->zip; ?></p>
    </div>
</div>

<div class="row my-2"><h3 class="my-2">Product details</h3></div>    
<div class="row invoice_border">
    <div class="col-md-6"><h4>Description</h4></div>
    <div class="col-md-2 d-none d-md-block"><h4>Status</h4></div>
    <div class="col-md-2 d-none d-md-block"><h4>Date</h4></div>
    <div class="col-md-2 d-none d-md-block"><h4>Amount</h4></div>
</div>
<div class="row  my-2 border-bottom ">
    <div class="col-md-6"><p>{{$user->policy}} policy</p></div>
    <div class="col-md-2"><span><?php if ($user->payment_status == 'succeeded'){echo '<span class="activee">Paid</span>';}else{echo '<span class="unpaid">Unpaid</span>';} ?></span></div>
    <div class="col-md-2"><p>{{$user->created}}</p></div>
    <div class="col-md-2 "><p><?php if ($user->payment_status == 'succeeded'){echo '$'.$user->amount;}else{echo '$'.$user->deal_price;} ?></p></div>
</div>
<div class="col-md-12 border-bottom text-md-end"><p>Total: <?php if ($user->payment_status == 'succeeded'){echo '$'.$user->amount;}else{echo '$'.$user->deal_price;} ?></p></div>
<div class="row">
    <div class="col-md-12"><h2>Transactions</h2></div>
</div>
<div class="row invoice_border my-2">
    <div class="col-md-6 d-none d-md-block"><h4>Receipt ID </h4></div>
    <div class="col-md-2 d-none d-md-block"><h4>Currency</h4></div>
    <div class="col-md-2 d-none d-md-block"><h4>Date</h4></div>
    <div class="col-md-2 d-none d-md-block"><h4>Amount</h4>
    </div>
</div>
<div class="row  my-2 border-bottom ">
    <div class="col-md-6"><p>{{$user->payment_id}}</p></div>
    <div class="col-md-2"><p>{{$user->currency}}</p></div>
    <div class="col-md-2"><p>{{$user->created_at}}</p></div>
    <div class="col-md-2 text-md-end"><p><?php if ($user->payment_status == 'succeeded'){echo '$'.$user->amount;}else{echo '$'.$user->deal_price;} ?></p></div>
</div>   
</div>
</div>
</div>

@endsection