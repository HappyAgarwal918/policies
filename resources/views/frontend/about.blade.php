@extends('layout.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/about_us.css')}}">
<style type="text/css">
    @media(min-width: 1025px){
        .details-holder{
            width: 86%;
        }
    }   
</style>
@endsection

@section('content')
<div id="header-holder" class="inner-header about-header">
<div class="bg-custom">
    <div class="obj-gradiant1"></div>
    <div class="obj-gradiant2"></div>
</div>
<div id="page-head" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="icons-animation-holder">
                        <div class="aicon aicon1"><img src="{{asset('images/aicon1.png')}}" alt=""></div>
                        <div class="aicon aicon2"><img src="{{asset('images/aicon2.png')}}" alt=""></div>
                        <div class="aicon aicon3"><img src="{{asset('images/aicon3.png')}}" alt=""></div>
                        <div class="aicon aicon4"><img src="{{asset('images/aicon4.png')}}" alt=""></div>
                        <div class="aicon aicon-main">
                            Policies
                        </div>
                    </div>
                </div>
                <div class="col-md-6 company-info-holder">
                    <h4>About Us</h4>
                    <div class="about-subtitle"></div>
                    <div class="details-holder">
                        <p>Have peace of mind when you protect<br>
                         your website/assets with<br>
                          our top-notch legal policies!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about_content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">About Us</div>
                <div class="row-subtitle"></div>
                <img src="{{ asset('images/about.jpg')}}">
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-lg-6">
                <p>“There has to be an easier way” – this was the phrase that started our mission and it‘s been our foundation ever since.</p>
                <p>Legal Policies was launched in Miami, Florida in 2019 with the ambition to deliver an easy-to-use service to take away the stress and financial burden when it comes to the legal side of having an online presence for your business or personal projects.</p>
                <p>What was once an idea has since grown into a company that has issued over 150,000 legal policies to more than 50,000 customers across the world.</p>
            </div>
            <div class="col-lg-6">
                <p>We strive to provide the best possible service, evolving with the ever-changing legal requirements in order to help our customers stay up-to-date.</p>
                <p>Our customers are the lifeblood of our business and we do everything we can make sure they are happy with the services we offer. If there’s an opportunity to go above and beyond for a customer, we take it.</p>
                <p>We know how difficult it is to build a successful business and we want to make it easier for you to reach your goals faster.</p>
            </div>
        </div>
    </div>
</div>
<div id="counter_area" class="container-fluid message-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center pb-5 pb-md-0">
                <i class="fa fa-anchor medium-icon"></i>
                <h2><span data-toggle="counterUp">150,000</span>+</h2>
                <h6>Policies Created</h6>
            </div>
            <div class="col-md-4 col-sm-12 text-center pb-5 pb-md-0">
                <i class="fa fa-user medium-icon"></i>
                <h2><span data-toggle="counterUp">50,000</span>+</h2>
                <h6>Customers Who Trust Us</h6>
            </div>
            <div class="col-md-4 col-sm-12 text-center pb-5 pb-md-0">
                <i class="fa fa-globe medium-icon"></i>
                <h2><span data-toggle="counterUp">125</span>+</h2>
                <h6>Supported Countries</h6>
            </div>
        </div>
    </div>
</div>
<!--<div id="more-info" class="container-fluid">-->
<!--    <div class="bg-custom"></div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4">-->
<!--                <div class="links-holder">-->
<!--                    <ul>-->
<!--                        <li><div class="info-link opened" data-id="1">Our Mission</div></li>-->
<!--                        <li><div class="info-link" data-id="2">Our Vision</div></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-8">-->
<!--                <div class="info-details-holder">-->
<!--                    <div class="info-details info-d1 show-details">-->
<!--                        <h1>Creating a space<br>-->
<!--                        for creatives.</h1>-->
<!--                        <p>At aaa vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum div atque corrupti quos dolores et quas molestias.</p>-->
<!--                    </div>-->
<!--                    <div class="info-details info-d2">-->
<!--                        <h1>Creating a space will always<br>-->
<!--                        feels like home.</h1>-->
<!--                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum div atque corrupti quos dolores et quas molestias.</p>-->
<!--                    </div>    -->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div id="message2" class="container-fluid message-area normal-bg boxed">
    <div class="container">
        <div class="row message_align">
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
@endsection