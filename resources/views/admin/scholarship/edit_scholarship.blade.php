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
                        <form class="form-horizontal" action="{{url("admin/scholarship/update_scholarship",['id'=>$scholarship->id])}}"
                              method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Scholarship Name</label>
                                    <div class="col-sm-9">
                                        <input name="name" type="text" placeholder="Scholarship Name" id="cc-name" value="{{$scholarship->name}}"
                                               class="form-control @if($errors->has("name"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("name"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("name")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">School</label>
                                    <div class="col-9">
                                        <select name="scholarship_school" class="select2 form-control custom-select" required>
                                            <optgroup label="School">
                                                @foreach($school as $s)
                                                    <option value="{{$s ->id}}" @if($s->id==$scholarship->School->id)selected @endif>{{$s->school_name}}</option>
                                                @endforeach

{{--                                                    @foreach($allSchools as $school)--}}
{{--                                                        <option value="{{$school ->id}}">{{$school->school_name}}</option>--}}
{{--                                                    @endforeach--}}
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Amount</label>
                                    <div class="col-sm-9">
                                        <input name="amount" type="number" placeholder="Amount" id="cc-name" value="{{$scholarship->amount}}"
                                               class="form-control @if($errors->has("amount"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("amount"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("amount")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                                    <div class="col-sm-9">
                                        <input name="thumbnail" type="file" placeholder="Thumbnail" id="cc-name" value="{{$scholarship->thumbnail}}"
                                               class="form-control @if($errors->has("thumbnail"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("thumbnail"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("thumbnail")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Due_Date</label>
                                    <div class="col-sm-9">
                                        <input name="content" type="text" placeholder="Content" id="cc-name" value="{{$scholarship->duedate}}"
                                               class="form-control @if($errors->has("duedate"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("content"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("duedate")}}
                                    </div>
                                @endif


                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Content</label>
                                    <div class="col-sm-9">
                                       <textarea name="duedate" type="" id="desc" cols="30" rows="10" placeholder="Desc" value="{{$scholarship->content}}"
                                                 class="form-control @if($errors->has("content"))is-invalid @else is-valid @endif"
                                                 required> </textarea>
                                    </div>
                                </div>
                                @if($errors->has("content"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("content")}}
                                    </div>
                                @endif


                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Same</button>
                                </div>

{{--                                <div class="card-body">--}}
{{--                                    <a href="{{url("admin/scho_user/delete_scholarship",['id'=>$s->id])}}">List Student Apply</a>--}}
{{--                                    <button type="submit" class="btn btn-primary">Same</button>--}}
{{--                                </div>--}}
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
