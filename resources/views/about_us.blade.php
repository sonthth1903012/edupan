@extends('layout')

@section('title',"About")

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image:url({{asset("img/bg-img/breadcumb.jpg")}});">
        <div class="bradcumbContent">
            <h2>About Us</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>We are the Academy</h3>
                    </div>
                </div>
            </div>
                        <div class="row" style="padding-bottom: 20px">
                            <div class="col-12 col-md-12 wow fadeInUp" data-wow-delay="400ms" style="font-size: 15pt">
                                <p>What started as one man tutoring his cousin has grown
                                    into a more than 150-person organization. We’re a diverse
                                    team that has come together to work on an audacious mission:
                                    to help and provide a free world-class education for anyone,
                                    anywhere. We are developers, teachers, designers, strategists,
                                    scientists, and content specialists who passionately believe
                                    in inspiring the world to learn.
                                    A few great people can make a big difference.</p>
                            </div>
                        </div>
            <div class="row">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p>You’re joining a global education. Millions of
                        members from all over the world, each with their
                        own unique story, working at their own pace on The
                        Academy every single hour. Our resources are being
                        gathered in more than 22 countries including Spanin,
                        France, Brazil, USA, Vietnam and so on.</p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>Anyone can learn anything. For free.
                        Education is a human right. We are a
                        nonprofit because we believe in a free,
                        world-class education for anyone, anywhere.
                        Instead of ads or subscriptions, we are supported
                        by individual contributions from people like you.
                        Please join us today.</p>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/bg-img/bg-3.jpg" alt="">
                        <img src="img/bg-img/bg-2.jpg" alt="">
                        <img src="img/bg-img/bg-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <section class="teachers-area" style="padding-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>We create the whole new education system</h3>
                    </div>
                </div>
            </div>
            <div class="row section-padding-0-100">
            <div class="row">
                <div class="col-12 col-md-12 wow fadeInUp" data-wow-delay="400ms" style="font-size: 15pt">
                    <p>Today, we have already located in 34 nations includes: USA, Finland,
                        Turky, Vietnam, India, Thailand and so on. We are creating and widening the
                        network and information system to every country, everywhere in order to help everybody
                        to connect and working as easy as possible. We have also tried to help very local
                        people and their children to get to school and learn for the further future. We have
                        adopted many support form governments and people form all around the world - special thanks to
                        Bill and Melina Gate inc., Mr.Donald Trump, Mr.Jeff Bezos and Mr Elon Musk for send so much
                        facilities and money for our campaigns.
                    </p>
                </div>
            </div>
        </div>
            <div class="row">
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/mr_bezos.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5>Mr.Zeff Bezos</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/mr_trump.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5>Mr.Donald Trump</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/mr_gate.png" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5>Mr.Bill Gate</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/mr_musk.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5>Mr.Elon Musk</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h3>You can donate us
                            <a href="{{asset('/donate')}}" style="text-decoration: underline;
                            color:white; font-size: 24pt; font-weight:bold">here</a>
                            or contact us
                            <a href="{{asset('/contact')}}" style="text-decoration: underline;
                            color:white; font-size: 24pt; font-weight:bold">here!</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->



@endsection
