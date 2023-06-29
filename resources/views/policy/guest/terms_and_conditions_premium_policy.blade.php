<!DOCTYPE html>
<html lang="en">
@php $id = $_GET['form-id'];
$a = DB::table('policy')->where('unique_id', $id)->first();
   $platforms = $a -> platforms;
   $register = $a -> register;
   $monitor = $a -> monitor;
   $contacts = $a -> contacts;
   $notify = $a -> notify;
   $adult_content_warn = $a -> adult_content_warn;
   $backup = $a -> backup;
   $payments_method = $a -> payments_method;
   $auto_renewal = $a -> auto_renewal;
   $guarantees = $a -> guarantees;
   $misc_clauses = $a -> misc_clauses;
   $company = $a -> company;
   $age = $a -> age;
   $ads = $a -> ads;
   $adult = $a -> adult;
   $uptime_guarantee = $a -> uptime_guarantee;
   $sell = $a -> sell;
   $publish = $a -> publish;

   $arrayName = explode(",", $misc_clauses);
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
  <title>Terms and conditions for <?php if($platforms == 'Website URL') {echo $a -> website_url;} elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name;} ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: whitesmoke ;">
  <div class="container mb-5 bg-white">
    <div class="row ">
      <div class="col-12 bg-dark">
        <h2 class="text-white fs-2  fw-bold p-3">Terms and conditions for <?php if($platforms == 'Website URL') {echo $a -> website_url;} elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name;} ?></h2>
        </div>
      <div class="col-12 mt-4 ps-4 pe-4">
                           <h1>Terms and conditions</h1>
<?php if($platforms == 'Mobile App Name') {echo '
<p>These terms and conditions ("Agreement") set forth the general terms and conditions of your use of the '; echo $a -> mobile_name; echo '&nbsp mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services"). This Agreement is legally binding between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Develepor';} echo '", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering
    into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Mobile Application and Services. You acknowledge that this Agreement is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the Mobile Application and Services.</p> ';}
    elseif($platforms == 'Website URL') {echo '
    <p>These terms and conditions ("Agreement") set forth the general terms and conditions of your use of the '; echo $a -> mobile_name; echo '&nbsp website ("Website" or "Service") and any of its related products and services (collectively, "Services"). This Agreement is legally binding between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'this Website operator';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo '", "we", "us" or "our"). By accessing and using the '; if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile Application';} echo' and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. If you are entering into this Agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this Agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this Agreement, you must not accept this Agreement and may not access and use the '; if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile Application';} echo' and Services. You acknowledge that this Agreement is a contract between you and the '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ', even though it is electronic and is not physically signed by you, and it governs your use of the '; if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile Application';} echo' and Services.</p> ';} ?>

 <?php if($register == 1) {echo '
<h2>Accounts and membership</h2>
<p>
    You must be at least 18 years of age to use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. By using the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' and by agreeing to this Agreement you warrant and represent that you are at least 18
    years of age. If you create an account on the '; if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile Application';} echo', you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the
    account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and start using the Services. Providing false contact information of
    any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any
    acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions.';} if($monitor == 1) {echo ' We may suspend, disable, or delete your account (or any part thereof) if we
    determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing
    reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.
</p> ';} ?>

<?php if ($age == 'age_13') {echo '
<h2>Age requirement</h2>
<p>You must be at least 13 years of age to use the Mobile Application and Services. By using the Mobile Application and Services and by agreeing to this Agreement you warrant and represent that you are at least 13 years of age.</p>';}
elseif ($age == 'age_16') {echo '
<h2>Age requirement</h2>
<p>You must be at least 16 years of age to use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. By using the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' and by agreeing to this Agreement you warrant and represent that you are at least 16 years of age. </p>';} ?>

<?php if ($publish == 1) {echo'
<h2>User content</h2>
<p>
    We do not own any data, information or material (collectively, "Content") that you submit on the '; if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';} echo ' in the course of using the Service. You shall have sole responsibility for the
    accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use of all submitted Content. We may monitor and review the Content on the
    ';if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';} echo' submitted or created using our Services by you. You grant us permission to access, copy, distribute, store, transmit, reformat, display and perform the Content of your user account
    solely as required for the purpose of providing the Services to you. Without limiting any of those representations or warranties, we have the right, though not the obligation, to, in our own
    sole discretion, refuse or remove any Content that, in our reasonable opinion, violates any of our policies or is in any way harmful or objectionable. You also grant us the license to use, reproduce, adapt, modify, publish or distribute the Content created by you or stored in your user account for commercial, marketing or any similar purpose.
</p>';} ?>
<?php if ($adult == 1) { echo'
<h2>Adult content</h2>
<p>
    Please be aware that there may be certain adult or mature content available in the Mobile Application. A warning will be shown to the User prior to adult content being displayed. Where there
    is mature or adult content, individuals who are less than 18 years of age or are not permitted to access such content under the laws of any applicable jurisdiction may not access such content.
    If we learn that anyone under the age of 18 seeks to conduct a transaction through the Services, we will require verified parental consent, in accordance with the Childrens Online Privacy
    Protection Act of 1998 ("COPPA"). Certain areas of the Mobile Application and Services may not be available to children under 18 under any circumstances. 
</p>';} ?>

<?php if ($payments_method == 'remote' && $auto_renewal ==  1) { echo '
<h2>Billing and payments</h2>
<p>
    In case of services requiring payment, we request credit card or other payment account information, which will be used solely for processing payments. Your purchase transaction data is stored
    only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted. Where necessary for processing future payments and
    subject to your prior consent, your financial information will be stored in encrypted form on secure servers of our reputed payment gateway service provider who is beholden to treating your
    Personal Information in accordance with this Policy. All direct payment gateways adhere to the latest security standards as managed by the PCI Security Standards Council, which is a joint
    effort of brands like Visa, MasterCard, American Express and Discover. Sensitive and private data exchange happens over a SSL secured communication channel and is encrypted and protected with
    digital signatures, and the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' are also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users. Scans for malware
    are performed on a regular basis for additional security and protection.
</p>';}
elseif ($payments_method == 'remote,local' && $auto_renewal == 1) { echo'
<h2>Billing and payments</h2>
<p>You shall pay all fees or charges to your account in accordance with the fees, charges, and billing terms in effect at the time a fee or charge is due and payable. Where Services are offered on a free trial basis, payment may be required after the free trial period ends, and not when you enter your billing details (which may be required prior to the commencement of the free trial period). If auto-renewal is enabled for the Services you have subscribed for, you will be charged automatically in accordance with the term you selected. Sensitive and private data exchange happens over a SSL secured communication channel and is encrypted and protected with digital signatures, and the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' are also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users. Scans for malware are performed on a regular basis for additional security and protection. If, in our judgment, your purchase constitutes a high-risk transaction, we will require you to provide us with a copy of your valid government-issued photo identification, and possibly a copy of a recent bank statement for the credit or debit card used for the purchase. We reserve the right to change products and product pricing at any time. We also reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e-mail and/or billing address/phone number provided at the time the order was made.</p>';}
elseif ($payments_method == 'remote' && $auto_renewal == 0) { echo'
<h2>Billing and payments</h2>
<p>You shall pay all fees or charges to your account in accordance with the fees, charges, and billing terms in effect at the time a fee or charge is due and payable. If, in our judgment, your purchase constitutes a high-risk transaction, we will require you to provide us with a copy of your valid government-issued photo identification, and possibly a copy of a recent bank statement for the credit or debit card used for the purchase. We reserve the right to change product pricing at any time.</p>';}
elseif ($payments_method == 'local' && $auto_renewal == 0) { echo'
<h2>Billing and payments</h2>
<p>
    You shall pay all fees or charges to your account in accordance with the fees, charges, and billing terms in effect at the time a fee or charge is due and payable. If, in our judgment, your purchase constitutes a high-risk transaction, we will require you to provide us with a copy of your valid government-issued photo identification, and possibly a copy of a recent bank statement for the credit or debit card used for the purchase.
</p>';} ?>
<?php if ($sell == 1) {echo'
<h2>Accuracy of information</h2>
<p>
    Occasionally there may be information on the '; if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';} echo' that contains typographical errors, inaccuracies or omissions that may relate to 
    '; if ($guarantees == 'availability,description,price') {echo ' product availability, descriptions, pricing ';}
    elseif ($guarantees == 'availability,description') {echo 'product availability, descriptions';}
    elseif ($guarantees == 'description,price') {echo 'product descriptions, pricing';}
    elseif ($guarantees == 'availability,price') {echo 'product availability, pricing';}
    elseif ($guarantees == 'availability') {echo 'product availability';}
    elseif ($guarantees == 'description') {echo 'product descriptions';}
    elseif ($guarantees == 'price') {echo 'product pricing';} ?>
     , promotions and offers. We reserve the right to correct any
    errors, inaccuracies or omissions, and to change or update information or cancel orders if any information on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';}?> or Services is inaccurate at any time without prior notice (including
    after you have submitted your order). We undertake no obligation to update, amend or clarify information on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';}?> including, without limitation, pricing information, except as required
    by law. No specified update or refresh date applied on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';}?> should be taken to indicate that all information on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';} echo' or Services has been modified or updated.
</p>';} ?>

<?php if ($adult_content_warn == 1) {echo'
<h2>Third party services</h2>
<p>If you decide to enable, access or use third party services, be advised that your access and use of such other services are governed solely by the terms and conditions of such other services, and we do not endorse, are not responsible or liable for, and make no representations as to any aspect of such other services, including, without limitation, their content or the manner in which they handle data (including your data) or any interaction between you and the provider of such other services. You irrevocably waive any claim against '; if ($company == '1'){echo $a -> company_name;}
        else {echo'the Operator or creator';} echo ' with respect to such other services. '; if ($company == '1'){echo $a -> company_name;}
        else {echo'the Operator or creator';} echo ' is not liable for any damage or loss caused or alleged to be caused by or in connection with your enablement, access or use of any such other services, or your reliance on the privacy practices, data security processes or other policies of such other services. You may be required to register for or log into such other services on their respective platforms. By enabling any other services, you are expressly permitting '; if ($company == '1'){echo $a -> company_name;}
        else {echo'the Operator or creator';} echo ' to disclose your data as necessary to facilitate the use or enablement of such other service.</p>';} ?>

<?php if ($uptime_guarantee == 1) {echo'
<h2>Uptime guarantee</h2>
<p>We offer a Service uptime guarantee of 99% of available time per month. If we fail to maintain this service uptime guarantee in a particular month (as solely determined by us), you may contact us and request a credit off your Service fee for that month. The credit may be used only for the purchase of further products and services from us, and is exclusive of any applicable taxes. The service uptime guarantee does not apply to service interruptions caused by: (1) periodic scheduled maintenance or repairs we may undertake from time to time; (2) interruptions caused by you or your activities; (3) outages that do not affect core Service functionality; (4) causes beyond our control or that are not reasonably foreseeable; and (5) outages related to the reliability of certain programming environments.</p>';} ?>

<?php if ($publish == 1 && $backup == 1) {echo '
<h2>Backups</h2>
<p>
    We perform regular backups of the Content and will do our best to ensure completeness and accuracy of these backups. In the event of the hardware failure or data loss we will restore backups automatically to minimize the impact and downtime.
</p>';} 
elseif ($publish == 1 && $backup == 0) {echo '
We are not responsible for the Content residing in the Mobile Application. In no event shall we be held liable for any loss of any Content. It is your sole responsibility to maintain appropriate backup of your Content. Notwithstanding the foregoing, on some occasions and in certain circumstances, with absolutely no obligation, we may be able to restore some or all of your data that has been deleted as of a certain date and time when we may have backed up data for our own purposes. We make no guarantee that the data you need will be available.';} ?>

<?php if ($ads == 1) {echo '
<h2>Advertisements</h2>
<p>
    During your use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', you may enter into correspondence with or participate in promotions of advertisers or sponsors showing their goods or services through the '; if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile Application';} echo'
    and Services. Any such activity, and any terms, conditions, warranties or representations associated with such activity, is solely between you and the applicable third party. We shall have no
    liability, obligation or responsibility for any such correspondence, purchase or promotion between you and any such third party.
</p>';} ?>

<h2>Links to other resources</h2>
<p>
    Although the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> may link to other resources (such as websites, mobile applications, etc.), we are not, directly or indirectly, implying any approval, association,
    sponsorship, endorsement, or affiliation with any linked resource, unless specifically stated herein.Some of the links in the Mobile Application may be "affiliate links". This means if you click on the link and purchase an item,<?php if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} ?> will receive an affiliate commission. We are not responsible for examining or evaluating, and we do not warrant the offerings
    of, any businesses or individuals or the content of their resources. We do not assume any responsibility or liability for the actions, products, services, and content of any other third
    parties. You should carefully review the legal statements and other conditions of use of any resource which you access through a link on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';} ?>. Your linking to any other
    off-site resources is at your own risk.
</p>

<?php foreach ($arrayName as $b => $value) {
                if($value == 'prohibit') { echo '
<h2>Prohibited uses</h2>
<p>
    In addition to other terms as set forth in the Agreement, you are prohibited from using the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' or Content: (a) for any unlawful purpose; (b) to solicit others to perform or
    participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual
    property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation,
    religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will
    or may be used in any way that will affect the functionality or operation of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', third party products and services, or the Internet; (h) to spam, phish, pharm, pretext,
    spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', third party products and services,
    or the Internet. We reserve the right to terminate your use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' for violating any of the prohibited uses.
</p>';} 

if($value == 'ip') { echo '
<h2>Intellectual property rights</h2>
<p>
    "Intellectual Property Rights" means all present and future rights conferred by statute, common law or equity in or in relation to any copyright and related rights, trademarks, designs,
    patents, inventions, goodwill and the right to sue for passing off, rights to inventions, rights to use, and all other intellectual property rights, in each case whether registered or
    unregistered and including all applications and rights to apply for and be granted, rights to claim priority from, such rights and all similar or equivalent rights or forms of protection and
    any other results of intellectual activity which subsist or will subsist now or in the future in any part of the world. This Agreement does not transfer to you any intellectual property owned
    by <?php echo $a -> company_name; ?> or third parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with <?php echo $a -> company_name; ?>. All trademarks, service marks,
    graphics and logos used in connection with the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', are trademarks or registered trademarks of <?php echo $a -> company_name; ?> or its licensors. Other trademarks, service marks, graphics and
    logos used in connection with the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' may be the trademarks of other third parties. Your use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' grants you no right or license to reproduce or
    otherwise use any of <?php echo $a -> company_name; ?> or third party trademarks.
</p>';} 

if($value == 'warranty') { echo '
<h2>Disclaimer of warranty</h2>
<p>
    You agree that such Service is provided on an "as is" and "as available" basis and that your use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' is solely at your own risk. We expressly disclaim all warranties of
    any kind, whether express or implied, including but not limited to the implied warranties of merchantability, fitness for a particular purpose and non-infringement. We make no warranty that
    the Services will meet your requirements, or that the Service will be uninterrupted, timely, secure, or error-free; nor do we make any warranty as to the results that may be obtained from the
    use of the Service or as to the accuracy or reliability of any information obtained through the Service or that defects in the Service will be corrected. You understand and agree that any
    material and/or data downloaded or otherwise obtained through the use of Service is done at your own discretion and risk and that you will be solely responsible for any damage or loss of data
    that results from the download of such material and/or data. We make no warranty regarding any goods or services purchased or obtained through the Service or any transactions entered into
    through the Service unless stated otherwise. No advice or information, whether oral or written, obtained by you from us or through the Service shall create any warranty not expressly made
    herein.
</p>';} 

if($value == 'liability') { echo '
<h2>Limitation of liability</h2>
<p>
    To the fullest extent permitted by applicable law, in no event will <?php echo $a -> company_name; ?>, its affiliates, directors, officers, employees, agents, suppliers or licensors be liable to any person for
    any indirect, incidental, special, punitive, cover or consequential damages (including, without limitation, damages for lost profits, revenue, sales, goodwill, use of content, impact on
    business, business interruption, loss of anticipated savings, loss of business opportunity) however caused, under any theory of liability, including, without limitation, contract, tort,
    warranty, breach of statutory duty, negligence or otherwise, even if the liable party has been advised as to the possibility of such damages or could have foreseen such damages. To the maximum
    extent permitted by applicable law, the aggregate liability of <?php echo $a -> company_name; ?> and its affiliates, officers, employees, agents, suppliers and licensors relating to the services will be limited
    to an amount greater of one dollar or any amounts actually paid in cash by you to <?php echo $a -> company_name; ?> for the prior one month period prior to the first event or occurrence giving rise to such
    liability. The limitations and exclusions also apply if this remedy does not fully compensate you for any losses or fails of its essential purpose.
</p>';}

 if($value == 'indemnification') { echo '
<h2>Indemnification</h2>
<p>
    You agree to indemnify and hold <?php echo $a -> company_name; ?> and its affiliates, directors, officers, employees, agents, suppliers and licensors harmless from and against any liabilities, losses, damages or
    costs, including reasonable attorneys fees, incurred in connection with or arising from any third party allegations, claims, actions, disputes, or demands asserted against any of them as a
    result of or relating to your Content, your use of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' or any willful misconduct on your part.
</p>';} 

 if($value == 'severability') { echo '
<h2>Severability</h2>
<p>
    All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to
    be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held
    to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their
    agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.
</p>';}

 if($value == 'dispute') { echo '
<h2>Dispute resolution</h2>
<p> The formation, interpretation, and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Puerto Rico without regard to
    its rules on conflicts or choice of law and, to the extent applicable, the laws of Puerto Rico. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be
    the courts located in Puerto Rico, and you hereby submit to the personal jurisdiction of such courts. You hereby waive any right to a jury trial in any proceeding arising out of or related to
    this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.
</p>';} 

 if($value == 'assignment') { echo '
<h2>Assignment</h2>
<p>
    You may not assign, resell, sub-license or otherwise transfer or delegate any of your rights or obligations hereunder, in whole or in part, without our prior written consent, which consent
    shall be at our own sole discretion and without obligation; any such assignment or transfer shall be null and void. We are free to assign any of its rights or obligations hereunder, in whole
    or in part, to any third party as part of the sale of all or substantially all of its assets or stock or as part of a merger.
</p>';} 
} ?>

<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
<h2>Custom Clause</h2>   
<?php } foreach ($clauses as $clause) { ?>
<h2><?php echo $clause->title ?></h2>
<p><?php echo $clause->text; ?></p>
<?php } ?>
<h2>Changes and amendments</h2>
<p>
    We reserve the right to modify this Agreement or its terms relating to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> at any time, effective upon posting of an updated version of this Agreement on the <?php if ($platforms == 'Website URL'){echo'Website';}
        else {echo'Mobile application';}?>. When
    we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> Continued use of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> after any such changes shall constitute your consent to such changes.
</p>
<h2>Acceptance of these terms</h2>
<p>
    You acknowledge that you have read this Agreement and agree to all its terms and conditions. By accessing and using the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> you agree to be bound by this Agreement. If you do
    not agree to abide by the terms of this Agreement, you are not authorized to access or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.
</p>
<h2>Contacting us</h2>
<p>
    If you would like to contact us to understand more about this Agreement or wish to contact us concerning any matter relating to it <?php if($contacts == 'form') { echo '
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
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
        </html>
@endif