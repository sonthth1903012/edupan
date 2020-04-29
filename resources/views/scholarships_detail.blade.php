@extends('layout')

@section('title',"Scholarships_detail")

@section('content')

    <div class="region region-content" style=" min-height: 150px;">
        <h1 class="page-header" style="color: #69bc5f; text-align: center;margin-top: 100px;">
            <span>Deloitte - One Young World Scholarship 2020</span>
        </h1>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">

                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <h4 style="color: #83c331;margin-top: 70px; ">Impacting 50 million lives by 2030 </h4>
                        <h4 style="margin-bottom: 90px;"> What impact wil you make?</h4>
{{--                        <h5>Deloitte One Young World Scholarships </h5>--}}
                    </div>
                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <img src="{{asset("img/scholarships/2.2.-web-fb-960.jpg")}}" alt="">
                    </div>


                <div class="oyw-layouts">
                    <p class="oyw-layouts-content">
                        Education is the cornerstone of sustainable development yet there are currently 1.8 billion
                        young people (aged 10-24) worldwide and over half of this population will not have the skills
                        necessary to participate in the emerging global workforce. The United Nations’ Sustainable
                        Development Goals (SDGs) clearly recognize that this gap must be closed, as the international
                        community more explicitly addresses the challenges of quality and equity in education.

                    </p>
                    <p class="oyw-layouts-content">
                        As countries around the world are dealing with some of the most unprecedented challenges of our
                        time, including a global health pandemic and climate change, continued access to new ways of
                        learning, and developing future-proof skills, will be critical to ensure the world is prepared
                        to address the complex issues of today, and in the future.
                    </p>
                    <p class="oyw-layouts-content">
                        At Deloitte, we are collaborating with stakeholders across business, government and civil
                        society to prepare 50 million lives for a world of opportunity by 2030. We are applying our
                        core skills, experience, and global reach to make an impact through education, skills development,
                        and access to opportunity, in line with SDG 4 – Quality Education and SDG 8 – Decent Work & Economic Growth.
                    </p>
                    <p class="oyw-layouts-content">
                        At Deloitte, we are collaborating with stakeholders across business, government and civil society
                        to prepare 50 million lives for a world of opportunity by 2030. We are applying our core skills,
                        experience, and global reach to make an impact through education, skills development, and access
                        to opportunity, in line with SDG 4 – Quality Education and SDG 8 – Decent Work & Economic Growth.
                    </p>
                </div>
                <div class="oyw-layouts">
                    <h2 class="block-title">WHO SHOULD APPLY?</h2>
                    <p class="oyw-layouts-content">
                        This scholarship is intended for young leaders focussed on improving the education, skills,
                        and access to opportunity for people in their communities, countries, or world at large.
                        The scholarship is seeking candidates who have demonstrated commitment to:
                    </p>
                    <ul>
                        <li class="oyw-layouts-content">
                            Improving access to education, skills, or employment opportunities for those that may be
                            left behind by the rapidly changing global economy
                        </li>
                        <li class="oyw-layouts-content">
                            Creating skills development or lifelong learning opportunities for people to prepare for
                            the future workforce, including in areas where there are talent shortages.
                        </li>
                        <li class="oyw-layouts-content">
                            Creating skills development or lifelong learning opportunities for people to prepare for the
                            future workforce, including in areas where there are talent shortages.
                        </li>
                    </ul>
                </div>

                <div class="oyw-layouts">
                    <h2 class="block-title">WHAT DOES THE SCHOLARSHIP PROVIDE?</h2>
                    <ul>
                        <li class="oyw-layouts-content">Access to the One Young World Summit 2020 in Munich; </li>
                        <li class="oyw-layouts-content">
                            Hotel accommodation in a private room between 13 and 17 (inclusive) October, 2020;
                        </li>
                        <li class="oyw-layouts-content">
                            The cost of travel to and from Munich (economy class);
                        </li>
                        <li class="oyw-layouts-content">Catering which includes breakfast, lunch, and dinner (provided by the hotel and during the Summit); </li>
                        <li class="oyw-layouts-content">Ground transportation between Summit venues</li>
                        <li class="oyw-layouts-content">
                            Participation in Deloitte-hosted sessions for their delegation in the lead-up to and during the Summit, and a Deloitte “buddy.”
                        </li>

                    </ul>
                </div>
                <div class="oyw-layouts">
                    <h2 class="block-title">ASSESSMENT CRITERIA</h2>
                    <p class="oyw-layouts-content">
                        One Young World will assess candidates based on their:
                    </p>
                    <ul>
                        <li class="oyw-layouts-content">Evidenced commitment to delivering positive change</li>
                        <li class="oyw-layouts-content"> Demonstrated capacity for leadership  </li>
                        <li class="oyw-layouts-content">  Understanding of key local and/or global issues</li>
                        <li class="oyw-layouts-content">
                            Track record of generating impactful and innovative solutions to address education and skills challenges
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="region region-content" style=" min-height: 150px;">
        <h1 class="page-header" style="color: #69bc5f; text-align: center;margin-top: 60px;">
            <span>APPLICATION DEADLINE: 22 MAY</span>
        </h1>
        <p class="editor-button-blue" style="margin-top: 70px;">
            <a href="{{url("/form_scholarships")}}"><span style="font-size: 20px; ">Aplly here</span></a>
        </p>
        <p class="container" style="font-style: italic; font-size: 16px; font-weight: 100;padding-bottom: 100px;">

            Deloitte refers to one or more of Deloitte Touche Tohmatsu Limited (“DTTL”), its global network of member
            firms, and their related entities. DTTL (also referred to as “Deloitte Global”) and each of its member firms
            are legally separate and independent entities. DTTL does not provide services to clients.
            Please see <a href="#" style="color: #69bc5f;">www.deloitte.com/about</a> to learn more.
        </p>
    </div>

    @endsection
