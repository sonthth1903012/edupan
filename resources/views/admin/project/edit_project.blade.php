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
                        <form class="form-horizontal" action="{{url("admin/project/update_project",['id'=>$project->id])}}"
                              method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Project Name</label>
                                    <div class="col-sm-9">
                                        <input name="project_name" type="text" placeholder="Project Name" id="cc-name" value="{{$project->project_name}}"
                                               class="form-control @if($errors->has("project_name"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("project_name"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("project_name")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Organization</label>
                                    <div class="col-9">
                                        <select name="scholarship_school" class="select2 form-control custom-select" required>
                                            <optgroup label="Organization">
                                                @foreach($organization as $o)
                                                    <option value="{{$o ->id}}" @if($o->id==$project->Organization->id)selected @endif>{{$o->organization_name}}</option>
                                                @endforeach

                                                {{--                                                    @foreach($allSchools as $school)--}}
                                                {{--                                                        <option value="{{$school ->id}}">{{$school->school_name}}</option>--}}
                                                {{--                                                    @endforeach--}}
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Goal</label>
                                    <div class="col-sm-9">
                                        <input name="goal" type="number" placeholder="goal" id="cc-name" value="{{$project->goal}}"
                                               class="form-control @if($errors->has("goal"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("goal"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("goal")}}
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                                    <div class="col-sm-9">
                                        <input name="thumbnail" type="file" placeholder="Thumbnail" id="cc-name" value="{{$project->thumbnail}}"
                                               class="form-control @if($errors->has("project"))is-invalid @else is-valid @endif" >
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
                                        <input name="due_date" type="text" placeholder="Content" id="cc-name" value="{{$project->due_date}}"
                                               class="form-control @if($errors->has("due_date"))is-invalid @else is-valid @endif" >
                                    </div>
                                </div>
                                @if($errors->has("due_date"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("duedate")}}
                                    </div>
                                @endif


                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Content</label>
                                    <div class="col-sm-9">
                                       <textarea name="content" type="" id="Content" cols="30" rows="10" placeholder="Content" value="{{$project->content}}"
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
                                    <button type="submit" class="btn btn-primary">Save</button>
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
