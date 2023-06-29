<!DOCTYPE html>
<html lang="en">
@php $id = $_GET['form-id'];  
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
            <p>If you are a copyright owner or an agent thereof, and you believe that any material available on our Services infringes your copyrights, then you may submit a written copyright infringement notification (&quot;Notification&quot;) using the contact details below pursuant to the DMCA. All such Notifications must comply with the DMCA requirements. You may refer to a <a target="_blank" href="/dmca-policy-generator">DMCA takedown notice generator</a> or other similar services to avoid making mistake and ensure compliance of your Notification.</p> ';} ?>
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
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
        </html>