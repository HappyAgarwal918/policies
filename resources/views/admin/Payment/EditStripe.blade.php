@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')

<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Legal</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <h3><b>{{ $key->key_type }}</b></h3>
                <form method="POST" action="{{ route('edited_stripe')}}">
                @csrf
                    <input type="hidden" id="" name="id" value="{{$id}}" readonly="readonly">
                    <div class="form-group row">
                        <label for="old_key" class="col-sm-3 col-form-label col-form-label-lg">Old Key:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="old_key" value="{{$key->values}}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="values" class="col-sm-3 col-form-label col-form-label-lg">New Key:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="values" value="" required>
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