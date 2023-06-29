<!DOCTYPE html>
<html lang="en">
@php $id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first();
   $abc = $a -> platforms;
   $bcd = $a -> contacts;
   $notify = $a -> notify;
   $offer = $a -> offer;
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
  <title>Refund policy for <?php if($abc == 'Website URL') {echo $a -> website_url;} 
            elseif($abc == 'Mobile App Name') {echo $a -> mobile_name;} ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
 <body style="background-color: whitesmoke ;">
  <div class="container mb-5 bg-white">
    <div class="row ">
      <div class="col-12 bg-dark">
        <h2 class="text-white fs-2  fw-bold p-3">Refund policy for <?php if($abc == 'Website URL') {echo $a -> website_url;} 
                        elseif($abc == 'Mobile App Name') {echo $a -> mobile_name;} ?></h2>
                        </div>
      <div class="col-12 mt-4 ps-4 pe-4">
                           <h1>Refund policy</h1>
                                <p><?php if($a -> days == 0) { echo '
                                    Since the Website offers non-tangible, irrevocable goods we do not provide refunds after the product is purchased, which you acknowledge prior to purchasing any product on the Website. Please
                                    make sure that you have carefully read service description before making a purchase.';} 

                                    else { echo '
                                    We are so convinced you will absolutely love our products, that we are willing to offer a '; echo $a -> days; echo ' day risk-free money back guarantee. If you receive your order and are not satisfied with the product for any reason you can get a refund within '; echo $a -> days; echo ' days of making a purchase.';}
                                    ?>
                                </p>
                                <?php if($offer == 1){ echo'
                                <h1>Additional services</h1>
                                <p>Please note that any additional services, custom work or technical support are non-refundable as our time cannot be recovered.</p>';} ?>
                                <?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
                                        if (!empty($h)) { ?>
                                        <h2>Custom Clause</h2>   
                                        <?php } foreach ($clauses as $clause) { ?>
                                        <h2><?php echo $clause->title ?></h2>
                                        <p><?php echo $clause->text; ?></p>
                                        <?php } ?>
                                <h2>Contacting us</h2>
                                <p>
                                    If you would like to contact us concerning any matter relating to this Refund Policy<?php if($bcd == 'form') { echo '
                                           , you may do so via '; echo $a -> contact_form;} ?>
                                               <?php if($bcd == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($bcd == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,email') { echo '
                                               , you may do so via the '; echo $a -> contact_form; echo ', sending an email to '; echo $a -> contact_email;} ?>
                                               <?php if($bcd == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,address') { echo '
                                               , you may do so via '; echo $a -> contact_form; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($bcd == 'form,email,address') { echo '
                                               , you may do so via '; echo $a -> contact_form;
                                               echo ', sending an email to '; echo $a -> contact_email; echo '
                                              and/or writing a letter to '; echo $a -> contact_address;} ?>.
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