@extends('admin.layout')
@section('title') Legal Policies @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/home.css')}}">
<style type="text/css">
	.ybtn:hover{
		color: #0056b3 !important;
	}
</style>
@endsection
@section('admincontent')

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
                    <div class="control actions">
                        <a class="ybtn ybtn-header-color p-0" href="{{url('/add/policy?form-id=acceptable-use-policy')}}">Acceptable use policy</a>
                    </div>
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
                    <div class="control actions">
                        <a class="ybtn ybtn-header-color p-0" href="{{url('/add/policy?form-id=cookie-policy')}}">Cookie policy</a>
                    </div>
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
                    <div class="control actions">
                        <a class="ybtn ybtn-header-color p-0" href="{{url('/add/policy?form-id=disclaimer')}}">Disclaimer</a>
                    </div>
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
                    <div class="control actions">
                        <a class="ybtn ybtn-header-color p-0" href="{{url('/add/policy?form-id=dmca-policy')}}">DMCA policy</a>
                    </div>
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
                    <div class="control actions">
                        <a class="ybtn ybtn-header-color p-0" href="{{url('/add/policy?form-id=privacy-policy')}}">Privacy policy</a>
                    </div>
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
                    <div class="control actions">
                        <a class="ybtn ybtn-header-color p-0" href="{{url('/add/policy?form-id=refund-policy')}}">Refund policy</a>
                    </div>
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
                    <div class="control actions">
                        <a class="ybtn ybtn-header-color p-0" href="{{url('/add/policy?form-id=terms-and-conditions')}}">Terms and conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection