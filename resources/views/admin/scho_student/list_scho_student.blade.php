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
                            <h5 class="card-title text-center">Danh sách USER APPLY</h5>
                            <a href="{{url("admin/school/create_school")}}" class="btn btn-default my-1">Add School</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Date of Birth</th>
                                        <th>Phone</th>
                                        <th>Skill</th>
                                        <th>Status</th>
                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($scholarship->Student as $student)
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->student_name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->address}}</td>
                                            <td>{{$student->date_of_birth}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>
                                                <a href="{{ url("admin/{$student->skill}") }}">download</a>
                                            </td>

                                            <td>{{$student->status}}}</td>
                                            <td>
                                                <a href="{{url("admin/scho_student/student/approve",['id'=>$student->id])}}">Approve</a>
                                                <a href="{{url("admin/scho_student/student/remove",['id'=>$student->id])}}">Remove</a>
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
