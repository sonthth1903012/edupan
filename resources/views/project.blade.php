@extends('layout')

@section('title',"Donate")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6)),
        url({{asset("img/scholarships/hero_give_lg.jpg")}});height: 60vh;background-position: center;background-size: cover;
        margin-bottom: 100px;justify-content: center;margin: 2em 0; ">
        <div class="bradcumbContent">
            <h2>Donate</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">
                            @if($allProjects->count())
                            <!-- Single Blog Start -->
                            @foreach($allProjects as $project)
                                <div class="col-12">
                                    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                        <!-- Post Thumb -->
                                        <div class="blog-post-thumb mb-50">
                                            <img src="{{asset($project->thumbnail)}}" alt="">
                                        </div>
                                        <!-- Post Title -->
                                        <a href="#" class="post-title">{{$project->project_name}}</a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p>By <a href="">{{$project->Organization->organization_name}}</a> | <a href="#">{{$project->due_date}}</a></p>
                                        </div>
                                        <!-- Post Excerpt -->
                                        <p>{{str_limit($project->content),125}}</p>
                                        <p>{{$project->Users->count()}} users donated.</p>
                                        <p><b>${{$project->raised}}</b> raised of ${{$project->goal}}</p>
                                        <!-- Read More btn -->
                                        <a href="{{url("project/detail/{$project->id}")}}" class="btn academy-btn btn-sm mt-15">Read More</a>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                No projects found.
                            @endif

                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
{{--                                {!! $news->links() !!}--}}
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
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
    </div>
    <!-- ##### Blog Area End ##### -->
@endsection
