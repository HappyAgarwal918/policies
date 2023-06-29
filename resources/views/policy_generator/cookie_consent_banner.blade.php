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
                        <h4>Make your website compliant with the GDPR with our cookie consent banner generator</h4>
                        <p>Generate and display a cookie consent banner using our lightweight and customizable JavaScript plugin created to handle the latest GDPR and EU cookie legislation. Avoid lawsuits, claims and hefty fines, and win your customers' trust by being transparent.</p>
                        <a href="{{route('create')}}" class="ybtn ybtn-header-color">Get Started</a>
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
                <div class="row-title">Create cookie consent banner in 3 easy steps</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/sfeature1.png" alt="">
                    </div>
                    <div class="feature-title">Customize the banner</div>
                    <div class="feature-details">Easily change the appearance, style, and text displayed on the cookie notice</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/sfeature2.png" alt="">
                    </div>
                    <div class="feature-title">Link to cookie policy</div>
                    <div class="feature-details">Link to your existing cookie policy or easily create a new one in minutes</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/sfeature3.png" alt="">
                    </div>
                    <div class="feature-title">Copy to your website</div>
                    <div class="feature-details">Copy the generated cookie consent banner code to your website</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <img class="htfy" src="{{ asset('images/gdpr.png')}}">
                    </div>
                    <div class="mfeature-title">EU GDPR compliant</div>
                    <div class="mfeature-details">Our cookie consent banner plugin is fully compliant with the latest GDPR and EU cookie legislation.</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <img class="htfy" src="{{ asset('images/customize.png')}}">
                    </div>
                    <div class="mfeature-title">Fully customizable</div>
                    <div class="mfeature-details">Use our user-friendly configurator to easily change the appearance of the cookie consent banner.</div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <img class="htfy" src="{{ asset('images/responsive.png')}}">
                    </div>
                    <div class="mfeature-title">Responsive design</div>
                    <div class="mfeature-details">Our cookie consent banner will automatically adjust based on user's device and screen resolution.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <img class="htfy" src="{{ asset('images/devices.png')}}">
                    </div>
                    <div class="mfeature-title">Works anywhere</div>
                    <div class="mfeature-details">Whether you have a personal blog or eCommerce store, our cookie consent banner will work anywhere.</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <img class="htfy" src="{{ asset('images/lightweight.png')}}">
                    </div>
                    <div class="mfeature-title">Lightweight</div>
                    <div class="mfeature-details">At just 4kb in size, your visitors won't notice any difference in performance when visiting your website.</div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <img class="htfy" src="{{ asset('images/install.png')}}">
                    </div>
                    <div class="mfeature-title">Easy installation</div>
                    <div class="mfeature-details">Simply copy the generated code to your website and the cookie consent banner will display automatically.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row-title">Get compliant with government laws and various services</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <img class="d-none d-md-block" src="{{ asset('images/cookie-banner-compliant-services.png')}}">
            <img class="d-block d-md-none" src="{{ asset('images/cookie-banner-compliant-services-small.png')}}">
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