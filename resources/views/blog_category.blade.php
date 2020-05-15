@extends('layout')

@section('title',"Blog")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset("img/bg-img/breadcumb.jpg")}});">
        <div class="bradcumbContent">
            <h2>The News</h2>
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

                            <!-- Single Blog Start -->
                            @forelse($news as $p)
                                <div class="col-12">
                                    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                        <!-- Post Thumb -->
                                        <div class="blog-post-thumb mb-50">
                                            <img src="{{$p->thumbnail}}" alt="">
                                        </div>
                                        <!-- Post Title -->
                                        <a href="#" class="post-title">{{$p->title}}</a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p>By <a href="#">{{$p->author}}</a> | <a href="#">{{$p->created_at}}</a> | <a href="#">3 comments</a></p>
                                        </div>
                                        <!-- Post Excerpt -->
                                        <p>{{$p->shortDesc}}</p>
                                        <!-- Read More btn -->
                                        <a href="{{url("blog/{$p->id}")}}" class="btn academy-btn btn-sm mt-15">Read More</a>
                                    </div>
                                </div>
                            @empty
                                <h2>Not found</h2>
                            @endforelse

                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                {!! $news->links() !!}
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
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
                                    <li><a href="{{url("blog/category/{$c->id}")}}">{{$c->category_name}}</a></li>
                                </ul>
                            @endforeach
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                             @foreach( $link as $l)

                            <!-- Single Latest Blog Post -->
                                <div class="single-latest-blog-post d-flex mb-30" href="{{url("blog/category/{$l->id}")}}">
                                    <div class="latest-blog-post-thumb">
                                        <img href="{{url("blog/{$l->id}")}}" src= {{$l->thumbnail}} alt="">
                                    </div>
                                    <div class="latest-blog-post-content">
                                        <a href="{{url("blog/{$l->id}")}}" class="post-title">
                                            <h6>{{$l->title}}</h6>
                                        </a>
                                        <a href="#" class="post-date">{{$l->created_at}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src={{asset("img/blog-img/add.png")}} alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
@endsection
