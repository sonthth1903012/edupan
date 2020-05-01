@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ADD new post</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form class="form-horizontal" action="{{url("admin/post/update_post",['id'=>$post->id])}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="card-body col-8">
                                    <div class="form-group row">
                                        <label class="col-sm-2">Title</label>
                                        <div class="col-sm-10">
                                            <input name="post_title" placeholder="This is title" id="post-title" value="{{$post->title}}" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2">Content</label>
                                        <div class="col-sm-10">
                                            <textarea name="post_content" placeholder="Write content Here" id="post_content">{{$post->content}}</textarea>

                                            <script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
                                            <script type="text/javascript">
                                                tinymce.init({
                                                    selector: '#post_content',
                                                    height: 400,
                                                    theme: 'modern',
                                                    plugins: [
                                                        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                                        'searchreplace wordcount visualblocks visualchars code fullscreen',
                                                        'insertdatetime media nonbreaking save table contextmenu directionality',
                                                        'emoticons template paste textcolor colorpicker textpattern imagetools'
                                                    ],
                                                    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                                                    toolbar2: 'print preview media | forecolor backcolor emoticons',
                                                    image_advtab: true
                                                });
                                            </script>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body col-4">

                                    <div class="form-group row">
                                        <label class="col-3">Category</label>
                                        <div class="col-9">
                                            <select name="post_category" class="select2 form-control custom-select" required>
                                                <optgroup label="Category">
                                                    @foreach($categories as $c)
                                                        <option value="{{$c ->id}}" @if($c->id==$post->Category->id)selected @endif>{{$c -> category_name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">User</label>
                                        <div class="col-9">
                                            <select name="post_user" class="select2 form-control custom-select" required>
                                                <optgroup label="User">
                                                    @foreach($users as $u)
                                                        <option value="{{$u ->id}}" @if($u->id==$post->User->id)selected @endif>{{$u ->name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-3">Author</label>
                                        <div class="col-9">
                                            <input name="post_author" placeholder="This is author" id="post_author" value="{{$post->author}}" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">Short Description</label>
                                        <div class="col-9">
                                            <textarea name="post_desc" placeholder="This is short Description" id="post_desc" class="form-control" type="text" style="height: 150px">{{$post->shortDesc}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">Thumbnail</label>
                                        <div class="col-9">
                                            <input name="post_thumbnail" placeholder="This is link thumbnail" id="post_thumbnail" value="{{$post->thumbnail}}" class="form-control" type="text">
                                            <img id="thumbnail_review" width="100%">
                                            <script type="text/javascript">
                                                document.getElementById("post_thumbnail").onblur = ()=>{
                                                    let imgSRC = document.getElementById("post_thumbnail").value;
                                                    document.getElementById("thumbnail_review").setAttribute("src", imgSRC);
                                                }
                                            </script>
                                        </div>
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
