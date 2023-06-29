@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policies.css')}}">
@endsection

@section('content')

@php
$id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first();
   $abc = $a -> platforms;
   $bcd = $a -> contacts;
@endphp

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Refund policy for <?php if($abc == 'Website URL') {echo $a -> website_url;} 
                        elseif($abc == 'Mobile App Name') {echo $a -> mobile_name;} ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
       <!-- Nav tabs -->
      <div class="card">
        <div class="card-header">
          <ul class="nav policies-tabs" role="tablist">
            <li class="policies-item">
              <a class="nav-link active" data-toggle="tab" href="#View" role="tab">View policy</a>
            </li>
            <li class="policies-item">
              <a class="nav-link" data-toggle="tab" href="#HTML" role="tab">HTML code</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="View" role="tabpanel">
                <div class="box"> <!-- view text -->
                    <h1>Refund policy</h1>
                                            <p>
                                                We're so convinced you'll absolutely love our services, that we're willing to offer a <?php echo $a -> days; ?> day risk-free money back guarantee. If you are not satisfied with the service for any reason you can
                                                get a refund within <?php echo $a -> days; ?> days of making a purchase. Please keep in mind that even though we offer a full money back guarantee, we will issue a refund only for the unused portion of the service.
                                            </p>
                                            <h2>Additional services</h2>
                                            <p>Please note that any additional services, custom work or technical support are non-refundable as our time cannot be recovered.</p>
                                            <h2>Contacting us</h2>
                                           <p>If you would like to contact us concerning any matter relating to this Refund Policy
                                           <?php if($bcd == 'form') { echo '
                                           , you may do so via '; echo $a -> contact_form;} ?>
                                               <?php if($bcd == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($bcd == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', sending an email to '; echo $a -> contact_email;} ?>
                                               <?php if($bcd == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,address') { echo '
                                               , you may do so via '; echo $a -> contact_form; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,email,address') { echo '
                                               , you may do so via '; echo $a -> contact_form;
                                               echo ', sending an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                      </p>

                                            <p>This document was created on <?php echo $a -> created ; ?></p>
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/refund-basic-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/refund-basic-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
&lt;h1&gt;Refund policy&lt;/h1&gt;
&lt;p&gt;We're so convinced you'll absolutely love our services, that we're willing to offer a <?php echo $a -> days; ?> day risk-free money back guarantee. If you are not satisfied with the service for any reason you can get a refund within <?php echo $a -> days; ?> days of making a purchase. Please keep in mind that even though we offer a full money back guarantee, we will issue a refund only for the unused portion of the service.&lt;/p&gt;
&lt;h2&gt;Additional services&lt;/h2&gt;
&lt;p&gt;Please note that any additional services, custom work or technical support are non-refundable as our time cannot be recovered.&lt;/p&gt;
&lt;h2&gt;Contacting us&lt;/h2&gt;<br>
&lt;p&gt;If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to our use of cookies<?php if($bcd == 'form') { echo ', you may do so via '; echo $a -> contact_form;} ?>
                                               <?php if($bcd == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($bcd == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', sending an email to '; echo $a -> contact_email;} ?>
                                               <?php if($bcd == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,address') { echo '
                                               , you may do so via '; echo $a -> contact_form; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,email,address') { echo '
                                               , you may do so via '; echo $a -> contact_form;
                                               echo ', sending an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>&lt;/p&gt;<br>
&lt;p&gt;This document was created on <?php echo $a -> created ; ?>&lt;/p&gt;
                    </div>
                </div>
                <h4 class="my-3">Copy HTML code</h4>
                <p>If you rather not link to the policy directly, you may copy the HTML code of the policy directly to your app.</p>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_text')">Copy text</button>
                <span id="copied-text-success" class="copied">Text Copied!</span>
            </div>
            <ul class="button_main">
                <li><a href="refund-policy?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
                <li><a class="button ybtn ybtn-white ybtn-shadow" href="custom-clause?form-id=<?php echo $id ?>">Custom clauses</a></li>
                <li><a class="button btn-danger ybtn" href="{{ route('policydestroy',$id) }}" onclick="return confirm('Are you sure you want to Delete?');">Delete policy</a>
                </li>
            </ul>
          </div>
        </div>
    </div>
    </div>
</div>
@endsection