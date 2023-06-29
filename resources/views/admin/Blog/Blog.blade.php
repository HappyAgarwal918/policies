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
    <h3>Blogs</h3>
  </div>
</div>
<div class="form-group row pl-5 pb-3">
    <a href="{{ route('all_blogs')}}" type="submit" class="ybtn ybtn-accent-color">All Blogs</a>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form method="post" action="{{ route('store_blog')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Link</label>
                            <input type="text" name="link" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <label for="featured_image">Featured Image</label>
                            <input type="file" id="featured_image" name="featured_image" class="form-control" style="border: none !important" />
                        </div> 
                    </div>
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea name="editor1"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="ybtn ybtn-accent-color">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection