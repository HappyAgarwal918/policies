@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
@endsection

@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Testimonial</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Don’t just take our words. See what our customers are saying.</div>
                <div class="row-subtitle">Read honest reviews straight from our customers to see why over 100,000 websites and apps use and rely on our trusted legal agreements.</div>
                <div class="row-title"><a href="{{route('create')}}" class="ybtn ybtn-accent-color">GET STARTED</a></div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
	
</div>
<div id="articles" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="message2" class="container-fluid message-area normal-bg boxed">
				    <div class="container">
				        <div class="row">
				            <div class="col-sm-12 col-lg-6">
				                <div class="text-other-color1">Ready to Get Started?</div>
				                <div class="text-other-color2">It takes only a few minutes to create legal agreements for your website or mobile app. No credit card required.</div>
				            </div>
				            <div class="col-sm-12 col-lg-6">
				                <div class="buttons-holder">
				                    <a href="{{route('create')}}" class="ybtn ybtn-accent-color">GET STARTED</a>
				                    <a href="{{route('contact_us')}}" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
           	</div>
        </div>
    </div>
</div>
@endsection