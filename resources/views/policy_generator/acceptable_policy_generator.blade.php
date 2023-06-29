@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
@endsection

@section('content')

<div id="header-holder" class="inner-header serverspage-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="servers-icon">
                        <div class="icon-holder">
                            <img src="images/servers.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="z-index: 1;">
                    <div class="head-content">
                        <h4>Attorney-Drafted Acceptable Use Policy Generator</h4>
                        <p>Create an acceptable use policy custom-tailored to your needs in minutes to set out clear rules and guidelines for the use of your products and services to prevent abuse.</p>
                        @php $id = uniqid() @endphp
                        <form action="{{url('/acceptable-use-policy?form-id='.$id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="unique_id" value= "<?php echo $id; ?>">
                            <input type="hidden" name="policy_name" value= "Acceptable Policy">
                            <div class="control actions">
                                <input class="ybtn ybtn-header-color" type="submit" name="submit" value="Get Started" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ifeatures" class="container-fluid sfeatures">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Generate Acceptable Use Policy in 3 Easy Steps</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/sfeature1.png" alt="">
                    </div>
                    <div class="feature-title">Choose platform</div>
                    <div class="feature-details">Select the platform you use and the type of website, app and business you have</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/sfeature2.png" alt="">
                    </div>
                    <div class="feature-title">Customize policy</div>
                    <div class="feature-details">Fill in the questionnaire and describe your business and how you operate it</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/sfeature3.png" alt="">
                    </div>
                    <div class="feature-title">Download & publish</div>
                    <div class="feature-details">Download, view and publish your custom-made acceptable use policy instantly</div>
                </div>
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
<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row-title">Never Worry</div>
                <div class="row-subtitle">Legal Policies Has Your Back!</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/customize.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Say NO to generic legal templates</a></div>
                    <div class="service-details">
                        <p>Only you, the owner, can accurately describe your website, mobile app and business and how you manage and operate them. Every legal policy that we generate is unique and built around the information you provide for the best results.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/save.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Save thousands on attorney fees</a></div>
                    <div class="service-details">
                        <p>Our attorney-drafted policies are completely free for personal and non-commercial use. We also offer premium policies with access to additional disclosures and upgraded features at a fraction of the cost of hiring a lawyer.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/protect.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Protect yourself and your business</a></div>
                    <div class="service-details">
                        <p>Not following the laws and regulations can expose you and your business to liability in a number of different ways. Our service can help you keep policies current and compliant with the latest government, legal, and service requirements.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/host.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Copy or let us host your policies</a></div>
                    <div class="service-details">
                        <p>We can host your generated policies for you for free so you don't have to worry about technical details. If you don't want that and would like to have full control over your documents, you can easily copy the policies to your site or app as well.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/updates.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Free automatic updates</a></div>
                    <div class="service-details">
                        <p>With so many different and ever-changing laws it can be a daunting task to stay up to date with the latest legal requirements. Let us do the hard work and notify you of the new changes while you focus on running and improving your product and business.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ asset('images/global.png')}}" alt="">
                    </div>
                    <div>
                    <div class="service-title"><a href="#">Worldwide legal coverage</a></div>
                    <div class="service-details">
                        <p>We make every effort to cover every country's laws and regulations by adopting the strictest guidelines implemented in each country. Just tell us where you operate and we'll build a custom-tailored policy accordingly just for you.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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