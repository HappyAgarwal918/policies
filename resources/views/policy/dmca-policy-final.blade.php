@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policy.css')}}">
@endsection

@section('content')

@php $id = $_GET['form-id'];
$policy_data = DB::table('policy')->leftjoin('payments','policy.newunique','payments.payunique')->where('unique_id', $id)->first();
@endphp

<div class="policy-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=""><h4>Review and confirm</h4></div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('error_message'))
<div class="alert alert-danger">
{{ Session::get('error_message') }}
</div>
@endif
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form action="<?php if(isset(auth()->user()->admin) && (auth()->user()->admin == 1 || auth()->user()->admin == 2) || $policy_data->payment_status == 'succeeded'){ echo 'complete?form-id='.$id; } elseif($policy_data->premium == 1 || $policy_data->company == 1 || $policy_data->instructions == 1){ echo 'billing?form-id='.$id; } else{ echo "complete?form-id='.$id"; } ?>" method="post" id="">
          @csrf
          <div class="panel-body">
            <div class="progress">
              <div class="progress-bar progress-bar-striped color progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for=""><?php echo $policy_data -> platforms; ?></label>
              <div class="col-sm-6">
                <strong>
                  <?php if ($policy_data->platforms = 'Mobile App Name'){ echo $policy_data -> mobile_name; }
                        if ($policy_data->platforms = 'Website URL'){ echo $policy_data -> website_url; } ?>
                </strong>
              </div>
            </div>
            @auth
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="email">Your email address</label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control form_font @error('password') is-invalid @enderror" id="email" name="email" value="{{ $data->email }}" maxlength="255" <?php if (auth()->user()->admin =='0' || auth()->user()->admin =='2') echo "readonly='readonly'"; ?> />
              </div>
              <span class="help">You will receive your DMCA policy to this email address</span>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <label id="email-error" class="error" for="email"></label>
            </div>
            @if ($data->admin == '1')
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="password">Set Your Password</label>
              <div class="col-sm-6">
                <input type="text" class="form-control form_font @error('password') is-invalid @enderror" id="password" name="password" maxlength="255">
              </div>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            @endif
            @endauth
            @guest
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="email">Your email address</label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control form_font @error('password') is-invalid @enderror" id="email" name="email" value="" maxlength="255" />
              </div>
              <span class="help">You will receive your DMCA policy to this email address</span>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <label id="email-error" class="error" for="email"></label>
            </div>
            <div class="form-group form_part">
              <label class="control-label col-sm-12 pb-2" for="password">Set Your Password</label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control form_font @error('password') is-invalid @enderror" id="password" name="password" maxlength="255">
              </div>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            @endguest
            @if($policy_data->premium == 1 || $policy_data->company == 1 || $policy_data->instructions == 1)
            <input type="hidden" name="url" value="<?php echo 'dmca-premium-policy?form-id='.$id ?>" />
            <input type="hidden" name="link" value="<?php echo 'billing?form-id='.$id ?>" />
            <input type="hidden" name="type" value="Premium" />
            @else
            <input type="hidden" name="url" value="<?php echo 'dmca-basic-policy?form-id='.$id ?>" />
            <input type="hidden" name="link" value="<?php echo 'dmca-basic-policy?form-id='.$id ?>" />
            <input type="hidden" name="type" value="Basic" />
            @endif
            <div class="form-group form_part">
              <div class="col-sm-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="terms" value="1" id="terms" />
                  <label class="form-check-label" for="terms">I have read and agree to the <a target="_blank" href="{ route('termsandprivacy')}}">terms of service</a>.</label>
                </div>
              </div>
            </div>
          </div>
          <div>
              <button type="submit" class="ybtn ybtn-accent-color">Create DMCA Policy</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script src="{{asset('asset/js/policy.js')}}"></script>
@endsection