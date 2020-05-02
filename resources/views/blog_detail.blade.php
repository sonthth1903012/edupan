@extends('layout')

@section('title',"Bog Detail")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url('{{asset('img/bg-img/breadcumb.jpg')}}'); padding-bottom:120px">
        <div class="bradcumbContent">
            <h2>Detail</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120" style="padding-top:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12" style="padding-bottom:30px">
                            <div class="feature-img">
                                <img class="img-fluid" src={{$post->thumbnail}} alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag" style="float: right; padding-top:10px;">
                                    <a href="#" style="color:darkgrey; font-weight: 200">Food,</a>
                                    <a class="active" href="#" style="color:darkgrey; font-weight: 200">Technology,</a>
                                    <a href="#" style="color:darkgrey; font-weight: 200">Politics,</a>
                                    <a href="#" style="color:darkgrey; font-weight: 200">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list" style="float: right; padding-top:10px">
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">{{$post->author}}<i class="fa fa-user" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">{{$post->created_at}}<i class="fa fa-calendar" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">View<i class="fa fa-eye" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">Comments<i class="fa fa-comment" style="padding-left:14px;color:dimgrey"></i></a></li>
                                </ul>
                                <div class="contact-social-info d-flex mb-30" style="float: right; padding-top:10px">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true" style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true" style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$post->title}}</h2>
                            <p class="excert">
                            </p>{{$post->content}}<p>
                        </div>
                    </div>
                    <!--================Nav Post Area =================-->
                    <div>

                    </div>
                    <!--================Comment Area =================-->
                    <div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="{{url('/search')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}";>
                                <input type="text" name="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Categories</h5>
                            @foreach($category as $c)
                                <ul>
                                    <li><a href="#">{{$c->category_name}}</a></li>
                                </ul>
                            @endforeach
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                        @foreach( $link as $l)

                            <!-- Single Latest Blog Post -->
                                <div class="single-latest-blog-post d-flex mb-30">
                                    <div class="latest-blog-post-thumb">
                                        <img src= {{$l->thumbnail}} alt="">
                                    </div>
                                    <div class="latest-blog-post-content">
                                        <a href="#" class="post-title">
                                            <h6>{{$l->title}}</h6>
                                        </a>
                                        <a href="#" class="post-date">{{$l->created_at}}</a>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget" style="padding-bottom: 50px">
                            <a href="#"><img src={{asset("img/blog-img/add.png")}} alt=""></a>
                        </div>



                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
