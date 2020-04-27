@extends('layout')

@section('title',"Scholarships")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset("img/bg-img/breadcumb.jpg")}});">
        <div class="bradcumbContent">
            <h2>Scholarships</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="field field--name-body field--type-text-with-summary field--label-hidden field--item">
                    <p class="lead "></p>
                    <p class="lead ">
                        Edupad Young World strives to identify the most impactful young leaders from every country in the
                        world. Many One Young World delegates are top performing professionals, sent to attend the
                        Summit by forward thinking managers who see the need for talent development. Scholarships provide
                        the opportunity for exceptional young people to attend on the merit of their proven leadership
                        and ability to  create change in their home country.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <div class="academy-courses-area ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
                        <a href="#"><img src="img/scholarships/FAQ.png" alt="">
                        <p style="font-size: 26.25px; text-align: center; color: #00C0F3;">FAQ</p></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
                        <a href="#"><img src="img/scholarships/why_own.png" alt="">
                            <p style="font-size: 26.25px; text-align: center;color: #00C0F3; ">Why OYW?</p></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
                        <a href="#"><img src="img/scholarships/application.png" alt="">
                            <p style="font-size: 26.25px; text-align: center; color: #00C0F3;">Application Tips</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="quote-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6)),
            url({{asset("img/scholarships/48946901063_a9377d6129_o.jpg")}});
            height: 60vh;background-position: center;background-size: cover; margin-bottom: 100px;justify-content: center;margin: 2em 0; ">

            <div class="col-xs-10 col-sm-8 blockquote">
                <div class="lead" style="color: #fff;">
                    <div class="field field--name-field-quote-block-quote field--type-text-long field--label-hidden field--item">
                        Since I won a scholarship to the One Young World Summit, my life has changed. Not only did this
                        opportunity motivate me to continue working on building peace in my country, I also grew as a leader
                        and now have friends all around the world.
                    </div>
                    <h4>
                        <div class="field field--name-field-quote-block-quote field--type-text-long field--label-hidden field--item" style="color: #00C0F3;">
                            2019 Delegate, Supported by the European Commission
                        </div>
                    </h4>
                </div>
            </div>
        </div>

    <div class="panel-display oyw clearfix">
        <div class="container">
            <div class="row">
                <div class="oyw-layouts  oyw-layouts-first col-sm-4" >
                    <table cellpadding=" 1" cellspacing="1" style="width: 100%;">
                        <tbody>
                        <tr>
                            <td><h2 style="font-size: 4em; color: #69bc5f;">440+</h2></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;">scholarship recipients in 2019</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="oyw-layouts  col-sm-4" >
                    <table cellpadding=" 1" cellspacing="1" style="width: 100%;">
                        <tbody>
                        <tr>
                            <td><h2 style="font-size: 4em; color: #69bc5f;">45,000+</h2></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;">applications in 2019</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="oyw-layouts col-sm-4" >
                    <table cellpadding=" 1" cellspacing="1" style="width: 100%;">
                        <tbody>
                        <tr>
                            <td><h2 style="font-size: 4em; color: #69bc5f;">190+</h2></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;">countries represented in 2019</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


        <div class="panel-display oyw clearfix">
            <div class="container">
                <div class="row">
                    <div class="oyw-layouts-header col-xs-12">
                        <h2 style="color: #69bc5f;font-size: 3.5rem; ">Available Scholarships</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="oyw-layouts col-sm-4">
                        <a href="{{url("/scholarships_detail")}}">
                            <img src="{{asset("img/scholarships/2.2.-web-fb-960.jpg")}}" alt="">
                            <h5 style=" padding-top: 15px; ">Deloitte- One Young World Scholarship 2020</h5>
                        </a>
                    </div>
                    <div class="oyw-layouts col-sm-4">
                        <a href="{{url("/scholarships_detail")}}">
                            <img src="{{asset("img/scholarships/du-học.jpg")}}" alt="">
                            <p style="font-size: 16px; padding-top: 15px;">Deloitte- One Young World Scholarship 2020</p>
                        </a>
                    </div>
                    <div class="oyw-layouts col-sm-4">
                        <a href="{{url("/scholarships_detail")}}">
                            <img src="{{asset("img/scholarships/CHD_Korea_University2.jpg")}}" alt="">
                            <p style="font-size: 16px; padding-top: 15px;">Deloitte- One Young World Scholarship 2020</p>
                        </a>
                    </div>
                </div>
                </div>
            </div>

    </div>
    @endsection
