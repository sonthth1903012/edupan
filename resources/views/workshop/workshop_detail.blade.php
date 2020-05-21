@extends('layout')

@section('title',"Post Detail")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg); padding-bottom:120px">
        <div class="bradcumbContent">
            <h2>WORKSHOP</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120" style="padding-top:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <h2>{{$w->Post->title}}</h2>
                        <div class="row py-4">
                            <p class="ml-3">{{$w->Post->shortDesc}}</p>
                            <div class="col-4">
                                <img class="img-fluid" src={{$w->Post->thumbnail}} alt="">
                            </div>
                            <div class="col-8">
                                <p>Location : {{$w->location}}</p>
                                <p>Time: {{$w->time}}</p>
                                <p>Attendees: {{$w->attendees}}/{{$w->capacity}}</p>
                                <p>Fee: {{$w->fee}}.000</p>
                                <a href="" class="btn academy-btn btn-sm">Đăng ký vé</a>
                            </div>
                        </div>
                        <p>{{$w->Post->content}}</p>
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

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                            @foreach($ow as $ow)
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src={{$ow->Post->thumbnail}} alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="{{url("/workshop_detail",['id'=>$ow->id])}}" class="post-title">
                                        <h6>{{$ow->Post->title}}</h6>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>

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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection
