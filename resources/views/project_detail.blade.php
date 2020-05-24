@extends('layout')

@section('title',"Scholarships_detail")

@section('content')

    <!--================Scholarships detail =================-->
    <section class="blog_area single-post-area p_120" style="padding-top:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12" style="padding-bottom:30px">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{asset("img/scholarships/pict_large.jpg")}}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag" style="float: right; padding-top:10px;">
                                    <a href="#" style="color:#61ba6d;; font-weight: 500">{{$project->Organization->organization_name}}</a>
                                </div>
                                <ul class="blog_meta list" style="float: right; padding-top:10px">
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">Nguyen Ninh<i
                                                class="fa fa-user" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">Duedate: {{$project->due_date}}<i
                                                class="fa fa-calendar" style="padding-left:14px;color:dimgrey"></i></a>
                                    </li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">24K View<i
                                                class="fa fa-eye" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">06 Comments<i
                                                class="fa fa-comment" style="padding-left:14px;color:dimgrey"></i></a>
                                    </li>
                                </ul>
                                <div class="contact-social-info d-flex mb-30" style="float: right; padding-top:10px">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"
                                                   style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"
                                                   style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"
                                                   style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"
                                                   style="padding-left:14px;color:darkgrey; font-weight: 200"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$project->project_name}}</h2>
                            <p>
                                {{$project->content}}
                            </p>
                        </div>


                        <!--================Comment Area=================-->

                        <div class="comment-form-area row fadeInUp col-lg-12" style="margin-top: 48px;">
                            <div class="box_bottomPadded3 col-lg-8">
                                <h4 style="padding-bottom: 5px;font-weight:400; color: #3e4b59;font-family: Aleo,Georgia,serif;">
                                    Organization Information
                                </h4>
                                <a href="#">
                                    <h3 style="padding-bottom: 30px;">{{$project->Organization->organization_name}}</h3>
                                </a>
                                <div class="text_fontSizeSmall" STYLE="padding-bottom: 30px;">
                                    <span class="text_7n" style="font-weight: 700; color: #b2bb1e;">LOCATION:</span>
                                    <span class="col_defaultText">{{$project->Organization->address}}</span>
                                    <br>
                                    <span class="text_7n" style="color: #b2bb1e;">EMAIL:</span>
                                    <a href="mailto:{{$project->Organization->email}}"
                                       class="col_defaultText">{{$project->Organization->email}}</a>
                                    <br>
                                    <span class="text_7n" style="color: #b2bb1e">FACEBOOK :</span>
                                    <a href="#" class="col_defaultText">Facebook Page</a>
                                    <br>
                                    <span class="text_7n" style="color: #b2bb1e">TWITTER : </span>
                                    <a href="#" class="col_defaultText">@GlobalGiving</a>

                                </div>

                            </div>
                            <div class="col-lg-4">
                                <a href="#"><img class="img-cover" src="{{asset($project->Organization->thumbnail)}}">
                                </a>
                            </div>
                            <div class="box_bottomPadded3 col-lg-8">Questions about this project?
                                <a href="{{url("/contact")}}"><span
                                        style="color: #457389; font-weight: 700">Contact us</span></a>
                            </div>
                        </div>

                        <!--================Comment Area =================-->
                    </div>
                </div>

                <div class="col-lg-5">
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
                            <div
                                class="col_white box_horizontalPadded4 box_verticalPadded2 box_bottomMargin2 triangle-parent">
                                <span class="text_7n" style="font-size: 1.9em;">${{$project->raised}}</span>
                                <span class="text_4n">raised of</span>
                                <span>${{$project->goal}}</span>
                                <br>

                                <div class="thermometer box_topMargin1">
                                    <div class="thermometer-percentRaised" style="width: {{$project->raised / $project->goal * 100}}%;"></div>
                                </div>
                            </div>
                            <div class="triangle triangle_bottom triangle_white"></div>
                            <div class="form-donate" style="margin-top: 30px;">
                                @if(Auth::check())
                                <a href="{{url("project/detail/{$project->id}/register")}}" type="button"
                                   class=" btn-lg btn-block"
                                   style="background-color: #de7c1b;color: #fff;font-size:15px;">
                                    DONATE NOW</a>
                                @else
                                Please login before you can donate.
                                @endif
                            </div>


                            {{--                            <h5>Categories</h5>--}}
                            {{--                            <ul>--}}
                            {{--                                <li><a href="#">Courses</a></li>--}}
                            {{--                                <li><a href="#">Education</a></li>--}}
                            {{--                                <li><a href="#">Teachers</a></li>--}}
                            {{--                                <li><a href="#">Uncategorized</a></li>--}}
                            {{--                            </ul>--}}
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-1.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Courses for you</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-2.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>A great way to start</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-3.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Courses for you</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-4.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Start your training</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact us! Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Contact us!</h5>
                            <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <form action="#" method="post">
                                    <input type="text" class="form-control" id="name" style="margin-bottom: 20px;"
                                           placeholder="Name" required>
                                    <input type="email" class="form-control" id="email" style="margin-bottom: 20px;"
                                           placeholder="E-mail" required>
                                    {{--                                    <input type="number" class="form-control" id="phone" placeholder="Phone" required>--}}
                                    <textarea name="message" class="form-control" id="message" rows="4"
                                              placeholder="Message" required></textarea>
                                    <button class="btn academy-btn mt-30" type="submit">Send</button>
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
    </section>

    <!--================Blog Area =================-->



@endsection
