@extends('layout.master')

@section('css')
<style type="text/css">
	@media (max-width: 375px){
	    .ybtn{
	        padding: 9px 16px;
	        font-size: 12px;
	    }
	}
    .ybtn{
        margin: 0px;
    }
    .service-box .service-details p {
        min-height: 144px;
    }
</style>
@endsection
@section('content')

@php $id = uniqid() @endphp

<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Create</div>
                <div class="row-subtitle">What would you like to create?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/acceptable-use-policy.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">Acceptable use policy</div>
                        <div class="service-details">
                            <p>An acceptable use policy is a set of rules that define what may or may not be done with the assets and data within your website, network, or service. It's meant to protect you and your company against abuse and overuse of the resources.</p>
                            <form action="{{url('/acceptable-use-policy?form-id='.$id)}}" method="POST">
    	                        @csrf
    	                        <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
    	                        <input type="hidden" name="policy_name" value= "Acceptable Policy">
    	                        <div class="control actions">
    	                            <input class="ybtn ybtn-header-color" type="submit" name="submit" value="Acceptable use policy" />
    	                        </div>
    	                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/cookie-policy.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">Cookie policy</div>
                        <div class="service-details">
                            <p>A cookie policy outlines the types of cookies and other tracking technologies used on your website, what they do, and how they are used. You are required by the EU law to have a cookie policy and notify visitors that your site uses them.</p>
                            <form action="{{url('/cookie-policy?form-id='.$id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
                                <input type="hidden" name="policy_name" value= "Cookie Policy">
                                <div class="control actions">
                                    <input class="ybtn ybtn-header-color" type="submit" name="submit" value="Cookie policy" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/cookie-consent-banner.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">Cookie consent banner</div>
                        <div class="service-details">
                            <p>Generate and display a cookie permissions pop-up on your site using our lightweight and customizable free cookie consent banner plugin. Handle the GDPR legislation and EU cookies directive without spending money on a developer.</p>
                            <a class="ybtn ybtn-header-color" href="{{ route('cookieconsentbanner')}}">Cookie consent banner</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/disclaimer.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">Disclaimer</div>
                        <div class="service-details">
                            <p>A disclaimer is described as a common method used by website owners in order to limit their liability on their website. The purpose of a disclaimer is to make sure the information on your website will not be improperly relied upon.</p>
                            <form action="{{url('/disclaimer?form-id='.$id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
                                <input type="hidden" name="policy_name" value= "Disclaimer Policy">
                                <div class="control actions">
                                    <input class="ybtn ybtn-header-color" type="submit" name="submit" value="Disclaimer" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/dmca-policy.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">DMCA policy</div>
                        <div class="service-details">
                            <p>A DMCA policy protects your business from copyright infringements and potentially expensive lawsuits. It addresses the rights and obligations of copyrighted material owners who believe their rights have been infringed. If you have images in your website, you need a DMCA policy.</p>
                            <form action="{{url('/dmca-policy?form-id='.$id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
                                <input type="hidden" name="policy_name" value= "DMCA Policy">
                                <div class="control actions">
                                    <input class="ybtn ybtn-header-color" type="submit" name="submit" value="DMCA policy" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/privacy-policy.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">Privacy policy</div>
                        <div class="service-details">
                            <p>A privacy policy is a document that discloses some or all of the ways your website or product gathers, uses, discloses, and manages a customer or client's data. It fulfills a legal requirement to protect a customer or client's privacy.</p>
                            <form action="{{url('/privacy-policy?form-id='.$id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
                                <input type="hidden" name="policy_name" value= "Privacy Policy">
                                <div class="control actions">
                                    <input class="ybtn ybtn-header-color" type="submit" name="submit" value="Privacy policy" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/refund-policy.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">Refund policy</div>
                        <div class="service-details">
                            <p>A good refund policy can help protect your company and win your customers' trust. Refund policy outlines the requirements and steps your customers need to take in order to return or exchange purchased product and receive a refund.</p>
                            <form action="{{url('/refund-policy?form-id='.$id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
                                <input type="hidden" name="policy_name" value= "Refund Policy">
                                <div class="control actions">
                                    <input class="ybtn ybtn-header-color" type="submit" name="submit" value="Refund policy" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/terms-conditions.png')}}" alt="">
                    </div>
                    <div>
                        <div class="service-title">Terms and conditions</div>
                        <div class="service-details">
                            <p>Terms and conditions (also known as terms of use and terms of service) are a set of guidelines and rules which one must agree to abide by in order to use your website or product. Terms and conditions are legally binding for both parties.</p>
                            <form action="{{url('/terms-and-conditions?form-id='.$id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
                                <input type="hidden" name="policy_name" value= "Terms and Conditions">
                                <div class="control actions">
                                    <input class="ybtn ybtn-header-color" type="submit" name="submit" value="Terms and conditions" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection