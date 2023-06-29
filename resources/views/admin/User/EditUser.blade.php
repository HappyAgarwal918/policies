@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div class="row m-2">
  <div class="col-sm-12 text">
    <h3>{{ $email }}</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <h3><b>Change Password</b></h3>
                <?php $data = DB::table('users')->where('email',$email)->first(); ?>
                <form method="POST" action="{{ route('edited_admin_user')}}">
                @csrf
                  <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label col-form-label-lg">{{ __('E-Mail Address') }}</label>
                    <div class="col-sm-9">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label col-form-label-lg">{{ __('New Password') }}</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-3 col-form-label col-form-label-lg">{{ __('Confirm Password') }}</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                    <div class="form-group row">
                        <input class="btn btn-success submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form method="POST" action="{{ route('edited_admin_usertype')}}">
                    @csrf
                    <input type="email" class="form-control @error('email') is-invalid @enderror d-none" name="email" value="<?php echo $email; ?>" readonly="readonly">
                    <input type="hidden" name="adminn" value="0" />
                  <div class="form-row align-items-center">
                    <div class="col-md-3">
                        User Type
                    </div>
                    <div class="col-auto">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="adminn" name="adminn" value="2" <?php if ($data->admin == '2') echo "checked='checked'"; ?>>
                        <label class="form-check-label" for="adminn">Admin</label>
                      </div>
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection