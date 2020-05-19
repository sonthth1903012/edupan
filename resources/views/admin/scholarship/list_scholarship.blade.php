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
                            <h5 class="card-title text-center">Danh sách Scholarships</h5>
                            <a href="{{url("admin/scholarship/create_scholarship")}}" class="btn btn-default my-1">Thêm Scholarships</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Scholarship Name</th>
                                        <th>Amount</th>
                                        <th>Thumbnail</th>
                                        <th>Content</th>
                                        <th>DueDate</th>
                                        <th>School_id</th>
                                        <th>Create At </th>
                                        <th>Update At</th>
                                        <th>List Student Apply</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($scholarship as $s)
                                        <tr>
                                            <td>{{$s->id}}</td>
                                            <td>{{$s->name}}</td>
                                            <td>{{$s->amount}}</td>
                                            <td><img src="{{asset($s->thumbnail)}}" width="100"></td>
                                            <td>{{$s->content}}</td>
                                            <td>{{$s->duedate}}</td>
                                            <td>{{$s->School->school_name}}</td>
                                            <td>{{$s->created_at}}</td>
                                            <td>{{$s->updated_at}}</td>
                                            <td>
                                                <a href="{{url("admin/scho_student/list_scholarship_student/{$s->id}")}}">See More</a>
                                            </td>
                                            <td>
                                                <a href="{{url("admin/scholarship/edit_scholarship",['id'=>$s->id])}}">Edit</a>
                                                <a href="{{url("admin/scholarship/delete_scholarship",['id'=>$s->id])}}">Delete</a>
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
