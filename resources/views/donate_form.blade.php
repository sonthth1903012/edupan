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

        <!-- ##### Contact Area Start ##### -->
        <section class="contact-area" style="padding-top: 300px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-content">
                            <div class="row">
                                <!-- Contact Form Area -->
                                <div class="col-12 col-lg-12">
                                    <h3 class="text-center" style="padding-bottom: 20px; font-size: 24pt">Fill in this form to make your donation!</h3>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                        <form method="post" action="{{url('/sendemail')}}">
                                            @csrf
                                            <a>Select your reward:<span style="color:red;">*</span></a>
                                            <br/>
                                            <br/>
                                            <input type="checkbox" id="value1" name="value1" value="100">
                                            <label for="value1"> 100$</label><br>
                                            <br/>
                                            <input type="checkbox" id="value1" name="value1" value="1000">
                                            <label for="value1"> 1000$</label><br>
                                            <br/>
                                            <input type="checkbox" id="value1" name="value1" value="10000">
                                            <label for="value1"> 10000$</label><br>
                                            <br/>
                                            <a>Other number:</a>
                                            <br/>
                                            <br/>
                                            <input type="text" class="form-control" id="name" placeholder="" required>
                                            <br/>
                                            <a>Select your payment:<span style="color:red;">*</span></a>
                                            <br/>
                                            <br/>
                                            <img style="padding: 10px 25px 0 0" src="{{asset("img/clients-img/pay1.png")}}">
                                            <img style="padding-top:10px;"  src="{{asset("img/clients-img/pay2.png")}}">
                                            <img style="padding: 10px 25px 0 0" src="{{asset("img/clients-img/pay3.png")}}">
                                            <img style="padding-top:10px;"  src="{{asset("img/clients-img/pay4.png")}}">
                                            <br/>
                                            <br/>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                        <form method="post" action="{{url('/sendemail')}}">
                                            @csrf
                                            <a>Name: <span style="color:red;">*</span></a>
                                            <input type="text" class="form-control" id="name" placeholder="" required>
                                            <a>Email: <span style="color:red;">*</span></a>
                                            <input type="email" class="form-control" id="email" placeholder="" required>
                                            <a>Phone: <span style="color:red;">*</span></a>
                                            <input type="tel" class="form-control" id="email" placeholder="" required>
                                            <a>Message:</a>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder=""></textarea>
                                            <div class="text-center" style="float:right; padding-top: 50px">
                                                <button class="btn academy-btn mt-30" type="submit">Send</button>
                                            </div>
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
