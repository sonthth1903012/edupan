@extends('layout')

@section('title',"Scholarships")

@section('content')

    <div class="region region-content" style=" min-height: 150px;">
        <h1 class="page-header" style="color: #69bc5f; text-align: center;margin-top: 100px;">
{{--            <span>{{$scholarship->name}}</span>--}}
        </h1>
    </div>

    <div class="content">
        <div class="container">

            <form class="contact100-form validate-form" method="post" action="{{url("/scholarship/detail/{$scholarship->id}/register")}}" enctype="multipart/form-data">
                @csrf
                <span style="font-size: 18px; color: #333333;font-family: Raleway-Black;">
                    * Indicates required field
                </span>

                <h2 class="contact100-form-title">YOUR PERSONAL INFORMATION</h2>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">* First Name </span>
                    <input class="input100" type="text" name="student_name" placeholder="Enter your name">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Last name is required">
                    <span class="label-input100">* Last Name</span>
                    <input class="input100" type="text" name="last_name" placeholder="Last Name">
                </div>

                <div class="wrap-input100 " data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">* Enter your email </span>
                    <input class="input100" type="email" name="email" placeholder="Enter your email">
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input">
                    <span class="label-input100">* Date of Birth</span>
                    <input class="input100" data-drupal-selector ="edit-date-of-birth" data-drupal-date-format="Y-m-d"
                           type="date" name="date_of_birth" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input">
                    <span class="label-input100 ">* Phone </span>
                    <span style="font-size: 12px;font-weight: 100">(please include +dialing code , eg+44)</span>
                    <input class="input100" type="number" name="phone" placeholder="Phone">
                </div>
                <div class="wrap-input100">
                    <span class="label-input100">* Address</span>
                    <input class="input100" type="text" name="address" placeholder="Address">
                </div>
                <div class="wrap-input100">
                    <span class="label-input100">* Skill</span>
                    <input class="input100" type="file" name="skill" placeholder="Skill">
                </div>

{{--                <div class="wrap-input100">--}}
{{--                    <span class="label-input100">* City/Town</span>--}}
{{--                    <input class="input100" type="text" name="city_town" placeholder="City/Town">--}}
{{--                </div>--}}
{{--                <div class="wrap-input100">--}}
{{--                    <span class="label-input100">* US State/Province</span>--}}
{{--                    <input class="input100" type="text" name="province" placeholder="US State/Province">--}}
{{--                </div>--}}
{{--                <div class="wrap-input100">--}}
{{--                    <span class="label-input100">* ZIP/POSTAL CODE</span>--}}
{{--                    <input class="input100" type="text" name="province" placeholder="US State/Province">--}}
{{--                </div>--}}

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <a href="{{url("scholarship/congratulations")}}" type="submit" class="contact100-form-btn">
                            Submit
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>

    @endsection
