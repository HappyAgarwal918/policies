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
    $formattingg = $a -> formattingg;
    $court = $a -> court;
    $instructions = $a -> instructions;
    $actions = $a -> actions;
    $contacts = $a -> contacts;
    $company = $a -> company;            
    $notify = $a -> notify;   
    $counterr = $a -> counterr;
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
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/dmca-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/dmca-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
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
@else
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
    <?php if($platforms == 'Website URL') { echo 'This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> website_url; echo '&nbsp website ("Website" or "Service") and any
    of its related products and services (collectively, "Services") and outlines how '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';}
    echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '","we", "us" or "our") addresses copyright infringement notifications and how you
    ("you" or "your") may submit a copyright infringement complaint.';}

    elseif($platforms == 'Mobile App Name') { echo 'This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> mobile_name; echo '&nbsp mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services") and outlines how '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Develepor';} echo '", "we", "us" or "our") addresses copyright infringement notifications and how you ("you" or "your") may submit a copyright infringement complaint.';} ?>
</p>
<p>
    Protection of intellectual property is of utmost importance to us and we ask our users and their authorized agents to do the same. It is our policy to expeditiously respond to clear
    notifications of alleged copyright infringement that comply with the United States Digital Millennium Copyright Act ("DMCA") of 1998, the text of which can be found at the U.S. Copyright
    Office <a target="_blank" href="https://www.copyright.gov/">website</a>.
</p>
<h2>What to consider before submitting a copyright complaint</h2>
<p>
    <?php if($fair_use == 1 && $company == 1) { echo 'Before submitting a copyright complaint to us, consider whether the use could be considered fair use. Fair use states that brief excerpts of copyrighted material may, under certain
    circumstances, be quoted verbatim for purposes such as criticism, news reporting, teaching, and research, without the need for permission from or payment to the copyright holder. If you have
    considered fair use, and you still wish to continue with a copyright complaint, you may want to first reach out to the user in question to see if you can resolve the matter directly with the
    user.
</p>
<p>
    Please note that under 17 U.S.C. § 512(f), you may be liable for any damages, including costs and attorneys’ fees incurred by us or our users, if you knowingly misrepresent that the material
    or activity is infringing. If you are unsure whether the material you are reporting is in fact infringing, you may wish to contact an attorney before filing a notification with us.
</p>
<p>
    We may, at our discretion or as required by law, share a copy of your notification or counter-notification with third parties. This may include sharing the information with the account holder
    engaged in the allegedly infringing activity or for publication. If you are concerned about your information being forwarded, you may wish to
    <a target="_blank" href="#">use an agent</a> to report infringing material for you.';} ?>
    <?php if($fair_use == 1 && $company == 0) { echo 'Before submitting a copyright complaint to us, consider whether the use could be considered fair use. Fair use states that brief excerpts of copyrighted material may, under certain
    circumstances, be quoted verbatim for purposes such as criticism, news reporting, teaching, and research, without the need for permission from or payment to the copyright holder.
     The DMCA requires you to provide your personal information in the copyright infringement notification. If you are concerned about the privacy of your personal information, you may wish to use an agent to report infringing material for you.
   ';} ?>
   <?php if($fair_use == 0 && $company == 0) { echo '
    <p>Please note that if you are unsure whether the material you are reporting is in fact infringing, you may wish to contact an attorney before filing a notification with us.</p>   
    <p>The DMCA requires you to provide your personal information in the copyright infringement notification. If you are concerned about the privacy of your personal information, you may wish to use an agent to report infringing material for you.</p>
   ';} ?>
   

<h2>Notifications of infringement</h2>
<p>
    <?php if($formattingg == 1) { echo '
    If you are a copyright owner or an agent thereof, and you believe that any material available on our Services infringes your copyrights, then you may submit a written copyright infringement
    notification ("Notification") using the contact details below pursuant to the DMCA by providing us with the following information:
</p>
<ul>
    <li>
        Identification of the copyrighted work that you claim has been infringed, or, if multiple copyrighted works are covered by this Notification, you may provide a representative list of the
        copyrighted works that you claim have been infringed.
    </li>
    <li>
        Identification of the infringing material and information you claim is infringing (or the subject of infringing activity), including at a minimum, if applicable, the URL or URLs of the web
        pages where the allegedly infringing material may be found.
    </li>
    <li>Information reasonably sufficient to permit us to contact you, such as an address, telephone number, and, if available, an e-mail address.</li>
    <li>A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, the copyright owners agent, or the law.</li>
    <li>
        A statement that the information in the notification is accurate, and under penalty of perjury that you are authorized to act on behalf of the owner of an exclusive right that is allegedly
        infringed.
    </li>
    <li>A physical or electronic signature (typing your full name will suffice) of the copyright owner or a person authorized to act on their behalf.</li>
</ul>
<p>
    All such Notifications must comply with the DMCA requirements. You may refer to a
    <a target="_blank" href="/dmca-policy-generator">DMCA takedown notice generator</a> or other similar services to avoid making mistake and ensure compliance
    of your Notification. </p>';} ?>

<p><?php if($court == 1) { echo '
    Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. If your complaint has satisfied these
    requirements, our response may include the removal or restriction of access to allegedly infringing material as well as a permanent termination of repeat infringers’ accounts. We may also
    require a court order from a court of competent jurisdiction, as determined by us in our sole discretion, before we take any action. A backup of the terminated account’s data may be requested, however it may be subject to certain penalty fees imposed. The final penalty fee will be determined by the severity and frequency of the violations.';} ?></p>
<p>
    <?php if($formattingg == 0 && $court ==0) { echo '
    Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. Our response may include the removal or restriction of access to allegedly infringing material.
    ';} ?>

    <p>If we remove or restrict access to materials or terminate an account in response to a Notification of alleged infringement, we will make a good faith effort to contact the affected user with
    information concerning the removal or restriction of access, which may include a full copy of your Notification (including your name, address, phone, and email address), along with instructions for filing a counter-notification.
    </p>
<?php if ($instructions == 1) { echo ' 
<p>
    Notwithstanding anything to the contrary contained in any portion of this Policy, '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' reserves the right to take no action upon receipt of a DMCA copyright infringement notification if
    it fails to comply with all the requirements of the DMCA for such notifications.
</p>
';} ?>

<?php if ($counterr == 1 ) { echo'
<h2>Counter-notifications</h2>
<p>
    A user who receives a copyright infringement Notification may make a counter-Notification pursuant to sections 512(g)(2) and (3) of the US Copyright Act. If you receive a copyright
    infringement Notification, it means that the material described in the Notification has been removed from our Services or access to the material has been restricted. Please take the time to
    read through the Notification, which includes information on the Notification we received as well as instructions on how to file a counter-notifications.
</p>
<p>To file a counter-notification with us, you must provide a written communication that sets out the information specified in the list below:</p>
<ul>
    <li>
        Identification of the material that has been removed or to which access has been restricted and the location at which the material appeared before it was removed or access to it was
        restricted.
    </li>
    <li>Information reasonably sufficient to permit us to contact you, such as an address, telephone number, and, if available, an e-mail address.</li>
    <li>
        A statement under penalty of perjury that you have a good faith belief that the material was removed or restricted as a result of mistake or misidentification of the material to be removed
        or restricted.
    </li>
    <li>
        A statement that you consent to the jurisdiction of the federal district court for the judicial district in which the address is located (or if you are outside of the United States, that
        you consent to the jurisdiction of any judicial district in which the service provider may be found), and that you will accept service of process from the person or company who provided
        the original infringement notification.
    </li>
    <li>A physical or electronic signature (typing your full name will suffice) of the copyright owner or a person authorized to act on their behalf.</li>
</ul>

<p>
    Please note that you may be liable for, including costs and attorneys’ fees incurred by us or our users, if you knowingly misrepresent that the material or activity is not infringing the
    copyrights of others or that the material or activity was removed or restricted by mistake or misidentification. Accordingly, if you are not sure whether certain material infringes the
    copyrights of others or that the material or activity was removed or restricted by mistake or misidentification, you may wish to contact an attorney before filing a counter-notification.
</p>
<p>
    Notwithstanding anything to the contrary contained in any portion of this Policy,'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' reserves the right to take no action upon receipt of a counter-notification. If we receive a
    counter-notification that complies with the terms of 17 U.S.C. § 512(g), we may forward it to the person who filed the original Notification.
</p>';} ?>

<p>The process described in this Policy does not limit our ability to pursue any other remedies we may have to address suspected infringement.</p>

<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
<h2>Custom Clause</h2>   
<?php } foreach ($clauses as $clause) { ?>
<h2><?php echo $clause->title ?></h2>
<p><?php echo $clause->text; ?></p>
<?php } ?>

<h2>Changes and amendments</h2>
<p>
    We reserve the right to modify this Policy or its terms related to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> at any time at our discretion. When we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?>
        We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.
</p>
<p>An updated version of this Policy will be effective immediately upon the posting of the revised Policy unless otherwise specified. Your continued use of the Website and Services after the effective date of the revised Policy (or such other act specified at that time) will constitute your consent to those changes.</p>
<h2>Reporting copyright infringement</h2>
<p>
    If you would like to notify us of the infringing material or activity <?php if($contacts == 'form') { echo '
              , you may do so via the '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,address') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email,address') { echo '
                                               , you may do so via the '; echo $a -> contact_form;
                                               echo ', send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>.
</p>
<p>This document was last updated on <?php echo $a -> updated_at ; ?></p>
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/dmca-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/dmca-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
&lt;h1&gt;DMCA policy&lt;/h1&gt;
&lt;p&gt;
    <?php if($platforms == 'Website URL') { echo 'This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> website_url; echo '&nbsp website ("Website" or "Service") and any
    of its related products and services (collectively, "Services") and outlines how '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';}
    echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '","we", "us" or "our") addresses copyright infringement notifications and how you
    ("you" or "your") may submit a copyright infringement complaint.';}

    elseif($platforms == 'Mobile App Name') { echo 'This Digital Millennium Copyright Act policy ("Policy") applies to the '; echo $a -> mobile_name; echo '&nbsp mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services") and outlines how '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Develepor';} echo '", "we", "us" or "our") addresses copyright infringement notifications and how you ("you" or "your") may submit a copyright infringement complaint.';} ?>
&lt;/p&gt;
&lt;p&gt;
    Protection of intellectual property is of utmost importance to us and we ask our users and their authorized agents to do the same. It is our policy to expeditiously respond to clear
    notifications of alleged copyright infringement that comply with the United States Digital Millennium Copyright Act ("DMCA") of 1998, the text of which can be found at the U.S. Copyright
    Office <a target="_blank" href="https://www.copyright.gov/">website</a>.
&lt;/p&gt;
&lt;h2&gt;What to consider before submitting a copyright complaint&lt;/h2&gt;
&lt;p&gt;
    <?php if($fair_use == 1 && $company == 1) { echo 'Before submitting a copyright complaint to us, consider whether the use could be considered fair use. Fair use states that brief excerpts of copyrighted material may, under certain
    circumstances, be quoted verbatim for purposes such as criticism, news reporting, teaching, and research, without the need for permission from or payment to the copyright holder. If you have
    considered fair use, and you still wish to continue with a copyright complaint, you may want to first reach out to the user in question to see if you can resolve the matter directly with the
    user.
&lt;/p&gt;
&lt;p&gt;
    Please note that under 17 U.S.C. § 512(f), you may be liable for any damages, including costs and attorneys’ fees incurred by us or our users, if you knowingly misrepresent that the material
    or activity is infringing. If you are unsure whether the material you are reporting is in fact infringing, you may wish to contact an attorney before filing a notification with us.
&lt;/p&gt;
&lt;p&gt;
    We may, at our discretion or as required by law, share a copy of your notification or counter-notification with third parties. This may include sharing the information with the account holder
    engaged in the allegedly infringing activity or for publication. If you are concerned about your information being forwarded, you may wish to
    <a target="_blank" href="#">use an agent</a> to report infringing material for you.';} ?>
    <?php if($fair_use == 1 && $company == 0) { echo 'Before submitting a copyright complaint to us, consider whether the use could be considered fair use. Fair use states that brief excerpts of copyrighted material may, under certain
    circumstances, be quoted verbatim for purposes such as criticism, news reporting, teaching, and research, without the need for permission from or payment to the copyright holder.
     The DMCA requires you to provide your personal information in the copyright infringement notification. If you are concerned about the privacy of your personal information, you may wish to use an agent to report infringing material for you.
   ';} ?>
   <?php if($fair_use == 0 && $company == 0) { echo '
    &lt;p&gt;Please note that if you are unsure whether the material you are reporting is in fact infringing, you may wish to contact an attorney before filing a notification with us.&lt;/p&gt;   
    &lt;p&gt;The DMCA requires you to provide your personal information in the copyright infringement notification. If you are concerned about the privacy of your personal information, you may wish to use an agent to report infringing material for you.&lt;/p&gt;
   ';} ?>
   

&lt;h2&gt;Notifications of infringement&lt;/h2&gt;
&lt;p&gt;
    <?php if($formattingg == 1) { echo '
    If you are a copyright owner or an agent thereof, and you believe that any material available on our Services infringes your copyrights, then you may submit a written copyright infringement
    notification ("Notification") using the contact details below pursuant to the DMCA by providing us with the following information:
&lt;/p&gt;
&lt;ul&gt;
    &lt;li&gt;
        Identification of the copyrighted work that you claim has been infringed, or, if multiple copyrighted works are covered by this Notification, you may provide a representative list of the
        copyrighted works that you claim have been infringed.
    &lt;/li&gt;
    &lt;li&gt;
        Identification of the infringing material and information you claim is infringing (or the subject of infringing activity), including at a minimum, if applicable, the URL or URLs of the web
        pages where the allegedly infringing material may be found.
    &lt;/li&gt;
    &lt;li&gt;Information reasonably sufficient to permit us to contact you, such as an address, telephone number, and, if available, an e-mail address.&lt;/li&gt;
    &lt;li&gt;A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, the copyright owners agent, or the law.&lt;/li&gt;
    &lt;li&gt;
        A statement that the information in the notification is accurate, and under penalty of perjury that you are authorized to act on behalf of the owner of an exclusive right that is allegedly
        infringed.
    &lt;/li&gt;
    &lt;li&gt;A physical or electronic signature (typing your full name will suffice) of the copyright owner or a person authorized to act on their behalf.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
    All such Notifications must comply with the DMCA requirements. You may refer to a
    <a target="_blank" href="/dmca-policy-generator">DMCA takedown notice generator</a> or other similar services to avoid making mistake and ensure compliance
    of your Notification.';} ?>
&lt;/p&gt;
&lt;p&gt;<?php if($court == 1) { echo '
    Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. If your complaint has satisfied these
    requirements, our response may include the removal or restriction of access to allegedly infringing material as well as a permanent termination of repeat infringers’ accounts. We may also
    require a court order from a court of competent jurisdiction, as determined by us in our sole discretion, before we take any action. A backup of the terminated account’s data may be requested, however it may be subject to certain penalty fees imposed. The final penalty fee will be determined by the severity and frequency of the violations.';} ?>&lt;/p&gt;
&lt;p&gt;
    <?php if($formattingg == 0 && $court ==0) { echo '
    Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for accuracy, validity, and completeness. Our response may include the removal or restriction of access to allegedly infringing material.
    ';} ?>

    &lt;p&gt;If we remove or restrict access to materials or terminate an account in response to a Notification of alleged infringement, we will make a good faith effort to contact the affected user with
    information concerning the removal or restriction of access, which may include a full copy of your Notification (including your name, address, phone, and email address), along with instructions for filing a counter-notification.
    &lt;/p&gt;
<?php if ($instructions == 1) { echo ' 
&lt;p&gt;
    Notwithstanding anything to the contrary contained in any portion of this Policy, '; echo $a -> company_name; echo' reserves the right to take no action upon receipt of a DMCA copyright infringement notification if
    it fails to comply with all the requirements of the DMCA for such notifications.
&lt;/p&gt;
';} ?>

<?php if ($counterr == 1 ) { echo'
&lt;h2&gt;Counter-notifications&lt;/h2&gt;
&lt;p&gt;
    A user who receives a copyright infringement Notification may make a counter-Notification pursuant to sections 512(g)(2) and (3) of the US Copyright Act. If you receive a copyright
    infringement Notification, it means that the material described in the Notification has been removed from our Services or access to the material has been restricted. Please take the time to
    read through the Notification, which includes information on the Notification we received as well as instructions on how to file a counter-notifications.
&lt;/p&gt;
&lt;p&gt;To file a counter-notification with us, you must provide a written communication that sets out the information specified in the list below:&lt;/p&gt;
&lt;ul&gt;
    &lt;li&gt;
        Identification of the material that has been removed or to which access has been restricted and the location at which the material appeared before it was removed or access to it was
        restricted.
    &lt;/li&gt;
    &lt;li&gt;Information reasonably sufficient to permit us to contact you, such as an address, telephone number, and, if available, an e-mail address.&lt;/li&gt;
    &lt;li&gt;
        A statement under penalty of perjury that you have a good faith belief that the material was removed or restricted as a result of mistake or misidentification of the material to be removed
        or restricted.
    &lt;/li&gt;
    &lt;li&gt;
        A statement that you consent to the jurisdiction of the federal district court for the judicial district in which the address is located (or if you are outside of the United States, that
        you consent to the jurisdiction of any judicial district in which the service provider may be found), and that you will accept service of process from the person or company who provided
        the original infringement notification.
    &lt;/li&gt;
    &lt;li&gt;A physical or electronic signature (typing your full name will suffice) of the copyright owner or a person authorized to act on their behalf.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;
    Please note that you may be liable for, including costs and attorneys’ fees incurred by us or our users, if you knowingly misrepresent that the material or activity is not infringing the
    copyrights of others or that the material or activity was removed or restricted by mistake or misidentification. Accordingly, if you are not sure whether certain material infringes the
    copyrights of others or that the material or activity was removed or restricted by mistake or misidentification, you may wish to contact an attorney before filing a counter-notification.
&lt;/p&gt;
&lt;p&gt;
    Notwithstanding anything to the contrary contained in any portion of this Policy,'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' reserves the right to take no action upon receipt of a counter-notification. If we receive a
    counter-notification that complies with the terms of 17 U.S.C. § 512(g), we may forward it to the person who filed the original Notification.
&lt;/p&gt;';} ?>

&lt;p&gt;The process described in this Policy does not limit our ability to pursue any other remedies we may have to address suspected infringement.&lt;/p&gt;

<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
&lt;h2&gt;Custom Clause&lt;/h2&gt;   
<?php } foreach ($clauses as $clause) { ?>
&lt;h2&gt;<?php echo $clause->title ?>&lt;/h2&gt;
&lt;p&gt;<?php echo $clause->text; ?>&lt;/p&gt;
<?php } ?>

&lt;h2&gt;Changes and amendments&lt;/h2&gt;
&lt;p&gt;
    We reserve the right to modify this Policy or its terms related to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> at any time at our discretion. When we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?>
        We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.
&lt;/p&gt;
&lt;p&gt;An updated version of this Policy will be effective immediately upon the posting of the revised Policy unless otherwise specified. Your continued use of the Website and Services after the effective date of the revised Policy (or such other act specified at that time) will constitute your consent to those changes.&lt;/p&gt;
&lt;h2&gt;Reporting copyright infringement&lt;/h2&gt;
&lt;p&gt;
    If you would like to notify us of the infringing material or activity <?php if($contacts == 'form') { echo '
              , you may do so via the '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,address') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email,address') { echo '
                                               , you may do so via the '; echo $a -> contact_form;
                                               echo ', send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>.
&lt;/p&gt;
&lt;p&gt;This document was last updated on <?php echo $a -> updated_at ; ?>&lt;/p&gt;
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
@endif
@endsection