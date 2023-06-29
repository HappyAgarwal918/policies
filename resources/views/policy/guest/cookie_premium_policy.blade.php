<!DOCTYPE html>
<html lang="en">
@php $id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first();
   $privacy_policy = $a -> privacy_policy;
   $privacy_policy_url = $a -> privacy_policy_url;
   $essential = $a -> essential;
   $functionality = $a -> functionality;
   $third_party = $a -> third_party;
   $cookies_social = $a -> cookies_social;
   $cookies_disable = $a -> cookies_disable;
   $contacts = $a -> contacts;
   $company = $a -> company;
   $notify = $a -> notify;
   $beacons = $a -> beacons;
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
  <title>Cookie policy for {{$a -> website_url}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
 <body style="background-color: whitesmoke ;">
  <div class="container mb-5 bg-white">
    <div class="row ">
      <div class="col-12 bg-dark">
        <h2 class="text-white fs-2  fw-bold p-3">Cookie policy for {{$a -> website_url}}</h2>
      </div>
      <div class="col-12 mt-4 ps-4 pe-4">
                           <h1>Cookie policy</h1>
<p>
    This cookie policy ("Policy") describes what cookies are and how and they're being used by the <?php echo $a -> website_url; ?> website
    ("Website" or "Service") and any of its related products and services (collectively, "Services"). This Policy is a legally binding agreement between you ("User", "you" or "your") and <?php if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} ?>", "we", "us" or "our"). You should read this Policy so you can understand the types of cookies we use, the information we collect using cookies and how that information
    is used. It also describes the choices available to you regarding accepting or declining the use of cookies. @if($privacy_policy == 1)
    For further information on how we use, store and keep your personal data secure, see our <a target="_blank" rel="nofollow" href="<?php echo $privacy_policy_url ?>">privacy policy</a>.
    @endif
</p>
<h2>What are cookies?</h2>
<p>
    Cookies are small pieces of data stored in text files that are saved on your computer or other devices when websites are loaded in a browser. They are widely used to remember you and your
    preferences, either for a single visit (through a "session cookie") or for multiple repeat visits (using a "persistent cookie").
</p>
<p>Session cookies are temporary cookies that are used during the course of your visit to the Website, and they expire when you close the web browser.</p>
<p>
    Persistent cookies are used to remember your preferences within our Website and remain on your desktop or mobile device even after you close your browser or restart your computer. They ensure
    a consistent and efficient experience for you while visiting the Website and Services.
</p>
<p>
    Cookies may be set by the Website ("first-party cookies"), or by third parties, such as those who serve content or provide advertising or analytics services on the Website ("third party
    cookies"). These third parties can recognize you when you visit our website and also when you visit certain other websites.
    <a target="_blank" href="{{route('cookiegenerator')}}">Click here</a> to learn more about cookies and how they work.
</p>
<h2>What type of cookies do we use?</h2>

 <?php if($essential == 1) { echo '
<h3>Necessary cookies</h3>
<p>
    Necessary cookies allow us to offer you the best possible experience when accessing and navigating through our Website and using its features. For example, these cookies let us recognize that
    you have created an account and have logged into that account to access the content.
</p>';} ?>

<?php if($functionality == 1) { echo '
<h3>Functionality cookies</h3>
<p>
    Functionality cookies let us operate the Website and Services in accordance with the choices you make. For example, we will recognize your username and remember how you customized the Website
    and Services during future visits.
</p>';} ?>

<?php if($third_party == 1) { echo '
<h3>Analytical cookies</h3>
<p>
    These cookies enable us and third party services to collect aggregated data for statistical purposes on how our visitors use the Website. These cookies do not contain personal information such
    as names and email addresses and are used to help us improve your user experience of the Website.
</p>
<h3>Advertising cookies</h3>
<p>
    Advertising cookies allow us and third parties serve relevant ads to you more effectively and help us collect aggregated audit data, research, and performance reporting for advertisers. They
    also enable us to understand and improve the delivery of ads to you and know when certain ads have been shown to you.
</p>
<p>
    Your web browser may request advertisements directly from ad network servers, these networks can view, edit, or set their own cookies, just as if you had requested a web page from their
    website.
</p>
<p>
    Although we do not use cookies to create a profile of your browsing behavior on third party websites, we do use aggregate data from third parties to show you relevant, interest-based
    advertising.
</p>';} ?>

<?php if($cookies_social == 1) { echo '
<h3>Social media cookies</h3>
<p>
    Third party cookies from social media sites (such as Facebook, Twitter, etc) let us track social network users when they visit or use the Website and Services, or share content, by using a
    tagging mechanism provided by those social networks.
</p>
<p>
    These cookies are also used for event tracking and remarketing purposes. Any data collected with these tags will be used in accordance with our and social networks’ privacy policies. We will
    not collect or share any personally identifiable information from the user.
</p>';} ?>


<?php if($beacons == 1) { echo '
<h2>Do we use web beacons or tracking pixels?</h2>
<p>Our emails may contain a "web beacon" (or "tracking pixel") to tell us whether our emails are opened and verify any clicks through to links or advertisements within the email.</p>
<p>
    We may use this information for purposes including determining which of our emails are more interesting to users and to query whether users who do not open our emails wish to continue
    receiving them.
</p>
<p>The pixel will be deleted when you delete the email. If you do not wish the pixel to be downloaded to your device, you should read the email in plain text view or with images disabled.
</p>';} ?>

<?php if($essential == 1 || $functionality == 1 || $third_party == 1 || $cookies_social == 1) { echo "
<h2>What are your cookie options?</h2>
<p>
    If you don't like the idea of cookies or certain types of cookies, you can change your browser's settings to delete cookies that have already been set and to not accept new cookies. To learn
    more about how to do this, visit <a target='_blank' href='https:www.internetcookies.com/'>internetcookies.com</a>
</p>";} ?>

<?php if($essential == 0 || $functionality == 0 || $third_party == 0 || $cookies_social == 0 || $beacons == 0 || $cookies_disable == 0) { echo '
<p>We do not use cookies to track your internet or Website usage, to collect or store your personal information or for any other reason. However, please be advised that in some countries, data such as cookie IDs is considered to be personal information. To the extent we process such data that is considered personal information, we will process the data in accordance with our privacy and cookie policies.</p> ';} ?>


<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
<h2>Custom Clause</h2>   
<?php } foreach ($clauses as $clause) { ?>
<h2><?php echo $clause->title ?></h2>
<p><?php echo $clause->text; ?></p>
<?php } ?>

<h2>Changes and amendments</h2>
<p>
    We reserve the right to modify this Policy or its terms relating to the Website and Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the main page of the website.';} ?> Continued use of the Website and Services after any such changes shall constitute your consent to such changes.
</p>
<h2>Acceptance of this policy</h2>
<p>
    You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the Website and Services you agree to be bound by this Policy. If you do not
    agree to abide by the terms of this Policy, you are not authorized to access or use the Website and Services.
</p>
<h2>Contacting us</h2>
<p>If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to our use of cookies <?php if($contacts == 'form') { echo '
                    , you may do so via the '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , you may send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , you may send an email to '; echo $a -> contact_email; echo '
                                              , and/or write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,address') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email,address') { echo '
                                               , you may do so via the '; echo $a -> contact_form;
                                               echo ', or send an email to '; echo $a -> contact_email; echo '
                                              , and/or write a letter to '; echo $a -> contact_address;} ?>.
                       
                   </p>
<p>This document was last updated on <?php echo $a -> updated_at ; ?></p>
                        </div>
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
        </html>
@endif