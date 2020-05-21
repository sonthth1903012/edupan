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
                            <h5 class="card-title text-center">Danh sách Workshop</h5>
                            <a href="{{url("admin/workshop/create_workshop")}}" class="btn btn-default my-1">Add Workshop</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Category - User</th>
                                        <th>shortDesc</th>
                                        <th>Thumbnail</th>
                                        <th>Location - Time</th>
                                        <th>Attendees/Capacity - Fee</th>
                                        <th>Controller</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($workshop as $w)
                                        <tr>
                                            <td>{{$w->id}}</td>
                                            <td>{{$w->Post->title}}</td>
                                            <td>{{$w->Post->content}}</td>
                                            <td>
                                                <p>{{$w->Post->Category->category_name}}</p>
                                                <p>{{$w->Post->User->name}}</p>
                                            </td>
                                            <td>{{$w->Post->shortDesc}}</td>
                                            <td>
                                                <img src="{{$w->Post->thumbnail}}" width="100">
                                            </td>
                                            <td>
                                                <p>{{$w->location}}</p>
                                                <p>{{$w->time}}</p>
                                            </td>
                                            <td>
                                                <p>{{$w->attendees}}/{{$w->capacity}}</p>
                                                <p>{{$w->fee}}</p>
                                            </td>
                                            <td>
                                                <a href="{{url("admin/post/edit_workshop",['id'=>$w->id])}}">Edit</a>
                                                <a href="{{url("admin/post/delete_workshop",['id'=>$w->id])}}">Delete</a>
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
