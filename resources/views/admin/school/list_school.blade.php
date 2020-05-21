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
                            <h5 class="card-title text-center">Danh sách School</h5>
                            <a href="{{url("admin/school/create_school")}}" class="btn btn-default my-1">Add School</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>School Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Image</th>
                                        <th>Desc</th>
                                        <th>Create At</th>
                                        <th>Update At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($school as $s)
                                        <tr>
                                            <td>{{$s->id}}</td>
                                            <td>{{$s->school_name}}</td>
                                            <td>{{$s->email}}</td>
                                            <td>{{$s->address}}</td>
                                            <td>
                                            <img src="{{asset($s->image)}}" width="100">
                                            </td>
                                            <td>{{$s->desc}}</td>
                                            <td>{{$s->created_at}}</td>
                                            <td>{{$s->updated_at}}</td>
                                            <td>
                                                <a href="{{url("admin/school/edit_school",['id'=>$s->id])}}">Edit</a>
                                                <a href="{{url("admin/school/delete_school",['id'=>$s->id])}}">Delete</a>
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
