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
                        <h4>Professional Return and Refund Policy Generator</h4>
                        <p>Create a return and refund policy custom-tailored to your needs in minutes and instantly improve your sales and revenues by being transparent with your customers.</p>
                        @php $id = uniqid() @endphp
                        <form action="{{url('/refund-policy?form-id='.$id)}}" method="POST">
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
                <div class="row-title">Generate Return and Refund Policy in 3 Easy Steps</div>
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
                            <h5 class="faq-title">What is a return and refund policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                        <div class="card-body">
                            <p>A return and refund policy is a document that sets out the circumstances and conditions under which your customers can request reimbursement of the sum paid for a product, how to go about doing so, the delays that apply as well as any exceptions.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-2" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                        <div class="mb-0">
                            <h5 class="faq-title">What’s a good return policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                        <div class="card-body">
                            <p>A good return policy is one that is clear, transparent, and leaves no place for interpretation. Your customers shouldn’t have to contact you to understand if they are eligible to return the products that they have purchased – the process should be clear.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-3" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                        <div class="mb-0">
                            <h5 class="faq-title">Why is it important to have a clear return and refund policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                        <div class="card-body">
                            <p>Having a clear return and refund policy is a no-brainer considering how competitive the eCommerce industry is.</p>

                            <p>Having a generous policy could make you stand out from the competition and could make the difference between someone choosing to buy something from your store rather than your competitor’s, which could have a direct impact on your sales.</p>

                            <p>Being transparent about your practices and processes also helps build trust with an audience that may not be familiar with your brand or your products – people may be more willing to give your business a chance if they know they can return their products should they be unhappy with their purchase.</p>

                            <p>Not to mention that some countries, states, and provinces have consumer protection laws that require businesses to have a return and refund policy in place – you should always seek legal advice to confirm which laws apply before making any decision that could affect you in the long term.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-4" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                        <div class="mb-0">
                            <h5 class="faq-title">What is a no refund policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                        <div class="card-body">
                            <p>As the name implies, a no refund policy means that all sales made on your website or your app are final – your customers will not be able to get their money back should they be unhappy with the products purchased.</p>

                            <p>This is risky from the customer’s point of view unless they are already familiar with your products. To avoid any conflict or disappointment, you should make it very clear to your customers if you do decide to put in place a no refund policy: you should warn them multiple times, including before they get to the checkout page so as not to waste their time, as this could be a deal-breaker for some.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-5" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                        <div class="mb-0">
                            <h5 class="faq-title">Is a no refund policy legal?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                        <div class="card-body">
                            <p>This depends on the consumer protection laws that apply to your business. Some countries are stricter than others and do not allow all-encompassing no-refund policies while others allow it but have specific requirements, such as making the policy conspicuous.</p>

                            <p>The United Kingdom and Australia, for example, do not allow no refund policies as consumers have the right to get their money back in some circumstances, such as when a product is considered faulty. The UK even has a cooling-off period of 14 days for goods that have been purchased online. This means that, because the customer wasn’t able to see what they had purchased until it arrived at their door, they have 14 days to change their mind and request a refund, no reason needed (there are some exceptions of course).</p>

                            <p>The United States and Canada are, at first glance, not as strict at the federal level, however, some state and province-specific consumer laws differ and should also be taken into account as they, for example, can allow it but require that the no refund policy be conspicuously-placed at checkout for it to be enforceable.<br>
                            To learn more about no refund policies and their legality, read our article on the subject.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-6" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                        <div class="mb-0">
                            <h5 class="faq-title">How do you write a return and refund policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                        <div class="card-body">
                            <p>Writing a return and refund policy should not be taken lightly as consumer protection laws need to be taken into account – as should your business goals. You have to know where your customers are located (or could potentially be located) in order to make sure that your policy complies with applicable consumer protection laws at the country and state levels.</p>

                            <p>It’s also a good idea to have a look at what your competitors are offering in terms of return timeframes as well as their general practices and processes and consider whether you can use this to your advantage by taking a more generous approach.</p>

                            <p>Having a return and refund policy should be considered essential if you do business online as it builds trust, brand authority and has the potential to directly impact your sales: not many customers would go through with a purchase not knowing what happens if they are unsatisfied with the product received. Moreover, not having one could be detrimental to your business should customers request a chargeback from their bank or leave you negative feedback on a public forum.</p>

                            <p>Once you have done that, you can call on the services of a lawyer to draft your policy or, if you wish to save time and money, use a return and refund policy generator – in just a few steps and by answering simple questions about your business you will have a custom policy tailored to your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-7" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                        <div class="mb-0">
                            <h5 class="faq-title">Where should your return and refund policy be displayed?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                        <div class="card-body">
                            <p>Your return and refund policy should be conspicuous and hard to miss – it is good practice to link to it in more than one place.</p>

                            <p>Most businesses tend to create a separate page for their return and refund policy and link to it and summarize it in a few lines in their terms and conditions.</p>

                            <p>In addition, you can make it accessible through a hyperlink in your website footer, on product pages near the price of the product, using a banner on the homepage and during the checkout process when you require customers to accept your terms and conditions and policies in order to complete their purchase.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-8" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                        <div class="mb-0">
                            <h5 class="faq-title">Is a money-back guarantee the same as a refund policy?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                        <div class="card-body">
                            <p>A money-back guarantee can either be a clause in your return and refund policy or constitute your policy as a whole. By making such a statement, you promise your customers that, should they not be fully satisfied with their purchase, they can get their money back, no questions asked.</p>

                            <p>This is not necessarily suitable for all types of products but can be a great marketing tool for startup businesses or for businesses that make claims or guarantee certain results.</p>

                            <p>You could also choose to offer a money-back guarantee but with some exceptions to protect your business against customers that could take advantage of your generosity.</p>

                            <p>You may read more in this article if you’re interested in offering a money-back guarantee to your customers.</p>
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