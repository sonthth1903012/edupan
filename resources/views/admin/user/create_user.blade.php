@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ADD user</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <form class="form-horizontal" action="{{url("admin/user/create")}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Full
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input name="name" placeholder="user Name Here" id="cc-name"
                                               value="{{old("name")}}"
                                               class="form-control @if($errors->has("name"))is-invalid @else is-valid @endif"
                                               type="text" required>
                                    </div>
                                </div>
                                @if($errors->has("name"))
                                    <div class="invalid-feedback d-block">
                                        {{$errors->first("name")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name"
                                           class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input name="email" placeholder="user Name Here" id="cc-name"
                                               value="{{old("email")}}"
                                               class="form-control @if($errors->has("email"))is-invalid @else is-valid @endif"
                                               type="text" required>
                                    </div>

                                    @if($errors->has("email"))
                                        <div class="invalid-feedback d-block">
                                            {{$errors->first("email")}}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input name="email" placeholder="user Name Here" id="cc-name"
                                               value="{{old("password")}}"
                                               class="form-control @if($errors->has("password"))is-invalid @else is-valid @endif"
                                               type="text" required>
                                    </div>

                                    @if($errors->has("password"))
                                        <div class="invalid-feedback d-block">
                                            {{$errors->first("password")}}
                                        </div>

                                    @endif
                                </div>
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
