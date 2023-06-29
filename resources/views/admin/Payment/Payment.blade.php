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
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="" scope="col">Email</th>
                            <th class="" scope="col">Policy</th>
                            <th class="" scope="col">Amount</th>
                            <th class="" scope="col">Transaction ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->payer_email; ?></td>
                            <td><?php echo $user->policy_name; ?></td>
                            <td><?php echo $user->amount; ?></td>
                            <td><?php echo $user->payment_id; ?></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection