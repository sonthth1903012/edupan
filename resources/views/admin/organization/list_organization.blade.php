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
                            <h5 class="card-title text-center">Danh sách Organization</h5>
                            <a href="{{url("admin/organization/create_organization")}}" class="btn btn-default my-1">Add Organization</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Organization Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
{{--                                        <th>Amount</th>--}}
                                        <th>Desc</th>
                                        <th>Thumbnail</th>
                                        <th>Create At</th>
                                        <th>Update At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($organization as $o)
                                        <tr>
                                            <td>{{$o->id}}</td>
                                            <td>{{$o->organization_name}}</td>
                                            <td>{{$o->email}}</td>
                                            <td>{{$o->address}}</td>
{{--                                            <td>{{$o->amount}}</td>--}}
                                            <td>
                                                <img src="{{asset($o->thumbnail)}}" width="100">
                                            </td>
                                            <td>{{$o->desc}}</td>
                                            <td>{{$o->created_at}}</td>
                                            <td>{{$o->updated_at}}</td>
                                            <td>
                                                <a href="{{url("admin/organization/edit_organization",['id'=>$o->id])}}">Edit</a>
                                                <a href="{{url("admin/organization/delete_organization",['id'=>$o->id])}}">Delete</a>
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
