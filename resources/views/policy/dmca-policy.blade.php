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
                <div class=""><h4 class="dmca-form-heading"><!-- text using policy.js script --></h4></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="{{url('/dmca-policy-review?form-id='.$id)}}" method="post" id="multistep_form">
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
                <span class="help">Your DMCA policy will be adapted for the location you select.</span>
                <label id="c_id-error" class="error" for="c_id"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="platforms">What will this DMCA policy be used for?</label>
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
                <label class="control-label col-sm-12 pb-2" for="premium">Would you like to create a premium DMCA policy with additional clauses and provisions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium1" value="1">
                    <label class="form-check-label form_font" for="premium1">Yes, I would like to create a premium DMCA policy.</label>
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
                      Premium DMCA policy includes additional clauses and provisions not covered by the basic free policy for the best legal compliance and protection.
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
                <label class="control-label col-sm-12 pb-2" for="company">Do you operate your mobile app/website under a company name?</label>
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
                <label class="control-label col-sm-12 pb-2" for="users">Who creates the content available in your Mobile app/Website (articles, images, videos, etc)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="users" id="users1" value="1">
                    <label class="form-check-label form_font" for="users1">Content is created by myself and other people.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="users" id="users2" value="0">
                    <label class="form-check-label form_font" for="users2">All content is created and edited by myself.</label>
                  </div>
                </div>
                <label id="users-error" class="error" for="users"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="fair_use">Does your Mobile app/Website contain any content that may be considered “fair use”?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fair_use" id="fair_use1" value="1">
                    <label class="form-check-label form_font" for="fair_use1">Yes, “fair use” content may be present (common for commentary, news, research, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fair_use" id="fair_use2" value="0">
                    <label class="form-check-label form_font" for="fair_use2">No, all content is unique and is not available anywhere else.</label>
                  </div>
                </div>
                <label id="fair_use-error" class="error" for="fair_use"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form4">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100">37%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="court">Will you require a court order to disable or remove reported content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="court" id="court1" value="1">
                    <label class="form-check-label form_font" for="court1">Yes, we require a court order before we disable or remove reported content.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="court" id="court2" value="0">
                    <label class="form-check-label form_font" for="court2">No, we don't need a court order to act on copyright infringement reports.</label>
                  </div>
                </div>
                <label id="court-error" class="error" for="court"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="share_user">Will you share a copy of the copyright infringement report with the alleged infringer?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share_user" id="share_user1" value="1">
                    <label class="form-check-label form_font" for="share_user1">Yes, we may forward a copy of the report to the alleged infringer.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share_user" id="share_user2" value="0">
                    <label class="form-check-label form_font" for="share_user2">No, it won’t be shared with the alleged infringer.</label>
                  </div>
                </div>
                <label id="share_user-error" class="error" for="share_user"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="share_others">Will you share a copy of the copyright infringement report with any third parties?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share_others" id="share_others1" value="1">
                    <label class="form-check-label form_font" for="share_others1">Yes, we may share a copy of the report with the third parties.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share_others" id="share_others2" value="0">
                    <label class="form-check-label form_font" for="share_others2">No, it won’t be shared with the third parties.</label>
                  </div>
                </div>
                <label id="share_others-error" class="error" for="share_others"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="liability">Will alleged infringers be liable for misrepresenting infringing content or activities?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="liability" id="liability1" value="1">
                    <label class="form-check-label form_font" for="liability1">Yes, alleged infringers may be liable for fees incurred by us or our users due to their actions.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="liability" id="liability2" value="0">
                    <label class="form-check-label form_font" for="liability2">No, we won't hold alleged infringers liable for anything.</label>
                  </div>
                </div>
                <label id="liability-error" class="error" for="liability"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form5">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="counterr">Will you accept counter-notifications from the alleged infringers?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="counterr" id="counterr1" value="1">
                    <label class="form-check-label form_font" for="counterr1">Yes, alleged infringers may respond with a counter-notification.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="counterr" id="counterr2" value="0">
                    <label class="form-check-label form_font" for="counterr2">No, we won’t accept any counter-notifications.</label>
                  </div>
                </div>
                <label id="counterr-error" class="error" for="counterr"></label>
              </div>
              <div class="form-group form_part counterr1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="formattingg">Will you accept counter-notifications only if they comply with the DMCA requirements?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="formattingg" id="formattingg1" value="1">
                    <label class="form-check-label form_font" for="formattingg1">Yes, only DMCA-compliant counter-notifications will be accepted (recommended).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="formattingg" id="formattingg2" value="0">
                    <label class="form-check-label form_font" for="formattingg2">No, we’ll accept all counter-notifications.</label>
                  </div>
                </div>
                <label id="formattingg-error" class="error" for="formattingg"></label>
              </div>
              <div class="form-group form_part formattingg1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="instructions">Do you want this policy to include instructions on how to submit counter-notifications?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="instructions" id="instructions1" value="1">
                    <label class="form-check-label form_font" for="instructions1">Yes, include step by step DMCA-compliant instructions.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="instructions" id="instructions2" value="0">
                    <label class="form-check-label form_font" for="instructions2">No, counter-notifications can be submitted without following any instructions.</label>
                  </div>
                </div>
                <label id="instructions-error" class="error" for="instructions"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form6">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">62%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="terminate">Will you terminate the accounts of repeat infringers?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="terminate" id="terminate1" value="1">
                    <label class="form-check-label form_font" for="terminate1">Yes, we may terminate accounts of repeat infringers.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="terminate" id="terminate2" value="0">
                    <label class="form-check-label form_font" for="terminate2">No, we won’t terminate any accounts.</label>
                  </div>
                </div>
                <label id="terminate-error" class="error" for="terminate"></label>
              </div>
              <div class="form-group form_part terminate1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="backup">Will you provide a backup of the account’s content if the account has been terminated?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup" id="backup1" value="1">
                    <label class="form-check-label form_font" for="backup1">Yes, we may provide a backup of content if requested.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup" id="backup2" value="0">
                    <label class="form-check-label form_font" for="backup2">No, we won't provide any backups.</label>
                  </div>
                </div>
                <label id="backup-error" class="error" for="backup"></label>
              </div>
              <div class="form-group form_part backup1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="backup_fee">Will you charge a fee for providing a backup of the account’s content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup_fee" id="backup_fee1" value="1">
                    <label class="form-check-label form_font" for="backup_fee1">Yes, we may impose a penalty fee before we provide a backup of content.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup_fee" id="backup_fee2" value="0">
                    <label class="form-check-label form_font" for="backup_fee2">No, we'll provide a backup free of charge.</label>
                  </div>
                </div>
                <label id="backup_fee-error" class="error" for="backup_fee"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="actions">Will you take any other actions to help prevent copyright infringement?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="actions" id="actions1" value="1">
                    <label class="form-check-label form_font" for="actions1">Yes, we may monitor and review published content or take other actions to prevent copyright infringement.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="actions" id="actions2" value="0">
                    <label class="form-check-label form_font" for="actions2">No, we won’t take any other actions.</label>
                  </div>
                </div>
                <label id="actions-error" class="error" for="actions"></label>
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
                    <label class="form-check-label form_font" for="notify1">Update the modification date at the bottom of the DMCA policy page.</label>
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
<script src="{{asset('asset/js/dmca-policy.js')}}"></script>
@endsection