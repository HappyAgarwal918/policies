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
    <h3>All Blogs</h3>
  </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" role="tab" aria-controls="active" aria-selected="true">Active Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="deleted-tab" data-toggle="tab" href="#deleted" role="tab" aria-controls="deleted" aria-selected="false">Deleted Blogs</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">Title</th>
                                    <th class="" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach($blogs as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->title }}</td>
                                    <td>
                                        <!-- <a href="{{ url('/UserEdit'.'?id='.$user->id) }}" class="btn btn-success btn-sm">Edit</a> -->
                                        <a href="{{ route('delete_blog',$user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="deleted" role="tabpanel" aria-labelledby="deleted-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">Title</th>
                                    <th class="" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php $users = DB::table('posts')->whereNotNull('deleted_at')->get(); 
                                foreach($users as $user){  ?>
                                <tr>
                                    <td><?php echo $user->id; ?></td>
                                <td><?php echo $user->title; ?></td>
                                <td>
                                    <!-- <a href="{{ url('/UserEdit'.'?id='.$user->id) }}" class="btn btn-success btn-sm">Edit</a> -->
                                    <a href="{{ route('restore_blog',$user->id) }}" class="btn btn-danger btn-sm">Restore</a>
                                </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection