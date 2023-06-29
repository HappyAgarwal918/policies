@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <style type="text/css">
        @media(max-width: 991px){
            .lawsuits{
                display: none;
            }
        }
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
                        <h4>Attorney-Drafted Disclaimer Generator</h4>
                        <p>Create a disclaimer custom-tailored to your needs in minutes to protect yourself and your business from liabilities and comply with various laws and requirements.</p>
                        @php $id = uniqid() @endphp
                        <form action="{{url('/disclaimer?form-id='.$id)}}" method="POST">
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
                <div class="row-title">Comply With the Law and Build Trust With Your Users</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <p>Most countries and service providers require you to provide full disclosure on your website or app. Avoid hefty fines and build trust with your customers with proper disclosures such as:</p>
                <ul class="list-icons tick ps-0">
                    <li>Affiliate links and advertisements</li>
                    <li>Compensation, endorsements and sponsorships</li>
                    <li>Earnings and past performance disclaimers</li>
                    <li>Professional relationships and partnerships</li>
                    <li>And many more</li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="{{ asset('images/disclosures.png')}}" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid sfeatures" style="padding-bottom:30px">
    <div class="container">
        <div id="ifeatures" class="row">
            <div class="col-md-12">
                <div class="row-title">Protect Yourself and Eliminate Risks and Liability</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6 lawsuits">
                <img src="{{ asset('images/no-liability.png')}}" alt="" style="width: 100%;">
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>Avoid expensive lawsuits when someone relies on or misuses the information published on your website or app. Create a comprehensive disclaimer suitable for a wide range of needs, including:</p>
                <ul class="list-icons tick ps-0">
                    <li>Bloggers and entrepreneurs</li>
                    <li>Coaches and consultants</li>
                    <li>Financial and investment advisors</li>
                    <li>Fitness instructors</li>
                    <li>Health professionals</li>
                    <li>Small businesses</li>
                    <li>And many more</li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-6 d-block d-lg-none">
                <img src="{{ asset('images/no-liability.png')}}" alt="" style="width: 100%;">
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
                            <h5 class="faq-title">What is a disclaimer statement?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                        <div class="card-body">
                            <p>A disclaimer is a notice to your customers or users that serves to warn them that the information on your website or mobile application should not be improperly relied upon and that you wish to limit your legal liability in regard to certain aspects of your operations.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-2" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                        <div class="mb-0">
                            <h5 class="faq-title">Do you need a disclaimer?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                        <div class="card-body">
                            <p>Some disclaimers are required by law, such as affiliate disclaimers, while others are optional.</p>

                            <p>In order to determine what type of disclaimer you might need, you have to consider your website and your business as a whole: what you use your website for (blog, selling a product, offering services, etc.), the type of content that you share with your users and how they may rely or act upon the information that you share, the risks associated with your products, etc.</p>

                            <p>By identifying the potential risks associated with your website, you will be able to draft custom disclaimers to protect yourself and your business. Not only that, you will be cultivating a culture of transparency with your users as you will both know where you stand when it comes to your respective responsibilities and liabilities.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-3" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                        <div class="mb-0">
                            <h5 class="faq-title">Does a disclaimer protect you?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                        <div class="card-body">
                            <p>Yes, a relevant and properly drafted disclaimer brought to the attention of your users can help protect you from frivolous lawsuits, limit your liability and protect your rights.</p>

                            <p>By including the appropriate disclaimers, you can inform your users of the risks involved with using your website, set out your respective responsibilities, and limit your liability by stating, for example, that you will not be held liable for the consequences of them acting upon the information displayed on your website.</p>

                            <p>If your website links to third-party websites or allows user-generated content, a disclaimer can specify that you do not endorse or verify information shared by third parties and that you should not be held liable for their comments or actions as they are outside of your control.</p>

                            <p>Similarly, if you work for a certain organization and share your own opinions online, you can add a disclaimer that specifies that all views expressed are your own and that they do not necessarily reflect those of your employer.</p>

                            <p>Disclaimers can also help you affirm and protect your intellectual property rights and may dissuade people from using your content without your permission. Note that you cannot disclaim any and all liability as there are some exceptions under the law, however, it can serve as a warning to your users and help mitigate your risks.</p>

                            <p>Moreover, keep in mind that the validity of a disclaimer and the extent of your liability is always up for review by a court of law, which could decide that a disclaimer is void or invalid because it is unfair or was not brought to the attention of the plaintiff, for example.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-4" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                        <div class="mb-0">
                            <h5 class="faq-title">Can you still get sued even if you have a disclaimer?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                        <div class="card-body">
                            <p>The short answer is: yes, the fact that you have a disclaimer won’t prevent you from getting sued.</p>

                            <p>However, having a disclaimer statement will not only deter people from suing you but could also give you a leg to stand on in court and contribute to your defense should you be able to prove that it is fair and that the plaintiff had read and accepted your terms and conditions, including your disclaimer.</p>

                            <p>Thus the importance of making your disclaimers easy to read and conspicuous so that your users are aware that they exist.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-5" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                        <div class="mb-0">
                            <h5 class="faq-title">Can you copy someone else’s disclaimer?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                        <div class="card-body">
                            <p>Copying anyone else’s work is always a bad idea. While it may be tempting, it could lead to copyright issues and, more importantly, could be completely useless as it may not apply to you or it could be improperly drafted.</p>

                            <p>Indeed, there are many types of disclaimers for various types of businesses, websites, and circumstances. You need to identify which ones are relevant by taking into account all the risks associated with the service or product that you offer. Only once you have done that will you be able to draft and include the appropriate disclaimers on your website or mobile application.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-6" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                        <div class="mb-0">
                            <h5 class="faq-title">How do you write a disclaimer statement?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                        <div class="card-body">
                            <p>You should first start by thinking about your business and your website and identify the rights that you want to protect, as well as the risks and areas where you could potentially be subject to legal liability.</p>

                            <p>Then, you could choose to write your disclaimer yourself, which could be risky if you don’t have a legal background, or call on the services of a lawyer to ensure that you have all your bases covered.</p>

                            <p>You could also use our disclaimer generator to create a custom-tailored and attorney-drafted disclaimer statement in just a few minutes. This is a great, straightforward cost-effective solution.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-7" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                        <div class="mb-0">
                            <h5 class="faq-title">Where should you display your disclaimer?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                        <div class="card-body">
                            <p>You need to make sure that your users are aware of your disclaimer before they choose to use your product or website. Where you should display it will depend on the structure of your website but it is good practice to include a hyperlink to it in your website footer, include it in your terms and conditions, and use the click-wrap method where your website visitors have to confirm that they have read and agree to your disclaimer and terms and conditions by ticking a checkbox.</p>

                            <p>If you need to disclose an affiliate relationship, you will need to make sure that it’s clear and conspicuous to satisfy the Federal Trade Commission (FTC); This could be done by including an affiliate disclaimer in every blog post where you review or endorse products that were given to you, for which you have a paid partnership with the company or that include affiliate links, and in a position where it can’t be missed by your readers – don’t hide it or bury it in long paragraphs.</p>
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