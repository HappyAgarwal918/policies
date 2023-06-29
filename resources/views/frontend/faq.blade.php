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
                    <div class="page-title">Affiliate program FAQ</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="articles" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<h3>Does it cost me anything to become an affiliate?</h3>
                <p>The program is free to join, there are no monthly charges and no minimum sales requirements.</p>
                <h3>I operate multiple websites, can I still participate in the affiliate program?</h3>
                <p>Yes. You're welcome to promote Legal Policies across all of your websites. The more links and banners you place on your websites, the more qualified leads you're likely to send us and this should translate into a higher conversion.</p>
                <h3>Where can I use the affiliate banners and link?</h3>
                <p>You're welcome to place the affiliate link on your websites or blogs. In addition, you can share your affiliate link to your contacts via email, on social networks, etc.</p>
                <h3>How much can I expect to earn?</h3>
                <p>Our standard commission rate is 30%. For each sale one of your referrals makes you will earn 30% of the total amount. For example, if someone purchases a <a href="bundle">policies bundle</a> for $69.95 you will earn $21. Note that any special promotions are exempt from affiliate commissions unless noted otherwise.</p>
                <h3>How long does the tracking cookie last?</h3>
                <p>We keep the referral cookie active for 90 days. If the user decides to purchase anything from our website at any time within this period, you will be credited for the sale.</p>
                <h3>How do I track my earnings?</h3>
                <p>You can simply login to your affiliate account at any time for access to real-time reports and get up-to-the-second information about any commissions you have earned.</p>
                <h3>When will I receive my affiliate commissions?</h3>
                <p>Affiliate payments are processed and sent directly to your PayPal account on the 1st day of each month. We hold payments for 45 days after the affiliate sale occurred to allow for processing, chargebacks, refunds, etc. For example, you would receive an affiliate payment for a sale occurred on June 15th, on August 1st.</p>
                <h3>Can I use my affiliate link for referring myself?</h3>
                <p>No, you may not refer yourself and you will not get any commission for it. Consider our <a href="bundle">policy bundles</a> for discounted pricing.</p>
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