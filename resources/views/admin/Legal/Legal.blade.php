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
                <p><?php echo $legal->legal; ?></p>
                <a href="{{ route('edit_legal',$legal->id) }}" class="ybtn ybtn-accent-color">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection