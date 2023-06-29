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
                <div class=""><h4 class="acceptance-form-heading"><!-- text using policy.js script --></h4></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="{{ url('acceptable-use-policy-review?form-id='.$id)}}" method="post" id="multistep_form">
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
                <span class="help">Your acceptable use policy will be adapted for the location you select.</span>
                <label id="c_id-error" class="error" for="c_id"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="platforms">What will this acceptable use policy be used for?</label>
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
                <label class="control-label col-sm-12 pb-2" for="premium">Would you like to create a premium acceptable use policy with additional clauses and provisions?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium1" value="1">
                    <label class="form-check-label form_font" for="premium1">Yes, I would like to create a premium acceptable use policy.</label>
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
                      Premium acceptable use policy includes additional clauses and provisions not covered by the basic free policy for the best legal compliance and protection.
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
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">18%</div>
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
                <label class="control-label col-sm-12 pb-2" for="share">Are users allowed to share their account login details with anyone?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="share1" value="1">
                    <label class="form-check-label form_font" for="share1">Yes, users may share their login details if they need assistance.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="share2" value="0">
                    <label class="form-check-label form_font" for="share2">No, account login details must never be shared with anyone.</label>
                  </div>
                </div>
                <label id="share-error" class="error" for="share"></label>
              </div>
              <div class="form-group form_part register1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="anon_use">Can all of your Mobile app/Website features or services be used anonymously without an account?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="anon_use" id="anon_use1" value="1">
                    <label class="form-check-label form_font" for="anon_use1">Yes, users may use all of the features or services without creating an account.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="anon_use" id="anon_use2" value="0">
                    <label class="form-check-label form_font" for="anon_use2">No, certain features or services offered require users to create an account.</label>
                  </div>
                </div>
                <label id="anon_use-error" class="error" for="anon_use"></label>
              </div>
            </div>
          </div>

          <div id="form4" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100">27%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="publish">Can users publish anything in your Mobile app/Website (comments, images, videos, etc)?</label>
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
                <label class="control-label col-sm-12 pb-2" for="objectionable">Do you allow objectionable content in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="objectionable" id="objectionable1" value="1">
                    <label class="form-check-label form_font" for="objectionable1">Yes, we may allow objectionable content depending on its nature.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="objectionable" id="objectionable2" value="0">
                    <label class="form-check-label form_font" for="objectionable2">No, objectionable content is not allowed.</label>
                  </div>
                </div>
                <label id="objectionable-error" class="error" for="objectionable"></label>
              </div>
              <div class="form-group form_part objectionable1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="remove">Will you be willing to edit or remove objectionable content if it’s reported?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remove" id="remove1" value="1">
                    <label class="form-check-label form_font" for="remove1">Yes, we may remove objectionable content depending on its nature.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="remove" id="remove2" value="0">
                    <label class="form-check-label form_font" for="remove2">No, we're not in a position to determine whether certain content is objectionable.</label>
                  </div>
                </div>
                <label id="remove-error" class="error" for="remove"></label>
              </div>
              <div class="form-group form_part publish1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="adult">Do you have or allow content meant only for adult audience in your Mobile app/Website?</label>
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
            </div>
          </div>

          <div id="form5" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100">36%</div>
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
                <label class="control-label col-sm-12 pb-2" for="payments_method">How do your users pay you?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payments_method" id="payments_method1" value="remote">
                    <label class="form-check-label form_font" for="payments_method1">Users can pay via remote third party services (such as PayPal, Stripe, etc).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payments_method" id="payments_method2" value="local">
                    <label class="form-check-label form_font" for="payments_method2">Users can pay directly in the mobile app.</label>
                  </div>
                </div>
                <label id="payments_method-error" class="error" for="payments_method"></label>
              </div>
              <div class="form-group form_part sell1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="diff_name">Can users place orders on someone else’s behalf or under someone else’s name?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="diff_name" id="diff_name1" value="1">
                    <label class="form-check-label form_font" for="diff_name1">Yes, users may place orders on someone else’s behalf or under someone else’s name.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="diff_name" id="diff_name2" value="0">
                    <label class="form-check-label form_font" for="diff_name2">No, all orders must be placed under the user's own real name.</label>
                  </div>
                </div>
                <label id="diff_name-error" class="error" for="diff_name"></label>
              </div>
            </div>
          </div>

          <div id="form6" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="upload">Can users upload their own files in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="upload" id="upload1" value="1">
                    <label class="form-check-label form_font" for="upload1">Yes, users can upload their own files.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="upload" id="upload2" value="0">
                    <label class="form-check-label form_font" for="upload2">No, users can't upload any files.</label>
                  </div>
                </div>
                <label id="upload-error" class="error" for="upload"></label>
              </div>
              <div class="form-group form_part upload1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="execute">Can users execute or run files they uploaded?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="execute" id="execute1" value="1">
                    <label class="form-check-label form_font" for="execute1">Yes, uploaded files may contain executable scripts or software (common for hosting services).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="execute" id="execute2" value="0">
                    <label class="form-check-label form_font" for="execute2">No, users can upload only static files (such as text, images, videos, etc).</label>
                  </div>
                </div>
                <label id="execute-error" class="error" for="execute"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="install">Can users install or integrate third party apps or software in your Mobile app/Website?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="install" id="install1" value="1">
                    <label class="form-check-label form_font" for="install1">Yes, users may install or integrate third party software or apps (common for hosting services).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="install" id="install2" value="0">
                    <label class="form-check-label form_font" for="install2">No, users may not install or integrate third party software or apps.</label>
                  </div>
                </div>
                <label id="install-error" class="error" for="install"></label>
              </div>
            </div>
          </div>

          <div id="form7" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100">54%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="send">Can your Mobile app/Website be used for sending out emails or push notifications?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="send" id="send1" value="1">
                    <label class="form-check-label form_font" for="send1">Yes, users can send emails or push notificatins.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="send" id="send2" value="0">
                    <label class="form-check-label form_font" for="send2">No, users can't send any emails or push notifications.</label>
                  </div>
                </div>
                <label id="send-error" class="error" for="send"></label>
              </div>
              <div class="form-group form_part send1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="bulk">Do you allow sending messages in bulk (such as newsletters)?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bulk" id="bulk1" value="1">
                    <label class="form-check-label form_font" for="bulk1">Yes, we allow sending messages in bulk.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bulk" id="bulk2" value="0">
                    <label class="form-check-label form_font" for="bulk2">No, bulk messages are not allowed.</label>
                  </div>
                </div>
                <label id="bulk-error" class="error" for="bulk"></label>
              </div>
              <div class="form-group form_part bulk1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="purchased">Do you allow sending messages to purchased email addresses?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="purchased" id="purchased1" value="1">
                    <label class="form-check-label form_font" for="purchased1">Yes, users can send messages in bulk regardless of how they obtained their email addresses.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="purchased" id="purchased2" value="0">
                    <label class="form-check-label form_font" for="purchased2">No, purchased email addresses are not allowed.</label>
                  </div>
                </div>
                <label id="purchased-error" class="error" for="purchased"></label>
              </div>
              <div class="form-group form_part bulk1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="suspend">Will you suspend or terminate user's account if they send unsolicited bulk messages or spam?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="suspend" id="suspend1" value="1">
                    <label class="form-check-label form_font" for="suspend1">Yes, we will suspend or terminate user's account.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="suspend" id="suspend2" value="0">
                    <label class="form-check-label form_font" for="suspend2">No, we won't suspend or terminate user's account.</label>
                  </div>
                </div>
                <label id="suspend-error" class="error" for="suspend"></label>
              </div>
            </div>
          </div>

          <div id="form8" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 63%;" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">63%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="action">Will you take any actions if a copyright infringement report is submitted?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="action" id="action1" value="1">
                    <label class="form-check-label form_font" for="action1">Yes, we will take appropriate actions if copyright infringement is reported.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="action" id="action2" value="0">
                    <label class="form-check-label form_font" for="action2">No, we won't take any action.</label>
                  </div>
                </div>
                <label id="action-error" class="error" for="action"></label>
              </div>
              <div class="form-group form_part action1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="court">Will you require a court order to remove reported content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="court" id="court1" value="1">
                    <label class="form-check-label form_font" for="court1">Yes, we require a court order before we edit or remove reported content.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="court" id="court2" value="0">
                    <label class="form-check-label form_font" for="court2">No, we don't need a court order to act on copyright infringement reports.</label>
                  </div>
                </div>
                <label id="court-error" class="error" for="court"></label>
              </div>
              <div class="form-group form_part action1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="notifyy">Will you notify the author of reported content before removing it?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notifyy" id="notifyy1" value="1">
                    <label class="form-check-label form_font" for="notifyy1">Yes, we'll notify the user reponsible for posting reported content so they could rectify the situation.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notifyy" id="notifyy2" value="0">
                    <label class="form-check-label form_font" for="notifyy2">No, we'll take action immediately upon receiving a report.</label>
                  </div>
                </div>
                <label id="notifyy-error" class="error" for="notifyy"></label>
              </div>
            </div>
          </div>

          <div id="form9" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">72%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="suspendd">Will you suspend or terminate user's account if they’re found in violation of this policy?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="suspendd" id="suspendd1" value="1">
                    <label class="form-check-label form_font" for="suspendd1">Yes, we will suspend or terminate user's account if they violated this policy.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="suspendd" id="suspendd2" value="0">
                    <label class="form-check-label form_font" for="suspendd2">No, we won't suspend or terminate user's account.</label>
                  </div>
                </div>
                <label id="suspendd-error" class="error" for="suspendd"></label>
              </div>
              <div class="form-group form_part suspendd1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="backup">Will you provide a backup of user’s content if they have been suspended or terminated?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup" id="backup1" value="1">
                    <label class="form-check-label form_font" for="backup1">Yes, we may provide a backup of user's data if requested.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup" id="backup2" value="0">
                    <label class="form-check-label form_font" for="backup2">No, we won't provide any backups.</label>
                  </div>
                </div>
                <label id="backup-error" class="error" for="backup"></label>
              </div>
              <div class="form-group form_part backup1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="backup_fee">Will you charge a fee for providing a backup of user’s content?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup_fee" id="backup_fee1" value="1">
                    <label class="form-check-label form_font" for="backup_fee1">Yes, we may impose a penalty fee before we provide a backup of user's content.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="backup_fee" id="backup_fee2" value="0">
                    <label class="form-check-label form_font" for="backup_fee2">No, we'll provide a backup free of charge.</label>
                  </div>
                </div>
                <label id="backup_fee-error" class="error" for="backup_fee"></label>
              </div>
              <div class="form-group form_part suspendd1-1 hidden">
                <label class="control-label col-sm-12 pb-2" for="actions">Do you reserve the right to take additional actions with respect to policy enforcement?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="actions" id="actions1" value="1">
                    <label class="form-check-label form_font" for="actions1">Yes, we may take additional actions such as recovering the costs and expenses caused by the offending user.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="actions" id="actions2" value="0">
                    <label class="form-check-label form_font" for="actions2">No, we won't be taking any additional actions.</label>
                  </div>
                </div>
                <label id="actions-error" class="error" for="actions"></label>
              </div>
            </div>
          </div>

          <div id="form10" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 81%;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">81%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="contacts">Will you suspend or terminate user's account if they’re found in violation of this policy?</label>
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

          <div id="form11" class="tab">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-12 pb-2" for="notify">How will you notify users of this policy updates?</label>
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify1" value="page">
                    <label class="form-check-label form_font" for="notify1">Update the modification date at the bottom of the acceptable use policy page.</label>
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
<script src="{{asset('asset/js/acceptable-policy.js')}}"></script>
@endsection