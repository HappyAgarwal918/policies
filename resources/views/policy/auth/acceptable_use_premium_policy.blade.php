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
    $publish = $a -> publish;
    $action = $a -> action;
    $suspendd = $a -> suspendd;
    $register = $a -> register;               
    $contacts = $a -> contacts;
    $company = $a -> company;
    $notify = $a -> notify;
    $publish = $a -> publish;
    $sell = $a -> sell;
    $send = $a -> send;
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
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/acceptable-use-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/acceptable-use-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
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
                <li><a href="acceptable-use-policy?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
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
                    <div class="page-title">Acceptable use policy for <?php if($platforms == 'Website URL') {echo $a -> website_url ;} elseif ($platforms == 'Mobile App Name') {echo $a -> mobile_name;} ?></div>
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
                    <h1>Acceptable use policy</h1>
<?php if($platforms == 'Website URL') { echo '
<p>This acceptable use policy ("Policy") sets forth the general guidelines and acceptable and prohibited uses of the "'; echo $a -> website_url; echo '" website ("Website" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';}
    echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Website and Services. You acknowledge that this Agreement is a contract between you and '; 
     if($company ==1){ echo $a -> company_name;}
    else { echo'the Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Website and Services.</p>';}

elseif($platforms == 'Mobile App Name') { echo '
<p>This acceptable use policy ("Policy") sets forth the general guidelines and acceptable and prohibited uses of the "'; echo $a -> mobile_name; echo '" mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Develepor';} echo '", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Mobile Application and Services. You acknowledge that this Agreement is a contract between you and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services.</p> ' ;} ?>

<h2>Prohibited activities and uses</h2>
<p>You may not use the <?php if($platforms == 'Website URL') { echo 'Website';} else{ echo 'Mobile Application'; } ?> and Services to <?php if ($publish == 1) {echo 'publish content or';} ?> engage in activity that is illegal under applicable law, that is harmful to others, or that would subject us to liability, including, without limitation, in connection with any of the following, each of which is prohibited under this Policy:</p>
<ul><?php if($sell == 1 || $publish == 1) { echo '
<li>Distributing malware or other malicious code.</li>';} ?>
<li>Disclosing sensitive personal information about others.</li>
<li>Collecting, or attempting to collect, personal information about third parties without their knowledge or consent.</li>
<?php if($sell == 1 || $publish == 1) { echo '
<li>Distributing pornography or adult related content.</li>
<li>Promoting or facilitating prostitution or any escort services.</li>
<li>Hosting, distributing or linking to child pornography or content that is harmful to minors.</li>
<li>Promoting or facilitating gambling, violence, terrorist activities or selling weapons or ammunition.</li>
<li>Engaging in the unlawful distribution of controlled substances, drug contraband or prescription medications.</li>
<li>Managing payment aggregators or facilitators such as processing payments on behalf of other businesses or charities.</li>
<li>Facilitating pyramid schemes or other models intended to seek payments from public actors.</li>';} ?>
<li>Threatening harm to persons or property or otherwise harassing behavior.</li>
<?php if($sell == 1 || $publish == 1) { echo '
<li>Manual or automatic credit card or other available payment methods testing using bots or scripts.</li>
<li>Misrepresenting or fraudulently representing products or services.</li>';} ?>
<li>Infringing the intellectual property or other proprietary rights of others.</li>
<li>Facilitating, aiding, or encouraging any of the above activities through the 
    <?php if ($platforms == 'Website URL'){echo'Website and Services.';}
        else {echo'Mobile application and services.';} ?></li>
</ul>
<h2>System abuse</h2>
<p>Any User in violation of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> security is subject to criminal and civil liability, as well as immediate account termination. Examples include, but are not limited to the following:</p>
<ul>
<li>Use or distribution of tools designed for compromising security of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.</li>
<li>Intentionally or negligently transmitting files containing a computer virus or corrupted data.</li>
<li>Accessing another network without permission, including to probe or scan for vulnerabilities or breach security or authentication measures.</li>
<li>Unauthorized scanning or monitoring of data on any network or system without proper authorization of the owner of the system or network.</li>
</ul>
<h2>Service resources</h2>
<p>You may not consume excessive amounts of the resources of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> in any way which results in performance issues or which interrupts the Services for other Users. Prohibited activities that contribute to excessive use, include without limitation:</p>
<ul>
<li>Deliberate attempts to overload the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> and broadcast attacks (i.e. denial of service attacks).</li>
<li>Engaging in any other activities that degrade the usability and performance of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.</li>
<?php if($send == 1){echo '
<li>Hosting or running malicious code or other scripts or processes that adversely impact the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.</li>
<li>Operating a file sharing site or scripts for BitTorrent or similar, which includes sending or receiving files containing these mechanisms.</li>
<li>Web proxy scripts, such as those that allow anyone to browse to a third party website anonymously, are prohibited.</li>';} ?>
</ul>

<?php if($action == 1) { echo '
<h2>No spam policy</h2>
<p>You may not use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' to send spam or bulk unsolicited messages. We maintain a zero tolerance policy for use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' in any manner associated with the transmission, distribution or delivery of unsolicited bulk or unsolicited commercial e-mail, or the sending, assisting, or commissioning the transmission of commercial e-mail that does not comply with the U.S. CAN-SPAM Act of 2003 ("SPAM").</p>
<p>Your products or services advertised via SPAM (i.e. Spamvertised) may not be used in conjunction with the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. This provision includes, but is not limited to, SPAM sent via fax, phone, postal mail, email, instant messaging, or newsgroups.</p>
<p>We may terminate the Service of any User who sends out SPAM with or without notice.</p>';} ?>

<?php if($publish == 1) { echo '
<h2>Defamation and objectionable content</h2>
<p>We value the freedom of expression and encourage Users to be respectful with the content they post. We are not a publisher of User content and are not in a position to investigate the veracity of individual defamation claims or to determine whether certain material, which we may find objectionable, should be censored. However, we reserve the right to moderate, disable or remove any content to prevent harm to others or to us or the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', as determined in our sole discretion.</p>';} ?>

<?php if($action == 1) { echo '
<h2>Copyrighted content</h2>
<p>Copyrighted material must not be published via the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' without the explicit permission of the copyright owner or a person explicitly authorized to give such permission by the copyright owner. Upon receipt of a claim for copyright infringement, or a notice of such violation, we will immediately run full investigation. However, we generally require a court order from a court of competent jurisdiction, as determined by us in our sole discretion, to take down alleged infringing material from the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. We may terminate the Service of Users with repeated copyright infringements. Further procedures may be carried out if necessary. We will assume no liability to any User of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' for the removal of any such material. If you believe your copyright is being infringed by a person or persons using the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', please get in touch with us to report copyright infringement.</p>';} ?>

<?php if($register == 1) { echo '
<h2>Security</h2>
<p>You take full responsibility for maintaining reasonable security precautions for your account. You are responsible for protecting and updating any login account provided to you for the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.You are responsible for ensuring all User provided software installed by you on the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' is updated and patched following industry best practice. We make no warranty express or implied for the security and operability of 3rd party software or scripts installed or run by you on the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.</p>';} ?>


<h2>Enforcement</h2>
<p>We reserve our right to be the sole arbiter in determining the seriousness of each infringement and to immediately take corrective actions, including but not limited to:</p>
<ul>
    <?php if ($a -> action == 1) {echo '
<li>Suspending or terminating your Service with or without notice upon any violation of this Policy. Any violations may also result in the immediate suspension or termination of your account.</li>';} ?>
<li>Disabling or removing any content which is prohibited by this Policy, including to prevent harm to others or to us or the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>, as determined by us in our sole discretion.</li>
<li>Reporting violations to law enforcement as determined by us in our sole discretion.</li>
<?php if($suspendd == 1) { echo '
<li>A failure to respond to an email from our abuse team within 2 days, or as otherwise specified in the communication to you, may result in the suspension or termination of your account.</li>';} ?>
</ul>
<?php if($suspendd == 1) { echo '
<p>Suspended and terminated User accounts due to violations will not be re-activated. A backup of User’s data may be requested, however it may be subject to certain penalty fees imposed according to the breach of this Policy terms. The final penalty fee will be determined by the type and frequency of the violations.</p>';} ?>


<?php if ($a -> action == 1) {echo '
<p>Nothing contained in this Policy shall be construed to limit our actions or remedies in any way with respect to any of the prohibited activities. We reserve the right to take any and all additional actions we may deem appropriate with respect to such activities, including without limitation taking action to recover the costs and expenses of identifying offenders and removing them from the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', and levying cancellation charges to cover our costs. In addition, we reserve at all times all rights and remedies available to us with respect to such activities at law or in equity.</p>';}
else{echo '<p>Nothing contained in this Policy shall be construed to limit our actions or remedies in any way with respect to any of the prohibited activities. In addition, we reserve at all times all rights and remedies available to us with respect to such activities at law or in equity.</p>';} ?>

<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
<h2>Custom Clause</h2>   
<?php } foreach ($clauses as $clause) { ?>
<h2><?php echo $clause->title ?></h2>
<p><?php echo $clause->text; ?></p>
<?php } ?>
<h2>Reporting violations</h2>
<p>If you have discovered and would like to report a violation of this Policy, please contact us immediately. We will investigate the situation and provide you with full assistance.</p>
<h2>Changes and amendments</h2>
<p>We reserve the right to modify this Policy or its terms relating to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> at any time, effective upon posting of an updated version of this Policy on the Website. When we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will post a notification on the main page of the Website.';} ?> Continued use of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> after any such changes shall constitute your consent to such changes.</p>
<h2>Acceptance of this policy</h2>
<p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to access or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.</p>
<h2>Contacting us</h2>
<p>If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to it<?php if($contacts == 'form') { echo '
                                               , you may do so via '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , you may send an email to '; echo $a -> contact_email;} ?>
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
                                              .</p>
<p>This document was last updated on <?php echo $a -> updated_at; ?></p>
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/acceptable-use-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/acceptable-use-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
&lt;h1&gt;Acceptable use policy&lt;/h1&gt;
<?php if($platforms == 'Website URL') { echo '
&lt;p&gt;This acceptable use policy ("Policy") sets forth the general guidelines and acceptable and prohibited uses of the "'; echo $a -> website_url; echo '" website ("Website" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';}
    echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Website and Services. You acknowledge that this Agreement is a contract between you and '; 
     if($company ==1){ echo $a -> company_name;}
    else { echo'the Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Website and Services.&lt;/p&gt;';}

elseif($platforms == 'Mobile App Name') { echo '
&lt;p&gt;This acceptable use policy ("Policy") sets forth the general guidelines and acceptable and prohibited uses of the "'; echo $a -> mobile_name; echo '" mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Develepor';} echo '", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Mobile Application and Services. You acknowledge that this Agreement is a contract between you and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services.&lt;/p&gt; ' ;} ?>

&lt;h2&gt;Prohibited activities and uses&lt;/h2&gt;
&lt;p&gt;You may not use the <?php if($platforms == 'Website URL') { echo 'Website';} else{ echo 'Mobile Application'; } ?> and Services to <?php if ($publish == 1) {echo 'publish content or';} ?> engage in activity that is illegal under applicable law, that is harmful to others, or that would subject us to liability, including, without limitation, in connection with any of the following, each of which is prohibited under this Policy:&lt;/p&gt;
&lt;ul&gt;<?php if($sell == 1 || $publish == 1) { echo '
&lt;li&gt;Distributing malware or other malicious code.&lt;/li&gt;';} ?>
&lt;li&gt;Disclosing sensitive personal information about others.&lt;/li&gt;
&lt;li&gt;Collecting, or attempting to collect, personal information about third parties without their knowledge or consent.&lt;/li&gt;
<?php if($sell == 1 || $publish == 1) { echo '
&lt;li&gt;Distributing pornography or adult related content.&lt;/li&gt;
&lt;li&gt;Promoting or facilitating prostitution or any escort services.&lt;/li&gt;
&lt;li&gt;Hosting, distributing or linking to child pornography or content that is harmful to minors.&lt;/li&gt;
&lt;li&gt;Promoting or facilitating gambling, violence, terrorist activities or selling weapons or ammunition.&lt;/li&gt;
&lt;li&gt;Engaging in the unlawful distribution of controlled substances, drug contraband or prescription medications.&lt;/li&gt;
&lt;li&gt;Managing payment aggregators or facilitators such as processing payments on behalf of other businesses or charities.&lt;/li&gt;
&lt;li&gt;Facilitating pyramid schemes or other models intended to seek payments from public actors.&lt;/li&gt;';} ?>
&lt;li&gt;Threatening harm to persons or property or otherwise harassing behavior.&lt;/li&gt;
<?php if($sell == 1 || $publish == 1) { echo '
&lt;li&gt;Manual or automatic credit card or other available payment methods testing using bots or scripts.&lt;/li&gt;
&lt;li&gt;Misrepresenting or fraudulently representing products or services.&lt;/li&gt;';} ?>
&lt;li&gt;Infringing the intellectual property or other proprietary rights of others.&lt;/li&gt;
&lt;li&gt;Facilitating, aiding, or encouraging any of the above activities through the 
    <?php if ($platforms == 'Website URL'){echo'Website and Services.';}
        else {echo'Mobile application and services.';} ?>&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;System abuse&lt;/h2&gt;
&lt;p&gt;Any User in violation of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> security is subject to criminal and civil liability, as well as immediate account termination. Examples include, but are not limited to the following:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Use or distribution of tools designed for compromising security of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.&lt;/li&gt;
&lt;li&gt;Intentionally or negligently transmitting files containing a computer virus or corrupted data.&lt;/li&gt;
&lt;li&gt;Accessing another network without permission, including to probe or scan for vulnerabilities or breach security or authentication measures.&lt;/li&gt;
&lt;li&gt;Unauthorized scanning or monitoring of data on any network or system without proper authorization of the owner of the system or network.&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Service resources&lt;/h2&gt;
&lt;p&gt;You may not consume excessive amounts of the resources of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> in any way which results in performance issues or which interrupts the Services for other Users. Prohibited activities that contribute to excessive use, include without limitation:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Deliberate attempts to overload the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> and broadcast attacks (i.e. denial of service attacks).&lt;/li&gt;
&lt;li&gt;Engaging in any other activities that degrade the usability and performance of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.&lt;/li&gt;
<?php if($send == 1){echo '
&lt;li&gt;Hosting or running malicious code or other scripts or processes that adversely impact the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.&lt;/li&gt;
&lt;li&gt;Operating a file sharing site or scripts for BitTorrent or similar, which includes sending or receiving files containing these mechanisms.&lt;/li&gt;
&lt;li&gt;Web proxy scripts, such as those that allow anyone to browse to a third party website anonymously, are prohibited.&lt;/li&gt;';} ?>
&lt;/ul&gt;

<?php if($action == 1) { echo '
&lt;h2&gt;No spam policy&lt;/h2&gt;
&lt;p&gt;You may not use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' to send spam or bulk unsolicited messages. We maintain a zero tolerance policy for use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' in any manner associated with the transmission, distribution or delivery of unsolicited bulk or unsolicited commercial e-mail, or the sending, assisting, or commissioning the transmission of commercial e-mail that does not comply with the U.S. CAN-SPAM Act of 2003 ("SPAM").&lt;/p&gt;
&lt;p&gt;Your products or services advertised via SPAM (i.e. Spamvertised) may not be used in conjunction with the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. This provision includes, but is not limited to, SPAM sent via fax, phone, postal mail, email, instant messaging, or newsgroups.&lt;/p&gt;
&lt;p&gt;We may terminate the Service of any User who sends out SPAM with or without notice.&lt;/p&gt;';} ?>

<?php if($publish == 1) { echo '
&lt;h2&gt;Defamation and objectionable content&lt;/h2&gt;
&lt;p&gt;We value the freedom of expression and encourage Users to be respectful with the content they post. We are not a publisher of User content and are not in a position to investigate the veracity of individual defamation claims or to determine whether certain material, which we may find objectionable, should be censored. However, we reserve the right to moderate, disable or remove any content to prevent harm to others or to us or the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', as determined in our sole discretion.&lt;/p&gt;';} ?>

<?php if($action == 1) { echo '
&lt;h2&gt;Copyrighted content&lt;/h2&gt;
&lt;p&gt;Copyrighted material must not be published via the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' without the explicit permission of the copyright owner or a person explicitly authorized to give such permission by the copyright owner. Upon receipt of a claim for copyright infringement, or a notice of such violation, we will immediately run full investigation. However, we generally require a court order from a court of competent jurisdiction, as determined by us in our sole discretion, to take down alleged infringing material from the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. We may terminate the Service of Users with repeated copyright infringements. Further procedures may be carried out if necessary. We will assume no liability to any User of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' for the removal of any such material. If you believe your copyright is being infringed by a person or persons using the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', please get in touch with us to report copyright infringement.&lt;/p&gt;';} ?>

<?php if($register == 1) { echo '
&lt;h2&gt;Security&lt;/h2&gt;
&lt;p&gt;You take full responsibility for maintaining reasonable security precautions for your account. You are responsible for protecting and updating any login account provided to you for the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.You are responsible for ensuring all User provided software installed by you on the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' is updated and patched following industry best practice. We make no warranty express or implied for the security and operability of 3rd party software or scripts installed or run by you on the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.&lt;/p&gt;';} ?>


&lt;h2&gt;Enforcement&lt;/h2&gt;
&lt;p&gt;We reserve our right to be the sole arbiter in determining the seriousness of each infringement and to immediately take corrective actions, including but not limited to:&lt;/p&gt;
&lt;ul&gt;
    <?php if ($a -> action == 1) {echo '
&lt;li&gt;Suspending or terminating your Service with or without notice upon any violation of this Policy. Any violations may also result in the immediate suspension or termination of your account.&lt;/li&gt;';} ?>
&lt;li&gt;Disabling or removing any content which is prohibited by this Policy, including to prevent harm to others or to us or the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>, as determined by us in our sole discretion.&lt;/li&gt;
&lt;li&gt;Reporting violations to law enforcement as determined by us in our sole discretion.&lt;/li&gt;
<?php if($suspendd == 1) { echo '
&lt;li&gt;A failure to respond to an email from our abuse team within 2 days, or as otherwise specified in the communication to you, may result in the suspension or termination of your account.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Suspended and terminated User accounts due to violations will not be re-activated. A backup of User’s data may be requested, however it may be subject to certain penalty fees imposed according to the breach of this Policy terms. The final penalty fee will be determined by the type and frequency of the violations.&lt;/p&gt;';} ?>


<?php if ($a -> action == 1) {echo '
&lt;p&gt;Nothing contained in this Policy shall be construed to limit our actions or remedies in any way with respect to any of the prohibited activities. We reserve the right to take any and all additional actions we may deem appropriate with respect to such activities, including without limitation taking action to recover the costs and expenses of identifying offenders and removing them from the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', and levying cancellation charges to cover our costs. In addition, we reserve at all times all rights and remedies available to us with respect to such activities at law or in equity.&lt;/p&gt;';}
else{echo '&lt;p&gt;Nothing contained in this Policy shall be construed to limit our actions or remedies in any way with respect to any of the prohibited activities. In addition, we reserve at all times all rights and remedies available to us with respect to such activities at law or in equity.&lt;/p&gt;';} ?>

<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
&lt;h2&gt;Custom Clause&lt;/h2&gt;   
<?php } foreach ($clauses as $clause) { ?>
&lt;h2&gt;<?php echo $clause->title ?>&lt;/h2&gt;
&lt;p&gt;<?php echo $clause->text; ?>&lt;/p&gt;
<?php } ?>
&lt;h2&gt;Reporting violations&lt;/h2&gt;
&lt;p&gt;If you have discovered and would like to report a violation of this Policy, please contact us immediately. We will investigate the situation and provide you with full assistance.&lt;/p&gt;
&lt;h2&gt;Changes and amendments&lt;/h2&gt;
&lt;p&gt;We reserve the right to modify this Policy or its terms relating to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> at any time, effective upon posting of an updated version of this Policy on the Website. When we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will post a notification on the main page of the Website.';} ?> Continued use of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> after any such changes shall constitute your consent to such changes.&lt;/p&gt;
&lt;h2&gt;Acceptance of this policy&lt;/h2&gt;
&lt;p&gt;You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to access or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.&lt;/p&gt;
&lt;h2&gt;Contacting us&lt;/h2&gt;
&lt;p&gt;If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to it<?php if($contacts == 'form') { echo '
                                               , you may do so via '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , you may send an email to '; echo $a -> contact_email;} ?>
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
                                              .&lt;/p&gt;
&lt;p&gt;This document was last updated on <?php echo $a -> updated_at; ?>&lt;/p&gt;
                    </div>
                </div>
                <h4 class="my-3">Copy HTML code</h4>
                <p>If you rather not link to the policy directly, you may copy the HTML code of the policy directly to your app.</p>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_text')">Copy text</button>
                <span id="copied-text-success" class="copied">Text Copied!</span>
            </div>
            <ul class="button_main">
                <li><a href="acceptable-use-policy?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
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