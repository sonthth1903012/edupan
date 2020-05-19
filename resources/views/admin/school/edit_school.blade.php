@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Form Basic</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <form class="form-horizontal" action="{{url("admin/school/update_school",['id'=>$school->id])}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">School Name Edit</label>
                                    <div class="col-sm-9">
                                        <input name="school_name" type="text" placeholder="School Name Here" id="cc-name" value="{{$school->school_name}}"
                                               class="form-control @if($errors->has("school_name"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("school_name"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("school_name")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input name="email" type="email" placeholder="Email Here" id="cc-name" value="{{$school->email}}"
                                               class="form-control @if($errors->has("email"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("email"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("email")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input name="address" type="text" placeholder="Category Name Here" id="cc-name" value="{{$school->address}}"
                                               class="form-control @if($errors->has("address"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("address"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("address")}}
                                    </div>
                                @endif


                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                                    <div class="col-sm-9">
                                        <input name="image" type="file" placeholder="Category Name Here" id="cc-name" value="{{$school->image}}"
                                               class="form-control @if($errors->has("image"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("image"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("image")}}
                                    </div>
                                @endif


                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Desc</label>
                                    <div class="col-sm-9">
                                       <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Desc"
                                                 class="form-control @if($errors->has("desc"))is-invalid @else is-valid @endif"
                                                 required>{{$school->desc}}</textarea>
                                    </div>
                                </div>
                                @if($errors->has("desc"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("desc")}}
                                    </div>
                                @endif




                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
