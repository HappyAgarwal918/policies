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
                        <h4>Attorney-Drafted DMCA Policy Generator</h4>
                        <p>Create a DMCA policy custom-tailored to your needs in minutes to protect yourself and your business from copyright infringements and expensive lawsuits.</p>
                        @php $id = uniqid() @endphp
                        <form action="{{url('/dmca-policy?form-id='.$id)}}" method="POST">
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
                <div class="row-title">Generate DMCA Policy in 3 Easy Steps</div>
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
                            <h5 class="faq-title">Who created the DMCA?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                        <div class="card-body">
                            <p>The Digital Millennium Copyright Act was passed by Congress and famously signed into law by former president Bill Clinton in 1998, it now forms part of the U.S. Copyright Act. It incorporates provisions from the World Intellectual Property Organization (WIPO)</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-2" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                        <div class="mb-0">
                            <h5 class="faq-title">What does the DMCA do?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                        <div class="card-body">
                            <p>The DMCA protects a copyright owner’s exclusive rights online. the Internet makes it easier than ever before to share and transfer photos, music, movies, and other original works with the world. It provides a simple, non-judicial process to stop infringement activities.</p>

                            <p>A copyright owner has the exclusive right to reproduce and make copies of their work, to prepare derivative works based upon the copyrighted work, to sell, rent, lease, lend and distribute copies of their work and to perform or display their work in public.</p>

                            <p>It is important to note that the copyrighted work does not need to be registered with the United States Copyright Office to be protected under the DMCA. Its simple creation and existence on a tangible medium are sufficient.</p>

                            <p>In short, the DMCA notably confirms the illegality of infringing those rights online by sharing and distributing copyrighted materials without authorization as well as makes it criminal to circumvent technology that controls or limits access to copyrighted content and to create or disseminate technology, devices, or services intended to circumvent these access control measures.</p>

                            <p>Moreover, it sets out the responsibility of intermediaries, namely Internet service providers and online service providers such as web hosting companies and search engines, and gives them the opportunity to be shielded from liability for monetary damages by offering them safe harbor provided that they implement DMCA notice and takedown procedures and fulfill the conditions set out at section 512 of the DMCA.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-3" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                        <div class="mb-0">
                            <h5 class="faq-title">What is a DMCA violation?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                        <div class="card-body">
                            <p>A DMCA violation is a violation of one of its dispositions, which form an integral part of the U.S. Copyright Act. It can lead to both criminal and civil (monetary) penalties. A violation can be anything from distributing copyrighted content online without permission to illegally downloading torrent content (a movie, music) through a peer-to-peer system.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-4" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                        <div class="mb-0">
                            <h5 class="faq-title">What is a DMCA claim?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                        <div class="card-body">
                            <p>A DMCA claim is made by the copyright owner or its authorized representative. It is what we commonly refer to as a DMCA takedown notice.</p>

                            <p>It is sent when the copyright owner believes that their work is being used online illegally, in other words, when it infringes on their copyright. By sending this notice, the copyright owner requests that the infringing content be taken down from the website.</p>

                            <p>This notice is sent to the website owner or online service provider after careful consideration by the copyright holder or its intellectual property lawyer. Indeed, one must first make sure that the usage is not legal under the doctrine of fair use or that the allegedly infringing website hasn’t purchased a license allowing said use.</p>

                            <p>To learn more about the elements that need to be included in a DMCA takedown notice to be valid as well as the steps that have to be followed read our article on the subject or use our free DMCA takedown notice generator.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-5" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                        <div class="mb-0">
                            <h5 class="faq-title">Does the DMCA apply outside the US?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                        <div class="card-body">
                            <p>Technically no, the DMCA does not apply outside of the United States as it is federal legislation. In other words, the content needs to be hosted there in order to be subject to the DMCA.</p>

                            <p>In practice, considering the globality of the online world, international online service providers will usually consider and process takedown notices, especially if you, as the copyright owner, are located in the United States or if the country where the content is hosted is a member of the World Intellectual Property Organization (WIPO) as there are similar laws and generally recognized principles worldwide.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-6" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                        <div class="mb-0">
                            <h5 class="faq-title">What is the link between “fair use” and the DMCA?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                        <div class="card-body">
                            <p>Fair use can be used as a defense against a claim of copyright infringement or DMCA takedown notice. Indeed, under this doctrine, one may use copyrighted content for parody, criticism, news reporting, commenting, teaching, scholarship, or research without obtaining the prior consent of the copyright owner.</p>

                            <p>These uses are considered “fair” when a few factors are weighted and taken into account, notably the scope of the work used, the effect of the use on the work’s value, the nature of the work, and the purpose of the use. Considering reading our article on this subject to learn about fair use disclaimers.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-7" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                        <div class="mb-0">
                            <h5 class="faq-title">How can DMCA be prevented?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                        <div class="card-body">
                            <p>Be proactive about ensuring that you, or your users, have the authorization to use the copyrighted materials. As an individual, you should make sure that the content that you share is original, that you have purchased the correct license or that you have requested the creator’s authorization.</p>

                            <p>If you own a website that hosts user-generated content or if you otherwise fall under the definition of an online service provider, you should have a DMCA policy in place as well as a designated agent. And make sure that your users agree to it before they are allowed to share anything on your platform, such as by making it an integral part of your terms and conditions and requiring active consent at the time of account creation.</p>

                            <p>This policy should set out a procedure that allows you to promptly respond to DMCA takedown notices and benefit from the safe harbor provisions as an online service provider, which could effectively shield you from liability in regards to the content shared by your users.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-8" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                        <div class="mb-0">
                            <h5 class="faq-title">What happens if you get a DMCA notice?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                        <div class="card-body">
                            <p>This depends on who the notice is sent to – you, as the website owner, or the company that hosts your website, the online service provider.</p>

                            <p>If you receive a notice stating that you are sharing copyrighted content on your website without proper authorization, you should take action right away and take down the materials. You can reach out to the person who sent you the takedown notice to let them know.</p>

                            <p>If an online service provider receives the notice, the content will likely automatically be blocked or removed in the 24 to 48 hours following receipt, as prompt action is required on their end to limit their liability under the DMCA safe harbor provisions. The user that shared or distributed the materials will be informed by their online service provider that they have been taken down under the DMCA notice-and-takedown process.</p>

                            <p>If you receive notification from your online service provider to that effect but believe in good faith that it was wrongly taken down and that you were making fair use of that content, you may wish to file a counter-notice to have the content be made available again. Read our article to learn more about counter-notices and how to send them.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-9" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                        <div class="mb-0">
                            <h5 class="faq-title" >What happens if you ignore a DMCA notice?</h5>
                        </div>
                    </div>
                    <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                        <div class="card-body">
                            <p>You should always address DMCA notices, ignoring them will not make the problem go away. Indeed, you could be faced with a copyright infringement lawsuit if the claim has any basis, which could lead to you having to pay significant damages to the copyright holder.</p>

                            <p>If you have received notice that you have shared allegedly infringing content, take the content down as soon as possible if your online service provider has not done so already.</p>

                            <p>In the event that you deem your usage authorized, under the doctrine of fair use or as the holder of a valid license, for example, you may wish to contact the copyright owner to discuss the situation or file a counter-notice, as mentioned above.</p>
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