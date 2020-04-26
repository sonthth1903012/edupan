@extends('layout')

@section('title',"Contact")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <div class="map-area wow fadeInUp" data-wow-delay="300ms">
            <div class="map container" style = "padding: 80px 50px 300px 0px" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0951822985844!2d105.77955771424534!3d21.02887719315175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1586629471851!5m2!1svi!2s" width="1140" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <h3>Contact Us</h3>
                                        <p class="mt-30">Education is a human right. We are a
                                            nonprofit because we believe in a free, world-class
                                            education for anyone, anywhere. Instead of ads or
                                            subscriptions, we are supported by individual contributions
                                            from people like you. Please join us today.</p>
                                    </div>

                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>4127/ 5B-C Mislane Road,<br> Gibraltar, UK</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>office@yourbusiness.com</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form action="#" method="post">
                                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail" required>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                        <button class="btn academy-btn mt-30" type="submit">Contact Us</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

@endsection
