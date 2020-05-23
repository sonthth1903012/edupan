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
                            <h5 class="card-title text-center">Danh sách Donor</h5>
{{--                            <a href="{{url("admin/school/create_school")}}" class="btn btn-default my-1">Add School</a>--}}
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Amount</th>
                                        <th>Method</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($project->Users as $user)
{{--                                        <pre>{{var_dump($user)}}</pre>--}}
                                        <tr>
                                            <td>{{$user->pivot->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>${{$user->pivot->amount}}</td>
                                            <td>{{$user->pivot->method}}</td>
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
