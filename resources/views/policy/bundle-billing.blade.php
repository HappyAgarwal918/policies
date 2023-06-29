@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/billing.css')}}">
@endsection

@section('content')

@php $id = $_GET['form-id']; 
    $a = DB::table('policy')
    ->join('price','price.policy','policy.type')
    ->orderBy('policy.id','desc')->first();
    $countries = DB::table('country')->get();
    $states = DB::table('state')->get();
@endphp

<div id="header-holder" class="inner-header">
  <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Billing</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="mb-4">
            <h2>Billing information</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ url('payment?form-id='.$a->unique_id)}}" method="post">
                    @csrf
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="first_name" class="form-control" maxlength="40" required="required">
                                    <span>First name</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="last_name" class="form-control" maxlength="40" required="required">
                                    <span>Last name</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inputbox mt-3">
                                    <input type="text" name="company" class="form-control" maxlength="100" required="required">
                                    <span>Company name</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inputbox mt-3">
                                    <input type="text" name="address" class="form-control" maxlength="255" required="required">
                                    <span>Address</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="city" class="form-control" maxlength="40" required="required">
                                    <span>City</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="zip" class="form-control" maxlength="20" required="required">
                                    <span>Zip / Postal code</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <select class="form-control" id="c_id" name="c_id">
                                        <option value="">Country</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->value }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 d-none">
                                <div class="inputbox mt-3">
                                    <select class="form-control form_font " id="s_id" name="s_id">
                                        <option value="">Select State</option>
                                        @foreach($states as $state)
                                        <option value="{{ $state->value }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="email" class="form-control" maxlength="40" required="required" value="{{ $a->email }}" readonly="readonly">
                                    <span>E-mail</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="phone" class="form-control" maxlength="20" required="required">
                                    <span>Phone number</span>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="billunique" class="form-control" maxlength="40" required="required" value="{{ $a->newunique }}">
                                    <span>newunique</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 d-flex justify-content-end">
                        <button class="btn btn-success px-3">Pay ${{ $a->deal_price }}</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card card-green p-3 text-white mb-3">
                    <h3 class="mb-0">{{ $a->policy }} Policy</h3>
                    <hr class="mb-3">
                    <span>You have to pay</span>
                    <div class="d-flex flex-row align-items-end my-3">
                        <h1 class="mb-0">${{ $a->deal_price }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection