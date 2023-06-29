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
   $notify = $a -> notify;
   $offer = $a -> offer;
@endphp
@if($a->editor != NULL)
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">
                        {{$a->website_url}}
                    </div>
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
                    {!! $a->editor !!}
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/refund-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/refund-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
                        <pre style="white-space: pre-wrap;">{{ $a->editor }}</pre>
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
@else
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
                                <p><?php if($a -> days == 0) { echo '
                                    Since the Website offers non-tangible, irrevocable goods we do not provide refunds after the product is purchased, which you acknowledge prior to purchasing any product on the Website. Please
                                    make sure that you have carefully read service description before making a purchase.';} 

                                    else { echo '
                                    We are so convinced you will absolutely love our products, that we are willing to offer a '; echo $a -> days; echo ' day risk-free money back guarantee. If you receive your order and are not satisfied with the product for any reason you can get a refund within '; echo $a -> days; echo ' days of making a purchase.';}
                                    ?>
                                </p>
                                <?php if($offer == 1){ echo'
                                <h1>Additional services</h1>
                                <p>Please note that any additional services, custom work or technical support are non-refundable as our time cannot be recovered.</p>';} ?>
                                
                                <?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
                                        if (!empty($h)) { ?>
                                        <h2>Custom Clause</h2>   
                                        <?php } foreach ($clauses as $clause) { ?>
                                        <h2><?php echo $clause->title ?></h2>
                                        <p><?php echo $clause->text; ?></p>
                                        <?php } ?>
                                <h2>Contacting us</h2>
                                <p>
                                    If you would like to contact us concerning any matter relating to this Refund Policy<?php if($bcd == 'form') { echo '
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
                                .</p>
                                <p>This document was last updated on <?php echo $a -> updated_at ; ?></p>
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/refund-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/refund-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
&lt;h1&gt;Refund policy&lt;/h1&gt;
&lt;p&gt;<?php if($a -> days == 0) { echo '
                                    Since the Website offers non-tangible, irrevocable goods we do not provide refunds after the product is purchased, which you acknowledge prior to purchasing any product on the Website. Please
                                    make sure that you have carefully read service description before making a purchase.';} 

                                    else { echo '
                                    We are so convinced you will absolutely love our products, that we are willing to offer a '; echo $a -> days; echo ' day risk-free money back guarantee. If you are not satisfied with the product for any reason you can get a refund within '; echo $a -> days; echo ' days of making a purchase.';}
                                    ?>&lt;/p&gt;
                                    <?php if($offer == 1){ echo'
                                &lt;h1&gt;Additional services&lt;/h1&gt;
                                &lt;p&gt;Please note that any additional services, custom work or technical support are non-refundable as our time cannot be recovered.&lt;/p&gt;';} ?>
<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
&lt;h2&gt;Custom Clause&lt;/h2&gt;   
<?php } foreach ($clauses as $clause) { ?>
&lt;h2&gt;<?php echo $clause->title ?>&lt;/h2&gt;
&lt;p&gt;<?php echo $clause->text; ?>&lt;/p&gt;
<?php } ?>
&lt;h2&gt;Contacting us&lt;/h2&gt;
&lt;p&gt;If you would like to contact us concerning any matter relating to this Refund Policy<?php if($bcd == 'form') { echo '
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
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>.&lt;/p&gt;
&lt;p&gt;This document was last updated on <?php echo $a -> updated_at ; ?>&lt;/p&gt;
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
@endif
@endsection