@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')
<div class="row m-2">
  <div class="col-md-12 text">
    <h3>{{ $email }}</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">Name</th>
                            <th class="" scope="col">Type</th>
                            <th class="" scope="col">Status</th>
                            <th class="" scope="col">Date</th>
                            <!-- <th class="" scope="col">Button</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($users))
                        @foreach($users as $user)
                        <tr>
                            <td> <span><a href="<?php if( $user->payment_status == 'succeeded'){ echo $user -> url; }
                            else { echo $user -> link; } ?>"><?php echo $user -> mobile_name; ?></a></span>
                            <span class="name"><a href="<?php if( $user->payment_status == 'succeeded')
                            { echo $user -> url; }else { echo $user -> link; } ?>"><?php echo $user -> website_url; ?></a></span>
                        </td>
                        <td><?php echo $user->policy_name; ?><br><span><?php echo $user->type; ?></span></td>
                        <td><?php if ($user->payment_status == 'succeeded' || $user->type == 'Basic')
                                    { echo '<span class="activee">Active</span>'; }
                                else{ echo '<span class="unpaid">Incomplete</span>'; } ?>
                        </td>
                        <td><?php echo $user->created ?></td>
                        <!-- <td><a href="{{ url('/User/policy/delete/'.$user->unique_id) }}" class="btn btn-danger btn-sm">Delete</a></td> -->
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection