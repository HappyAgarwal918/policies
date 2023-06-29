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
                            <img src="{{ asset('images/servers.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="z-index: 1;">
                    <div class="head-content">
                        <h4>Attorney-Drafted Privacy Policy Generator</h4>
                        <p>Create a privacy policy custom-tailored to your needs in minutes to make your websites and apps compliant with the laws across multiple countries and legislations.</p>
                        @php $id = uniqid() @endphp
                        <form action="{{url('/privacy-policy?form-id='.$id)}}" method="POST">
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
<div class="container-fluid sfeatures">
    <div class="container">
        <div id="ifeatures" class="row">
            <div class="col-md-12">
                <div class="row-title">Privacy Policy is Required by Law, No Exceptions</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <p>Most countries have privacy laws to protect their citizens' personal information. Avoid hefty fines and claims that can be imposed on you and your business for non-compliance with the following:</p>
                <ul class="list-icons tick ps-0">
                    <li>General Data Protection Regulation (GDPR)</li>
                    <li>California Consumer Privacy Act (CCPA)</li>
                    <li>California Online Privacy Protection Act (CalOPPA)</li>
                    <li>Children's Online Privacy Protection Act (COPPA)</li>
                    <li>And many more privacy laws around the world</li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="{{ asset('images/countries-laws.png')}}" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid sfeatures" style="padding-bottom:30px">
    <div class="container">
        <div id="ifeatures" class="row">
            <div class="col-md-12">
                <div class="row-title">Meet Third-Party Requirements</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img src="{{ asset('images/service-requirements.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>If you monitor your website traffic, display ads, have affiliate links, or accept payments, we’ll make sure your privacy policy meets all the necessary requirements to comply with these services:</p>
                <ul class="list-icons tick ps-0">
                    <li>Amazon Associates</li>
                    <li>Google Analytics</li>
                    <li>Google AdSense</li>
                    <li>Apple App Store</li>
                    <li>Google Play Store</li>
                    <li>PayPal</li>
                    <li>Stripe</li>
                    <li>And many more</li>
                </ul>
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
                            <h5 class="faq-title">What is a privacy policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                        <div class="card-body">
                            <p>A privacy policy explains to your users what personal information you collect about them, how you collect it, and what you will do with that information, including how and if it will be shared with third parties, where it will be stored, and the security measures that you will take to protect that information.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-2" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                        <div class="mb-0">
                            <h5 class="faq-title">What is personal information?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                        <div class="card-body">
                            <p>There is no unique definition of personal information as this depends on the privacy laws applicable to you. As a general rule, it includes information that could potentially be used to identify someone such as name, date of birth, address, social insurance number, location/IP address, credit card details, email address, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-3" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                        <div class="mb-0">
                            <h5 class="faq-title">Do I need a privacy policy on my website?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                        <div class="card-body">
                            <p>If you collect personal information from your website visitors then you should have a privacy policy on your website.</p>

                            <p>Personal information can be collected in various ways, for example, by giving users the option to create an account on your website, sign up to an email list or newsletter, comment on your blog posts, and leave reviews of your products or services or purchase something on your website.</p>

                            <p>Personal information can be also collected by third parties on your website such as payment services providers, analytics tools, advertising partners or through the use of tracking cookies and other similar technologies.</p>

                            <p>Having a privacy policy is legally required in many countries and by many third-party service providers, not to mention the fact that customers are increasingly concerned by the amount of information that they share online.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-4" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                        <div class="mb-0">
                            <h5 class="faq-title">Do I need a privacy policy for my mobile app?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                        <div class="card-body">
                            <p>If you collect personal information through your mobile app, which you most likely do, then you should have a privacy policy to that effect.</p>

                            <p>Apps collect personal information from users in a number of ways such as by asking them to log in and create an account, having them input payment details for in-app purchases, allowing location tracking in order to be able to provide services, requesting access to contacts, gathering usage data, etc.</p>

                            <p>Most app stores require mobile applications to have a privacy policy, without which they cannot be made available for download on their platforms. This notably includes the Apple App Store, the Google Play Store, and the Amazon Appstore. The same can be said of third-party tools and services, such as Google AdMob.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-5" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                        <div class="mb-0">
                            <h5 class="faq-title">Do I need a privacy policy for my Facebook Business Page?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                        <div class="card-body">
                            <p>Yes. Facebook’s Pages, Groups, and Events Policies require that pages that collect content and information from users have a privacy policy that complies with its requirements and that they inform users of its existence. Moreover, businesses that have customers located in the European Economic Area (EEA) may need to include specific elements in their policy in order to comply with the GDPR.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-6" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                        <div class="mb-0">
                            <h5 class="faq-title">Is a privacy policy required by law?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                        <div class="card-body">
                            <p>Most countries around the world have enacted privacy laws that require that websites and mobile applications have privacy policies in place if they collect personal information from their residents.</p>

                            <p>This notably includes the European Union through the General Data Protection Regulation (GDPR), Australia through its Privacy Act of 1988, Canada through the Personal Information Protection and Electronic Documents Act (PIPEDA), and California through the California Consumer Privacy Act (CCPA) and the California Online Privacy Protection Act (CalOPPA), just to name a few.</p>

                            <p>Keep in mind that, even though your business is located abroad, you have to consider where your website/app will be accessible from and thus where your users are or could potentially be located as this could mean that their country’s laws apply to you.</p>

                            <p>For example, even if you run a website from the United States, the GDPR will apply to you if you collect data from users located in Europe – your privacy policy will therefore need to include additional clauses in order to meet GDPR requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-7" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                        <div class="mb-0">
                            <h5 class="faq-title">What should a privacy policy include?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                        <div class="card-body">
                            <p>At a minimum, a privacy policy should include the following: the type of personal information you collect, how you collect that information, why you collect that personal information and how it will be used, how that data will be stored, and if it will be shared with anyone, information about your use of cookie, how users can opt-out of data collection, your contact details.</p>

                            <p>Depending on the privacy laws that apply to you, notably the GDPR, and the third-party services that you use, you may need to include additional elements in your privacy policy.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-8" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                        <div class="mb-0">
                            <h5 class="faq-title">Can you copy someone else’s privacy policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                        <div class="card-body">
                            <p>You should never copy and use someone else’s privacy policy. Not only could this be problematic from a copyright perspective, but it also may not contain all essential elements or be applicable to your business.</p>

                            <p>You have to take into account the particularities of your website or application, the ways in which you collect personal information, the third-party tools and services that you use, where your users could be located, and the laws that apply to you as well as their specific requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-9" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                        <div class="mb-0">
                            <h5 class="faq-title" >How do you draft a privacy policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                        <div class="card-body">
                            <p>Privacy policies are drafted by taking into account the various laws applicable to your website or mobile application, the third-party services that you use and their respective terms, and the ways and purposes for which you collect personal information. This is essential in order to make sure that your privacy policy contains all essential elements.</p>

                            <p>Then, you may choose to draft your policy yourself, use the services of a lawyer or use our privacy policy generator to have an easy-to-read custom privacy policy in a matter of minutes. In any case, drafting a privacy policy should not be taken lightly as non-compliance with applicable laws could have serious consequences.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-10" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                        <div class="mb-0">
                            <h5 class="faq-title" >Where should you display your privacy policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10" data-parent="#accordion">
                        <div class="card-body">
                            <p>Your privacy policy should be easily accessible both on your website and on your mobile application and be hosted on a standalone page.</p>

                            <p>In addition to linking to it in your website footer, in your terms and conditions, and in the legal section of your app or website, you should remind your users at various steps of their journey and request their acceptance by using a clickwrap agreement: when they create an account, during the checkout process, when they sign up to your newsletter, on the app store before they download your app, etc.</p>
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