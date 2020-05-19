@extends('layout')

@section('title',"Scholarships_detail")

@section('content')

    <div class="region region-content" style=" min-height: 150px;">
        <div class="container">

            <h1 class="page-header" style="color:#464646; text-align: center;margin-top: 100px;">
                <span>{{$scholarship->name}}</span>
            </h1>
            <span style="color: #707070; font-size: 20px;font-family: Open Sans,sans-serif,arial; ">{{$scholarship->School->school_name}}</span>

            <div class="ad_img_cont cons " style="border-bottom: 1px solid #E4E4E4;border-top: 1px solid #E4E4E4;">
                <div class="ad_rht_cont" style="padding: 18px 0 10px; width: 65%;"; >
                    <div class="ad_auth_sec" style=" display: flex;">

                        <div class="tm_dtl ad_mbtm1">
                            <i class="fa fa-clock-o"></i>
                            <time datetime="2020-05-6"> {{$scholarship->duedate}}</time>
                        </div>
                        <div class="tm_dtl vw">
                            <i class="fa fa-eye"></i>
                            <span class="caps">24K</span>
                        </div>
                        <div class="art_solk sv_but com_lgt" style="color: #006699;">
                            <a href="#" id="shrtId" class="bk_mrk">
                                <span id="shrtSpanId">
                                <i class="fa fa-bookmark-o" ></i>
                                 </span>
                                <span class="sv_ltr">Lưu lại xem sau</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="art_solk st_one soc_fst" style="width: 35%;display: block;">
{{--                    <span>--}}
{{--                        <a class="social_icons fb_icon" title="Facebook" href="javascript:void(0);" onclick="formSocialLink('facebook')"></a>--}}
{{--                        <a href="social_icons tw_icon" title="Twitter"></a>--}}
{{--                    </span>--}}

                </div>
            </div>
        </div>

    </div>



    <!--================Scholarships detail =================-->
    <section class="blog_area single-post-area p_120" style="padding-top:120px">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 posts-list">

                    <div class="single-post row">
                        <div class="col-lg-12" style="padding-bottom:30px">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{asset($scholarship->thumbnail)}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag" style="float: right; padding-top:10px;">
                                    <a href="{{url("/school/detail/{$scholarship->School->id}")}}" style="color:darkgrey; font-weight: 200">{{$scholarship->School->school_name}}</a>
{{--                                    <a class="active" href="#" style="color:darkgrey; font-weight: 200">Technology,</a>--}}
{{--                                    <a href="#" style="color:darkgrey; font-weight: 200">Politics,</a>--}}
{{--                                    <a href="#" style="color:darkgrey; font-weight: 200">Lifestyle</a>--}}


                                </div>
                                <ul class="blog_meta list" style="float: right; padding-top:10px">
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">Nguyen Thi Ninh<i class="fa fa-user" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">Hạn đăng kí: {{$scholarship->duedate}}<i class="fa fa-calendar" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">24K View<i class="fa fa-eye" style="padding-left:14px;color:dimgrey"></i></a></li>
                                    <li><a href="#" style="color:darkgrey; font-weight: 200">06 Comments<i class="fa fa-comment" style="padding-left:14px;color:dimgrey"></i></a></li>
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
                            <h2>{{$scholarship->name}}</h2>
                            <p class="excert" style="font-weight: 500">
                                Ideal scholarships for candidates who have more than 5 years of work experience and aspirations to bring positive impacts on the development of the community.
                            </p>
                            <a href="{{url("/scholarship/all")}}"><p style="color: #61ba6d;">
                                >> 4 programs for short-term scholarships for international students
                                </p></a>
                            <h6 style="font-weight: 400">Tổng quan</h6>
                            <p>
                                {{$scholarship->content}}
                            </p>
                        </div>
                    </div>


                    <div class="region region-content" style=" min-height: 150px;">
                        <h1 class="page-header" style="color: #69bc5f; text-align: center;margin-top: 60px;">
                            <span>APPLICATION DEADLINE: 22 MAY</span>
                        </h1>
                        <p class="editor-button-blue" style="margin-top: 70px;">
                            <a href="{{url("/scholarship/detail/{$scholarship->id}/register")}}"><span style="font-size: 20px; ">Apply here</span></a>
                        </p>
                        <p class="container" style="font-style: italic; font-size: 16px; font-weight: 100;padding-bottom: 100px;">

                            Deloitte refers to one or more of Deloitte Touche Tohmatsu Limited (“DTTL”), its global network of member
                            firms, and their related entities. DTTL (also referred to as “Deloitte Global”) and each of its member firms
                            are legally separate and independent entities. DTTL does not provide services to clients.
                            Please see <a href="#" style="color: #69bc5f;">www.deloitte.com/about</a> to learn more.
                        </p>
                    </div>
                    <!--================Comment Area=================-->
                    <div class="comments-area " style="background-color: #fafaff;    border: 1px solid #eee;
                    padding: 50px 30px; margin-top: 50px; ">
                        <h4>Comment( 05)</h4>
                        <div class="comment-list" style="padding-bottom: 48px;">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb" style="margin-right: 20px;">
                                        <img src="img/blog-img/lb-1.jpg" alt="">
                                    </div>
                                    <div class="desc" style="margin-bottom: 13px; color: #cccccc">
                                        <h5 style="font-size: 16px;"><a href="#">Anner </a></h5>
                                        <p class="date" style="font-size: 13px;">3456789hacjgaifh</p>
                                        <p class="comment">Never say goodbye till the and comes!</p>
                                    </div>
                                </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply text-uppercase">Reply</a>
                                    </div>
                            </div>
                        </div>

                            <div class="comment-list-child left-padding" style="padding-left: 25px;">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb" style="margin-right: 20px;">
                                            <img src="img/blog-img/lb-1.jpg" alt="">
                                        </div>
                                        <div class="desc" style="margin-bottom: 13px; color: #cccccc">
                                            <h5 style="font-size: 16px;"><a href="#">Anner </a></h5>
                                            <p class="date" style="font-size: 13px;">3456789hacjgaifh</p>
                                            <p class="comment">Never say goodbye till the and comes!</p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply text-uppercase">Reply</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="comment-form-area wow fadeInUp" style="margin-top: 48px;">
                        <div class="comment-form">
                            <h4 style="padding-bottom: 30px;">Leave a Reply</h4>
                            <form action="#" method="post">
                                @csrf
                                <div class="form-group form-inline">
                                    <div class="form-group col-lg-6 col-md-6 name">
                                        <input type="text" class="form-control" id=" name" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 email">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message"  class="form-control mb-10" id="" cols="30" rows="5" required></textarea>
                                </div>
                                <a href="#" class="primary-btn submit_btn">Submit</a>
                            </form>
                        </div>
                    </div>

                    <!--================Comment Area =================-->
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
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
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
                                    <input type="text" class="form-control" id="name" style="margin-bottom: 20px;" placeholder="Name" required>
                                    <input type="email" class="form-control" id="email" style="margin-bottom: 20px;" placeholder="E-mail" required>
{{--                                    <input type="number" class="form-control" id="phone" placeholder="Phone" required>--}}
                                    <textarea name="message" class="form-control" id="message"  rows="4" placeholder="Message" required></textarea>
                                    <button class="btn academy-btn mt-30" type="submit">Send </button>
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
