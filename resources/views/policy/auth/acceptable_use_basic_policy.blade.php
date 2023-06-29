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
   $notify = $a -> notify;
@endphp

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
                <div class="box">
                    <h1>Acceptable use policy</h1>
                    <?php if($platforms == 'Website URL') { echo '
                    <p>This acceptable use policy (&quot;Policy&quot;) sets forth the general guidelines and acceptable and prohibited uses of the '; echo $a -> website_url; echo ' &nbsp website (&quot;Website&quot; or &quot;Service&quot;) and any of its related products and services (collectively, &quot;Services&quot;). This Policy is a legally binding agreement between you (&quot;User&quot;, &quot;you&quot; or &quot;your&quot;) and this Website operator (&quot;Operator&quot;, &quot;we&quot;, &quot;us&quot; or &quot;our&quot;). By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms &quot;User&quot;, &quot;you&quot; or &quot;your&quot; shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Website and Services. You acknowledge that this Agreement is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Website and Services.</p> ';}

                    elseif($platforms == 'Mobile App Name') { echo '
                    <p>This acceptable use policy ("Policy") sets forth the general guidelines and acceptable and prohibited uses of the '; echo $a -> mobile_name; echo '&nbsp mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and this Mobile Application developer ("Operator", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Mobile Application and Services. You acknowledge that this Agreement is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services. This acceptable use policy was created with the help of the <a target="_blank" href="/acceptable-use-policy-generator">acceptable use policy generator</a>.</p> ';} ?>

                    <h2>Prohibited activities and uses</h2>
                    <p>
                        You may not use the <?php if($platforms == 'Website URL') { echo 'Website';} else{ echo 'Mobile Application'; } ?> and Services to publish content or engage in activity that is illegal under applicable law, that is harmful to others, or that would subject us to
                        liability, including, without limitation, in connection with any of the following, each of which is prohibited under this Policy:
                    </p>

                    <ul>
                        <li>Distributing malware or other malicious code.</li>
                        <li>Disclosing sensitive personal information about others.</li>
                        <li>Collecting, or attempting to collect, personal information about third parties without their knowledge or consent.</li>
                        <li>Distributing pornography or adult related content.</li>
                        <li>Promoting or facilitating prostitution or any escort services.</li>
                        <li>Hosting, distributing or linking to child pornography or content that is harmful to minors.</li>
                        <li>Promoting or facilitating gambling, violence, terrorist activities or selling weapons or ammunition.</li>
                        <li>Engaging in the unlawful distribution of controlled substances, drug contraband or prescription medications.</li>
                        <li>Managing payment aggregators or facilitators such as processing payments on behalf of other businesses or charities.</li>
                        <li>Facilitating pyramid schemes or other models intended to seek payments from public actors.</li>
                        <li>Threatening harm to persons or property or otherwise harassing behavior.</li>
                        <li>Infringing the intellectual property or other proprietary rights of others.</li>
                        <li>Facilitating, aiding, or encouraging any of the above activities through the Mobile Application and Services.</li>
                    </ul>

                    <h2>System abuse</h2>
                    <p>
                        Any User in violation of the Mobile Application and Services security is subject to criminal and civil liability, as well as immediate account termination. Examples include, but are not
                        limited to the following:
                    </p>
                    <ul>
                        <li>Use or distribution of tools designed for compromising security of the Mobile Application and Services.</li>
                        <li>Intentionally or negligently transmitting files containing a computer virus or corrupted data.</li>
                        <li>Accessing another network without permission, including to probe or scan for vulnerabilities or breach security or authentication measures.</li>
                        <li>Unauthorized scanning or monitoring of data on any network or system without proper authorization of the owner of the system or network.</li>
                    </ul>

                    <h2>Service resources</h2>
                    <p>
                        You may not consume excessive amounts of the resources of the Mobile Application and Services or use the Mobile Application and Services in any way which results in performance issues or which
                        interrupts the Services for other Users. Prohibited activities that contribute to excessive use, include without limitation:
                    </p>
                    <ul>
                        <li>Deliberate attempts to overload the Mobile Application and Services and broadcast attacks (i.e. denial of service attacks).</li>
                        <li>Engaging in any other activities that degrade the usability and performance of the Mobile Application and Services.</li>
                    </ul>


                    <?php if($action == 1) { echo '
                    <h2>No spam policy</h2>
                    <p>
                        You may not use the Mobile Application and Services to send spam or bulk unsolicited messages. We maintain a zero tolerance policy for use of the Mobile Application and Services in any manner
                        associated with the transmission, distribution or delivery of any bulk e-mail, including unsolicited bulk or unsolicited commercial e-mail, or the sending, assisting, or commissioning the
                        transmission of commercial e-mail that does not comply with the U.S. CAN-SPAM Act of 2003 ("SPAM").
                    </p>
                    <p>
                        Your products or services advertised via SPAM (i.e. Spamvertised) may not be used in conjunction with the Mobile Application and Services. This provision includes, but is not limited to, SPAM
                        sent via fax, phone, postal mail, email, instant messaging, or newsgroups.
                    </p> ';} ?>

                    <?php if($publish == 1) { echo '
                    <h2>Defamation and objectionable content</h2>
                    <p>
                        We value the freedom of expression and encourage Users to be respectful with the content they post. We are not a publisher of User content and are not in a position to investigate the veracity
                        of individual defamation claims or to determine whether certain material, which we may find objectionable, should be censored. However, we reserve the right to moderate, disable or remove any
                        content to prevent harm to others or to us or the Mobile Application and Services, as determined in our sole discretion.
                    </p> ';} ?>

                    <?php if($action == 1) { echo '
                    <h2>Copyrighted content</h2>
                    <p>
                        Copyrighted material must not be published via the Mobile Application and Services without the explicit permission of the copyright owner or a person explicitly authorized to give such
                        permission by the copyright owner. Upon receipt of a claim for copyright infringement, or a notice of such violation, we may, at our discretion, run an investigation and, upon confirmation,
                        may remove the infringing material from the Mobile Application and Services. We may terminate the Service of Users with repeated copyright infringements. Further procedures may be carried out
                        if necessary. We will assume no liability to any User of the Mobile Application and Services for the removal of any such material. If you believe your copyright is being infringed by a person
                        or persons using the Mobile Application and Services, please get in touch with us to report copyright infringement.
                    </p> ';} ?>

                    <?php if($register == 1) { echo '
                    <h2>Security</h2>
                    <p>
                        You take full responsibility for maintaining reasonable security precautions for your account. You are responsible for protecting and updating any login account provided to you for the Mobile
                        Application and Services.
                    </p> ';} ?>

                    <?php if($suspendd == 1) { echo '
                    <h2>Enforcement</h2>
                    <p>We reserve our right to be the sole arbiter in determining the seriousness of each infringement and to immediately take corrective actions, including but not limited to:</p>
                    <ul>
                        <li>
                            Disabling or removing any content which is prohibited by this Policy, including to prevent harm to others or to us or the Mobile Application and Services, as determined by us in our sole
                            discretion.
                        </li>
                        <li>Reporting violations to law enforcement as determined by us in our sole discretion.</li>
                        <li>A failure to respond to an email from our abuse team within 2 days, or as otherwise specified in the communication to you, may result in the suspension or termination of your account.</li>
                    </ul>

                    <p>Suspended and terminated User accounts due to violations will not be re-activated.A backup of User’s data may be requested, however, we may not be able to provide you with one and, as such, you are strongly encouraged to take your own backups.</p> ';} ?>
                    <p>
                        Nothing contained in this Policy shall be construed to limit our actions or remedies in any way with respect to any of the prohibited activities. In addition, we reserve at all times all
                        rights and remedies available to us with respect to such activities at law or in equity.
                    </p>


                    <h2>Reporting violations</h2>
                    <p>If you have discovered and would like to report a violation of this Policy, please contact us immediately. We will investigate the situation and provide you with full assistance.</p>
                    <h2>Changes and amendments</h2>
                    <p>
                        We reserve the right to modify this Policy or its terms relating to the Mobile Application and Services at any time, effective upon posting of an updated version of this Policy in the Mobile
                        Application. When we do, <?php if($notify == 'email') { echo '
                       we will send you an email to notify you.';} ?>
                       <?php if($notify == 'page') { echo '
                       we will revise the updated date at the bottom of this page.';} ?>
                       <?php if($notify == 'site') { echo '
                       we will Post a notification on the website.';} ?> Continued use of the Mobile Application and Services after any such changes shall constitute your consent to such changes.
                    </p>
                    <h2>Acceptance of this policy</h2>
                    <p>
                        You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the Mobile Application and Services you agree to be bound by this Policy. If
                        you do not agree to abide by the terms of this Policy, you are not authorized to access or use the Mobile Application and Services.
                    </p>
                    <h2>Contacting us</h2>
                    <p>If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to it
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
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/acceptable-use-basic-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/acceptable-use-basic-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text">
&lt;h1&gt;Acceptable use policy&lt;/h1&gt;
<?php if($platforms == 'Website URL') { echo '
&lt;p&gt;This acceptable use policy (&quot;Policy&quot;) sets forth the general guidelines and acceptable and prohibited uses of the '; echo $a -> website_url; echo ' &nbsp website (&quot;Website&quot; or &quot;Service&quot;) and any of its related products and services (collectively, &quot;Services&quot;). This Policy is a legally binding agreement between you (&quot;User&quot;, &quot;you&quot; or &quot;your&quot;) and this Website operator (&quot;Operator&quot;, &quot;we&quot;, &quot;us&quot; or &quot;our&quot;). By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms &quot;User&quot;, &quot;you&quot; or &quot;your&quot; shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Website and Services. You acknowledge that this Agreement is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Website and Services.&lt;/p&gt; ';} 
elseif($platforms == 'Mobile App Name') { echo '
This acceptable use policy ("Policy") sets forth the general guidelines and acceptable and prohibited uses of the '; echo $a -> mobile_name; echo '&nbsp mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and this Mobile Application developer ("Operator", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Mobile Application and Services. You acknowledge that this Agreement is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services. This acceptable use policy was created with the help of the &lt;a target="_blank" href="/acceptable-use-policy-generator"&gt;acceptable use policy generator&lt;/a&gt;&lt;/p&gt; ' ;} ?>
&lt;h2&gt;Prohibited activities and uses&lt;/h2&gt;
&lt;p&gt;You may not use the <?php if($platforms == 'Website URL') { echo 'Website';} else{ echo 'Mobile Application'; } ?> and Services to publish content or engage in activity that is illegal under applicable law, that is harmful to others, or that would subject us to liability, including, without limitation, in connection with any of the following, each of which is prohibited under this Policy:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Distributing malware or other malicious code.&lt;/li&gt;
&lt;li&gt;Disclosing sensitive personal information about others.&lt;/li&gt;
&lt;li&gt;Collecting, or attempting to collect, personal information about third parties without their knowledge or consent.&lt;/li&gt;
&lt;li&gt;Distributing pornography or adult related content.&lt;/li&gt;
&lt;li&gt;Promoting or facilitating prostitution or any escort services.&lt;/li&gt;
&lt;li&gt;Hosting, distributing or linking to child pornography or content that is harmful to minors.&lt;/li&gt;
&lt;li&gt;Promoting or facilitating gambling, violence, terrorist activities or selling weapons or ammunition.&lt;/li&gt;
&lt;li&gt;Engaging in the unlawful distribution of controlled substances, drug contraband or prescription medications.&lt;/li&gt;
&lt;li&gt;Managing payment aggregators or facilitators such as processing payments on behalf of other businesses or charities.&lt;/li&gt;
&lt;li&gt;Facilitating pyramid schemes or other models intended to seek payments from public actors.&lt;/li&gt;
&lt;li&gt;Threatening harm to persons or property or otherwise harassing behavior.&lt;/li&gt;
&lt;li&gt;Infringing the intellectual property or other proprietary rights of others.&lt;/li&gt;
&lt;li&gt;Facilitating, aiding, or encouraging any of the above activities through the Mobile Application and Services.&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;System abuse&lt;/h2&gt;
&lt;p&gt;Any User in violation of the Mobile Application and Services security is subject to criminal and civil liability, as well as immediate account termination. Examples include, but are not limited to the following:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Use or distribution of tools designed for compromising security of the Mobile Application and Services.&lt;/li&gt;
&lt;li&gt;Intentionally or negligently transmitting files containing a computer virus or corrupted data.&lt;/li&gt;
&lt;li&gt;Accessing another network without permission, including to probe or scan for vulnerabilities or breach security or authentication measures.&lt;/li&gt;
&lt;li&gt;Unauthorized scanning or monitoring of data on any network or system without proper authorization of the owner of the system or network.&lt;/li&gt;
&lt;/ul&gt;
&lt;h2&gt;Service resources&lt;/h2&gt;
&lt;p&gt;You may not consume excessive amounts of the resources of the Mobile Application and Services or use the Mobile Application and Services in any way which results in performance issues or which interrupts the Services for other Users. Prohibited activities that contribute to excessive use, include without limitation:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Deliberate attempts to overload the Mobile Application and Services and broadcast attacks (i.e. denial of service attacks).&lt;/li&gt;
&lt;li&gt;Engaging in any other activities that degrade the usability and performance of the Mobile Application and Services.&lt;/li&gt;
&lt;/ul&gt;
<?php if($action == 1) { echo '
&lt;h2&gt;No spam policy&lt;/h2&gt;
&lt;p&gt;You may not use the Mobile Application and Services to send spam or bulk unsolicited messages. We maintain a zero tolerance policy for use of the Mobile Application and Services in any manner associated with the transmission, distribution or delivery of any bulk e-mail, including unsolicited bulk or unsolicited commercial e-mail, or the sending, assisting, or commissioning the transmission of commercial e-mail that does not comply with the U.S. CAN-SPAM Act of 2003 (&amp;quot;SPAM&amp;quot;).&lt;/p&gt;
&lt;p&gt;Your products or services advertised via SPAM (i.e. Spamvertised) may not be used in conjunction with the Mobile Application and Services. This provision includes, but is not limited to, SPAM sent via fax, phone, postal mail, email, instant messaging, or newsgroups.&lt;/p&gt; ';} ?>
<?php if($publish == 1) { echo '
&lt;h2&gt;Defamation and objectionable content&lt;/h2&gt;
&lt;p&gt;We value the freedom of expression and encourage Users to be respectful with the content they post. We are not a publisher of User content and are not in a position to investigate the veracity of individual defamation claims or to determine whether certain material, which we may find objectionable, should be censored. However, we reserve the right to moderate, disable or remove any content to prevent harm to others or to us or the Mobile Application and Services, as determined in our sole discretion.&lt;/p&gt;';} ?>
<?php if($action == 1) { echo '
&lt;h2&gt;Copyrighted content&lt;/h2&gt;
&lt;p&gt;Copyrighted material must not be published via the Mobile Application and Services without the explicit permission of the copyright owner or a person explicitly authorized to give such permission by the copyright owner. Upon receipt of a claim for copyright infringement, or a notice of such violation, we may, at our discretion, run an investigation and, upon confirmation, may remove the infringing material from the Mobile Application and Services. We may terminate the Service of Users with repeated copyright infringements. Further procedures may be carried out if necessary. We will assume no liability to any User of the Mobile Application and Services for the removal of any such material. If you believe your copyright is being infringed by a person or persons using the Mobile Application and Services, please get in touch with us to report copyright infringement.&lt;/p&gt;';} ?>
<?php if($register == 1) { echo '
&lt;h2&gt;Security&lt;/h2&gt;
&lt;p&gt;You take full responsibility for maintaining reasonable security precautions for your account. You are responsible for protecting and updating any login account provided to you for the Mobile Application and Services.&lt;/p&gt;';} ?>
<?php if($suspendd == 1) { echo '
&lt;h2&gt;Enforcement&lt;/h2&gt;
&lt;p&gt;We reserve our right to be the sole arbiter in determining the seriousness of each infringement and to immediately take corrective actions, including but not limited to:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Disabling or removing any content which is prohibited by this Policy, including to prevent harm to others or to us or the Mobile Application and Services, as determined by us in our sole discretion. &lt;/li&gt; &lt;li&gt;Reporting violations to law enforcement as determined by us in our sole discretion.&lt;/li&gt; &lt;li&gt;A failure to respond to an email from our abuse team within 2 days, or as otherwise specified in the communication to you, may result in the suspension or termination of your account.&lt;/li&gt; &lt;/ul&gt; &lt;p&gt;Suspended and terminated User accounts due to violations will not be re-activated.A backup of User&rsquo;s data may be requested, however, we may not be able to provide you with one and, as such, you are strongly encouraged to take your own backups.&lt;/p&gt; ';} ?>
&lt;p&gt;Nothing contained in this Policy shall be construed to limit our actions or remedies in any way with respect to any of the prohibited activities. In addition, we reserve at all times all rights and remedies available to us with respect to such activities at law or in equity.&lt;/p&gt;
&lt;h2&gt;Reporting violations&lt;/h2&gt;
&lt;p&gt;If you have discovered and would like to report a violation of this Policy, please contact us immediately. We will investigate the situation and provide you with full assistance.&lt;/p&gt;
&lt;h2&gt;Changes and amendments&lt;/h2&gt;
&lt;p&gt;We reserve the right to modify this Policy or its terms relating to the Mobile Application and Services at any time, effective upon posting of an updated version of this Policy in the Mobile Application. When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> Continued use of the Mobile Application and Services after any such changes shall constitute your consent to such changes.&lt;/p&gt;
&lt;h2&gt;Acceptance of this policy&lt;/h2&gt;
&lt;p&gt;You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the Mobile Application and Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to access or use the Mobile Application and Services.&lt;/p&gt;
&lt;h2&gt;Contacting us&lt;/h2&gt;
&lt;p&gt;If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to our use of cookies<?php if($contacts == 'form') { echo ', you may do so via '; echo $a -> contact_form;} ?>
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
@endsection