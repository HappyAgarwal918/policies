@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')

<div class="row m-2">
  <div class="col-sm-12 text">
    <h3>Edit Price</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <h3><b>{{ $price->policy }}</b></h3>
                <form method="POST" action="{{ route('edited_policy_price')}}">
                @csrf
                    <input type="hidden" id="" name="id" value="{{$id}}" readonly="readonly">
                    <div class="form-group row">
                        <label for="old_price" class="col-sm-3 col-form-label col-form-label-lg">Old Price:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="old_price" value="{{ $price->price }}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-3 col-form-label col-form-label-lg">New Price:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="price" value="{{ $price->price }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="old_deal_price" class="col-sm-3 col-form-label col-form-label-lg">Old Deal_Price:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="old_deal_price" value="{{ $price->deal_price }}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deal_price" class="col-sm-3 col-form-label col-form-label-lg">New Deal_Price:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="deal_price" value="{{ $price->deal_price }}" required>
                        </div>
                    </div>
                    <div class="form-group row offset-md-3">
                        <input class="ybtn ybtn-accent-color submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection