@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
@endsection

@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Create your account</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body login-page">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group pb-3">
                            <label for="name" class="col-form-label float-start">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="email" class="col-form-label float-start">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="password" class="col-form-label float-start">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="password-confirm" class="col-form-label float-start">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group pb-3">
                            <span class="captcha-image">{!! Captcha::img() !!}</span> &nbsp;&nbsp;
                            <i class="fas fa-sync refresh-button"></i>
                        </div>
                        <div class="form-group pb-3">
                            <label class="col-form-label float-start" for="captcha">Captcha</label>
                            <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha">
                            @error('captcha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <div class="">
                                <button type="submit" class="ybtn ybtn-header-color">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('.refresh-button').click(function() {
            $.ajax({
                type: 'get',
                url: '{{ route('refreshCaptcha') }}',
                success:function(data) {
                    $('.captcha-image').html(data.captcha);
                }
            });
        });
    });
</script>
@endsection