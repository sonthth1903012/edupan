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
                            <h5 class="card-title text-center">Danh sách Project</h5>
                            <a href="{{url("admin/project/create_project")}}" class="btn btn-default my-1">Thêm Project</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Project Name</th>
                                        <th>Thumbnail</th>
                                        <th>DueDate</th>
                                        <th>Organization</th>
                                        <th>Goal</th>
                                        <th>Raised</th>
                                        <th>List Donate</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($project as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->project_name}}</td>
                                            <td><img src="{{asset($p->thumbnail)}}" width="100"></td>
                                            <td>{{$p->due_date}}</td>
                                            <td>{{$p->Organization->organization_name}}</td>
                                            <td>{{$p->goal}}</td>

                                            <td>{{$p->raised}}</td>
                                            <td>
                                                <a href="{{url("admin/project/edit_project",['id'=>$p->id])}}/list_donate">See More</a>
                                            </td>
                                            <td>
                                                <a href="{{url("admin/project/edit_project",['id'=>$p->id])}}">Edit</a>
                                                <a href="{{url("admin/project/delete_project",['id'=>$p->id])}}">Delete</a>
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
