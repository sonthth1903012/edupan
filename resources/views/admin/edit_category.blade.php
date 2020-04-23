@extends("admin.layout")

@section('title',"Edit Category")

@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">EDIT AN CATEGORY</h2>
        </div>
    </div>
@endsection
@section('main_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">EDIT CATEGORY</div>
            <div class="card-body">
                <form action="{{url("admin/category/update",['id'=>$category->id])}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <input id="cc-name" name="category_name" type="text" value="{{$category->category_name}}"
                               class="form-control cc-name @if($errors->has("category_name"))is-invalid @endif" placeholder="Name" >
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("category_name"))
                            <p style="color:red">{{$errors->first("category_name")}}</p>
                        @endif
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Send</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
