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
                <div class=""><h4 class="disclaimer-form-heading"><!-- text using policy.js script --></h4></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="{{url('/disclaimer-review?form-id='.$id)}}" method="post" id="multistep_form">
          @csrf
          <div class="tab" id="form1">
            @if (isset($data) && auth()->user()->admin == '1' || isset($data) && auth()->user()->admin == '2')
            <input type="hidden" name="adminn" value="1"/>
            @else <input type="hidden" name="adminn" value="0"/> @endif
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 2%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="c_id">Where are you located?</label>
                <div class="col-sm-5" style="display: flex;">
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
                <span class="help">Your disclaimer will be adapted for the location you select.</span>
                <label id="c_id-error" class="error" for="c_id"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="platforms">What will this disclaimer be used for?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms" id="platforms1" value="Mobile App Name">
                    <label class="form-check-label form_font" for="platforms1">Mobile app, this policy will be used for a mobile app.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms" id="platforms2" value="Website URL">
                    <label class="form-check-label form_font" for="platforms2">Website, this policy will be used for a website.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms" id="platforms3" value="Other">
                    <label class="form-check-label form_font" for="platforms3">Something else</label>
                  </div>
                </div>
                <label id="platforms-error" class="error" for="platforms"></label>
              </div>
              <div class="form-group form_part platforms3-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="platforms_other">Please clarify below</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms_other" id="platforms_other1" value="ebook Name">
                    <label class="form-check-label form_font" for="platforms_other1">eBook</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms_other" id="platforms_other2" value="Landing Page">
                    <label class="form-check-label form_font" for="platforms_other2">Landing page</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms_other" id="platforms_other3" value="Course Name">
                    <label class="form-check-label form_font" for="platforms_other3">Online course</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms_other" id="platforms_other4" value="Podcast">
                    <label class="form-check-label form_font" for="platforms_other4">Podcast</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="platforms_other" id="platforms_other5" value="Video Channel">
                    <label class="form-check-label form_font" for="platforms_other5">Video channel</label>
                  </div>
                </div>
                <label id="platforms_other-error" class="error" for="platforms_other"></label>
              </div>
              <div class="form-group form_part platforms1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="mobile_name">What is the name of your mobile application?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="mobile_name" name="mobile_name" maxlength="128">
                </div>
                <span class="help">e.g. My Mobile App</span>
                <label id="mobile_name-error" class="error" for="mobile_name"></label>
              </div>
              <div class="form-group form_part platforms2-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="website_url">What is the URL of your website?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="website_url" name="website_url" maxlength="128">
                </div>
                <span class="help">e.g. https://www.website.com</span>
                <label id="website_url-error" class="error" for="website_url"></label>
              </div>

              <div class="form-group form_part platforms_other1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="ebook_name">What is the name of your eBook?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="ebook_name" name="ebook_name" maxlength="128">
                </div>
                <span class="help">e.g. My eBook</span>
                <label id="ebook_name-error" class="error" for="ebook_name"></label>
              </div>
              <div class="form-group form_part platforms_other2-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="landing_url">What is the URL of your landing or sales page?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="landing_url" name="landing_url" maxlength="128">
                </div>
                <span class="help">e.g. https://www.website.com/special-offer</span>
                <label id="landing_url-error" class="error" for="landing_url"></label>
              </div>
              <div class="form-group form_part platforms_other3-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="course_name">What is the name of your online course or online training resource?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="course_name" name="course_name" maxlength="128">
                </div>
                <span class="help">e.g. My Popular Online Course</span>
                <label id="course_name-error" class="error" for="course_name"></label>
              </div>
              <div class="form-group form_part platforms_other4-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="podcast_name">What is the name of your podcast?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="podcast_name" name="podcast_name" maxlength="128">
                </div>
                <span class="help">e.g. My Podcast Show</span>
                <label id="podcast_name-error" class="error" for="podcast_name"></label>
              </div>
              <div class="form-group form_part platforms_other5-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="video_name">What is the name of your video channel (such as those on YouTube)?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="video_name" name="video_name">
                </div>
                <span class="help">e.g. Get Fit with John Smith</span>
                <label id="video_name-error" class="error" for="video_name"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="premium">Would you like to create a premium disclaimer with additional clauses and provisions?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="premium" id="premium1" value="1">
                    <label class="form-check-label form_font" for="premium1">Yes, I would like to create a premium disclaimer.</label>
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
                      Premium disclaimer includes additional clauses and provisions not covered by the basic free policy for the best legal compliance and protection.
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
                          <li><a data-role="modal" data-src="#refund-modal" onclick="return false" href="disclaimer#">100% money back guarantee</a></li>
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
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">9%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="company">Do you operate your Mobile app/Website under a company name?</label>
                <div class="col-sm-5">
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
                <label class="control-label col-sm-5 pb-2" for="company_name">What is your company name?</label>
                <div class="col-sm-5"> 
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
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">18%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="writer">Who creates the content available in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="writer" id="writer1" value="personal">
                    <label class="form-check-label form_font" for="writer1">Content is created and edited by myself.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="writer" id="writer2" value="collab">
                    <label class="form-check-label form_font" for="writer2">Content is created in collaboration with other people.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="writer" id="writer3" value="company">
                    <label class="form-check-label form_font" for="writer3">Content is created by company employees.</label>
                  </div>
                </div>
                <label id="writer-error" class="error" for="writer"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="original">Is the content available in your Mobile app/Website original?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="original" id="original1" value="1">
                    <label class="form-check-label form_font" for="original1">Yes, all content is original and not published anywhere else.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="original" id="original2" value="0">
                    <label class="form-check-label form_font" for="original2">No, some or all of the content is copied from elsewhere.</label>
                  </div>
                </div>
                <label id="original-error" class="error" for="original"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="specialty">Does the content in your Mobile app/Website reference or contain any of the following topics in a regulated field?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="specialty[]" value="fitness" id="specialty1" />
                    <label class="form-check-label" for="specialty1">Fitness</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="specialty[]" value="financial" id="specialty2" />
                    <label class="form-check-label" for="specialty2">Financial</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="specialty[]" value="investments" id="specialty3" />
                    <label class="form-check-label" for="specialty3">Investments</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="specialty[]" value="medical" id="specialty4" />
                    <label class="form-check-label" for="specialty4">Medical or health</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="specialty[]" value="legal" id="specialty5" />
                    <label class="form-check-label" for="specialty5">Legal</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab" id="form4">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100">27%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="copy">Can users copy and distribute content and information available in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="copy" id="copy1" value="yes">
                    <label class="form-check-label form_font" for="copy1">Yes, content can be copied and distributed freely.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="copy" id="copy2" value="personal">
                    <label class="form-check-label form_font" for="copy2">Yes, content can be copied for personal use only.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="copy" id="copy3" value="no">
                    <label class="form-check-label form_font" for="copy3">No, content cannot be copied or distributed without permission.</label>
                  </div>
                </div>
                <label id="copy-error" class="error" for="copy"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="share">Can people share content and information available in your Mobile app/Website on social media platforms?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="share1" value="1">
                    <label class="form-check-label form_font" for="share1">Yes, content can be shared on social media platforms.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="share" id="share2" value="0">
                    <label class="form-check-label form_font" for="share2">No, content cannot be shared on social media.</label>
                  </div>
                </div>
                <label id="share-error" class="error" for="share"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form5">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100">36%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="accept">Do you receive any kind of compensation from a third party for the content available in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="accept" id="accept1" value="1">
                    <label class="form-check-label form_font" for="accept1">Yes, compensation may be accepted for publishing certain content.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="accept" id="accept2" value="0">
                    <label class="form-check-label form_font" for="accept2">No, we don’t get paid for publishing content and information.</label>
                  </div>
                </div>
                <label id="accept-error" class="error" for="accept"></label>
              </div>
              <div class="form-group form_part accept1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="identify">Do you identify sponsored content?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="identify" id="identify1" value="1">
                    <label class="form-check-label form_font" for="identify1">Yes, all sponsored or promoted content is identified as such.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="identify" id="identify2" value="0">
                    <label class="form-check-label form_font" for="identify2">No, sponsored content is not identified in any way.</label>
                  </div>
                </div>
                <label id="identify-error" class="error" for="identify"></label>
              </div>
              <div class="form-group form_part accept1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="influence">Does compensation received influence the content or your opinions?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="influence" id="influence1" value="1">
                    <label class="form-check-label form_font" for="influence1">Yes, sponsored content may contain information and opinions influenced by the advertiser or sponsor.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="influence" id="influence2" value="0">
                    <label class="form-check-label form_font" for="influence2">No, all available content contains unbiased information and opinions.</label>
                  </div>
                </div>
                <label id="influence-error" class="error" for="influence"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form6">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="publish">Can users publish anything in your Mobile app/Website (comments, images, videos, etc)?</label>
                <div class="col-sm-5">
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
                <label class="control-label col-sm-5 pb-2" for="monitor">Do you monitor and review user submitted content?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="monitor" id="monitor1" value="1">
                    <label class="form-check-label form_font" for="monitor1">Yes, all or some of the submitted content is reviewed before being made public.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="monitor" id="monitor2" value="0">
                    <label class="form-check-label form_font" for="monitor2">No, submitted content becomes public immediately.</label>
                  </div>
                </div>
                <label id="monitor-error" class="error" for="monitor"></label>
              </div>
              <div class="form-group form_part publish1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="reuse">Do you reserve the right to reuse or copy submitted content?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="reuse" id="reuse1" value="1">
                    <label class="form-check-label form_font" for="reuse1">Yes, content can be reused for various purposes (for example, included in the newsletter).</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="reuse" id="reuse2" value="0">
                    <label class="form-check-label form_font" for="reuse2">No, content will not be reused or copied.</label>
                  </div>
                </div>
                <label id="reuse-error" class="error" for="reuse"></label>
              </div>
              <div class="form-group form_part publish1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="terminate">Do you reserve the right to modify or remove user submitted content?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="terminate" id="terminate1" value="1">
                    <label class="form-check-label form_font" for="terminate1">Yes, content can be modified or removed if it's found abusive or violates the terms.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="terminate" id="terminate2" value="0">
                    <label class="form-check-label form_font" for="terminate2">No, content will never get modified or removed.</label>
                  </div>
                </div>
                <label id="terminate-error" class="error" for="terminate"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form7">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100">54%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="testimonials">Do you display reviews or testimonials about you, your products or services in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="testimonials" id="testimonials1" value="1">
                    <label class="form-check-label form_font" for="testimonials1">Yes, we collect and may display reviews or testimonials.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="testimonials" id="testimonials2" value="0">
                    <label class="form-check-label form_font" for="testimonials2">No, we don't collect or display reviews or testimonials.</label>
                  </div>
                </div>
                <label id="testimonials-error" class="error" for="testimonials"></label>
              </div>
              <div class="form-group form_part testimonials1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="modify">Do testimonials appear without any modifications from you (except for grammar or length)?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="modify" id="modify1" value="1">
                    <label class="form-check-label form_font" for="modify1">Yes, testimonials are displayed "as is" and are not modified by us.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="modify" id="modify2" value="0">
                    <label class="form-check-label form_font" for="modify2">No, we may modify testimonials before displaying them.</label>
                  </div>
                </div>
                <label id="modify-error" class="error" for="modify"></label>
              </div>
              <div class="form-group form_part testimonials1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="compensate">Are reviewers affiliated with you or get rewarded for their testimonials (get paid, receive free products, etc)?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="compensate" id="compensate1" value="1">
                    <label class="form-check-label form_font" for="compensate1">Yes, reviewers may be affiliated with us or may get rewarded for their testimonials.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="compensate" id="compensate2" value="0">
                    <label class="form-check-label form_font" for="compensate2">No, we have no affiliation and do not reward anyone for their testimonials.</label>
                  </div>
                </div>
                <label id="compensate-error" class="error" for="compensate"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form8">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 63%;" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">63%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="affiliate_links">Do you have affiliate links in your Mobile app/Website?</label>
                <div class="col-sm-5">
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
              <div class="form-group form_part affiliate_links1-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="affiliate_links_amazon">Are you a part of Amazon's Associates program?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="affiliate_links_amazon" id="affiliate_links_amazon1" value="1">
                    <label class="form-check-label form_font" for="affiliate_links_amazon1">Yes, I have an account with Amazon's Associates program.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="affiliate_links_amazon" id="affiliate_links_amazon2" value="0">
                    <label class="form-check-label form_font" for="affiliate_links_amazon2">No, I'm not affiliated with Amazon's Associates program.</label>
                  </div>
                </div>
                <label id="affiliate_links_amazon-error" class="error" for="affiliate_links_amazon"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="ads">Do you have any ads in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="ads1_1" value="1">
                    <label class="form-check-label form_font" for="ads1_1">Yes, there may be ads.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ads" id="ads2_2" value="0">
                    <label class="form-check-label form_font" for="ads2_2">No, there are no ads.</label>
                  </div>
                </div>
                <label id="ads-error" class="error" for="ads"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form9">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">72%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="advise">Do you offer any kind of recommendations or advice in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="advise" id="advise1" value="1">
                    <label class="form-check-label form_font" for="advise1">Yes, certain recommendations or advice may be provided.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="advise" id="advise2" value="0">
                    <label class="form-check-label form_font" for="advise2">No, there are no recommendations or advice.</label>
                  </div>
                </div>
                <label id="advise-error" class="error" for="advise"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="accuracy">Do you guarantee accuracy of the information available in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="accuracy" id="accuracy1" value="1">
                    <label class="form-check-label form_font" for="accuracy1">Yes, accuracy of available information is guaranteed.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="accuracy" id="accuracy2" value="0">
                    <label class="form-check-label form_font" for="accuracy2">No, we do not provide guarantees.</label>
                  </div>
                </div>
                <label id="accuracy-error" class="error" for="accuracy"></label>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="modifications">Do you reserve the right to modify or remove content available in your Mobile app/Website?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="modifications" id="modifications1" value="1">
                    <label class="form-check-label form_font" for="modifications1">Yes, content can be modified or removed at any time.</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="modifications" id="modifications2" value="0">
                    <label class="form-check-label form_font" for="modifications2">No, we do not modify or remove available content.</label>
                  </div>
                </div>
                <label id="modifications-error" class="error" for="modifications"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form10">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 81%;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">81%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="contacts">How can users contact you regarding this policy?</label>
                <div class="col-sm-5">
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
                <label class="control-label col-sm-5 pb-2" for="contact_form">What is the URL of your contact form?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="contact_form" name="contact_form" maxlength="255">
                </div>
                <span class="help">e.g. https://www.website.com/contact</span>
                <label id="contact_form-error" class="error" for="contact_form"></label>
              </div>
              <div class="form-group form_part contacts_email-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="contact_email">What is your email address?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="contact_email" name="contact_email" maxlength="128">
                </div>
                <span class="help">abuse@website.com</span>
                <label id="contact_email-error" class="error" for="contact_email"></label>
              </div>
              <div class="form-group form_part contacts_address-1 hidden">
                <label class="control-label col-sm-5 pb-2" for="contact_address">What is your business address?</label>
                <div class="col-sm-5"> 
                  <input type="text" class="form-control form_font" id="contact_address" name="contact_address" maxlength="255">
                </div>
                <span class="help">e.g. 23 First St, New York, NY, 10010, USA</span>
                <label id="contact_address-error" class="error" for="contact_address"></label>
              </div>
            </div>
          </div>

          <div class="tab" id="form11">
            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
              <div class="form-group form_part">
                <label class="control-label col-sm-5 pb-2" for="notify">How will you notify users of this policy updates?</label>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="notify" id="notify1" value="page">
                    <label class="form-check-label form_font" for="notify1">Update the modification date at the bottom of the disclaimer page.</label>
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
<script src="{{asset('asset/js/disclaimer-policy.js')}}"></script>
@endsection