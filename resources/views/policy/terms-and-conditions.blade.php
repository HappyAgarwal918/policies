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
                <div class=""><h4 class="terms-form-heading"><!-- text using policy.js script --></h4></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="{{url('/terms-and-conditions-review?form-id='.$id)}}" method="post" id="multistep_form">
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
                <span class="help">Your terms and conditions will be adapted for the location you select.</span>
                <label id="c_id-error" class="error" for="c_id"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="platforms">What will this terms and conditions be used for?</label>
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
              <div class="form-group form_part platforms2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="website_url">What is the URL of your website?</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control form_font" id="website_url" name="website_url" maxlength="128">
                </div>
                <span class="help">e.g. https://www.website.com</span>
                <label id="website_url-error" class="error" for="website_url"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="premium">Would you like to create a premium terms and conditions policy with additional clauses and provisions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium1" value="1">
                    <label class="form-check-label form_font" for="premium1">Yes, I would like to create a premium terms and conditions policy.</label>
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
                      Premium terms and conditions policy includes additional clauses and provisions not covered by the basic free policy for the best legal compliance and protection.
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
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">9%</div>
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
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
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
                <label class="control-label col-sm-12 pb-2" for="monitor">Do you monitor and review user accounts manually?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="monitor" id="monitor1" value="1">
                    <label class="form-check-label form_font" for="monitor1">Yes, accounts must be reviewed and approved manually before users can sign in.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="monitor" id="monitor2" value="0">
                    <label class="form-check-label form_font" for="monitor2">No, manual review is not required.</label>
                  </div>
                </div>
                <label id="monitor-error" class="error" for="monitor"></label>
              </div>
              <div class="form-group form_part register1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="anon_use">Do you reserve the right to suspend or terminate user accounts?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="anon_use" id="anon_use1" value="1">
                    <label class="form-check-label form_font" for="anon_use1">Yes, user accounts can be suspended or terminated if they abuse the website or violate the terms.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="anon_use" id="anon_use2" value="0">
                    <label class="form-check-label form_font" for="anon_use2">No, user accounts will never get suspended or terminated.</label>
                  </div>
                </div>
                <label id="anon_use-error" class="error" for="anon_use"></label>
              </div>
            </div>
          </div>

          <div id="form4" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="age">Do you have an age requirement for your users?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="age" id="age1" value="age_18">
                    <label class="form-check-label form_font" for="age1">Yes, users and visitors must be at least 18 years old.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="age" id="age2" value="age_16">
                    <label class="form-check-label form_font" for="age2">Yes, users and visitors must be at least 16 years old.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="age" id="age3" value="age_13">
                    <label class="form-check-label form_font" for="age3">Yes, users and visitors must be at least 13 years old.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="age" id="age4" value="age_0">
                    <label class="form-check-label form_font" for="age4">No, there's no age requirement.</label>
                  </div>
                </div>
                <label id="age-error" class="error" for="age"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="adult">Do you have or allow content meant only for adult audience on your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="adult" id="adult1" value="1">
                    <label class="form-check-label form_font" for="adult1">Yes, adult content may be present.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="adult" id="adult2" value="0">
                    <label class="form-check-label form_font" for="adult2">No, adult content is not allowed.</label>
                  </div>
                </div>
                <label id="adult-error" class="error" for="adult"></label>
              </div>
              <div class="form-group form_part adult1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="adult_content_warn">Do you warn users about adult content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="adult_content_warn" id="adult_content_warn1" value="1">
                    <label class="form-check-label form_font" for="adult_content_warn1">Yes, a warning is shown before any adult content is displayed.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="adult_content_warn" id="adult_content_warn2" value="0">
                    <label class="form-check-label form_font" for="adult_content_warn2">No, adult content can be displayed without warning.</label>
                  </div>
                </div>
                <label id="adult_content_warn-error" class="error" for="adult_content_warn"></label>
              </div>
            </div>
          </div>

          <div id="form5" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="publish">Can users publish anything on your Mobile app/Website (comments, images, videos, etc)?</label>
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
              <div class="form-group form_part publish1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="monitor_a">Do you monitor and review user submitted content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="monitor_a" id="monitor_a1" value="1">
                    <label class="form-check-label form_font" for="monitor_a1">Yes, all or some of the submitted content is reviewed before being made public.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="monitor_a" id="monitor_a2" value="0">
                    <label class="form-check-label form_font" for="monitor_a2">No, submitted content becomes public immediately.</label>
                  </div>
                </div>
                <label id="monitor_a-error" class="error" for="monitor_a"></label>
              </div>
              <div class="form-group form_part publish1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="marketing">Do you reserve the right to use submitted content for commercial, marketing or any similar purposes?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="marketing" id="marketing1" value="1">
                    <label class="form-check-label form_font" for="marketing1">Yes, content can be used for commercial or marketing purposes.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="marketing" id="marketing2" value="0">
                    <label class="form-check-label form_font" for="marketing2">No, content will not be used for any of these purposes.</label>
                  </div>
                </div>
                <label id="marketing-error" class="error" for="marketing"></label>
              </div>
              <div class="form-group form_part publish1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="terminate_a">Do you reserve the right to modify or remove user submitted content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="terminate_a" id="terminate_a1" value="1">
                    <label class="form-check-label form_font" for="terminate_a1">Yes, content can be modified or removed if it's found abusive or violates the terms.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="terminate_a" id="terminate_a2" value="0">
                    <label class="form-check-label form_font" for="terminate_a2">No, content will never get modified or removed.</label>
                  </div>
                </div>
                <label id="terminate_a-error" class="error" for="terminate_a"></label>
              </div>
              <div class="form-group form_part publish1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="backup">Do you backup user submitted content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup" id="backup1" value="1">
                    <label class="form-check-label form_font" for="backup1">Yes, all data is backed up on a regular basis to prevent loss.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup" id="backup2" value="0">
                    <label class="form-check-label form_font" for="backup2">No, we don't backup anything.</label>
                  </div>
                </div>
                <label id="backup-error" class="error" for="backup"></label>
              </div>
              <div class="form-group form_part backup1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="backup_guarantee">Do you guarantee data safety to your users?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup_guarantee" id="backup_guarantee1" value="1">
                    <label class="form-check-label form_font" for="backup_guarantee1">Yes, we restore backups automatically in the event of the hardware failure.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup_guarantee" id="backup_guarantee2" value="0">
                    <label class="form-check-label form_font" for="backup_guarantee2">No, users must make their own backups to ensure data safety.</label>
                  </div>
                </div>
                <label id="backup_guarantee-error" class="error" for="backup_guarantee"></label>
              </div>
            </div>
          </div>

          <div id="form6" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="sell">Do you currently sell or plan on selling products or services on your Mobile app/Website?</label>
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
              <div class="form-group form_part sell1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="types">What types of products or services do you offer?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="types[]" id="types1" value="tangible">
                    <label class="form-check-label form_font" for="types1">Tangible products (items that you ship to customers)</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="types[]" id="types2" value="digital">
                    <label class="form-check-label form_font" for="types2">Digital products (item customers download)</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="types[]" id="types3" value="online">
                    <label class="form-check-label form_font" for="types3">Online services (non-downloadable services)</label>
                  </div>
                </div>
              </div>
              <div class="form-group form_part types2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="trials">Do you offer free product or service trials?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="trials" id="trials1" value="1">
                    <label class="form-check-label form_font" for="trials1">Yes, we offer free trials so customers can try the products and services first.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="trials" id="trials2" value="0">
                    <label class="form-check-label form_font" for="trials2">No, products and services are not available for trial.</label>
                  </div>
                </div>
                <label id="trials-error" class="error" for="trials"></label>
              </div>
              <div class="form-group form_part types3-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="recurring">Do you offer recurring subscriptions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="recurring" id="recurring1" value="1">
                    <label class="form-check-label form_font" for="recurring1">Yes, users can sign up for recurring services or membership.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="recurring" id="recurring2" value="0">
                    <label class="form-check-label form_font" for="recurring2">No, we don't offer recurring services.</label>
                  </div>
                </div>
                <label id="recurring-error" class="error" for="recurring"></label>
              </div>
              <div class="form-group form_part recurring1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="auto_renewal">Do your offer auto renewal for subscription payments?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="auto_renewal" id="auto_renewal1" value="1">
                    <label class="form-check-label form_font" for="auto_renewal1">Yes, users can sign up for automatic payments for subscribed services.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="auto_renewal" id="auto_renewal2" value="0">
                    <label class="form-check-label form_font" for="auto_renewal2">No, users have to enter payment information each time they want to make a payment.</label>
                  </div>
                </div>
                <label id="auto_renewal-error" class="error" for="auto_renewal"></label>
              </div>
              <div class="form-group form_part types3-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="uptime_guarantee">Do you provide uptime guarantee?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="uptime_guarantee" id="uptime_guarantee1" value="1">
                    <label class="form-check-label form_font" for="uptime_guarantee1">Yes, we guarantee the availability of the website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="uptime_guarantee" id="uptime_guarantee2" value="0">
                    <label class="form-check-label form_font" for="uptime_guarantee2">No, we don't offer such guarantee.</label>
                  </div>
                </div>
                <label id="uptime_guarantee-error" class="error" for="uptime_guarantee"></label>
              </div>
              <div class="form-group form_part uptime_guarantee1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="downtime_compensation">Do you offer compensation for the time the service is unavailable?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="downtime_compensation" id="downtime_compensation1" value="1">
                    <label class="form-check-label form_font" for="downtime_compensation1">Yes, we may offer free credits or free service to clients based on the downtime duration.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="downtime_compensation" id="downtime_compensation2" value="0">
                    <label class="form-check-label form_font" for="downtime_compensation2">No, we don't offer compensation.</label>
                  </div>
                </div>
                <label id="downtime_compensation-error" class="error" for="downtime_compensation"></label>
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
                    <label class="form-check-label form_font" for="payments_method2">Users can pay directly on the website.</label>
                  </div>
                </div>
              </div>
              <div class="form-group form_part payments_method2-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="payments_security">Do you have security measures in place to protect payment information?</label>
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
              <div class="form-group form_part sell1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="guarantees">Do you guarantee the following?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="guarantees[]" id="guarantees1" value="availability">
                    <label class="form-check-label form_font" for="guarantees1">Product availability</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="guarantees[]" id="guarantees2" value="description">
                    <label class="form-check-label form_font" for="guarantees2">Accuracy of product descriptions</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="guarantees[]" id="guarantees3" value="price">
                    <label class="form-check-label form_font" for="guarantees3">Accuracy of product prices</label>
                  </div>
                </div>
              </div>
              <div class="form-group form_part sell1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="rights">Do you reserve the right to do the following?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="rights[]" id="rights1" value="change">
                    <label class="form-check-label form_font" for="rights1">Change products or services at any time</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="rights[]" id="rights2" value="prices">
                    <label class="form-check-label form_font" for="rights2">Change prices at any time</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="rights[]" id="rights3" value="cancel">
                    <label class="form-check-label form_font" for="rights3">Refuse or cancel orders</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="form7" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="affiliate_links">Do you have affiliate links on your Mobile app/Website?</label>
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
                <label class="control-label col-sm-12 pb-2" for="ads">Do you display ads on your Mobile app/Website (Google AdSense/AdMob, BuySellAds, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="termads1" value="1">
                    <label class="form-check-label form_font" for="termads1">Yes, there may be ads displayed.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="termads2" value="0">
                    <label class="form-check-label form_font" for="termads2">No, there are no ads.</label>
                  </div>
                </div>
                <label id="ads-error" class="error" for="ads"></label>
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
            </div>
          </div>

          <div id="form8" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="misc_clauses">What additional clauses would you like to include?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses1" value="assignment">
                    <label class="form-check-label form_font" for="misc_clauses1">Assignment</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses2" value="warranty">
                    <label class="form-check-label form_font" for="misc_clauses2">Disclaimer of warranty</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses3" value="dispute">
                    <label class="form-check-label form_font" for="misc_clauses3">Dispute resolution</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses4" value="indemnification">
                    <label class="form-check-label form_font" for="misc_clauses4">Indemnification</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses5" value="ip">
                    <label class="form-check-label form_font" for="misc_clauses5">Intellectual property rights</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses6" value="liability">
                    <label class="form-check-label form_font" for="misc_clauses6">Limitation of liability</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses7" value="prohibit">
                    <label class="form-check-label form_font" for="misc_clauses7">Prohibited uses</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="misc_clauses[]" id="misc_clauses8" value="severability">
                    <label class="form-check-label form_font" for="misc_clauses8">Severability</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="form9" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
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

          <div id="form10" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="notify">How will you notify users of this policy updates?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify1" value="page">
                    <label class="form-check-label form_font" for="notify1">Update the modification date at the bottom of the terms and conditions page.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify2" value="site">
                    <label class="form-check-label form_font" for="notify2">Post a notification on the website.</label>
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
<script src="{{asset('asset/js/terms-policy.js')}}"></script>
@endsection