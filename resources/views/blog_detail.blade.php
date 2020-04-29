@extends('layout')

@section('title',"Bog Detail")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg); padding-bottom:120px">
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
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Categories</h5>
                            <ul>
                                @foreach($category as $c)
                                    <li><a href="#">{{$c->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                        @foreach($link as $l)
                            <!-- Single Latest Blog Post -->
                                <div class="single-latest-blog-post d-flex mb-30">
                                    <div class="latest-blog-post-thumb">
                                        <img src={{$l->thumbnail}} alt="">
                                    </div>
                                    <div class="latest-blog-post-content">
                                        <a href="#" class="post-title">
                                            <h6>{{$l->title}}</h6>
                                        </a>
                                        <a href="#" class="post-date">{{$l->created_at}}</a>
                                    </div>
                                </div>
                        @endforeach

                        <!-- Contact us! Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Contact us!</h5>
                            <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <form action="#" method="post">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail" required>
                                    <button class="btn academy-btn mt-30" type="submit">Send email</button>
                                </form>
                            </div>
                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget" style="padding-bottom: 35px">
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>

                        <!-- Tag Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Tags</h5>
                            <!-- Single tags -->
                            <span style="padding-left:20px">tag1</span>
                            <span style="padding-left:20px">tag2</span>
                            <span style="padding-left:20px">tag3</span>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
