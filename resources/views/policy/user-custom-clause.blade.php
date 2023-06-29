@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <style type="text/css">
        .over_view_underline {
            height: 5px;
            width: 100%;
            background-color: #383ebf;
        }
    </style>
@endsection

@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">My Policies</div>
                    <!-- <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@php $id = $_GET['form-id'];
$clauses = DB::table('custom-clause')->where('unique_id' , $id)->get();
@endphp
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div id="contact-info" class="container-fluid">
    @if(count($clauses) == 0)
    <div class="container" style="min-height: 32vh; ">
        <h2>No custom clauses have been created yet.</h2>
        <div class="over_view_underline"></div>
        <div class="mt-3"><p>Looks like you haven't created any custom clauses yet. <a href="{{ url('custom-clause?form-id='.$id) }}">Create your custom clauses</a> now to get started.</p></div>
    </div>
    @else
    <div class="container">
        <a href="{{url('custom-clause?form-id='.$id)}}" class="ybtn ybtn-accent-color create_new">Create New Clause</a>
        <table id="restu_table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="" scope="col">Clause</th>
                    <th class="" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>                                
                @foreach($clauses as $clause)
                <tr>
                    <td>{{ $clause->title }}</td>
                    <td><a href="{{ route('customclausedestroy',$clause->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection