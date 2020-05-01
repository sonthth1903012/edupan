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
                            <h5 class="card-title text-center">Danh sách Post</h5>
                            <a href="{{url("admin/post/create_post")}}" class="btn btn-default my-1">Thêm post</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Category</th>
                                        <th>User</th>
                                        <th>Author</th>
                                        <th>shortDesc</th>
                                        <th>Thumbnail</th>
                                        <th>Controller</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($posts as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->title}}</td>
                                            <td>{{$p->content}}</td>
                                            <td>{{$p->Category->category_name}}</td>
                                            <td>{{$p->User->name}}</td>
                                            <td>{{$p->author}}</td>
                                            <td>{{$p->shortDesc}}</td>
                                            <td>
                                                <img src="{{$p->thumbnail}}" width="100">
                                            </td>
                                            <td>
                                                <a href="{{url("admin/post/edit_post",['id'=>$p->id])}}">Edit</a>
                                                <a href="{{url("admin/post/delete_post",['id'=>$p->id])}}">Delete</a>
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
