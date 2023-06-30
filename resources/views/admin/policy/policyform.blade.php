@extends('admin.layout')
@section('title') Legal Policies @endsection
@section('css')
<!-- select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<!-- end select2 -->
@endsection
@section('admincontent')

<?php $uniqid = uniqid(); 
if($_GET['form-id'] == "acceptable-use-policy"){
	$policy_name = "Acceptable Policy";
	$policy_link = "acceptable-use-premium-policy";
}elseif($_GET['form-id'] == "cookie-policy"){
	$policy_name = "Cookie Policy";
	$policy_link = "cookie-premium-policy";
}elseif($_GET['form-id'] == "disclaimer"){
	$policy_name = "Disclaimer Policy";
	$policy_link = "disclaimer-premium-policy";
}elseif($_GET['form-id'] == "dmca-policy"){
	$policy_name = "DMCA Policy";
	$policy_link = "dmca-premium-policy";
}elseif($_GET['form-id'] == "privacy-policy"){
	$policy_name = "Privacy Policy";
	$policy_link = "privacy-premium-policy";
}elseif($_GET['form-id'] == "refund-policy"){
	$policy_name = "Refund Policy";
	$policy_link = "refund-premium-policy";
}elseif($_GET['form-id'] == "terms-and-conditions"){
	$policy_name = "Terms and Conditions";
	$policy_link = "terms-and-conditions-premium-policy";
}elseif($_GET['form-id'] == "legal-document"){
	$policy_name = "legal-document";
	$policy_link = "legal-document-premium-policy";
} ?>
<div class="row">
<div class="col-xl-12">
@if(session()->has('successful_message'))
    <div class="alert alert-success">
        {{ session()->get('successful_message') }}
    </div>
@endif
</div>
</div> 
<div class="row">
  <div class="col-xl-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title mb-5">Add New Policy</p>
        <!-- MultiStep Form -->
        <form action="{{ route('admin.policysave')}}" method="post" id="multistep_form">
          @csrf
            <div class="panel-body">
            	<div class="form-group form_part row">
	                <label for="single" class="col-md-3 col-form-label">Select User</label>
	                <div class="col-md-8">
	                    <select id="single" name="email" class="form-control form-control-md w-100" required>
	                    	@foreach($data as $user)
							<option value="{{ $user->email }}">{{ $user->email }}</option>
							@endforeach
						</select>
	                	<label id="single-error" class="error" for="single"></label>
	                </div>
	            </div>
				<div class="form-group form_part row">
					<label for="mobile_name" class="col-md-3 col-form-label">Mobile Name/Website URL</label>
					<div class="col-md-8">
					    <input class="form-control form-control-md w-100" id="mobile_name" name="mobile_name" value="" required />
						<label id="mobile_name-error" class="error" for="mobile_name"></label>
					</div>
				</div>
				<div class="d-none">
				<div class="form-group form_part row">
					<label for="policy_name" class="col-md-3 col-form-label">Policy Name</label>
					<div class="col-md-8">
					    <input class="form-control form-control-md w-100" id="policy_name" name="policy_name" value="{{ $policy_name }}" required />
						<label id="policy_name-error" class="error" for="policy_name"></label>
					</div>
				</div>
				<div class="form-group form_part row">
					<label for="type" class="col-md-3 col-form-label">Policy Type</label>
					<div class="col-md-8">
					    <input class="form-control form-control-md w-100" id="type" name="type" value="Premium" required />
						<label id="type-error" class="error" for="type"></label>
					</div>
				</div>
				<div class="form-group form_part row">
					<label for="unique_id" class="col-md-3 col-form-label">Unique ID</label>
					<div class="col-md-8">
					    <input class="form-control form-control-md w-100" id="unique_id" name="unique_id" value="{{ $uniqid }}" required />
						<label id="unique_id-error" class="error" for="unique_id"></label>
					</div>
				</div>
				<div class="form-group form_part row">
					<label for="url" class="col-md-3 col-form-label">URL</label>
					<div class="col-md-8">
					    <input class="form-control form-control-md w-100" id="url" name="url" value="<?php echo $policy_link.'?form-id='.$uniqid ?>" required />
						<label id="url-error" class="error" for="url"></label>
					</div>
				</div>
				<div class="form-group form_part row">
					<label for="admin" class="col-md-3 col-form-label">Admin</label>
					<div class="col-md-8">
					    <input class="form-control form-control-md w-100" id="admin" name="adminn" value="1" required />
						<label id="admin-error" class="error" for="admin"></label>
					</div>
				</div>
				<div class="form-group form_part row">
					<label for="newunique" class="col-md-3 col-form-label">New Unique ID</label>
					<div class="col-md-8">
					    <input class="form-control form-control-md w-100" id="newunique" name="newunique" value="{{ uniqid() }}" required />
						<label id="newunique-error" class="error" for="newunique"></label>
					</div>
				</div>
            </div>
          	<div class="form-group form_part">
                <label><strong>Description :</strong></label>
                <textarea name="editor" required></textarea>
            </div>
            <div class="form-group form_part">
            	<button type="submit" name="submit" class="submit ybtn ybtn-accent-color" style="margin: 0px">Submit</button>
            </div>
          </div>
        </form>
        <!-- /.MultiStep Form -->
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<!-- select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- end: include bootstrap4 and select2 -->
<script>
  $("#single").select2({
      allowClear: true
  });
</script>
<script src="//cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor');
</script>
@endsection