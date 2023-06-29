<!DOCTYPE html>
<html lang="en">
@php $id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first(); 
   $platforms = $a -> platforms;
   $platforms_other = $a -> platforms_other;
   $third_party = $a -> third_party;
   $cookies_social = $a -> cookies_social;
   $contacts = $a -> contacts;
   $notify = $a -> notify;
@endphp
<head>
  <title>Disclaimer for <?php if($platforms == 'Website URL') {echo $a -> website_url;} elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name ; } elseif ($platforms_other == 'ebook Name') { echo $a -> ebook_name ; }  elseif($platforms_other == 'Landing Page') {echo $a-> landing_url ; } elseif ($platforms_other == 'Course Name') { echo $a -> course_name ; } elseif($platforms_other == 'Podcast') {echo $a -> podcast_name ; } elseif ($platforms_other == 'Video Channel') { echo $a -> video_name ; } ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: whitesmoke ;">
  <div class="container mb-5 bg-white">
    <div class="row ">
      <div class="col-12 bg-dark">
        <h2 class="text-white fs-2  fw-bold p-3">Disclaimer for <?php if($platforms == 'Website URL') {echo $a -> website_url;} elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name ; } elseif ($platforms_other == 'ebook Name') { echo $a -> ebook_name ; }  elseif($platforms_other == 'Landing Page') {echo $a-> landing_url ; } elseif ($platforms_other == 'Course Name') { echo $a -> course_name ; } elseif($platforms_other == 'Podcast') {echo $a -> podcast_name ; } elseif ($platforms_other == 'Video Channel') { echo $a -> video_name ; } ?></h2>
      </div>
      <div class="col-12 mt-4 ps-4 pe-4">
                           <h1>Disclaimer</h1>
<?php if($platforms == 'Mobile App Name') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> mobile_name; echo ' mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and this Mobile Application developer ("Operator", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Mobile Application and Services. You acknowledge that this Disclaimer is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services. </p> ';}
elseif($platforms == 'Website URL') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> website_url; echo ' website ("Website" or "Service") and any of its related products and services (collectively, "Services"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and this Website operator ("Operator", "we", "us" or "our"). By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Website and Services. You acknowledge that this Disclaimer is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Website and Services. </p> ';} ?>
<?php if($platforms_other == 'ebook Name') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> ebook_name; echo ' eBook ("eBook" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; echo $a -> company_name; echo ' ("Creator", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the Creator, even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';}
elseif($platforms_other == 'Landing Page') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> landing_url; echo 'webpage ("Webpage" or "Service") and any of its related products and services (collectively, "Services"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and this Webpage operator ("Operator", "we", "us" or "our"). By accessing and using the Webpage and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Webpage and Services. You acknowledge that this Disclaimer is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Webpage and Services. </p>';}
elseif($platforms_other == 'Course Name') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> course_name; echo ' Online course ("Online course" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; echo $a -> company_name; echo ' ("Creator", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the Creator, even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';}
elseif($platforms_other == 'Podcast') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> podcast_name; echo 'podcast ("Podcast" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; echo $a -> company_name; echo ' ("Creator", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the Creator, even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';}
elseif($platforms_other == 'Video Channel') {echo '
<p> This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures, and terms of your use of the '; echo $a -> video_name; echo 'video channel ("Video channel" or "Materials"). This Disclaimer is a legally binding agreement between you ("User", "you" or "your") and '; echo $a -> company_name; echo ' ("Creator", "we", "us" or "our"). By accessing and using the Materials, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. If you are entering into this Disclaimer on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Disclaimer, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Disclaimer, you must not accept this Disclaimer and may not access and use the Materials. You acknowledge that this Disclaimer is a contract between you and the Creator, even though it is electronic and is not physically signed by you, and it governs your use of the Materials. </p>';} ?>

<h2>Representation</h2>
<p>
    Any views or opinions represented in the Mobile Application are personal and belong solely to the Operator and do not represent those of people, institutions or organizations that the Operator
    may or may not be associated with in professional or personal capacity unless explicitly stated. Any views or opinions are not intended to malign any religion, ethnic group, club,
    organization, company, or individual.
</p>
<h2>Content and postings</h2>
<p>
    You may print or copy any part of the Mobile Application and Services for your own personal, non-commercial use, but you may not copy any part of the Mobile Application and Services for any
    other purposes, and you may not modify any part of the Mobile Application and Services. Inclusion of any part of the Mobile Application and Services in another work, whether in printed or
    electronic or another form or inclusion of any part of the Mobile Application and Services on another resource by embedding, framing or otherwise without the express permission of the Operator
    is prohibited.
</p>
<p>
    You may submit new content in the Mobile Application. By uploading or otherwise making available any information to the Operator, you grant the Operator the unlimited, perpetual right to
    distribute, display, publish, reproduce, reuse and copy the information contained therein. You may not impersonate any other person through the Mobile Application and Services. You may not
    post content that is defamatory, fraudulent, obscene, threatening, invasive of another person's privacy rights or that is otherwise unlawful. You may not post content that infringes on the
    intellectual property rights of any other person or entity. You may not post any content that includes any computer virus or other code designed to disrupt, damage, or limit the functioning of
    any computer software or hardware. By submitting or posting content in the Mobile Application, you grant the Operator the right to edit and, if necessary, remove any content at any time and
    for any reason.
</p>
<h2>Compensation and sponsorship</h2>
<p>Some of the links in the Mobile Application may be "affiliate links". This means if you click on the link and purchase an item, the Operator will receive an affiliate commission.</p>
<h2>Reviews and testimonials</h2>
<p>
    Testimonials are received in various forms through a variety of submission methods. The testimonials are not necessarily representative of all of those who will use Mobile Application and
    Services, and the Operator is not responsible for the opinions or comments available in the Mobile Application, and does not necessarily share them. People providing testimonials in the Mobile
    Application may have been compensated with free products or discounts for use of their experiences. All opinions expressed are strictly the views of the reviewers.
</p>
<p>
    The testimonials displayed are given verbatim except for grammatical or typing error corrections. Some testimonials may have been edited for clarity, or shortened in cases where the original
    testimonial included extraneous information of no relevance to the general public. Testimonials may be reviewed for authenticity before they are available for public viewing.
</p>
<h2>Indemnification and warranties</h2>
<p>
    While we have made every attempt to ensure that the information contained in the Mobile Application is correct, the Operator is not responsible for any errors or omissions, or for the results
    obtained from the use of this information. All information in the Mobile Application is provided "as is", with no guarantee of completeness, accuracy, timeliness or of the results obtained
    from the use of this information, and without warranty of any kind, express or implied. In no event will the Operator be liable to you or anyone else for any decision made or action taken in
    reliance on the information in the Mobile Application, or for any consequential, special or similar damages, even if advised of the possibility of such damages. Information contained in the
    Mobile Application are subject to change at any time and without warning.
</p>
<h2>Changes and amendments</h2>
<p>
    We reserve the right to modify this Disclaimer or its terms relating to the Mobile Application and Services at any time, effective upon posting of an updated version of this Disclaimer in the
    Mobile Application. When we do, <?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> Continued use of the Mobile Application and Services after any such changes shall constitute your consent to such
    changes.
</p>
<h2>Acceptance of this disclaimer</h2>
<p>
    You acknowledge that you have read this Disclaimer and agree to all its terms and conditions. By accessing and using the Mobile Application and Services you agree to be bound by this
    Disclaimer. If you do not agree to abide by the terms of this Disclaimer, you are not authorized to access or use the Mobile Application and Services. This disclaimer was created with the
    <a target="_blank" href="{{route('disclaimergenerator')}}">disclaimer generator</a>.
</p>
<h2>Contacting us</h2>
<p>If you would like to contact us to understand more about this Disclaimer or wish to contact us concerning any matter relating to it
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
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
        </html>