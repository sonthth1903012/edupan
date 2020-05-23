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

            <form class="contact100-form validate-form" method="post" action="{{url("/project/detail/{$project->id}/register")}}" enctype="multipart/form-data">
                @csrf
                <span style="font-size: 18px; color: #333333;font-family: Raleway-Black;">
                    * Indicates required field
                </span>

                <h2 class="contact100-form-title">YOUR PERSONAL INFORMATION</h2>

                <div class="wrap-input100">
                    <span class="label-input100">* Amount</span>
                    <input class="input100" type="number" name="amount" placeholder="Amount">
                </div>
                <div class="wrap-input100">
                    <span class="label-input100">* Method</span>
                    <div class="form-group pt-2">
                        <label class="d-inline">
                            <input type="radio" name="method" value="VISA" checked> VISA
                        </label>
                        <label class="d-inline">
                            <input type="radio" name="method" value="MASTERCARD"> MASTERCARD
                        </label>
                        <label class="d-inline">
                            <input type="radio" name="method" value="Paypal"> Paypal
                        </label>
                    </div>

                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button type="submit" class="contact100-form-btn">
                            Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
