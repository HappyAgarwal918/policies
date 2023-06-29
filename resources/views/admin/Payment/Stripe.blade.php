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
    <h3>Stripe</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="" scope="col">Type</th>
                            <th class="" scope="col">Values</th>
                            <th class="" scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stripe as $a)
                        <tr>
                            <td><?php echo $a->id; ?></td>
                            <td><?php echo $a->key_type; ?></td>
                            <td style="font-size: 12px !important;"><?php echo $a->values; ?></td>
                            <td><a href="{{ route('edit_stripe',$a->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection