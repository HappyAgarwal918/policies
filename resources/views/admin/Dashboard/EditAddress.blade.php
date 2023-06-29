@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Legal</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form action="{{ route('address_edited')}}" method="POST">
                    @csrf
                    <label style="font-size: 20px; font-weight: bold;">Address</label>
                    
                    <div class="col" style="margin-left: 20px;">
                        <label style="font-size: 20px">Company Name:</label>
                        <input type="text" name="company_name" value="{{ $address->seller_company_name }}"><br><br>
                        <label style="font-size: 19px">Address:</label>
                        <input type="text" name="address" value="{{ $address->seller_address }}"><br><br>
                   
                    <div class="col">
                        <label style="font-size: 20px">Zip:</label>
                        <input type="text" name="zip" value="{{ $address->seller_zip }}" ><br><br>
                        <label style="font-size: 19px">Country:</label>
                        <input type="text" name="country" value="{{ $address->seller_country }}"><br><br>
                    </div>
                     </div>
                    <input class="btn btn-success submit" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection