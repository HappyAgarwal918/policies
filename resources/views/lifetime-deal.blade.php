@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
<style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Inter&display=swap");
body {
  margin: 0;
  padding: 0;
  font-family: "Inter", sans-serif;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  padding-top: 2rem;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

[data-ripple] {
  position: relative;
  overflow: hidden;
}

.ripple-effect {
  position: absolute;
  border-radius: 9999px;
  animation: ripple-animation 2s;
}

@keyframes ripple-animation {
  from {
    transform: scale(1);
    opacity: 0.4;
  }
  to {
    transform: scale(100);
    opacity: 0;
  }
}

.aks-accordion {
  margin: 0 auto;
}
.aks-accordion-row {
}
.aks-accordion-item {
  width: 100%;
  border-bottom: 1px solid #e0e0e0;
  padding-top: 20px;
  padding-right: 5px;
  padding-bottom: 12px;
  padding-left: 5px;
  cursor: pointer;
}
.aks-accordion-item-row {
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
.aks-accordion-item-icon {
  width: 25px;
  height: 25px;
  background: #252525;
  border-radius: 9999px;
  cursor: pointer;
  user-select: none;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 1rem;
  text-align: center;
}
.aks-accordion-item-icon svg {
  width: 15px;
  fill: white;
  margin: 0 auto;
}
.aks-accordion-item-title {
  width: 90%;
  text-align: left;
  line-height: 1.5;
  display: flex;
  align-items: center;
}
.aks-accordion-item-title h4 {
  margin: 0;
}
.aks-accordion-item-content {
  display: none;
  width: 100%;
  padding-top: 12px;
  padding-right: 8px;
  padding-bottom: 0;
  padding-left: 42px;
  overflow: hidden;
  word-break: break-word;
  width: 88%;
  text-align: left;
  line-height: 1.5;
}

.aks-accordion-item.opened .aks-accordion-item-icon-open {
  display: none;
}
.aks-accordion-item-icon-close {
  display: none;
}
.aks-accordion-item.opened .aks-accordion-item-icon-close {
  display: block;
}

@media screen and (max-width: 500px) {
  .aks-accordion {
    width: 100%;
  }
  .aks-accordion-item-content {
    padding-left: 11px;
    width: 92%;
  }
}
@media screen and (min-width: 500px) {
    .acc-title{
        font-size: 18px;
    }
}


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
                    <div class="page-title">EXCLUSIVE LIFETIME DEAL FOR AGENCIES</div>
                    <div class="row-subtitle" style="color: #fff;">Boost your profits in minutes and with no extra work by upselling your clients attorney-drafted legal policies.</div>
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
<div class="container-fluid sfeatures">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <ul class="list-icons tick ps-0">
                    <li>Create <strong>unlimited premium policies</strong> for yourself &amp; your clients</li>
                    <li>Comprehensive questionnaires the best for legal coverage</li>
                    <li>Policies are tailored specifically to your requirements</li>
                    <li>Option to create your own custom clauses</li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-6">
                <ul class="list-icons tick ps-0">
                    <li>One time payment, no recurring fees ever</li>
                    <li>Fill in the questionnaires at any time</li>
                    <li>Automatic notifications on updates</li>
                    <li>100% money back guarantee</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Get it now for only <strike style="color: #cd0004;">$<?php echo $price->price; ?></strike> $<?php echo $price->deal_price; ?></span> / one time</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
    <div class="container">
        <div class="panel-group">
            <div class="panel panel-primary">
              <center>
                <form id="payment_form" action="" method="post">
                    @csrf
                    <div class="panel-body">
                    @auth
                        <div class="form-group form_part">
                            <label class="control-label col-sm-12 pb-2" for="name">What is your first name?</label>
                            <div class="col-sm-6"> 
                              <input type="text" class="form-control form_font" id="name" name="name" maxlength="255">
                            </div>
                        </div>
                        <div class="form-group form_part">
                            <label class="control-label col-sm-12 pb-2" for="email">Your email address?</label>
                            <div class="col-sm-6"> 
                              <input type="text" class="form-control form_font" id="email" name="email" maxlength="255" value="<?php $id = Auth::user()->first(); echo $id->email; ?>" readonly="readonly">
                            </div>
                            <span class="help">We will send instructions to this email address on how to access and create your policies</span>
                        </div>
                        <div>
                            <button type="submit" class="ybtn ybtn-accent-color">Yes, I want this deal</button>
                        </div>
                    @endauth
                    @guest
                        <div class="form-group form_part">
                            <label class="control-label col-sm-12 pb-2" for="name">What is your first name?</label>
                            <div class="col-sm-6"> 
                              <input type="text" class="form-control form_font" id="name" name="name" maxlength="255">
                            </div>
                        </div>
                        <div class="form-group form_part">
                            <label class="control-label col-sm-12 pb-2" for="email">Your email address?</label>
                            <div class="col-sm-6"> 
                              <input type="text" class="form-control form_font" id="email" name="email" maxlength="255">
                            </div>
                            <span class="help">We will send instructions to this email address on how to access and create your policies</span>
                        </div>
                        <div class="form-group form_part">
                            <label class="control-label col-sm-12 pb-2" for="password">Set Your Password</label>
                            <div class="col-sm-6"> 
                              <input type="text" class="form-control form_font" id="password" name="password" maxlength="255">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="ybtn ybtn-accent-color">Yes, I want this deal</button>
                        </div>
                    @endguest
                    </div>
                </form>
              </center>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="alert alert-warning" role="alert">
      <b>Warning:</b> This deal will close soon and without notice. Secure it now before it's gone.
    </div>
</div>

<div id="testimonials" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container p-5">
        <h2 class="text-center margin-bottom-large">Frequently asked questions</h2>
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
                <div class="aks-accordion-item-title"><h6 class="acc-title" itemprop="name">Is it really one a one time fee?</h6></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, we are offering lifetime unlimited premium policies for a one time fee. This is a limited time offer and will close without any notice so get it before it's too late.</p>
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
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Will I get free lifetime updates?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, you may save <span class="underline ul-purple">Yes, you will continue to receive free updates to your policies when laws and regulations change so you could focus on your business and not the legal stuff.</p>
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
                <div class="aks-accordion-item-title"><h5 class="acc-title" itemprop="name">Can I create policies for my clients?</h5></div>
                </div>
                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                    <p itemprop="text">Yes, you may create as many policies as you like for yourself and for your clients. It's a perfect solution for agencies, bloggers, web developers and entrepreneurs.</p>
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
                <div class="text-other-color1">Secure this deal now before it's gone</div>
                <div class="text-other-color2">This deal will close soon any without notice. We will not be offering it again.</div>
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
<script type="text/javascript">
    (function () {
  "use strict";
  var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
    return function (arg) {
      if (this.length > 1) {
        this.each(function () {
          var $this = $(this);

          if (!$this.data(ident)) {
            $this.data(ident, func($this, arg));
          }
        });

        return this;
      } else if (this.length === 1) {
        if (!this.data(ident)) {
          this.data(ident, func(this, arg));
        }

        return this.data(ident);
      }
    };
  });
})();

(function () {
  "use strict";
  function Accordion($roots) {
    var element = $roots;
    var accordion = $roots.first("[data-accordion]");
    var accordion_target = $roots.find("[data-accordion-item]");
    var accordion_content = $roots.find("[data-accordion-content]");
    $(accordion_target).click(function () {
      $(this).toggleClass("opened");
      $(this).find(accordion_content).slideToggle("slow");
      $(this).siblings().find(accordion_content).slideUp("slow");
      $(this).siblings().removeClass("opened");
    });
  }
  $.fn.Accordion = jQueryPlugin("Accordion", Accordion);
  $("[data-accordion]").Accordion();

  function Ripple_Button($root) {
    var elements = $root;
    var ripple_btn = $root.first("[data-ripple]");
    $(ripple_btn).on("click", function (event) {
      event.preventDefault();
      var $div = $("<div/>"),
        btnOffset = ripple_btn.offset(),
        xPos = event.pageX - btnOffset.left,
        yPos = event.pageY - btnOffset.top;
      $div.addClass("ripple-effect");
      $div.css({
        height: ripple_btn.height(),
        width: ripple_btn.height(),
        top: yPos - $div.height() / 2,
        left: xPos - $div.width() / 2,
        background: ripple_btn.data("ripple") || "#ffffff26"
      });
      ripple_btn.append($div);

      window.setTimeout(function () {
        $div.remove();
      }, 2000);
    });
  }
  $.fn.Ripple_Button = jQueryPlugin("Ripple_Button", Ripple_Button);
  $("[data-ripple]").Ripple_Button();
})();

</script>
@endsection