@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policies.css')}}">
@endsection

@section('content')

@php
$id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first();
   $privacy_policy = $a -> privacy_policy;
   $privacy_policy_url = $a -> privacy_policy_url;
   $essential = $a -> essential;
   $functionality = $a -> functionality;
   $third_party = $a -> third_party;
   $cookies_social = $a -> cookies_social;
   $contacts = $a -> contacts;
   $notify = $a -> notify;
@endphp

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Cookie policy for <?php echo $a -> website_url; ?></div>
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
                    <h1>Cookie policy</h1>
                <p>This cookie policy ("Policy") describes what cookies are and how and they're being used by the <?php echo $a -> website_url; ?> website ("Website" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and this Website operator ("Operator", "we", "us" or "our"). You should read this Policy so you can understand the types of cookies we use, the information we collect using cookies and how that information is used. It also describes the choices available to you regarding accepting or declining the use of cookies. @if($privacy_policy == 1)
                For further information on how we use, store and keep your personal data secure, see our <a target="_blank" rel="nofollow" href="<?php echo $privacy_policy_url ?>">privacy policy</a>.
                @endif
                </p>
                <h2>What are cookies?</h2>
                <p>Cookies are small pieces of data stored in text files that are saved on your computer or other devices when websites are loaded in a browser. They are widely used to remember you and your
                preferences, either for a single visit (through a "session cookie") or for multiple repeat visits (using a "persistent cookie").</p>    
                <p>Session cookies are temporary cookies that are used during the course of your visit to the Website, and they expire when you close the web browser.</p>
                <p>Persistent cookies are used to remember your preferences within our Website and remain on your desktop or mobile device even after you close your browser or restart your computer. They ensure a consistent and efficient experience for you while visiting the Website and Services.</p>
                <p>Cookies may be set by the Website ("first-party cookies"), or by third parties, such as those who serve content or provide advertising or analytics services on the Website ("third party cookies"). These third parties can recognize you when you visit our website and also when you visit certain other websites.<a target="_blank" href="{{ route('cookiegenerator')}}">Click here</a> to learn more about cookies and how they work.</p>

                <h2>What type of cookies do we use?</h2>
                <?php if($essential == 1) { echo '
                <h3>Necessary cookies</h3>
                <p>Necessary cookies allow us to offer you the best possible experience when accessing and navigating through our Website and using its features. For example, these cookies let us recognize that you have created an account and have logged into that account to access the content.</p> ';} ?>
                <?php if($functionality == 1) { echo '
                <h3>Functionality cookies</h3>
                <p>Functionality cookies let us operate the Website and Services in accordance with the choices you make. For example, we will recognize your username and remember how you customized the Website and Services during future visits.</p> ';} ?>
                <?php if($third_party == 1) { echo '
                <h3>Analytical cookies</h3>
                <p>These cookies enable us and third party services to collect aggregated data for statistical purposes on how our visitors use the Website. These cookies do not contain personal information such as names and email addresses and are used to help us improve your user experience of the Website.</p> ';} ?>
                <?php if($cookies_social == 1) { echo '
                <h3>Social media cookies</h3>
                <p>Third party cookies from social media sites (such as Facebook, Twitter, etc) let us track social network users when they visit or use the Website and Services, or share content, by using a tagging mechanism provided by those social networks.</p>
                <p>These cookies are also used for event tracking and remarketing purposes. Any data collected with these tags will be used in accordance with our and social networks’ privacy policies. We will not collect or share any personally identifiable information from the user.</p> ';} ?>
                <?php if($essential == 1 || $functionality == 1 || $third_party == 1 || $cookies_social == 1) { echo "
                <h2>What are your cookie options?</h2>
                <p>If you don't like the idea of cookies or certain types of cookies, you can change your browser's settings to delete cookies that have already been set and to not accept new cookies. Visit <a target='_blank' href='https://www.internetcookies.org'>internetcookies.org</a> to learn more about how to do this.</p> ";} ?>
                <?php if($essential == 0 || $functionality == 0 || $third_party == 0 || $cookies_social == 0) { echo '
                <p>We do not use cookies to track your internet or Website usage, to collect or store your personal information or for any other reason. However, please be advised that in some countries, data such as cookie IDs is considered to be personal information. To the extent we process such data that is considered personal information, we will process the data in accordance with our privacy and cookie policies.</p> ';} ?>

                <h2>Changes and amendments</h2>
                <p>We reserve the right to modify this Policy or its terms relating to the Website and Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> Continued use of the Website and Services after any such changes shall constitute your consent to such changes.</p>
                <h2>Acceptance of this policy</h2>
                <p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the Website and Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to access or use the Website and Services. This cookie policy was created with the
                <a target="_blank" href="{{ route('cookiegenerator')}}">cookie policy generator</a>.</p>
                <h2>Contacting us</h2>
                <p>If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to our use of cookies
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
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/cookie-basic-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/cookie-basic-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
                        &lt;h1&gt;Cookie policy&lt;/h1&gt;
&lt;p&gt;This cookie policy (&amp;quot;Policy&amp;quot;) describes what cookies are and how and they&amp;#039;re being used by the <?php echo $a -> website_url; ?> website (&amp;quot;Website&amp;quot; or &amp;quot;Service&amp;quot;) and any of its related products and services (collectively, &amp;quot;Services&amp;quot;). This Policy is a legally binding agreement between you (&amp;quot;User&amp;quot;, &amp;quot;you&amp;quot; or &amp;quot;your&amp;quot;) and this Website operator (&amp;quot;Operator&amp;quot;, &amp;quot;we&amp;quot;, &amp;quot;us&amp;quot; or &amp;quot;our&amp;quot;). You should read this Policy so you can understand the types of cookies we use, the information we collect using cookies and how that information is used. It also describes the choices available to you regarding accepting or declining the use of cookies. @if($privacy_policy == 1)
For further information on how we use, store and keep your personal data secure, see our &lt;a target="_blank" rel="nofollow" href="<?php echo $privacy_policy_url ?>"&gt;privacy policy&lt;/a&gt;.
@endif &lt;/p&gt;
&lt;h2&gt;What are cookies?&lt;/h2&gt;
&lt;p&gt;Cookies are small pieces of data stored in text files that are saved on your computer or other devices when websites are loaded in a browser. They are widely used to remember you and your preferences, either for a single visit (through a &amp;quot;session cookie&amp;quot;) or for multiple repeat visits (using a &amp;quot;persistent cookie&amp;quot;).&lt;/p&gt;
&lt;p&gt;Session cookies are temporary cookies that are used during the course of your visit to the Website, and they expire when you close the web browser.&lt;/p&gt;
&lt;p&gt;Persistent cookies are used to remember your preferences within our Website and remain on your desktop or mobile device even after you close your browser or restart your computer. They ensure a consistent and efficient experience for you while visiting the Website and Services.&lt;/p&gt;
&lt;p&gt;Cookies may be set by the Website (&amp;quot;first-party cookies&amp;quot;), or by third parties, such as those who serve content or provide advertising or analytics services on the Website (&amp;quot;third party cookies&amp;quot;). These third parties can recognize you when you visit our website and also when you visit certain other websites. &lt;a target="_blank" href="{{route('cookiegenerator')}}"&gt;Click here&lt;/a&gt; to learn more about cookies and how they work.&lt;/p&gt;
&lt;h2&gt;What type of cookies do we use?&lt;/h2&gt;
<?php if($essential == 1) { echo '
&lt;h3&gt;Necessary cookies&lt;/h3&gt;
&lt;p&gt;Necessary cookies allow us to offer you the best possible experience when accessing and navigating through our Website and using its features. For example, these cookies let us recognize that you have created an account and have logged into that account to access the content.&lt;/p&gt;<br>';} ?>
<?php if($functionality == 1) { echo '
&lt;h3&gt;Functionality cookies&lt;/h3&gt;
&lt;p&gt;Functionality cookies let us operate the Website and Services in accordance with the choices you make. For example, we will recognize your username and remember how you customized the Website and Services during future visits.&lt/p&gt; ';} ?>
<?php if($third_party == 1) { echo '
&lt;h3&gt;Analytical cookies&lt;/h3&gt;
&lt;p&gt;These cookies enable us and third party services to collect aggregated data for statistical purposes on how our visitors use the Website. These cookies do not contain personal information such as names and email addresses and are used to help us improve your user experience of the Website.&lt;/p&gt; ';} ?>
<?php if($cookies_social == 1) { echo '
&lt;h3&gt;Social media cookies&lt;/h3&gt;
&lt;p&gt;Third party cookies from social media sites (such as Facebook, Twitter, etc) let us track social network users when they visit or use the Website and Services, or share content, by using a tagging mechanism provided by those social networks.&lt;p&gt;
&lt;p&gt;These cookies are also used for event tracking and remarketing purposes. Any data collected with these tags will be used in accordance with our and social networks’ privacy policies. We will not collect or share any personally identifiable information from the user.&lt;p&gt; ';} ?>
&lt;h2&gt;Changes and amendments&lt;/h2&gt;
&lt;p&gt;We reserve the right to modify this Policy or its terms relating to the Website and Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> Continued use of the Website and Services after any such changes shall constitute your consent to such changes.&lt;/p&gt;
&lt;h2&gt;Acceptance of this policy&lt;/h2&gt;
&lt;p&gt;You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the Website and Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to access or use the Website and Services. This cookie policy was created with the &lt;a target="_blank" href="{{route('cookiegenerator')}}"&gt;cookie policy generator&lt;/a&gt;.&lt;/p&gt;
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
                <li><a href="cookie-policy?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
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