@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policy.css')}}">
@endsection

@section('content')

@php $id = $_GET['form-id'];@endphp

<div class="policy-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=""><h4 class="privacy-form-heading"><!-- text using policy.js script --></h4></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="{{url('/privacy-policy-review?form-id='.$id)}}" method="post" id="multistep_form">
          @csrf
          <div id="form1" class="tab">
            @if (isset($data) && auth()->user()->admin == '1' || isset($data) && auth()->user()->admin == '2')
            <input type="hidden" name="adminn" value="1"/>
            @else <input type="hidden" name="adminn" value="0"/> @endif
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 2%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="c_id">Where are you located?</label>
                <div class="col-sm-4" style="display: flex;">
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
                <span class="help">Your privacy policy will be adapted for the location you select.</span>
                <label id="c_id-error" class="error" for="c_id"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="platforms">What will this privacy policy be used for?</label>
                <div class="col-sm-12">
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
                <label class="control-label col-sm-12 pb-2" for="premium">Would you like to create a premium privacy policy with additional clauses and provisions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium1" value="1">
                    <label class="form-check-label form_font" for="premium1">Yes, I would like to create a premium privacy policy.</label>
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
                      Premium privacy policy includes additional clauses and provisions not covered by the basic free policy for the best legal compliance and protection.
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
                          <li><a href="#">100% money back guarantee</a></li>
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
            
          <div id="form2" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">7%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="company">Do you operate your Mobile app/Website under a company name?</label>
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
            
          <div id="form3" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">14%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="register">Can users sign up and create an account in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="register" id="register1" value="1">
                    <label class="form-check-label form_font" for="register1">Yes, users can sign up for an account.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="register" id="register2" value="0">
                    <label class="form-check-label form_font" for="register2">No, users can't sign up or create an account.</label>
                  </div>
                </div>
                <label id="register-error" class="error" for="register"></label>
              </div>
              <div class="form-group form_part register1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="register_social">Can users sign up using social media or other third party accounts (Facebook, Google, Twitter, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="register_social" id="register_social1" value="1">
                    <label class="form-check-label form_font" for="register_social1">Yes, users can sign up using third party accounts.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="register_social" id="register_social2" value="0">
                    <label class="form-check-label form_font" for="register_social2">No, users can't sign up using third party accounts.</label>
                  </div>
                </div>
                <label id="register_social-error" class="error" for="register_social"></label>
              </div>
              <div class="form-group form_part register1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="info_access">Can users view and change their personal information?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="info_access" id="info_access1" value="1">
                    <label class="form-check-label form_font" for="info_access1">Yes, users have full access to their personal information.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="info_access" id="info_access2" value="0">
                    <label class="form-check-label form_font" for="info_access2">No, users don't have access to their information.</label>
                  </div>
                </div>
                <label id="info_access-error" class="error" for="info_access"></label>
              </div>
              <div class="form-group form_part register1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="info_delete">Can users delete their accounts in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="info_delete" id="info_delete1" value="1">
                    <label class="form-check-label form_font" for="info_delete1">Yes, users can delete their accounts at any time.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="info_delete" id="info_delete2" value="0">
                    <label class="form-check-label form_font" for="info_delete2">No, user accounts cannot be deleted.</label>
                  </div>
                </div>
                <label id="info_delete-error" class="error" for="info_delete"></label>
              </div>
              <div class="form-group form_part info_delete1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="info_delete_method">How can users delete their accounts?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info_delete_method[]" id="info_delete_method1" value="self">
                    <label class="form-check-label form_font" for="info_delete_method1">They can log into their account settings page to delete it.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info_delete_method[]" id="info_delete_method2" value="contact">
                    <label class="form-check-label form_font" for="info_delete_method2">They can contact us using the provided contact information.</label>
                  </div>
                </div>
                <label id="info_delete_method-error" class="error" for="info_delete_method"></label>
              </div>
            </div>
          </div>

          <div id="form4" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 21%;" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">21%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="interact">Can users interact with each other in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="interact" id="interact1" value="1">
                    <label class="form-check-label form_font" for="interact1">Yes, users can interact with each other (via comments, messages, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="interact" id="interact2" value="0">
                    <label class="form-check-label form_font" for="interact2">No, users cannot interact with each other.</label>
                  </div>
                </div>
                <label id="interact-error" class="error" for="interact"></label>
              </div>
              <div class="form-group form_part interact1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="info_visible">When users interact, can they see other users' personally identifiable information (names, nicknames, photographs, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="info_visible" id="info_visible1" value="1">
                    <label class="form-check-label form_font" for="info_visible1">Yes, personally identifiable information may be displayed.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="info_visible" id="info_visible2" value="0">
                    <label class="form-check-label form_font" for="info_visible2">No, users remain completely anonymous.</label>
                  </div>
                </div>
                <label id="info_visible-error" class="error" for="info_visible"></label>
              </div>
            </div>
          </div>

          <div id="form5" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">28%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="publish">Can users publish anything in your Mobile app/Website (articles, comments, images, videos, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" id="publish1" value="1">
                    <label class="form-check-label form_font" for="publish1">Yes, users can submit and publish their own content.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" id="publish2" value="0">
                    <label class="form-check-label form_font" for="publish2">No, users can't publish anything.</label>
                  </div>
                </div>
                <label id="publish-error" class="error" for="publish"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="share">Can users share content available in your Mobile app/Website on social networks?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="share1" value="1">
                    <label class="form-check-label form_font" for="share1">Yes, content can be shared on social networks.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="share2" value="0">
                    <label class="form-check-label form_font" for="share2">No, users can't share content on social networks.</label>
                  </div>
                </div>
                <label id="share-error" class="error" for="share"></label>
              </div>
            </div>
          </div>

          <div id="form6" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="california">Does your target audience or users include people in California, USA?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="california" id="california1" value="1">
                    <label class="form-check-label form_font" for="california1">Yes, our target audience or users may include people in California (required for the CCPA compliance).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="california" id="california2" value="0">
                    <label class="form-check-label form_font" for="california2">No, we don't target anyone in California.</label>
                  </div>
                </div>
                <label id="california-error" class="error" for="california"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="europe">Does your target audience or users include people in the European Union?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="europe" id="europe1" value="1">
                    <label class="form-check-label form_font" for="europe1">Yes, our target audience or users may include people in the European Union (required for the GDPR compliance).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="europe" id="europe2" value="0">
                    <label class="form-check-label form_font" for="europe2">No, we don't target anyone in the European Union.</label>
                  </div>
                </div>
                <label id="europe-error" class="error" for="europe"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="teens">Does your target audience or users include people under the age of 18?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="teens" id="teens1" value="1">
                    <label class="form-check-label form_font" for="teens1">Yes, our target audience or users may include people under 18.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="teens" id="teens2" value="0">
                    <label class="form-check-label form_font" for="teens2">No, we don't target people under 18.</label>
                  </div>
                </div>
                <label id="teens-error" class="error" for="teens"></label>
              </div>
              <div class="form-group form_part teens1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="children">Does your target audience or users include children under the age of 13?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="children" id="children1" value="1">
                    <label class="form-check-label form_font" for="children1">Yes, our target audience or users may include children.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="children" id="children2" value="0">
                    <label class="form-check-label form_font" for="children2">No, we don't target children under 13.</label>
                  </div>
                </div>
                <label id="children-error" class="error" for="children"></label>
              </div>
              <div class="form-group form_part children1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="children_info">Do you collect information from anyone under the age of 13?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="children_info" id="children_info1" value="1">
                    <label class="form-check-label form_font" for="children_info1">Yes, we may collect certain information.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="children_info" id="children_info2" value="0">
                    <label class="form-check-label form_font" for="children_info2">No, we don't collect anything from children under 13.</label>
                  </div>
                </div>
                <label id="children_info-error" class="error" for="children_info"></label>
              </div>
              <div class="form-group form_part children_info1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="children_info_misc">Do any of the following items apply?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="children_info_misc[]" id="children_info_misc1" value="minimal">
                    <label class="form-check-label form_font" for="children_info_misc1">We don't require a child to disclose more information than is necessary to use the mobile app.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="children_info_misc[]" id="children_info_misc2" value="manage">
                    <label class="form-check-label form_font" for="children_info_misc2">Parents can review their child's information, delete it, and refuse to allow any further collection or use of such information.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="children_info_misc[]" id="children_info_misc3" value="consent">
                    <label class="form-check-label form_font" for="children_info_misc3">Parents have an easy method for giving consent.</label>
                  </div>
                </div>
                <label id="children_info_misc-error" class="error" for="children_info_misc"></label>
              </div>
            </div>
          </div>

          <div id="form7" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">42%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="sell">Do you currently sell or plan on selling products or services in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sell" id="sell1" value="1">
                    <label class="form-check-label form_font" for="sell1">Yes, we sell products or services or plan to sell in the future.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sell" id="sell2" value="0">
                    <label class="form-check-label form_font" for="sell2">No, we do not and will not sell anything.</label>
                  </div>
                </div>
                <label id="sell-error" class="error" for="sell"></label>
              </div>
              <div class="form-group form_part sell1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="remote">Do you offer third party products or services?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remote" id="remote1" value="1">
                    <label class="form-check-label form_font" for="remote1">Yes, we offer products or services provided by third party companies.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remote" id="remote2" value="0">
                    <label class="form-check-label form_font" for="remote2">No, all products and services are provided by us.</label>
                  </div>
                </div>
                <label id="remote-error" class="error" for="remote"></label>
              </div>
              <div class="form-group form_part remote_share1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="remote_share">Do you offer third party products or services?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remote_share" id="remote_share1" value="1">
                    <label class="form-check-label form_font" for="remote_share1">Yes, we offer products or services provided by third party companies.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remote_share" id="remote_share2" value="0">
                    <label class="form-check-label form_font" for="remote_share2">No, all products and services are provided by us.</label>
                  </div>
                </div>
                <label id="remote_share-error" class="error" for="remote_share"></label>
              </div>
              <div class="form-group form_part sell1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="payments_method">How do your users pay you?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="payments_method[]" id="payments_method1" value="remote">
                    <label class="form-check-label form_font" for="payments_method1">Users can pay via remote third party services (such as PayPal, Stripe, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="payments_method[]" id="payments_method2" value="local">
                    <label class="form-check-label form_font" for="payments_method2">Users can pay directly in the mobile app.</label>
                  </div>
                </div>
                <label id="payments_method-error" class="error" for="payments_method"></label>
              </div>
              <div class="form-group form_part payments_method2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="payments_store">Do you store any sensitive payment information?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payments_store" id="payments_store1" value="1">
                    <label class="form-check-label form_font" for="payments_store1">Yes, we may store payment information for future purchases or recurring billing (such as credit card numbers or tokens).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payments_store" id="suspend2" value="0">
                    <label class="form-check-label form_font" for="suspend2">No, we don't store any sensitive payment information.</label>
                  </div>
                </div>
                <label id="payments_store-error" class="error" for="payments_store"></label>
              </div>
              <div class="form-group form_part payments_method2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="payments_security">Do you have security measures in place to protect sensitive payment information?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payments_security" id="payments_security1" value="1">
                    <label class="form-check-label form_font" for="payments_security1">Yes, we’ve taken all the necessary measures to keep sensitive payment information secure.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payments_security" id="payments_security2" value="0">
                    <label class="form-check-label form_font" for="payments_security2">No, some of the sensitive payment information may not be processed or stored securely (not recommended).</label>
                  </div>
                </div>
                <label id="payments_security-error" class="error" for="payments_security"></label>
              </div>
            </div>
          </div>

          <div id="form8" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="cookiess">Does your website use cookies?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookiess" id="cookiess1" value="1">
                    <label class="form-check-label form_font" for="cookiess1">Yes, we use cookies on the website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookiess" id="cookiess2" value="0">
                    <label class="form-check-label form_font" for="cookiess2">No, we don't use cookies.</label>
                  </div>
                </div>
                <label id="cookiess-error" class="error" for="cookiess"></label>
              </div>
              <div class="form-group form_part cookiess1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="cookies_none">What will happen if user does not allow cookies from your website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_none" id="cookies_none1" value="ok">
                    <label class="form-check-label form_font" for="cookies_none1">It won't affect user experience.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_none" id="cookies_none2" value="partial">
                    <label class="form-check-label form_font" for="cookies_none2">Some features may not be available to user.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cookies_none" id="cookies_none3" value="unusable">
                    <label class="form-check-label form_font" for="cookies_none3">User will not be able to use the website.</label>
                  </div>
                </div>
                <label id="cookies_none-error" class="error" for="cookies_none"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="dnt">Does your website respond to "do not track" signals?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="dnt" id="dnt1" value="1">
                    <label class="form-check-label form_font" for="dnt1">Yes, the website respects and follows the "do not track" signals.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="dnt" id="dnt2" value="0">
                    <label class="form-check-label form_font" for="dnt2">No, the website does not follow or respond to "do not track" signals.</label>
                  </div>
                </div>
                <label id="dnt-error" class="error" for="dnt"></label>
              </div>
            </div>
          </div>

          <div id="form9" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 57%;" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="affiliate_links">Do you have affiliate links in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="affiliate_links" id="affiliate_links1" value="1">
                    <label class="form-check-label form_font" for="affiliate_links1">Yes, there may be affiliate links.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="affiliate_links" id="affiliate_links2" value="0">
                    <label class="form-check-label form_font" for="affiliate_links2">No, there are no affiliate links.</label>
                  </div>
                </div>
                <label id="affiliate_links-error" class="error" for="affiliate_links"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="ads">Do you display ads in your Mobile app/Website (Google AdSense/AdMob, BuySellAds, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="ads15" value="1">
                    <label class="form-check-label form_font" for="ads15">Yes, there may be ads displayed.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="ads25" value="0">
                    <label class="form-check-label form_font" for="ads25">No, there are no ads.</label>
                  </div>
                </div>
                <label id="ads-error" class="error" for="ads"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="remarketing">Do you collect user data for remarketing (via Google, Facebook, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remarketing" id="remarketing1" value="1">
                    <label class="form-check-label form_font" for="remarketing1">Yes, we may do targeted advertising to users based on collected data.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remarketing" id="remarketing2" value="0">
                    <label class="form-check-label form_font" for="remarketing2">No, we don't collect user data for remarketing.</label>
                  </div>
                </div>
                <label id="remarketing-error" class="error" for="remarketing"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="newsletters">Do you send email newsletters to your users?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="newsletters" id="newsletters1" value="1">
                    <label class="form-check-label form_font" for="newsletters1">Yes, users can opt to receive email newsletters from us.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="newsletters" id="newsletters2" value="0">
                    <label class="form-check-label form_font" for="newsletters2">No, we don't send any newsletters.</label>
                  </div>
                </div>
                <label id="newsletters-error" class="error" for="newsletters"></label>
              </div>
              <div class="form-group form_part newsletters1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="newsletters_remote">Do you use third party email service to send email newsletters?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="newsletters_remote" id="newsletters_remote1" value="1">
                    <label class="form-check-label form_font" for="newsletters_remote1">Yes, we rely on third party service to send email newsletters.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="newsletters_remote" id="newsletters_remote2" value="0">
                    <label class="form-check-label form_font" for="newsletters_remote2">No, we send email newsletters using our own servers.</label>
                  </div>
                </div>
                <label id="newsletters_remote-error" class="error" for="newsletters_remote"></label>
              </div>
              <div class="form-group form_part newsletters1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="newsletters_unsubscr">Can users easily unsubscribe from receiving email newsletters?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="newsletters_unsubscr" id="newsletters_unsubscr1" value="1">
                    <label class="form-check-label form_font" for="newsletters_unsubscr1">Yes, users can click on the unsubscribe link in the newsletter.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="newsletters_unsubscr" id="newsletters_unsubscr2" value="0">
                    <label class="form-check-label form_font" for="newsletters_unsubscr2">No, users cannot unsubscribe.</label>
                  </div>
                </div>
                <label id="newsletters_unsubscr-error" class="error" for="newsletters_unsubscr"></label>
              </div>
            </div>
          </div>

          <div id="form10" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="info">What kind of information do you collect from your users?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info[]" value="personal" id="info1" />
                    <label class="form-check-label" for="info1">Personal details (such as name, country of residence, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info[]" value="contact" id="info2" />
                    <label class="form-check-label" for="info2">Contact information (such as email address, address, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info[]" value="account" id="info3" />
                    <label class="form-check-label" for="info3">Account details (such as user name, unique user ID, password, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info[]" value="identity" id="info4" />
                    <label class="form-check-label" for="info4">Proof of identity (such as photocopy of a government ID).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info[]" value="payment" id="info5" />
                    <label class="form-check-label" for="info5">Payment information (such as credit card details, bank details, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info[]" value="people" id="info6" />
                    <label class="form-check-label" for="info6">Information about other individuals (such as your family members, friends, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="info[]" value="other" id="info7" />
                    <label class="form-check-label" for="info7">Any other materials you willingly submit to us (such as articles, images, feedback, etc).</label>
                  </div>
                </div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="geo">Will you be requesting access to the geolocation of your users?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="geo" id="geo1" value="1">
                    <label class="form-check-label form_font" for="geo1">Yes, we may request access to geolocation.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="geo" id="geo2" value="0">
                    <label class="form-check-label form_font" for="geo2">No, we won't be requesting access to geolocation.</label>
                  </div>
                </div>
                <label id="geo-error" class="error" for="geo"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="features">Will you be requesting access to various features on the mobile device (such as contacts, calendar, gallery, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="features" id="features1" value="1">
                    <label class="form-check-label form_font" for="features1">Yes, we may request access to certain features.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="features" id="features2" value="0">
                    <label class="form-check-label form_font" for="features2">No, we won't be requesting access to any features.</label>
                  </div>
                </div>
                <label id="features-error" class="error" for="features"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="derivative">Do you collect any derivative data from your users (ip address, browser name, device name, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="derivative" id="derivative1" value="1">
                    <label class="form-check-label form_font" for="derivative1">Yes, we may collect derivative data of our users.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="derivative" id="derivative2" value="0">
                    <label class="form-check-label form_font" for="derivative2">No, we don't collect any derivative data.</label>
                  </div>
                </div>
                <label id="derivative-error" class="error" for="derivative"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="third_party">Do you collect users' personal information from third party sources (partnerships, social networks, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="third_party" id="third_party1" value="1">
                    <label class="form-check-label form_font" for="third_party1">Yes, we may collect personal information from third parties.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="third_party" id="third_party2" value="0">
                    <label class="form-check-label form_font" for="third_party2">No, we don't collect any personal information from third parties.</label>
                  </div>
                </div>
                <label id="third_party-error" class="error" for="third_party"></label>
              </div>
            </div>
          </div>

          <div id="form11" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100">71%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="purpose">What will you do with the information you collect?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose1" value="manage_accounts">
                    <label class="form-check-label form_font" for="purpose1">Create and manage user accounts</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose2" value="sell_services">
                    <label class="form-check-label form_font" for="purpose2">Fulfill and manage orders</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose3" value="deliver_services">
                    <label class="form-check-label form_font" for="purpose3">Deliver products or services</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose4" value="improve_services">
                    <label class="form-check-label form_font" for="purpose4">Improve products and services</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose5" value="send_admin">
                    <label class="form-check-label form_font" for="purpose5">Send administrative information</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose6" value="send_promo">
                    <label class="form-check-label form_font" for="purpose6">Send marketing and promotional communications</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose7" value="support">
                    <label class="form-check-label form_font" for="purpose7">Respond to inquiries and offer support</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose8" value="request_feedback">
                    <label class="form-check-label form_font" for="purpose8">Request user feedback</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose9" value="improve_experience">
                    <label class="form-check-label form_font" for="purpose9">Improve user experience</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose10" value="share_testimonials">
                    <label class="form-check-label form_font" for="purpose10">Post customer testimonials</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose11" value="show_ads">
                    <label class="form-check-label form_font" for="purpose11">Deliver targeted advertising</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose12" value="competitions">
                    <label class="form-check-label form_font" for="purpose12">Administer prize draws and competitions</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose13" value="enforce_policies">
                    <label class="form-check-label form_font" for="purpose13">Enforce terms and conditions and policies</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose14" value="protect_services">
                    <label class="form-check-label form_font" for="purpose14">Protect from abuse and malicious users</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="purpose[]" id="purpose15" value="legal_requests">
                    <label class="form-check-label form_font" for="purpose15">Respond to legal requests and prevent harm</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="form12" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="sell_a">Will you sell user information to a third party?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sell_a" id="sell_a1" value="1">
                    <label class="form-check-label form_font" for="sell_a1">Yes, we may sell user information to a third party.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sell_a" id="sell_a2" value="0">
                    <label class="form-check-label form_font" for="sell_a2">No, user information will never be sold.</label>
                  </div>
                </div>
                <label id="sell_a-error" class="error" for="sell_a"></label>
              </div>
              <div class="form-group form_part sell_a2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="merger">Will you share information in the event of a business sale or merger?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="merger" id="merger1" value="1">
                    <label class="form-check-label form_font" for="merger1">Yes, we will share information with the purchaser.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="merger" id="merger2" value="0">
                    <label class="form-check-label form_font" for="merger2">No, we will retain and not share information.</label>
                  </div>
                </div>
                <label id="merger-error" class="error" for="merger"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="law">Will you disclose user information to law enforcement agencies upon lawful requests?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="law" id="law1" value="1">
                    <label class="form-check-label form_font" for="law1">Yes, we'll disclose information upon lawful request.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="law" id="law2" value="0">
                    <label class="form-check-label form_font" for="law2">No, we will never disclose anything.</label>
                  </div>
                </div>
                <label id="law-error" class="error" for="law"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="breach"> What kind of responsive action will you take if you have a data breach?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="breach[]" id="breach2" value="email">
                    <label class="form-check-label form_font" for="breach2">Notify users via email.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="breach[]" id="breach3" value="phone">
                    <label class="form-check-label form_font" for="breach3">Notify users via phone call.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="breach[]" id="breach4" value="letter">
                    <label class="form-check-label form_font" for="breach4">Send users a letter.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="breach[]" id="breach1" value="site">
                    <label class="form-check-label form_font" for="breach1">Post a notification in the Website/Mobile app.</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="form13" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="contacts">How can users contact you regarding this policy?</label>
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

          <div id="form14" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="notify">How will you notify users of this policy updates?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify1" value="page">
                    <label class="form-check-label form_font" for="notify1">Update the modification date at the bottom of the privacy policy page.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify2" value="site">
                    <label class="form-check-label form_font" for="notify2">Post a notification on the Website/Mobile.</label>
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
<script src="{{asset('asset/js/privacy-policy.js')}}"></script>
@endsection