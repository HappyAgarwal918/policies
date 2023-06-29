@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
@endsection

@section('content')

@php $id = $_GET['form-id'] @endphp

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Custom Clause</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="card shadow">
              <div class="card-title border-bottom">
                <h2 class="p-3">Create custom clauses</h2>
                <p class="px-3">Is your policy missing something? Do you have special requirements or something else you would like to add? Use the form below to add custom clauses to your policy.</p>
              </div>
              <div class="card-body">
                <form action="{{ url('custom-clause-home?form-id='.$id)}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" maxlength="255" />
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">Clause</label>
                        <textarea type="text" class="form-control" id="text" name="text" rows="5" ></textarea>
                    </div>
                    <div class="mb-4 d-none">
                        <input type="text" class="form-control" id="unique_id" name="unique_id" value="<?php echo $id; ?>" />
                    </div>
                    <div class="">
                        <button type="submit" class="ybtn ybtn-header-color">Save</button>
                        <a class="button ybtn ybtn-white ybtn-shadow border border-success" href="{{ url('custom-clause-home?form-id='.$id)}}">View Clause</a>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection