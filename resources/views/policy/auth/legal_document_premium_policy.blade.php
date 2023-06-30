@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policies.css')}}">
@endsection

@section('content')

@php
$id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first();
   $abc = $a -> platforms;
   $bcd = $a -> contacts;
   $notify = $a -> notify;
   $offer = $a -> offer;
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
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/refund-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/legal-document-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
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
          </div>
        </div>
    </div>
    </div>
</div>
@else

@endif
@endsection