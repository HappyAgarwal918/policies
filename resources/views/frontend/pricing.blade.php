@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/accordian.css')}}">
    <style type="text/css">
    @media(max-width: 767px) {

        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr {
            display: revert !important;
            overflow: auto;
        }
    }

    @media screen and (max-width: 540px){
        .fluid{
            height: 70px;
        }    
    }
    </style>
@endsection

@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Pricing</div>
                    <div class="row-subtitle" style="color: #fff;">Pay only for what you need. One-time payment. No recurring fees, ever!</div>
                    <!-- <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="{{ asset('images/pricing.png')}}" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="table-responsive">
          <table class="table text-successtable-border border-light">
            <thead class="">
              <tr>
                <th scope="col"><strong>What you get</strong></th>
                <th class="text-center" scope="col"><strong>Basic: ${{ $basic->deal_price }}</strong></th>
                <th class="text-center" scope="col"><strong>Premium: ${{ $premium->deal_price }}</strong></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Compliance with international laws</td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Free hosting on our servers</td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Host policies on your own domain</td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Download policies in HTML format</td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Download policies in plain text format</td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Responsive design (mobile and web) </td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Comprehensive clauses and provisions</td>
                <td class="text-center"><i class="fa fa-times times" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Suitable for commercial use</td>
                <td class="text-center"><i class="fa fa-times times" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Remove Legal Policies branding</td>
                <td class="text-center"><i class="fa fa-times times" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Free lifetime automatic updates</td>
                <td class="text-center"><i class="fa fa-times times" aria-hidden="true"></i></td>
                <td class="text-center"><i class="fa fa-check check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <th class=""></th>
                <td class="text-center"><a href="{{route('create')}}" class="ybtn ybtn-header-color">Get Started</a></td>
                <td class="text-center"><a href="{{route('create')}}" class="ybtn ybtn-header-color">Get Started</a></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="alert alert-warning" role="alert">
      Looking for the complete legal compliance and protection? Save over 50% with our <a href="{{ route('bundlebill')}}">bundle packages</a>, available for a limited time only!
    </div>
    <div class="alert alert-money d-md-flex" role="alert">
        <div class="No-Risk-left">
            <img class="fluid" height="100" src="{{ asset('images/money-back.png')}}" alt="" />
        </div>
        <div class="No-Risk-right">
            <h4>100% No-Risk Money Back Guarantee</h4>
            <p>Although we don't think you'll ever want one, we'll gladly provide a refund if it's requested within 7 days of purchase.</p>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <h2 class="text-center margin-bottom-large pb-5">Frequently asked questions</h2>
<div class="aks-accordion" itemscope itemtype="https://schema.org/FAQPage" data-accordion="">
    <div class="aks-accordion-row row">
        <div class="col-md-6">
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h6 class="acc-title" itemprop="name">Will my policies get updates when laws change?</h6></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, premium policies will receive free lifetime updates. Basic policies will not get any updates.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Do you offer discounts for multiple premium policies?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, you may save <span class="underline ul-purple">over 50%</span> by purchasing multiple policies with our <a href="{{route('bundlebill')}}">bundle discounts</a>.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Will the policies be valid in my country?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, your policy disclosures will be based on the location you provide in the questionnaire.</p>
                </div>
            </div>

            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                        v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">When will I be able to download my policy?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">You'll be able to download it as soon as you complete the questionnaire.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h6 class="acc-title" itemprop="name">Do your policies comply with the CCPA and GDPR?</h6></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, our policies are fully compliant with the CCPA and GDPR requirements.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Do you offer refunds for premium policies?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, if you're unhappy with your policy for any reason we will issue a <a href="#">full refund</a>.</p>
                </div>
            </div>
            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Can you host my policies for me?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, we can host your policies for you on our own servers at no extra charge to you.</p>
                </div>
            </div>

            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                <div class="aks-accordion-item-row">
                    <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
<path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                        v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
<path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>
                    </div>
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Have more questions?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text"><a href="{{route('contact_us')}}">Get in touch</a> with us and we'll be happy to assist you.</p>
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
@section('js')
<script src="{{asset('asset/js/accordian.js')}}"></script>
@endsection