@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')

<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Edit Legal</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form method="post" action="{{ route('legal_edited') }}">
                    @csrf
                    @method('patch')
                    <div class="field d-none">
                        <label class="label">Title</label>
                        <div class="control">
                            <input type="text" name="title" value="legal-clauses" class="input" placeholder="Title" required />
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <textarea rows="100%" style="width: 100% !important" name="legal" class="textarea" placeholder="Content">{{ $legal->legal }}</textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="ybtn ybtn-accent-color">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection