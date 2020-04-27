@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Tables</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Danh sách comment</h5>
                            <a href="{{url("admin/comment/create_comment")}}" class="btn btn-default my-1">Thêm comment</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Post</th>
                                        <th>Content</th>
                                        <th>Create At</th>
                                        <th>Update At</th>
                                        <th>Controller</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($comments as $c)
                                        <tr>
                                            <td>{{$c->id}}</td>
                                            <td>{{$c->User->id}} - {{$c->User->name}}</td>
                                            <td>{{$c->Post->id}} - {{$c->Post->title}}</td>
                                            <td>{{$c->content}}</td>
                                            <td>{{$c->created_at}}</td>
                                            <td>{{$c->updated_at}}</td>
                                            <td>
                                                <a href="{{url("admin/comment/edit_comment",['id'=>$c->id])}}">Edit</a>
                                                <a href="{{url("admin/comment/delete_comment",['id'=>$c->id])}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
