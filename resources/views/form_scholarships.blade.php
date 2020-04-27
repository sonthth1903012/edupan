@extends('layout')

@section('title',"Scholarships")

@section('content')

    <div class="region region-content" style=" min-height: 150px;">
        <h1 class="page-header" style="color: #69bc5f; text-align: center;margin-top: 100px;">
            <span>Deloitte - One Young World Scholarship 2020</span>
        </h1>
    </div>

    <div class="content">
        <div class="container">

            <form class="contact100-form validate-form" method="post" action="">

                <span style="font-size: 18px; color: #333333;font-family: Raleway-Black;">
                    * Indicates required field
                </span>

                <h2 class="contact100-form-title">YOUR PERSONAL INFORMATION</h2>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">* First Name </span>
                    <input class="input100" type="text" name="first_name" placeholder="Enter your name">
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
                    <span class="label-input100">* City/Town</span>
                    <input class="input100" type="text" name="city_town" placeholder="City/Town">
                </div>
                <div class="wrap-input100">
                    <span class="label-input100">* US State/Province</span>
                    <input class="input100" type="text" name="province" placeholder="US State/Province">
                </div>
                <div class="wrap-input100">
                    <span class="label-input100">* ZIP/POSTAL CODE</span>
                    <input class="input100" type="text" name="province" placeholder="US State/Province">
                </div>



                <div class="wrap-contact100">
                <h2 class="contact100-form-title">APPLICATION QUESTIONS</h2>

                <div class="wrap-input100">
                    <span class="label-input100">* ORGANISATION</span>
                    <input class="input100" type="text" name="organisation" placeholder="Organisation">
                </div>
                <div class="wrap-input100">
                    <span class="label-input100">* POSITION AT ORGANISATION</span>
                    <input class="input100" type="text" name="position_at_organisation" maxlength ="255"placeholder="Position at Organisation">
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <span class="label-input100">
                        * SHORT BIOGRAPHY: PLEASE PROVIDE A SHORT DESCRIPTION OF YOURSELF, INCLUDING YOUR CURRENT ROLE, ACHIEVEMENTS AND ASPIRATIONS
                    </span>
                    <p class="note_content">200 word(s) remaining</p>
                    <textarea class="input100" name="short_biography_please_provide_a_short_description_of_yourself_i" placeholder="Your content here..."></textarea>

                </div>

                <div class="wrap-input100 validate-input" data-validate = "Content is required">
                    <span class="label-input100">* WHAT ISSUES ARE YOU MOST PASSIONATE ABOUT AND ENGAGED WITH AND WHY?</span>
                    <p class="note_content">200 word(s) remaining</p>
                    <textarea class="input100" name="passions" placeholder="Your content here..."></textarea>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Content is required">
                    <span class="label-input100">*HOW HAVE YOU DEMONSTRATED LEADERSHIP IN HELPING TO CREATE POSITIVE
                        CHANGE IN YOUR COMMUNITY, COUNTRY OR ORGANISATION?</span>
                    <p class="note_content">350 word(s) remaining</p>
                    <textarea class="input100" name="impact" placeholder="Your content here..."></textarea>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Content is required">
                    <span class="label-input100">* WHAT HAS BEEN THE IMPACT OF YOUR WORK TO-DATE? IF POSSIBLE, PLEASE GIVE
                        AN ESTIMATE OF THE NUMBER OF PEOPLE YOU HAVE REACHED WITH YOUR ACTIONS TO CREATE POSITIVE CHANGE AND EXPLAIN HOW</span>
                    <p class="note_content">350 word(s) remaining</p>
                    <textarea class="input100" name="impact_to_date" placeholder="Your content here..."></textarea>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Content is required">
                    <span class="label-input100">* WHY DO YOU WISH TO ATTEND THE ONE YOUNG WORLD SUMMIT 2020, SPECIFICALLY
                        THROUGH THE DELOITTE – ONE YOUNG WORLD SCHOLARSHIP? HOW DO YOU THINK THE EXPERIENCE WILL HELP TO ADVANCE YOUR WORK? </span>
                    <p class="note_content">350 word(s) remaining</p>
                    <textarea class="input100" name="why_attend_oyw" placeholder="Your content here..."></textarea>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Content is required">
                    <span class="label-input100">* PLEASE PROVIDE ANY LINKS TO WEBSITES, BLOGS OR SOCIAL MEDIA ACCOUNTS
                        THAT YOU BELIEVE ARE RELEVANT TO YOUR APPLICATION. IF YOU HAVE RECEIVED ANY AWARDS, PLEASE PROVIDE THE LINKS TO THOSE BELOW</span>
                    <textarea class="input100" name="impact_to_date" placeholder="Your content here..."></textarea>
                </div>


                <span style="font-size: 18px; color: #333333;font-family: Raleway-Black;">
                  * How did you hear about this scholarship?
                </span>
                <div class="pm-item">
                    <input type="checkbox" value="cod" name="payment_method" id="one">
                    <label for="two">ONE YOUNG WORLD LINKEDIN</label>
                </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="two">
                        <label for="two">ONE YOUNG WORLD FACEBOOK</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="three">
                        <label for="three">ONE YOUNG WORLD TWITTER</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="four">
                        <label for="four">ONE YOUNG WORLD INSTAGRAM</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="five">
                        <label for="five">OTHER SOCIAL MEDIA</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="six">
                        <label for="six">VIA MY EMPLOYER</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="seven">
                        <label for="seven">VIA A FRIEND</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="eight">
                        <label for="eight">VIA A ONE YOUNG WORLD AMBASSADOR</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="nine">
                        <label for="nine">I WAS NOMINATED</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="payment_method" id="ten">
                        <label for="ten">OTHER…</label>
                    </div>

                </div>

                <div class="wrap-contact100">
                    <h2 class="contact100-form-title">ADDITIONAL INFORMATION</h2>
                    <span class="label-input100">*I ACCEPT THAT THE DATA I PROVIDE IS USED ACCORDING TO ONE YOUNG WORLD'S PRIVACY POLICY</span>
                    <p class="note_content">Please read One Young World Privacy Policy</p>
                    <select name="category_id" class="form-control " style="margin-bottom: 20px;" required>
                        <option selected value="">Select</option>
                        <option selected value="">Yes</option>
                        <option selected value="">No</option>
                    </select>

                    <span style="font-size: 18px; color: #333333;font-family: Raleway-Black;">
                  * HOW WOULD YOU LIKE TO BE CONTACTED BY ONE YOUNG WORLD?
                </span>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="contacted_how[Email]" id="email">
                        <label for="two">EMAIL</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="contacted_how[Telephone]" id="telephone">
                        <label for="TELEPHONE">TELEPHONE</label>
                    </div>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="contacted_how[I do not wish to be contacted]" id="contact">
                        <label for="two">I DO NOT WISH TO BE CONTACTED</label>
                    </div>
                </div>


                <div class="wrap-contact100">
                    <h2 class="contact100-form-title">MAILING LIST</h2>
                    <div class="pm-item">
                        <input type="checkbox" value="cod" name="contacted_how[I do not wish to be contacted]" id="contact">
                        <label for="two">PLEASE SUBSCRIBE ME TO YOUR MAILING LIST.</label>
                    </div>
                </div>


                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    @endsection
