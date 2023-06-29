@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policy.css')}}">
@endsection

@section('content')

@php $id = $_GET['form-id']; @endphp

<div class="policy-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=""><h4 class="cookie-form-heading"><!-- text using policy.js script --></h4></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="{{url('cookie-policy-review?form-id='.$id)}}" method="post" id="multistep_form">
          @csrf
          <div class="tab" id="form1">
            @if (isset($data) && auth()->user()->admin == '1' || isset($data) && auth()->user()->admin == '2')
            <input type="hidden" name="adminn" value="1"/>
            @else <input type="hidden" name="adminn" value="0"/> @endif
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">0%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="c_id">Where are you located?</label>
                <div class="col-sm-6" style="display: flex;">
                  <select class="form-control form_font" id="c_id" name="c_id">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                    <option value="{{ $country->value }}">{{ $country->name }}</option>
                    @endforeach
                  </select>
                  @php $states = DB::table('state')->get(); @endphp
                  <select class="form-control form_font d-none" id="s_id" name="s_id">
                    <option value="">Select State</option>
                    @foreach($states as $state)
                    <option value="{{ $state->value }}">{{ $state->name }}</option>
                    @endforeach
                  </select>
                </div>
                <span class="help">Your cookie policy will be adapted for the location you select.</span>
                <label id="c_id-error" class="error" for="c_id"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="website_url">What is the URL of your website?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="website_url" name="website_url" maxlength="128">
                </div>
                <span class="help">e.g. https://www.website.com</span>
                <label id="website_url-error" class="error" for="website_url"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="premium">Would you like to create a premium Cookie policy with additional clauses and provisions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium1" value="1">
                    <label class="form-check-label form_font" for="premium1">Yes, I would like to create a premium cookie policy.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium2" value="0">
                    <label class="form-check-label form_font" for="premium2">No, basic policy is fine.</label>
                  </div>
                </div>
                <label id="premium-error" class="error" for="premium"></label>
              </div>
              <div class="premium hidden">
                  <div class="alert alert-warning" role="alert">
                      Premium cookie policy includes additional clauses and provisions not covered by the basic free policy for the best legal compliance and protection.
                  </div>
                  <h5 class="margin-bottom-tiny">Premium policy highlights</h5>
                  <div class="row">
                      <ul class="list-icons tick col-ms-12 col-sm-6 no-margin-bottom">
                          <li>Suitable for commercial websites and apps</li>
                          <li>Additional clauses for extended protection</li>
                          <li>Option to create your own custom clauses</li>
                          <li>Removable Legal Policies branding</li>
                      </ul>
                      <ul class="list-icons tick col-ms-12 col-sm-6">
                          <li>One time payment and instant download</li>
                          <li>Free updates and automatic notifications</li>
                          <li>Lifetime access to all your policies</li>
                          <li><a data-role="modal" data-src="#refund-modal" onclick="return false" href="cookie-policy#">100% money back guarantee</a></li>
                      </ul>
                  </div>
                  <div class="row">
                      <div class="col-sm-6">
                          <h5 class="margin-bottom-tiny">Pricing</h5>
                          <p class="no-margin-bottom">${{ $price->deal_price }}(one time payment, no recurring fees)</p>
                      </div>
                      <div class="col-sm-6">
                          <h5 class="">Looking for the best deal?</h5>
                          <p class="">Check out our <a href="{{route('bundlebill')}}">discounted bundles</a></p>
                      </div>
                  </div>
              </div>
              <div class="basic hidden">
                <div class="alert alert-warning" role="alert">
                    FREE! Not suitable for commercial use (websites and apps that display ads, have affiliate links, or accept payments of any kind and for any purpose). See <a class="underline ul-red" target="_blank" href="{{ route ('pricing')}}">comparison table</a> for details.
                </div>
              </div>
            </div>
          </div>
            
          <div class="tab" id="form2">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 12%;" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="company">Do you operate your website under a company name?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="company" id="company1" value="1">
                    <label class="form-check-label form_font" for="company1">Yes, it’s operated under a company name.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="company" id="company2" value="0">
                    <label class="form-check-label form_font" for="company2">No, it’s operated by an individual.</label>
                  </div>
                </div>
                <label id="company-error" class="error" for="company"></label>
              </div>
              <div class="form-group form_part company1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="company_name">What is your company name?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="company_name" name="company_name" maxlength="128">
                </div>
                <span class="help">e.g. My Company Inc.</span>
                <label id="company_name-error" class="error" for="company_name"></label>
              </div>
            </div>
          </div>
            
          <div class="tab" id="form3">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="privacy_policy">Do you have a privacy policy on your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="privacy_policy" id="privacy_policy1" value="1">
                    <label class="form-check-label form_font" for="privacy_policy1">Yes, I already have a valid privacy policy on my website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="privacy_policy" id="privacy_policy2" value="0">
                    <label class="form-check-label form_font" for="privacy_policy2">No, I don't have a privacy policy yet.</label>
                  </div>
                </div>
                <label id="privacy_policy-error" class="error" for="privacy_policy"></label>
              </div>
              <div class="form-group form_part privacy_policy1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="privacy_policy_url">What is the location of your privacy policy?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="privacy_policy_url" name="privacy_policy_url" maxlength="128">
                </div>
                <span class="help">e.g. https://www.website.com/privacy</span>
                <label id="privacy_policy_url-error" class="error" for="privacy_policy_url"></label>
              </div>
              <div class="basic privacy_policy2-1 hidden">
                <div class="alert alert-warning" role="alert">Don't have a privacy policy? <a target="_blank" href="{{ route('privacygenerator')}}">Create one now</a> to ensure compliance with the privacy laws.</div>
              </div>
            </div>
          </div>

          <div class="tab" id="form4">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100">37%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="essential">Do you use essential cookies on your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="essential" id="essential1" value="1">
                    <label class="form-check-label form_font" for="essential1">Yes, essential cookies are used on my website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="essential" id="essential2" value="0">
                    <label class="form-check-label form_font" for="essential2">No, my website does not use essential cookies.</label>
                  </div>
                </div>
                <label id="essential-error" class="error" for="essential"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="functionality">Do you use functionality cookies on your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="functionality" id="functionality1" value="1">
                    <label class="form-check-label form_font" for="functionality1">Yes, functionality cookies are used on my website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="functionality" id="functionality2" value="0">
                    <label class="form-check-label form_font" for="functionality2">No, my website does not use functionality cookies.</label>
                  </div>
                </div>
                <label id="functionality-error" class="error" for="functionality"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="third_party">Do you use third party cookies on your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="third_party" id="third_party1" value="1">
                    <label class="form-check-label form_font" for="third_party1">Yes, third party cookies are used on my website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="third_party" id="third_party2" value="0">
                    <label class="form-check-label form_font" for="third_party2">No, my website does not use third party cookies.</label>
                  </div>
                </div>
                <label id="third_party-error" class="error" for="third_party"></label>
              </div>
              <div class="form-group form_part third_party1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="ads">Do you use advertising cookies on your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="ads10" value="1">
                    <label class="form-check-label form_font" for="ads10">Yes, advertising cookies are used on my website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="ads20" value="0">
                    <label class="form-check-label form_font" for="ads20">No, my website does not use advertising cookies.</label>
                  </div>
                </div>
                <label id="ads-error" class="error" for="ads"></label>
              </div>
              <div class="form-group form_part ads10-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="cookies_ads_personal_info">Do you share your users' personally identifiable information with the advertisers through cookies?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_ads_personal_info" id="cookies_ads_personal_info1" value="1">
                    <label class="form-check-label form_font" for="cookies_ads_personal_info1">Yes, advertisers may obtain some personally identifiable information through cookies.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_ads_personal_info" id="cookies_ads_personal_info2" value="0">
                    <label class="form-check-label form_font" for="cookies_ads_personal_info2">No, adverisers do not have any access to users' personally identifiable information through cookies.</label>
                  </div>
                </div>
                <label id="cookies_ads_personal_info-error" class="error" for="cookies_ads_personal_info"></label>
              </div>
              <div class="form-group form_part third_party1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="cookies_analytical">Do you use analytical cookies on your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_analytical" id="cookies_analytical1" value="1">
                    <label class="form-check-label form_font" for="cookies_analytical1">Yes, analytical cookies are used on my website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_analytical" id="cookies_analytical2" value="0">
                    <label class="form-check-label form_font" for="cookies_analytical2">No, my website does not use analytical cookies.</label>
                  </div>
                </div>
                <label id="cookies_analytical-error" class="error" for="cookies_analytical"></label>
              </div>
              <div class="form-group form_part third_party1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="cookies_social">Do you use social media cookies on your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_social" id="cookies_social1" value="1">
                    <label class="form-check-label form_font" for="cookies_social1">Yes, social media cookies are used on my website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_social" id="cookies_social2" value="0">
                    <label class="form-check-label form_font" for="cookies_social2">No, my website does not use social media cookies.</label>
                  </div>
                </div>
                <label id="cookies_social-error" class="error" for="cookies_social"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form5">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="cookies_disable">Can users disable cookies and still use your website without any restrictions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_disable" id="cookies_disable1" value="1">
                    <label class="form-check-label form_font" for="cookies_disable1">Yes, my website will work fine even if cookies are disabled.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_disable" id="cookies_disable2" value="0">
                    <label class="form-check-label form_font" for="cookies_disable2">No, certain features and functionality may not be available without cookies.</label>
                  </div>
                </div>
                <label id="cookies_disable-error" class="error" for="cookies_disable"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form6">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">62%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="beacons">Do you use web beacons and tracking pixels?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="beacons" id="beacons1" value="1">
                    <label class="form-check-label form_font" for="beacons1">Yes, web beacons and tracking pixels are used on my website or in the emails.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="beacons" id="beacons2" value="0">
                    <label class="form-check-label form_font" for="beacons2">No, my website and emails do not contain web beacons and tracking pixels.</label>
                  </div>
                </div>
                <label id="beacons-error" class="error" for="beacons"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form7">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="suspendd">How can users contact you regarding this policy?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="contacts[]" value="form" id="contacts_form" />
                    <label class="form-check-label" for="contacts_form">Contact form</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="contacts[]" value="email" id="contacts_email" />
                    <label class="form-check-label" for="contacts_email">Email address</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="contacts[]" value="address" id="contacts_address" />
                    <label class="form-check-label" for="contacts_address">Business address</label>
                  </div>
                </div>
                <label id="contacts-error" class="error" for="contacts"></label>
              </div>
              <div class="form-group form_part contacts_form-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="contact_form">What is the URL of your contact form?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="contact_form" name="contact_form" maxlength="255">
                </div>
                <span class="help">e.g. https://www.website.com/contact</span>
                <label id="contact_form-error" class="error" for="contact_form"></label>
              </div>
              <div class="form-group form_part contacts_email-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="contact_email">What is your email address?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="contact_email" name="contact_email" maxlength="128">
                </div>
                <span class="help">abuse@website.com</span>
                <label id="contact_email-error" class="error" for="contact_email"></label>
              </div>
              <div class="form-group form_part contacts_address-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="contact_address">What is your business address?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="contact_address" name="contact_address" maxlength="255">
                </div>
                <span class="help">e.g. 23 First St, New York, NY, 10010, USA</span>
                <label id="contact_address-error" class="error" for="contact_address"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form8">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">87%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="notify">How will you notify users of this policy updates?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify1" value="page">
                    <label class="form-check-label form_font" for="notify1">Update the modification date at the bottom of the cookie policy page.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify2" value="site">
                    <label class="form-check-label form_font" for="notify2">Post a notification in the mobile app.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify3" value="email">
                    <label class="form-check-label form_font" for="notify3">Notify users via email.</label>
                  </div>
                </div>
                <label id="notify-error" class="error" for="notify"></label>
              </div>
            </div>
          </div>
          <div style="overflow:auto;">
            <div>
                <button type="button" name="previous" class="previous ybtn ybtn-header-color" style="margin: 0px">Previous</button>
                <button type="button" name="next" class="next ybtn ybtn-accent-color" style="margin: 0px">Next</button>
                <button type="submit" name="submit" class="submit ybtn ybtn-accent-color" style="margin: 0px">Next</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script src="{{asset('asset/js/policy.js')}}"></script>
<script src="{{asset('asset/js/cookie-policy.js')}}"></script>
@endsection