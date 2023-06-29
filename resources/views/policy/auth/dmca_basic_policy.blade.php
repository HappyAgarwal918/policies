@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policies.css')}}">
@endsection

@section('content')

@php
$id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first();
    $platforms = $a -> platforms;
    $fair_use = $a -> fair_use;
    $formatting = $a -> formatting;
    $court = $a -> court;
    $instructions = $a -> instructions;
    $actions = $a -> actions;
    $contacts = $a -> contacts;              
    $notify = $a -> notify; 
@endphp

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">DMCA policy for <?php if($platforms == 'Website URL') {echo $a -> website_url;} 
                        elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name;} ?></div>
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
                    <h1>DMCA policy</h1>
            <p>
            <?php if($platforms == 'Website URL') { echo ' This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> website_url; echo '&nbsp website ("Website" or "Service") and any of its related products and services (collectively, "Services") and outlines how this Website operator ("Operator", "we", "us" or "our") addresses copyright infringement notifications and how you ("you" or "your") may submit a copyright infringement complaint.';}

            elseif($platforms == 'Mobile App Name') { echo ' This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> mobile_name; echo '&nbsp mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services") and outlines how this Mobile Application developer ("Operator", "we", "us" or "our") addresses copyright infringement notifications and how you ("you" or "your") may submit a copyright infringement complaint.';} ?>
            </p>

            <p> Protection of intellectual property is of utmost importance to us and we ask our users and their authorized agents to do the same. It is our policy to expeditiously respond to clear
                notifications of alleged copyright infringement that comply with the United States Digital Millennium Copyright Act ("DMCA") of 1998, the text of which can be found at the U.S. Copyright
                Office <a target="_blank" href="https://www.copyright.gov/">website</a>. This DMCA policy was created with the
                <a target="_blank" href="{{route('dmcagenerator')}}">DMCA policy generator</a>.
            </p>

            <h2>What to consider before submitting a copyright complaint</h2>

            <p><?php if($fair_use == 1) { echo ' Before submitting a copyright complaint to us, consider whether the use could be considered fair use. Fair use states that brief excerpts of copyrighted material may, under certain circumstances, be quoted verbatim for purposes such as criticism, news reporting, teaching, and research, without the need for permission from or payment to the copyright holder. ';} ?>
            </p>

            <p>Please note that if you are unsure whether the material you are reporting is in fact infringing, you may wish to contact an attorney before filing a notification with us.</p>
            <p>
                The DMCA requires you to provide your personal information in the copyright infringement notification. If you are concerned about the privacy of your personal information, you may wish to
                <a target="_blank" href="#">hire an agent</a> to report infringing material for you.
            </p>

            <h2>Notifications of infringement</h2>

            <?php if($formatting == 1) { echo '
            <p>If you are a copyright owner or an agent thereof, and you believe that any material available on our Services infringes your copyrights, then you may submit a written copyright infringement notification (&quot;Notification&quot;) using the contact details below pursuant to the DMCA. All such Notifications must comply with the DMCA requirements. You may refer to a <a target="_blank" href="#">DMCA takedown notice generator</a> or other similar services to avoid making mistake and ensure compliance of your Notification.</p> ';} ?>
            <?php if($court == 1) { echo '
            <p>Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. If your complaint has satisfied these requirements, our response may include the removal or restriction of access to allegedly infringing material. We may also require a court order from a court of competent jurisdiction, as determined by us in our sole discretion, before we take any action.</p> ';}
            else { echo ' <p>Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. Our response may include the removal or restriction of access to allegedly infringing material.</p> ';} ?>

            <p>If we remove or restrict access to materials or terminate an account in response to a Notification of alleged infringement, we will make a good faith effort to contact the affected user with information concerning the removal or restriction of access.</p>

            <?php if ($instructions == 0) { echo '
            <p>Notwithstanding anything to the contrary contained in any portion of this Policy, the Operator reserves the right to take no action upon receipt of a DMCA copyright infringement notification if it fails to comply with all the requirements of the DMCA for such notifications.</p> ';} ?>

            <?php if ($actions == 1) { echo '
            <p>The process described in this Policy does not limit our ability to pursue any other remedies we may have to address suspected infringement.</p> ';} ?>
            

            <h2>Changes and amendments</h2>
            <p>
                We reserve the right to modify this Policy or its terms relating to the Website and Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?>
            </p>
            <h2>Reporting copyright infringement</h2>
            <p>If you would like to notify us of the infringing material or activity
            <?php if($contacts == 'form') { echo '
              , you may do so via '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', sending an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,address') { echo '
                                               , you may do so via '; echo $a -> contact_form; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email,address') { echo '
                                               , you may do so via '; echo $a -> contact_form;
                                               echo ', sending an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
             </p>
            <p>This document was created on <?php echo $a -> created ; ?></p>
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/dmca-basic-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/dmca-basic-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
&lt;h1&gt;DMCA policy&lt;/h1&gt;
&lt;p&gt;<?php if($platforms == 'Website URL') { echo ' This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> website_url; echo '&nbsp website ("Website" or "Service") and any of its related products and services (collectively, "Services") and outlines how this Website operator ("Operator", "we", "us" or "our") addresses copyright infringement notifications and how you ("you" or "your") may submit a copyright infringement complaint.';}

elseif($platforms == 'Mobile App Name') { echo ' This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> mobile_name; echo '&nbsp mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services") and outlines how this Mobile Application developer ("Operator", "we", "us" or "our") addresses copyright infringement notifications and how you ("you" or "your") may submit a copyright infringement complaint.';} ?> 
&lt;p&gt;Protection of intellectual property is of utmost importance to us and we ask our users and their authorized agents to do the same. It is our policy to expeditiously respond to clear notifications of alleged copyright infringement that comply with the United States Digital Millennium Copyright Act (&amp;quot;DMCA&amp;quot;) of 1998, the text of which can be found at the U.S. Copyright Office &lt;a target="_blank" href="#"&gt;website&lt;/a&gt;. This DMCA policy was created with the &lt;a target="_blank" href="{{route('dmcagenerator')}}"&gt;DMCA policy generator&lt;/a&gt;.&lt;/p&gt;
&lt;h2&gt;What to consider before submitting a copyright complaint&lt;/h2&gt;
&lt;p&gt;<?php if($fair_use == 1) { echo ' Before submitting a copyright complaint to us, consider whether the use could be considered fair use. Fair use states that brief excerpts of copyrighted material may, under certain circumstances, be quoted verbatim for purposes such as criticism, news reporting, teaching, and research, without the need for permission from or payment to the copyright holder. ';} ?>&lt;/p&gt;
&lt;p&gt;Please note that if you are unsure whether the material you are reporting is in fact infringing, you may wish to contact an attorney before filing a notification with us.&lt;/p&gt;
&lt;p&gt;The DMCA requires you to provide your personal information in the copyright infringement notification. If you are concerned about the privacy of your personal information, you may wish to &lt;a target="_blank" href="#"&gt;hire an agent&lt;/a&gt; to report infringing material for you.&lt;/p&gt;
&lt;h2&gt;Notifications of infringement&lt;/h2&gt;
<?php if($formatting == 1) { echo '
&lt;p&gt;If you are a copyright owner or an agent thereof, and you believe that any material available on our Services infringes your copyrights, then you may submit a written copyright infringement notification (&quot;Notification&quot;) using the contact details below pursuant to the DMCA. All such Notifications must comply with the DMCA requirements. You may refer to a <a target="_blank" href="#">DMCA takedown notice generator</a> or other similar services to avoid making mistake and ensure compliance of your Notification.&lt;p&gt; ';} ?>
<?php if($court == 1) { echo '
&lt;p&gt;Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. If your complaint has satisfied these requirements, our response may include the removal or restriction of access to allegedly infringing material. We may also require a court order from a court of competent jurisdiction, as determined by us in our sole discretion, before we take any action.&lt;/p&gt; ';}
else { echo '&lt;p&gt;Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. Our response may include the removal or restriction of access to allegedly infringing material.&lt;/p&gt; ';} ?>
&lt;p&gt;If we remove or restrict access to materials or terminate an account in response to a Notification of alleged infringement, we will make a good faith effort to contact the affected user with information concerning the removal or restriction of access.&lt;/p&gt;
<?php if ($instructions == 0) { echo '
&lt;p&gt;Notwithstanding anything to the contrary contained in any portion of this Policy, the Operator reserves the right to take no action upon receipt of a DMCA copyright infringement notification if it fails to comply with all the requirements of the DMCA for such notifications.&lt;/p&gt; ';} ?>
<?php if ($actions == 1) { echo '
&lt;p&gt;The process described in this Policy does not limit our ability to pursue any other remedies we may have to address suspected infringement.&lt;/p&gt; ';} ?>
&lt;h2&gt;Changes and amendments&lt;/h2&gt;
&lt;p&gt;We reserve the right to modify this Policy or its terms relating to the Website and Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?>&lt;/p&gt;
&lt;h2&gt;Reporting copyright infringement&lt;/h2&gt;
&lt;p&gt;If you would like to notify us of the infringing material or activity
            <?php if($contacts == 'form') { echo '
              , you may do so via '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', sending an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,address') { echo '
                                               , you may do so via '; echo $a -> contact_form; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email,address') { echo '
                                               , you may do so via '; echo $a -> contact_form;
                                               echo ', sending an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>&lt;/p&gt;
&lt;p&gt;This document was created on <?php echo $a -> created ; ?>&lt;/p&gt;
                    </div>
                </div>
                <h4 class="my-3">Copy HTML code</h4>
                <p>If you rather not link to the policy directly, you may copy the HTML code of the policy directly to your app.</p>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_text')">Copy text</button>
                <span id="copied-text-success" class="copied">Text Copied!</span>
            </div>
            <ul class="button_main">
                <li><a href="dmca-policy?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
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