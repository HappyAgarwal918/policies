<!DOCTYPE html>
<html lang="en">
@php $id = $_GET['form-id'];  
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
<head>
  <title>{{ $a->website_url }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: whitesmoke ;" >
    <div class="container mb-5 bg-white">
        <div class="row ">
            <div class="col-12 bg-dark">
                <h2 class="text-white fs-2  fw-bold p-3">{{ $a->website_url }}</h2>
            </div>
            <div class="col-12 mt-4 ps-4 pe-4">
                {!! $a->editor !!}
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>
</html>
@else
<head>
  <title>DMCA policy for <?php if($platforms == 'Website URL') {echo $a -> website_url;} 
            elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name;} ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: whitesmoke ;">
  <div class="container mb-5 bg-white">
    <div class="row ">
      <div class="col-12 bg-dark">
        <h2 class="text-white fs-2  fw-bold p-3">DMCA policy for <?php if($platforms == 'Website URL') {echo $a -> website_url;} 
                        elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name;} ?></h2>
                        </div>
      <div class="col-12 mt-4 ps-4 pe-4">
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
    of your Notification.';} ?>
</p>
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
    Notwithstanding anything to the contrary contained in any portion of this Policy, '; echo $a -> company_name; echo' reserves the right to take no action upon receipt of a DMCA copyright infringement notification if
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
<p>This document was last updated on <?php echo $a -> updated_at ; ?></p></p>
                        </div>
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
        </html>
@endif