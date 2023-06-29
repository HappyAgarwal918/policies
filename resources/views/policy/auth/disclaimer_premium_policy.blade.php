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
   $platforms_other = $a -> platforms_other;
   $third_party = $a -> third_party;
   $cookies_social = $a -> cookies_social;
   $contacts = $a -> contacts;
   $company = $a -> company;
   $notify = $a -> notify;
   $specialty = $a -> specialty;
   $copy = $a -> copy;
    $arrayName = explode(",", $specialty);
    $fitness = $arrayName[0];
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
                <p>We recommend linking to your policy directly from your <?php if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} ?>. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/disclaimer-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/disclaimer-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
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
                <li><a href="disclaimer?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
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
                    <div class="page-title">Disclaimer for <?php if($platforms == 'Website URL') {echo $a -> website_url;} elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name ; } elseif ($platforms_other == 'ebook Name') { echo $a -> ebook_name ; }  elseif($platforms_other == 'Landing Page') {echo $a-> landing_url ; } elseif ($platforms_other == 'Course Name') { echo $a -> course_name ; } elseif($platforms_other == 'Podcast') {echo $a -> podcast_name ; } elseif ($platforms_other == 'Video Channel') { echo $a -> video_name ; } ?>
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
                    <h1>Disclaimer</h1>
<?php if($platforms == 'Website URL') {echo '
<p>
    This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> website_url; echo ' website ("Website" or "Service") and any of its related products and services (collectively, "Services"). This
    Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Website and Services, you
    acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you
    represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or
    if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Website and Services. You acknowledge that this Disclaimer is a
    contract between you and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo ' , even though it is electronic and is not physically signed by you, and it governs your use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.
</p> ';}
elseif($platforms == 'Mobile App Name') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> mobile_name; echo ' mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Develepor';} echo '", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Mobile Application and Services. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services. </p> ';} ?>

<?php if($platforms_other == 'ebook Name') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> ebook_name; echo ' eBook ("eBook" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';}
elseif($platforms_other == 'Landing Page') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> landing_url; echo 'webpage ("Webpage" or "Service") and any of its related products and services (collectively, "Services"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Webpage and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Webpage and Services. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Webpage and Services. </p>';}
elseif($platforms_other == 'Course Name') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> course_name; echo ' Online course ("Online course" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';}
elseif($platforms_other == 'Podcast') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> podcast_name; echo 'podcast ("Podcast" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';}
elseif($platforms_other == 'Video Channel') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> video_name; echo 'video channel ("Video channel" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';} ?>

<h2>Representation</h2>
<p>
    Any views or opinions represented on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';}?> <?php if($a -> writer == 'personal'){echo'are personal and';} ?> belong solely to <?php if($company ==1){ echo $a -> company_name;}
                                    else { echo'the content creators';}  ?> and do not represent those of people, institutions or organizations that <?php if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';}  ?> may or
    may not be associated with in professional or personal capacity, unless explicitly stated. Any views or opinions are not intended to malign any religion, ethnic group, club, organization,
    company, or individual.
</p>
<h2>Content and postings</h2>
<?php if($copy == 'no') {
    echo'You may not modify, print or copy any part of the Website and Services. Inclusion of any part of the Website and Services in another work, whether in printed or electronic or another form or inclusion of any part of the Website and Services on another resource by embedding, framing or otherwise without the express permission of the Operator is prohibited.';
}
elseif($copy == 'personal'){echo '
<p> You may print or copy any part of the Website and Services for your own personal, non-commercial use, but you may not copy any part of the Website and Services for any other purposes, and you may not modify any part of the Website and Services. Inclusion of any part of the Website and Services in another work, whether in printed or electronic or another form or inclusion of any part of the Website and Services on another resource by embedding, framing or otherwise without the express permission of '; if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';} echo' is prohibited.</p>';} 
elseif($copy == 'yes'){echo '
<p>You may print or copy any part of the'; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo 'for your personal or non-commercial use.</p>';} ?>

<?php if ($a -> publish == 1) {echo'
<p>
    You may submit new content and comment on the existing content on the Website. By uploading or otherwise making available any information to '; if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';} echo', you grant '; if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';} echo' the
    unlimited, perpetual right to distribute, display, publish, reproduce, reuse and copy the information contained therein. You may not impersonate any other person through the Website and
    Services. You may not post content that is defamatory, fraudulent, obscene, threatening, invasive of another persons privacy rights or that is otherwise unlawful. You may not post content
    that infringes on the intellectual property rights of any other person or entity. You may not post any content that includes any computer virus or other code designed to disrupt, damage, or
    limit the functioning of any computer software or hardware. By submitting or posting content on the Website, you grant '; if($company ==1){ echo $a -> company_name;}
         else { echo'the Operator or creators';} echo' the right to edit and, if necessary, remove any content at
    any time and for any reason.
</p>';} ?>

<?php if ($a -> accept == 1) {echo'

<h2>Compensation and sponsorship</h2>
<p>
    The'; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' may contain forms of advertising, sponsorship, paid insertions or other forms of compensation. On certain occasions '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' may be compensated to provide
    opinions on products, services, or various other topics. The compensation received may influence such opinions of the advertised content or topics available on the Website. Sponsored content
    and advertising space will always be identified as such.Some of the links on the Website may be "affiliate links". This means if you click on the link and purchase an item, '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' will receive an affiliate commission. Furthermore, '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' is a participant in the Amazon Associates program, an affiliate advertising program designed to provide a means to earn advertising fees by advertising and linking to Amazon properties.</p> ';} ?>  
   
   <?php foreach ($arrayName as $b => $value) {
         if($value == 'fitness') {echo '

    <h4>Fitness and medical disclaimer</h4>
    <p>The information available on the Website is for general health information only and is not intended to be a substitute for professional medical advice, diagnosis or treatment. You should not rely exclusively on information provided on the Website for your health needs. All specific medical questions should be presented to your own health care provider and you should seek medical advice regarding your health and before starting any nutrition, weight loss or any other type of workout program.</p>

    <p>If you choose to use the information available on the Website without prior consultation with and consent of your physician, you are agreeing to accept full responsibility for your decisions and agreeing to hold harmless'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo' the Operator';} echo ', its agents, employees, contractors, and any affiliated companies from any liability with respect to injury or illness to you or your property arising out of or connected with your use of this information.</p>

    <p>There may be risks associated with participating in activities presented on the Website for people in good or poor health or with pre-existing physical or mental health conditions. If you choose to participate in these risks, you do so of your own free will and accord, knowingly and voluntarily assuming all risks associated with such activities.</p>

    <p>The results obtained from the information available on the Website may vary, and will be based on your individual background, physical health, previous experience, capacity, ability to act, motivation and other variables. There are no guarantees concerning the level of success you may experience.
    </p>';}

    if ($value == 'medical' && is_null($fitness)) {echo'
     <h4>Fitness and medical disclaimer</h4>
    <p>The information available on the Website is for general health information only and is not intended to be a substitute for professional medical advice, diagnosis or treatment. You should not rely exclusively on information provided on the Website for your health needs. All specific medical questions should be presented to your own health care provider and you should seek medical advice regarding your health and before starting any nutrition, weight loss or any other type of workout program.</p>

    <p>If you choose to use the information available on the Website without prior consultation with and consent of your physician, you are agreeing to accept full responsibility for your decisions and agreeing to hold harmless'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo' the Operator';} echo ', its agents, employees, contractors, and any affiliated companies from any liability with respect to injury or illness to you or your property arising out of or connected with your use of this information.</p>

    <p>There may be risks associated with participating in activities presented on the Website for people in good or poor health or with pre-existing physical or mental health conditions. If you choose to participate in these risks, you do so of your own free will and accord, knowingly and voluntarily assuming all risks associated with such activities.</p>

    <p>The results obtained from the information available on the Website may vary, and will be based on your individual background, physical health, previous experience, capacity, ability to act, motivation and other variables. There are no guarantees concerning the level of success you may experience.
    </p>';}

     if($value == 'legal') {echo '
    <h4>Not legal advice</h4>
    <p>The information provided on the Website is for general information purposes only and is not an alternative to legal advice from your lawyer, other professional services provider, or expert. It is not intended to provide legal advice or opinions of any kind. You should not act, or refrain from acting, based solely upon the information provided on the Website without first seeking appropriate legal or other professional advice. If you have any specific questions about any legal matter, you should consult your lawyer, other professional services provider, or expert. You should never delay seeking legal advice, disregard legal advice, or commence or discontinue any legal action because of the information on the Website.</p>

    <p>The information on the Website is provided for your convenience only. This information may have no evidentiary value and should be checked against official sources before it is used for any purposes. It is your responsibility to determine whether this information is admissible in a given judicial or administrative proceeding and whether there are any other evidentiary or filing requirements. Your use of this information is at your own risk.</p>';}

     if($value == 'financial') {echo '
    <h4>Not financial advice</h4>
    <p>The information on the Website is provided for your convenience only and is not intended to be treated as financial, investment, tax, or other advice. Nothing contained on the Website constitutes a solicitation, recommendation, endorsement, or offer by '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', its agents, employees, contractors, and any affiliated companies to buy or sell any securities or other financial instruments.</p>
    
    <p>All content on this site is the information of a general nature and does not address the circumstances of any particular individual or entity. Nothing on the Website constitutes professional and/or financial advice, nor does any information on the Website constitute a comprehensive or complete statement of the matters discussed or the law relating thereto. You alone assume the sole responsibility of evaluating the merits and risks associated with the use of any information or other content on the Website before making any decisions based on such information. You agree not to hold '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', its agents, employees, contractors, and any affiliated companies liable for any possible claim for damages arising from any decision you make based on the information made available to you through the Website.</p>';}

     if($value == 'investments') {echo '
    <h4>Not investment advice</h4>
    All investments are highly speculative in nature and involve substantial risk of loss. We encourage everyone to invest very carefully. We also encourage investors to get personal advice from your professional investment advisor and to make independent investigations before acting on information found on the Website. We do not in any way whatsoever warrant or guarantee the success of any action you take in reliance on statements or information available on the Website.</p>

    <p>Past performance is not necessarily indicative of future results. All investments carry significant risk and all investment decisions of an individual remain the specific responsibility of that individual. There is no guarantee that systems, indicators, or signals will result in profits or that they will not result in full or partial losses. All investors are advised to fully understand all risks associated with any kind of investing they choose to do.
    </p>';}} ?>
</p>
<?php if ($a -> testimonials == 1) {echo'
<h2>Reviews and testimonials</h2>
<p>
    Testimonials are received in various forms through a variety of submission methods.
    They are individual experiences, reflecting experiences of those who have used the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' in some way or another. However, they are individual results and results do vary. We do not claim that they are typical results that consumers will generally achieve.
    The testimonials are not necessarily representative of all of those who will use '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', and
    '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' is not responsible for the opinions or comments available on the Website, and does not necessarily share them. People providing testimonials on the Website may have been
    compensated with free products or discounts for use of their experiences. All opinions expressed are strictly the views of the reviewers.
</p>
<p>
    The testimonials displayed are given verbatim except for grammatical or typing error corrections. Some testimonials may have been edited for clarity, or shortened in cases where the original
    testimonial included extraneous information of no relevance to the general public. Testimonials may be reviewed for authenticity before they are available for public viewing.
</p>';} ?>
<h2>Indemnification and warranties</h2>
<p><?php if ($a -> accuracy == 1) {echo'
<p>The accuracy, reliability and completeness of the information and content, distributed through, linked, downloaded or accessed from the Website and Services are guaranteed by abc. However, all information on the Website is provided "as is", with no guarantee of the results obtained from the use of this information, and without warranty of any kind, express or implied. In no event will abc be liable to you or anyone else for any decision made or action taken in reliance on the information on the Website, or for any consequential, special or similar damages, even if advised of the possibility of such damages.</p>';}
else{echo'
   <p>While we have made every attempt to ensure that the information contained on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo' is correct, '; if($company == 1){echo $a -> company_name;} else{echo' the Operator';} echo' is not responsible for any errors or omissions, or for the results obtained from the use of this information. All information on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo' is provided "as is", with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or implied. In no event will '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo', or its partners, employees or agents, be liable to you or anyone else for any decision made or action taken in reliance on the information on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo', or for any consequential, special or similar damages, even if advised of the possibility of such damages.</p>';} ?>
    
    <p>Furthermore, as with any business, your results may vary and will be based on your individual capacity, experience, expertise, and level of desire. There are no guarantees concerning the level of success you may experience. There is no guarantee that you will make any income at all and you accept the risk that the earnings and income statements differ by individual. Each individual’s success depends on his or her background, dedication, desire and motivation. The use of the information on the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> should be based on your own due diligence and you agree that <?php if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} ?> is not liable for any success or failure of your business that is directly or indirectly related to the purchase and use of our information, products, and services reviewed or advertised on the <?php if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} ?>.<?php if ($a -> modifications == 1) {echo '
      Information contained on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo' are subject to change at any time and without warning.';}?>

</p>
<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
<h2>Custom Clause</h2>   
<?php } foreach ($clauses as $clause) { ?>
<h2><?php echo $clause->title ?></h2>
<p><?php echo $clause->text; ?></p>
<?php } ?>
<h2>Changes and amendments</h2>
<p>
    We reserve the right to modify this Disclaimer or its terms relating to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> at any time, effective upon posting of an updated version of this Disclaimer on the <?php if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} ?>.
    When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> Continued use of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> after any such changes shall constitute your consent to such changes.
</p>
<h2>Acceptance of this disclaimer</h2>
<p>
    You acknowledge that you have read this Disclaimer and agree to all its terms and conditions. By accessing and using the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> you agree to be bound by this Disclaimer. If you
    do not agree to abide by the terms of this Disclaimer, you are not authorized to access or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.
</p>
<h2>Contacting us</h2>
<p>
    If you would like to contact us to understand more about this Disclaimer or wish to contact us concerning any matter relating to it<?php if($contacts == 'form') { echo '
 , you may do so via the '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , you may send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , you may send an email to '; echo $a -> contact_email; echo '
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
                <p>We recommend linking to your policy directly from your <?php if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} ?>. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/disclaimer-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/disclaimer-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
&lt;h1&gt;Disclaimer&lt;/h1&gt;
<?php if($platforms == 'Website URL') {echo '
&lt;p&gt;
    This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> website_url; echo ' website ("Website" or "Service") and any of its related products and services (collectively, "Services"). This
    Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Website and Services, you
    acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you
    represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or
    if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Website and Services. You acknowledge that this Disclaimer is a
    contract between you and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo ' , even though it is electronic and is not physically signed by you, and it governs your use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '.
&lt;/p&gt; ';}
elseif($platforms == 'Mobile App Name') {echo '
&lt;p&gt; This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> mobile_name; echo ' mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Develepor';} echo '", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Mobile Application and Services. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services. &lt;/p&gt; ';} ?>

<?php if($platforms_other == 'ebook Name') {echo '
&lt;p&gt; This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> ebook_name; echo ' eBook ("eBook" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. &lt;/p&gt;';}
elseif($platforms_other == 'Landing Page') {echo '
&lt;p&gt; This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> landing_url; echo 'webpage ("Webpage" or "Service") and any of its related products and services (collectively, "Services"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Webpage and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Webpage and Services. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Webpage and Services. &lt;/p&gt;';}
elseif($platforms_other == 'Course Name') {echo '
&lt;p&gt; This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> course_name; echo ' Online course ("Online course" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. &lt;/p&gt;';}
elseif($platforms_other == 'Podcast') {echo '
&lt;p&gt; This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> podcast_name; echo 'podcast ("Podcast" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. &lt;/p&gt;';}
elseif($platforms_other == 'Video Channel') {echo '
&lt;p&gt; This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> video_name; echo 'video channel ("Video channel" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' ("'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Materials. &lt;/p&gt;';} ?>

&lt;h2&gt;Representation&lt;/h2&gt;
&lt;p&gt;
    Any views or opinions represented on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';}?> <?php if($a -> writer == 'personal'){echo'are personal and';} ?> belong solely to <?php if($company ==1){ echo $a -> company_name;}
                                    else { echo'the content creators';}  ?> and do not represent those of people, institutions or organizations that <?php if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';}  ?> may or
    may not be associated with in professional or personal capacity, unless explicitly stated. Any views or opinions are not intended to malign any religion, ethnic group, club, organization,
    company, or individual.
&lt;/p&gt;
&lt;h2&gt;Content and postings&lt;/h2&gt;
<?php if($copy == 'no') {
    echo'You may not modify, print or copy any part of the Website and Services. Inclusion of any part of the Website and Services in another work, whether in printed or electronic or another form or inclusion of any part of the Website and Services on another resource by embedding, framing or otherwise without the express permission of the Operator is prohibited.';
}
elseif($copy == 'personal'){echo '
&lt;p&gt; You may print or copy any part of the Website and Services for your own personal, non-commercial use, but you may not copy any part of the Website and Services for any other purposes, and you may not modify any part of the Website and Services. Inclusion of any part of the Website and Services in another work, whether in printed or electronic or another form or inclusion of any part of the Website and Services on another resource by embedding, framing or otherwise without the express permission of '; if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';} echo' is prohibited.&lt;/p&gt;';} 
elseif($copy == 'yes'){echo '
&lt;p&gt;You may print or copy any part of the'; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo 'for your personal or non-commercial use.&lt;/p&gt;';} ?>

<?php if ($a -> publish == 1) {echo'
&lt;p&gt;
    You may submit new content and comment on the existing content on the Website. By uploading or otherwise making available any information to '; if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';} echo', you grant '; if($company ==1){ echo $a -> company_name;}
                                    else { echo'the Operator or creators';} echo' the
    unlimited, perpetual right to distribute, display, publish, reproduce, reuse and copy the information contained therein. You may not impersonate any other person through the Website and
    Services. You may not post content that is defamatory, fraudulent, obscene, threatening, invasive of another persons privacy rights or that is otherwise unlawful. You may not post content
    that infringes on the intellectual property rights of any other person or entity. You may not post any content that includes any computer virus or other code designed to disrupt, damage, or
    limit the functioning of any computer software or hardware. By submitting or posting content on the Website, you grant '; if($company ==1){ echo $a -> company_name;}
         else { echo'the Operator or creators';} echo' the right to edit and, if necessary, remove any content at
    any time and for any reason.
&lt;/p&gt;';} ?>

<?php if ($a -> accept == 1) {echo'

&lt;h2&gt;Compensation and sponsorship&lt;/h2&gt;
&lt;p&gt;
    The'; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' may contain forms of advertising, sponsorship, paid insertions or other forms of compensation. On certain occasions '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' may be compensated to provide
    opinions on products, services, or various other topics. The compensation received may influence such opinions of the advertised content or topics available on the Website. Sponsored content
    and advertising space will always be identified as such.Some of the links on the Website may be "affiliate links". This means if you click on the link and purchase an item, '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' will receive an affiliate commission. Furthermore, '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' is a participant in the Amazon Associates program, an affiliate advertising program designed to provide a means to earn advertising fees by advertising and linking to Amazon properties.&lt;/p&gt; ';} ?>  
   
   <?php foreach ($arrayName as $b => $value) {
         if($value == 'fitness') {echo '

    <h4>Fitness and medical disclaimer</h4>
    &lt;p&gt;The information available on the Website is for general health information only and is not intended to be a substitute for professional medical advice, diagnosis or treatment. You should not rely exclusively on information provided on the Website for your health needs. All specific medical questions should be presented to your own health care provider and you should seek medical advice regarding your health and before starting any nutrition, weight loss or any other type of workout program.&lt;/p&gt;

    &lt;p&gt;If you choose to use the information available on the Website without prior consultation with and consent of your physician, you are agreeing to accept full responsibility for your decisions and agreeing to hold harmless'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo' the Operator';} echo ', its agents, employees, contractors, and any affiliated companies from any liability with respect to injury or illness to you or your property arising out of or connected with your use of this information.&lt;/p&gt;

    &lt;p&gt;There may be risks associated with participating in activities presented on the Website for people in good or poor health or with pre-existing physical or mental health conditions. If you choose to participate in these risks, you do so of your own free will and accord, knowingly and voluntarily assuming all risks associated with such activities.&lt;/p&gt;

    &lt;p&gt;The results obtained from the information available on the Website may vary, and will be based on your individual background, physical health, previous experience, capacity, ability to act, motivation and other variables. There are no guarantees concerning the level of success you may experience.
    &lt;/p&gt;';}

    if ($value == 'medical' && is_null($fitness)) {echo'
     <h4>Fitness and medical disclaimer</h4>
    &lt;p&gt;The information available on the Website is for general health information only and is not intended to be a substitute for professional medical advice, diagnosis or treatment. You should not rely exclusively on information provided on the Website for your health needs. All specific medical questions should be presented to your own health care provider and you should seek medical advice regarding your health and before starting any nutrition, weight loss or any other type of workout program.&lt;/p&gt;

    &lt;p&gt;If you choose to use the information available on the Website without prior consultation with and consent of your physician, you are agreeing to accept full responsibility for your decisions and agreeing to hold harmless'; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo' the Operator';} echo ', its agents, employees, contractors, and any affiliated companies from any liability with respect to injury or illness to you or your property arising out of or connected with your use of this information.&lt;/p&gt;

    &lt;p&gt;There may be risks associated with participating in activities presented on the Website for people in good or poor health or with pre-existing physical or mental health conditions. If you choose to participate in these risks, you do so of your own free will and accord, knowingly and voluntarily assuming all risks associated with such activities.&lt;/p&gt;

    &lt;p&gt;The results obtained from the information available on the Website may vary, and will be based on your individual background, physical health, previous experience, capacity, ability to act, motivation and other variables. There are no guarantees concerning the level of success you may experience.
    &lt;/p&gt;';}

     if($value == 'legal') {echo '
    <h4>Not legal advice</h4>
    &lt;p&gt;The information provided on the Website is for general information purposes only and is not an alternative to legal advice from your lawyer, other professional services provider, or expert. It is not intended to provide legal advice or opinions of any kind. You should not act, or refrain from acting, based solely upon the information provided on the Website without first seeking appropriate legal or other professional advice. If you have any specific questions about any legal matter, you should consult your lawyer, other professional services provider, or expert. You should never delay seeking legal advice, disregard legal advice, or commence or discontinue any legal action because of the information on the Website.&lt;/p&gt;

    &lt;p&gt;The information on the Website is provided for your convenience only. This information may have no evidentiary value and should be checked against official sources before it is used for any purposes. It is your responsibility to determine whether this information is admissible in a given judicial or administrative proceeding and whether there are any other evidentiary or filing requirements. Your use of this information is at your own risk.&lt;/p&gt;';}

     if($value == 'financial') {echo '
    <h4>Not financial advice</h4>
    &lt;p&gt;The information on the Website is provided for your convenience only and is not intended to be treated as financial, investment, tax, or other advice. Nothing contained on the Website constitutes a solicitation, recommendation, endorsement, or offer by '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', its agents, employees, contractors, and any affiliated companies to buy or sell any securities or other financial instruments.&lt;/p&gt;
    
    &lt;p&gt;All content on this site is the information of a general nature and does not address the circumstances of any particular individual or entity. Nothing on the Website constitutes professional and/or financial advice, nor does any information on the Website constitute a comprehensive or complete statement of the matters discussed or the law relating thereto. You alone assume the sole responsibility of evaluating the merits and risks associated with the use of any information or other content on the Website before making any decisions based on such information. You agree not to hold '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', its agents, employees, contractors, and any affiliated companies liable for any possible claim for damages arising from any decision you make based on the information made available to you through the Website.&lt;/p&gt;';}

     if($value == 'investments') {echo '
    <h4>Not investment advice</h4>
    All investments are highly speculative in nature and involve substantial risk of loss. We encourage everyone to invest very carefully. We also encourage investors to get personal advice from your professional investment advisor and to make independent investigations before acting on information found on the Website. We do not in any way whatsoever warrant or guarantee the success of any action you take in reliance on statements or information available on the Website.&lt;/p&gt;

    &lt;p&gt;Past performance is not necessarily indicative of future results. All investments carry significant risk and all investment decisions of an individual remain the specific responsibility of that individual. There is no guarantee that systems, indicators, or signals will result in profits or that they will not result in full or partial losses. All investors are advised to fully understand all risks associated with any kind of investing they choose to do.
    &lt;/p&gt;';}} ?>
&lt;/p&gt;
<?php if ($a -> testimonials == 1) {echo'
&lt;h2&gt;Reviews and testimonials&lt;/h2&gt;
&lt;p&gt;
    Testimonials are received in various forms through a variety of submission methods.
    They are individual experiences, reflecting experiences of those who have used the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' in some way or another. However, they are individual results and results do vary. We do not claim that they are typical results that consumers will generally achieve.
    The testimonials are not necessarily representative of all of those who will use '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', and
    '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' is not responsible for the opinions or comments available on the Website, and does not necessarily share them. People providing testimonials on the Website may have been
    compensated with free products or discounts for use of their experiences. All opinions expressed are strictly the views of the reviewers.
&lt;/p&gt;
&lt;p&gt;
    The testimonials displayed are given verbatim except for grammatical or typing error corrections. Some testimonials may have been edited for clarity, or shortened in cases where the original
    testimonial included extraneous information of no relevance to the general public. Testimonials may be reviewed for authenticity before they are available for public viewing.
&lt;/p&gt;';} ?>
&lt;h2&gt;Indemnification and warranties&lt;/h2&gt;
&lt;p&gt;<?php if ($a -> accuracy == 1) {echo'
&lt;p&gt;The accuracy, reliability and completeness of the information and content, distributed through, linked, downloaded or accessed from the Website and Services are guaranteed by abc. However, all information on the Website is provided "as is", with no guarantee of the results obtained from the use of this information, and without warranty of any kind, express or implied. In no event will abc be liable to you or anyone else for any decision made or action taken in reliance on the information on the Website, or for any consequential, special or similar damages, even if advised of the possibility of such damages.&lt;/p&gt;';}
else{echo'
   &lt;p&gt;While we have made every attempt to ensure that the information contained on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo' is correct, '; if($company == 1){echo $a -> company_name;} else{echo' the Operator';} echo' is not responsible for any errors or omissions, or for the results obtained from the use of this information. All information on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo' is provided "as is", with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or implied. In no event will '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} echo', or its partners, employees or agents, be liable to you or anyone else for any decision made or action taken in reliance on the information on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo', or for any consequential, special or similar damages, even if advised of the possibility of such damages.&lt;/p&gt;';} ?>
    
    &lt;p&gt;Furthermore, as with any business, your results may vary and will be based on your individual capacity, experience, expertise, and level of desire. There are no guarantees concerning the level of success you may experience. There is no guarantee that you will make any income at all and you accept the risk that the earnings and income statements differ by individual. Each individual’s success depends on his or her background, dedication, desire and motivation. The use of the information on the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> should be based on your own due diligence and you agree that <?php if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'the Operator';} ?> is not liable for any success or failure of your business that is directly or indirectly related to the purchase and use of our information, products, and services reviewed or advertised on the <?php if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} ?>.<?php if ($a -> modifications == 1) {echo '
      Information contained on the '; if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} echo' are subject to change at any time and without warning.';}?>

&lt;/p&gt;
<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
&lt;h2&gt;Custom Clause&lt;/h2&gt;   
<?php } foreach ($clauses as $clause) { ?>
&lt;h2&gt;<?php echo $clause->title ?>&lt;/h2&gt;
&lt;p&gt;<?php echo $clause->text; ?>&lt;/p&gt;
<?php } ?>
&lt;h2&gt;Changes and amendments&lt;/h2&gt;
&lt;p&gt;
    We reserve the right to modify this Disclaimer or its terms relating to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> at any time, effective upon posting of an updated version of this Disclaimer on the <?php if ($platforms == 'Website URL') {echo 'Website';} else {echo'Mobile Application';} ?>.
    When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> Continued use of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> after any such changes shall constitute your consent to such changes.
&lt;/p&gt;
&lt;h2&gt;Acceptance of this disclaimer&lt;/h2&gt;
&lt;p&gt;
    You acknowledge that you have read this Disclaimer and agree to all its terms and conditions. By accessing and using the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> you agree to be bound by this Disclaimer. If you
    do not agree to abide by the terms of this Disclaimer, you are not authorized to access or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.
&lt;/p&gt;
&lt;h2&gt;Contacting us&lt;/h2&gt;
&lt;p&gt;
    If you would like to contact us to understand more about this Disclaimer or wish to contact us concerning any matter relating to it<?php if($contacts == 'form') { echo '
 , you may do so via the '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , you may send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , you may send an email to '; echo $a -> contact_email; echo '
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
                <li><a href="disclaimer?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
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