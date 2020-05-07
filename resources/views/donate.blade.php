@extends('layout')

@section('title',"Donate")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset("img/bg-img/breadcumb.jpg")}});">
        <div class="bradcumbContent">
            <h2>Donate</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="teachers-area" style="padding-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>We are trying to bring education everywhere!</h3>
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
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Send any help to us here!</h3>
                    </div>
                </div>
            </div>
            <!-- ##### Google Maps ##### -->
            <div class="map-area wow fadeInUp" data-wow-delay="300ms">
                <div class="map container" style = "padding: 0 50px 100px 0px" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0951822985844!2d105.77955771424534!3d21.02887719315175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1586629471851!5m2!1svi!2s" width="1140" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Our great patron!</h3>
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
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>Be our patron now! Help us bring education everwhere!</h3>
                        <a href="{{url('/donate_form')}}" class="btn academy-btn">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->



{{--    <!-- ##### Contact Area Start ##### -->--}}
{{--    <section class="contact-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="contact-content">--}}
{{--                        <div class="row">--}}
{{--                            <!-- Contact Form Area -->--}}
{{--                            <div class="col-12 col-lg-10" style="padding-left: 200px">--}}
{{--                                <h3 class="text-center" style=" padding-bottom: 20px; font-size: 24pt">Fill in this form to make your donation!</h3>--}}
{{--                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">--}}
{{--                                    <form method="post" action="{{url('/sendemail')}}">--}}
{{--                                        @csrf--}}
{{--                                        <a>Name: <span style="color:red;">*</span></a>--}}
{{--                                        <input type="text" class="form-control" id="name" placeholder="" required>--}}
{{--                                        <a>Email: <span style="color:red;">*</span></a>--}}
{{--                                        <input type="email" class="form-control" id="email" placeholder="" required>--}}
{{--                                        <a>Phone: <span style="color:red;">*</span></a>--}}
{{--                                        <input type="tel" class="form-control" id="email" placeholder="" required>--}}
{{--                                        <a>Email: <span style="color:red;">*</span></a>--}}
{{--                                        <input type="text" class="form-control" id="email" placeholder="" required>--}}
{{--                                        <a>Message:</a>--}}
{{--                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder=""></textarea>--}}
{{--                                        <button class="btn academy-btn mt-30" type="submit">Send</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- ##### Contact Area End ##### -->--}}
@endsection
