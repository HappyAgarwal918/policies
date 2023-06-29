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
                <div class=""><h4 class="refund-form-heading"><!-- text using policy.js script --></h4></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="{{url('/refund-policy-review?form-id='.$id)}}" method="post" id="multistep_form">
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
                <span class="help">Your refund policy will be adapted for the location you select.</span>
                <label id="c_id-error" class="error" for="c_id"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="platforms">What will this refund policy be used for?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms" id="platforms1" value="Mobile App Name">
                    <label class="form-check-label form_font" for="platforms1">Mobile app, this policy will be used for a mobile app.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms" id="platforms2" value="Website URL">
                    <label class="form-check-label form_font" for="platforms2">Website, this policy will be used for a website.</label>
                  </div>
                </div>
                <label id="platforms-error" class="error" for="platforms"></label>
              </div>
              <div class="form-group form_part platforms1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="mobile_name">What is the name of your mobile application?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="mobile_name" name="mobile_name" maxlength="128">
                </div>
                <span class="help">e.g. My Mobile App</span>
                <label id="mobile_name-error" class="error" for="mobile_name"></label>
              </div>
              <div class="form-group form_part platforms1-2 hidden">
                <label class="control-label col-sm-12 pb-2" for="website_url">What is the URL of your website?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="website_url" name="website_url" maxlength="128">
                </div>
                <span class="help">e.g. https://www.website.com</span>
                <label id="website_url-error" class="error" for="website_url"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="premium">Would you like to create a premium refund policy with additional clauses and provisions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium1" value="1">
                    <label class="form-check-label form_font" for="premium1">Yes, I would like to create a premium refund policy.</label>
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
                      Premium refund policy includes additional disclosures that cover tangible products, certain refund conditions and other topics not covered by the basic free policy.
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
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
              </div>
              <div class="form-group form_part">
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
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">33%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="sell">What types of products or services do you offer?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sell" id="sell1" value="tangible">
                    <label class="form-check-label form_font" for="sell1">Tangible products (items that you ship to customers)</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sell" id="sell2" value="digital">
                    <label class="form-check-label form_font" for="sell2">Digital products (item customers download)</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sell" id="sell3" value="online">
                    <label class="form-check-label form_font" for="sell3">Online services (recurring memberships or other non-downloadable services)</label>
                  </div>
                </div>
                <label id="sell-error" class="error" for="sell"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form4">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">42%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="trials">Do you offer free trials for your online membership or services?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="trials" id="trials1" value="1">
                    <label class="form-check-label form_font" for="trials1">Yes, we offer free trials so customers can try the service before buying.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="trials" id="trials2" value="0">
                    <label class="form-check-label form_font" for="trials2">No, services are not available for trial.</label>
                  </div>
                </div>
                <label id="trials-error" class="error" for="trials"></label>
              </div>
              <div class="form-group form_part trials1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="trials_days">How many days do trial accounts expire after?</label>
                <div class="col-sm-3">
                  <select class="form-control form_font" id="trials_days1" name="trials_days">
                    <option value="" selected="selected">Select Country</option>
                    <option value="1">1 day</option>
                    <option value="3">3 days</option>
                    <option value="7">7 days</option>
                    <option value="14">14 days</option>
                    <option value="30">30 days</option>
                    <option value="60">60 days</option>
                    <option value="90">90 days</option>
                    <option value="180">180 days</option>
                    <option value="365">365 days</option>
                  </select>
                </div>
                <label id="trials_days-error" class="error" for="trials_days"></label>
              </div>
              <div class="form-group form_part trials1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="trials_functional">Are trial accounts fully functional?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="trials_functional" id="trials_functional1" value="1">
                    <label class="form-check-label form_font" for="trials_functional1">Yes, trial accounts are without any limitations.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="trials_functional" id="trials_functional2" value="0">
                    <label class="form-check-label form_font" for="trials_functional2">No, trial accounts have some limitations.</label>
                  </div>
                </div>
                <label id="trials_functional-error" class="error" for="trials_functional"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form5">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 57%;" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="accept">Do you offer refunds?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="accept" id="accept1" value="1">
                    <label class="form-check-label form_font" for="accept1">Yes, we offer refunds.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="accept" id="accept2" value="0">
                    <label class="form-check-label form_font" for="accept2">No, we don't issue any refunds, all purchases are final.</label>
                  </div>
                </div>
                <label id="accept-error" class="error" for="accept"></label>
              </div>
              <div class="form-group form_part accept1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="days">How many days do trial accounts expire after?</label>
                <div class="col-sm-3">
                  <select class="form-control form_font" id="days1" name="days">
                    <option value="" selected="selected">Select Country</option>
                    <option value="1">1 day</option>
                    <option value="3">3 days</option>
                    <option value="7">7 days</option>
                    <option value="14">14 days</option>
                    <option value="30">30 days</option>
                    <option value="60">60 days</option>
                    <option value="90">90 days</option>
                    <option value="180">180 days</option>
                    <option value="365">365 days</option>
                  </select>
                </div>
                <label id="days-error" class="error" for="days"></label>
              </div>
              <div class="form-group form_part accept1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="money_back">Do you offer money back guarantee?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="money_back" id="money_back1" value="1">
                    <label class="form-check-label form_font" for="money_back1">Yes, we have a "no questions asked" money back guarantee.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="money_back" id="money_back2" value="0">
                    <label class="form-check-label form_font" for="money_back2">No, certain conditions must be met.</label>
                  </div>
                </div>
                <label id="money_back-error" class="error" for="money_back"></label>
              </div>
              <div class="form-group form_part money_back2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="conditions">What conditions must be met to qualify for a refund?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="conditions[]" id="conditions1" value="account">
                    <label class="form-check-label form_font" for="conditions1">Customer's account must be in good standing</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="conditions[]" id="conditions2" value="not_downloaded">
                    <label class="form-check-label form_font" for="conditions2">Product must not be downloaded</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="conditions[]" id="conditions3" value="uninstalled">
                    <label class="form-check-label form_font" for="conditions3">Product must not be installed or activated</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="conditions[]" id="conditions4" value="deleted">
                    <label class="form-check-label form_font" for="conditions4">Product must be deleted</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="conditions[]" id="conditions5" value="incompatible">
                    <label class="form-check-label form_font" for="conditions5">Product is incompatible</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="conditions[]" id="conditions6" value="corrupt">
                    <label class="form-check-label form_font" for="conditions6">Product malfunctions or doesn't work as described</label>
                  </div>
                </div>
              </div>
              <div class="form-group form_part money_back2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="refuse">Do you reserve the right not to issue a refund if the above conditions are not met?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="refuse" id="refuse1" value="1">
                    <label class="form-check-label form_font" for="refuse1">Yes, we may decline a refund if the above conditions are not met.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="refuse" id="refuse2" value="0">
                    <label class="form-check-label form_font" for="refuse2">No, we will issue a refund regardless.</label>
                  </div>
                </div>
                <label id="refuse-error" class="error" for="refuse"></label>
              </div>
              <div class="form-group form_part accept1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="prorate">Do you issue prorated refunds?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="prorate" id="prorate1" value="1">
                    <label class="form-check-label form_font" for="prorate1">Yes, we refund only for the unused portion of the service.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="prorate" id="prorate2" value="0">
                    <label class="form-check-label form_font" for="prorate2">No, the amount paid is refunded in full regardless of usage.</label>
                  </div>
                </div>
                <label id="prorate-error" class="error" for="prorate"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form6">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100">71%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="offer">Do you offer additional services with the purchase (such as product installation, technical support, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="offer" id="offer1" value="1">
                    <label class="form-check-label form_font" for="offer1">Yes, we offer additional services.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="offer" id="offer2" value="0">
                    <label class="form-check-label form_font" for="offer2">No, we don't offer any additional services.</label>
                  </div>
                </div>
                <label id="offer-error" class="error" for="offer"></label>
              </div>
              <div class="form-group form_part offer1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="fee">Do you withhold anything for provided services when issuing refunds?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fee" id="fee1" value="1">
                    <label class="form-check-label form_font" for="fee1">Yes, we may withhold a certain amount or charge customer depending on provided services.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fee" id="fee2" value="0">
                    <label class="form-check-label form_font" for="fee2">No, we refund full amount.</label>
                  </div>
                </div>
                <label id="fee-error" class="error" for="fee"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form7">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
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
<script src="{{asset('asset/js/refund-policy.js')}}"></script>
@endsection