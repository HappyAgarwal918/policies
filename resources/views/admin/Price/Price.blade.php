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
    <h3>Price</h3>
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
                            <th class="" scope="col">Policy</th>
                            <th class="" scope="col">Price</th>
                            <th class="" scope="col">Deal_Price</th>
                            <th class="" scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($price as $a)
                        <tr>
                            <td><?php echo $a->id; ?></td>
                            <td><?php echo $a->policy; ?></td>
                            <td><?php echo $a->price; ?></td>
                            <td><?php echo $a->deal_price; ?></td>
                            <td><a href="{{ route('edit_policy_price',$a->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection