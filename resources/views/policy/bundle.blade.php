@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <style type="text/css">
        .form_part {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Complete legal compliance and protection</div>
                    <div class="row-subtitle" style="color: #fff;">Save over 50% by purchasing multiple premium policies at the same time</div>
                    <!-- <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="{{ asset('images/service-icon1.svg')}}" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <form id="payment_form" action="{{url('/bundle-billing?form-id='.$newunique) }}" method="post">
                @csrf
                <div class="form-group form_part">
                    <label class="control-label col-sm-12 pb-2" for="url"><h3>Order Now</h3></label>
                    <div class="col-sm-12 d-none">
                      <div class="form-check">
                        <input class="form-check-input Acceptable" type="checkbox" name="url[]" value="acceptable-use-premium-policy" id="" />
                        <label class="form-check-label" for="">Premium acceptable use policy</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input Cookie" type="checkbox" name="url[]" value="cookie-premium-policy" id="" />
                        <label class="form-check-label" for="">Premium cookie policy</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input Disclaimer" type="checkbox" name="url[]" value="disclaimer-premium-policy" id="" />
                        <label class="form-check-label" for="">Premium disclaimer</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input DMCA" type="checkbox" name="url[]" value="dmca-premium-policy" id="" />
                        <label class="form-check-label" for="">Premium DMCA policy</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input Privacy" type="checkbox" name="url[]" value="privacy-premium-policy" id="" />
                        <label class="form-check-label" for="">Premium privacy policy</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input Refund" type="checkbox" name="url[]" value="refund-premium-policy" id="" />
                        <label class="form-check-label" for="">Premium refund policy</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input Terms" type="checkbox" name="url[]" value="terms-and-conditions-premium-policy" id="" />
                        <label class="form-check-label" for="">Premium terms and conditions</label>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="policies[]" value="Acceptable Policy" id="Acceptable" />
                        <label class="form-check-label" for="Acceptable">Premium acceptable use policy</label><!-- &nbsp;<i class="fa fa-question-circle" aria-hidden="true"> --></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="policies[]" value="Cookie Policy" id="Cookie" />
                        <label class="form-check-label" for="Cookie">Premium cookie policy</label><!-- &nbsp;<i class="fa fa-question-circle" aria-hidden="true"> --></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="policies[]" value="Disclaimer Policy" id="Disclaimer" />
                        <label class="form-check-label" for="Disclaimer">Premium disclaimer</label><!-- &nbsp;<i class="fa fa-question-circle" aria-hidden="true"> --></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="policies[]" value="DMCA Policy" id="DMCA" />
                        <label class="form-check-label" for="DMCA">Premium DMCA policy</label><!-- &nbsp;<i class="fa fa-question-circle" aria-hidden="true"> --></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="policies[]" value="Privacy Policy" id="Privacy" />
                        <label class="form-check-label" for="Privacy">Premium privacy policy</label><!-- &nbsp;<i class="fa fa-question-circle" aria-hidden="true"> --></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="policies[]" value="Refund Policy" id="Refund" />
                        <label class="form-check-label" for="Refund">Premium refund policy</label><!-- &nbsp;<i class="fa fa-question-circle" aria-hidden="true"> --></i>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="policies[]" value="Terms and Conditions" id="Terms" />
                        <label class="form-check-label" for="Terms">Premium terms and conditions</label><!-- &nbsp;<i class="fa fa-question-circle" aria-hidden="true"> --></i>
                      </div>
                    </div>
                </div>
                <div class="form-group form_part" id="bundle_price">
                    <label class="col-sm-12 pb-2" for=""><h5>Total cost</h5></label>
                    <div class="field"> 
                        <span class="price">
                            <span class="amount"></span>
                            (<span class="discount"></span>one time payment, no recurring fees)
                            <span class="discount-extra"></span>
                        </span>
                        <span>
                            * Select at least 2 policies above
                        </span>
                    </div>
                </div>
                <div class="form-group form_part">
                    <label class="control-label col-sm-12 pb-2" for="email" required="required">Your email address</label>
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control form_font" id="email" name="email" maxlength="255">
                    </div>
                    <span class="help">You will receive login details to this email address to access your policies</span>
                </div>
                <div class="form-group form_part">
                    <div class="col-sm-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" value="1" id="terms" />
                            <label class="form-check-label" for="terms">I have read and agree to the <a target="_blank" href="legal">terms of service</a>.</label>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="ybtn ybtn-header-color">Proceed to payment</button>
                </div>
            </form>
            </div>
            <div class="col-lg-6">
                <h3>What you get</h3>
                <ul class="list-icons tick">
                    <li>Comprehensive clauses for extended protection</li>
                    <li>Option to create your own custom clauses</li>
                    <li>Policies suitable for commercial use</li>
                    <li>Fill in the questionnaires at any time</li>
                    <li>Free lifetime updates and automatic notifications</li>
                    <li>One time payment and instant download</li>
                    <li>Lifetime access to all your policies</li>
                    <li><a href="">100% money back guarantee</a></li>
                </ul>
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
<script type="text/javascript">
$(function(){
  $('#Acceptable').on('change',function(){ $('.Acceptable').prop('checked',$(this).prop('checked')); });
  $('#Cookie').on('change',function(){ $('.Cookie').prop('checked',$(this).prop('checked')); });
  $('#Disclaimer').on('change',function(){ $('.Disclaimer').prop('checked',$(this).prop('checked')); });
  $('#DMCA').on('change',function(){ $('.DMCA').prop('checked',$(this).prop('checked')); });
  $('#Privacy').on('change',function(){ $('.Privacy').prop('checked',$(this).prop('checked')); });
  $('#Refund').on('change',function(){ $('.Refund').prop('checked',$(this).prop('checked')); });
  $('#Terms').on('change',function(){ $('.Terms').prop('checked',$(this).prop('checked')); });
});
</script>
<script>
    function loadBundle() {
        $("input.checkbox").click(function (e) {
            var $fullprices = { 
            "1": "<?php $price = DB::table('price')->where('id', '1')->first(); echo $price->price; ?>",
            "2": "<?php $price = DB::table('price')->where('id', '3')->first(); echo $price->price; ?>",
            "3": "<?php $price = DB::table('price')->where('id', '4')->first(); echo $price->price; ?>",
            "4": "<?php $price = DB::table('price')->where('id', '5')->first(); echo $price->price; ?>",
            "5": "<?php $price = DB::table('price')->where('id', '6')->first(); echo $price->price; ?>",
            "6": "<?php $price = DB::table('price')->where('id', '7')->first(); echo $price->price; ?>",
            "7": "<?php $price = DB::table('price')->where('id', '8')->first(); echo $price->price; ?>" };

            var $prices = { 
            "1": "<?php $price = DB::table('price')->where('id', '1')->first(); echo $price->deal_price; ?>",
            "2": "<?php $price = DB::table('price')->where('id', '3')->first(); echo $price->deal_price; ?>",
            "3": "<?php $price = DB::table('price')->where('id', '4')->first(); echo $price->deal_price; ?>",
            "4": "<?php $price = DB::table('price')->where('id', '5')->first(); echo $price->deal_price; ?>",
            "5": "<?php $price = DB::table('price')->where('id', '6')->first(); echo $price->deal_price; ?>",
            "6": "<?php $price = DB::table('price')->where('id', '7')->first(); echo $price->deal_price; ?>",
            "7": "<?php $price = DB::table('price')->where('id', '8')->first(); echo $price->deal_price; ?>" };

            var $discounts = { "1": "0", "2": "25", "3": "30", "4": "35", "5": "40", "6": "45", "7": "50" };

            if ($("input.checkbox:checked").length > 1) {
                $("#bundle_price div.field span.price span.amount").html(
                    '<strike style="color:#CD0004">$' +
                        $fullprices[$("input.checkbox:checked").length] +
                        "</strike> <strong>$" +
                        $prices[$("input.checkbox:checked").length] +
                        "</strong>"
                );
                $("#bundle_price div.field span.price span.discount").html("over " + $discounts[$("input.checkbox:checked").length] + "% off, ");
                $("#bundle_price div.field span.price").show();
                $("#bundle_price div.field span.none").hide();
            }
            else if ($("input.checkbox:checked").length == 1) {
                $("#bundle_price div.field span.price span.amount").html(
                    "<strong>$" + $prices[$("input.checkbox:checked").length] + "</strong>"
                );
                $("#bundle_price div.field span.price span.discount").html("");
                $("#bundle_price div.field span.price").show();
                $("#bundle_price div.field span.none").hide();
            } else {
                $("#bundle_price div.field span.none").show();
                $("#bundle_price div.field span.price").hide();
            }

            return true;
        });
    }
    $(function () {
        loadBundle();
    });
</script>
@endsection