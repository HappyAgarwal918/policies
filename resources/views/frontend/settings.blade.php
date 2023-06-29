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
                    <div class="page-title">Settings</div>
                    <!-- <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="{{ asset('images/pricing.png')}}" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div id="contact-info" class="container-fluid">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link active" href="#home"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
            </li>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link" href="#profile"><i class='fas fa-file-invoice-dollar'></i> Invoices</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active py-3" id="home">
                <div class="row">
                    <div class="col-md-2">
                        <label for="email" class="col-form-label">Email</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="email" class="form-control" aria-describedby="passwordHelpInline" value="{{ Auth::user()->email }}" readonly>
                        <span><a href="{{ route('change_password')}}">Change password</a></span>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade py-3" id="profile">
                <table id="restu_table" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">Name</th>
                            <th class="" scope="col">Status</th>
                            <th class="" scope="col">Date</th>
                            <th class="" scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>                                
                    <?php foreach($users as $user){ ?>
                        <tr>
                            <td><a href="{{url('/invoice?form-id='.$user->unique_id)}}"><?php  echo $user->type ; ?></a></td>
                            <td><?php if ($user->payment_status == 'succeeded')
                            {echo '<span class="activee">Active</span>';}else{echo '<span class="unpaid">Unpaid</span>';} ?></td>
                            <td><?php echo $user->created; ?></td>
                            <td><?php echo '$'.$user->deal_price; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection