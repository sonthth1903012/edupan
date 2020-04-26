@extends('layout')

@section('title',"Donate")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Donate</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area" style="padding-top: 300px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <h3>Donate us</h3>
                                        <p class="mt-30"></p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>8 Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội</p>
                                    </div>

                                    <div class="single-contact-info d-flex">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0
                                        951822985844!2d105.77955771424534!3d21.02887719315175!2m3!1f0!2f0!3f0!3m2
                                        !1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2z
                                        OCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4
                                        buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1586629471851!5m2!1svi!2s"
                                                width="1140" height="500" frameborder="0" style="border:0;" allowfullscr
                                                een="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>

                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form method="post" action="{{url('/sendemail')}}">
                                        @csrf
                                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail" required>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                        <button class="btn academy-btn mt-30" type="submit">Send</button>
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
