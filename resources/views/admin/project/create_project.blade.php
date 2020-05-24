@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Project</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <form class="form-horizontal" action="{{url("admin/project/store_project")}}"
                              method="post" enctype="multipart/form-data">
                            @csrf
{{--                            <pre>{{var_dump($errors)}}</pre>--}}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Project_name</label>
                                    <div class="col-sm-9">
                                        <input name="project_name" type="text" placeholder="Project Name" id="cc-name"
                                               value="{{old("project_name")}}"
                                               class="form-control ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Organization</label>
                                    <div class="col-9">
                                        <select name="organization_id" class="select2 form-control custom-select"
                                                required>
                                            <option value="" disabled>Select</option>
                                            <optgroup label="Organization">
                                                @foreach($allOrganizations as $organization)
                                                    <option value="{{$organization ->id}}">{{$organization->organization_name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name"
                                           class="col-sm-3 text-right control-label col-form-label">Goal</label>
                                    <div class="col-sm-9">
                                        <input name="goal" type="number" placeholder="Goal" id="cc-name"
                                               value="{{old("goal")}}"
                                               class="form-control ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                                    <div class="col-sm-9">
                                        <input name="thumbnail" type="file" placeholder="Thumbnail" id="cc-name"
                                               value="{{old("thumbnail")}}"
                                               class="form-control ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">DueDate</label>
                                    <div class="col-sm-9">
                                        <input name="due_date" type="date" placeholder="Due_Date" id="cc-name"
                                               value="{{old("due_date")}}"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Content</label>
                                    <div class="col-sm-9">
                                       <textarea name="content" type="" id="desc" cols="30" rows="10" placeholder="Content"
                                                 value="{{old("content")}}"
                                                 class="form-control" required></textarea>
                                    </div>
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
