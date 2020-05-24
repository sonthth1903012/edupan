@extends('layout')

@section('title',"congratulations!")

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div style="padding: 0px 0px 100px 0px">
        <div class="breadcumb-area bg-img" style="background-image: url({{asset("img/bg-img/breadcumb.jpg")}});">
            <div class="bradcumbContent" >
                <h2>Congratulations!</h2>
            </div>
        </div>
    </div>

    <!-- ##### Breadcumb Area End ##### -->

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title" style="">
                        <p style="text-align: center; font-size: 20px;">Congratulations on your successful scholarship registration. Please pay attention to your email.</p>
                        <p style="text-align: center; font-size: 20px; padding-bottom: 100px;">
                            Return to the homepage to <a href="{{asset("/")}}">continue</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
