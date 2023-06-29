@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <style type="text/css">
        #ifeatures .faq{
            text-align: initial;
        }
        .card-header{
            background-color: #f3f3f3e8;
            border-radius: 2px;
            color: #222222;
            cursor: pointer;
            padding: 12px 18px;
            text-align: left;
            width: 100%;
            border-bottom: none;
        }
        .card{
            margin-bottom: 10px;
            border: none;
        }
    </style>
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
                        <h4>Attorney-Drafted Cookie Policy Generator</h4>
                        <p>Create a cookie policy custom-tailored to your needs in minutes to make your website compliant with the GDPR and other laws across multiple countries and legislations.</p>
                        @php $id = uniqid() @endphp
                        <form action="{{url('/cookie-policy?form-id='.$id)}}" method="POST">
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
                <div class="row-title">Generate Cookie Policy in 3 Easy Steps</div>
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
<div id="services" class="container-fluid" style="padding-bottom:30px">
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
<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Frequently asked questions</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="faq" id="accordion">
                <div class="card">
                    <div class="card-header" id="faqHeading-1" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                        <div class="mb-0">
                            <h5 class="faq-title">What is a cookie?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                        <div class="card-body">
                            <p>A cookie is a small text file that is created and stored on a website user’s browser when visiting a website that uses cookies. Cookies are used to track information about the visitor that can notably be used to allow the website to function to its full potential, provide a better user experience by taking into account user preferences and, in some cases, allow for remarketing.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-2" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                        <div class="mb-0">
                            <h5 class="faq-title">What is a cookie policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                        <div class="card-body">
                            <p>A cookie policy is a document that lets your website visitors know that you are using cookies and gives them all the information that they might need in regards to the processing of their personal data and your usage. This includes letting them know what types of cookies you are using and for what purpose and informing them that they can manage their preferences at any time.</p>

                            <p>It should be separate from your privacy policy and easily accessible, as user consent is essential in order to comply with privacy laws, especially the GDPR.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-3" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                        <div class="mb-0">
                            <h5 class="faq-title">Do I need a cookie policy on my website?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                        <div class="card-body">
                            <p>Absolutely. If you are using cookies on your website, then you should have the appropriate cookie policy as your users have the right to know that you wish to collect their personal information.</p>

                            <p>Providing them with a detailed and easy-to-read cookie policy will ensure that you are being transparent and that you have their clear, unequivocal consent to your use of cookies.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-4" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                        <div class="mb-0">
                            <h5 class="faq-title">What should be included in a cookie policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                        <div class="card-body">
                            <p>Your cookie policy should, at a minimum, include the following:</p>

                            <p>Definition of cookies: not everyone is familiar with cookies and it can be hard for someone to consent to their use if they do not understand their purpose. In a sentence or two, take the time to explain what cookies are in layman’s terms.</p>

                            <p>State that you are using cookies: Mention which types of cookies you use and for what purpose: this includes both first-party and third-party cookies. You should let your users know what information is collected, what it is used for, and how long that data is stored.</p>

                            <p>Let your users know how they can manage their preferences: it should be easy for your users to control what types of cookies they wish to allow, disable all cookies or withdraw consent that was previously given. When it comes to third-party cookies, it is good practice to link to their respective cookie policies.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-5" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                        <div class="mb-0">
                            <h5 class="faq-title">How do you draft a cookie policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                        <div class="card-body">
                            <p>Drafting a cookie policy should not be taken lightly, as it needs to take into account applicable privacy laws, which come with their own set of challenges and requirements if your website or application offers goods or services to users located in the European Union or monitors their behavior.</p>

                            <p>You can of course retain the services of a privacy lawyer familiar with the current legal requirements applicable to your website. You could also use our cookie policy generator which is automatically updated to keep up with the ever-evolving global privacy laws, including the GDPR.</p>

                            <p>Whatever you do, do not copy and paste a cookie policy from another website as it needs to be tailored and specific to your business and the cookies that you use.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-6" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                        <div class="mb-0">
                            <h5 class="faq-title">Where should you display your cookie policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                        <div class="card-body">
                            <p>Your cookie policy should be easy to find for new website visitors in order for them to be able to give their consent to your use of cookies before they start using your website.</p>

                            <p>A best practice is to use a cookie banner that automatically appears when someone lands on your website; it is typically displayed at the bottom of the screen and requires that a user checks a box consenting to cookies before being able to navigate the website. This cookie consent pop-up should include a hyperlink to the page that hosts your cookie policy.</p>

                            <p>You should also make reference to your cookie policy in your privacy policy and include a link in your website footer or your application’s menu so that your users can manage their cookie preferences.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-7" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                        <div class="mb-0">
                            <h5 class="faq-title">How do I set a cookie notification?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                        <div class="card-body">
                            <p>You don’t need to know how to code to add a cookie pop-up to your website. Simply use our cookie consent banner generator to create a fully-customized banner that won’t slow down your website.</p>

                            <p>In just a few seconds, you will be given a few lines of code that you can simply copy and paste to your website for a responsive and GDPR-compliant cookie banner to appear.</p>
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