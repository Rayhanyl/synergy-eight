@extends('app')
@section('content')
    <div class="training">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" >
                    <p class="text-title-training">Start Your IT Career Today</p>
                    <p class="text-desc-training">In-depth training can help prepare you for a profession in a sector
                        requiring
                        highly specialized abilities, such as information technology. Pursuing IT training could help you
                        improve your skills and start a career in networking, tech support, security, or database management
                    </p>
                </div>
                <div class="col-12 col-lg-6 text-end">
                    <img style="width: 70%;" src="{{ asset('assets/img/logo-training-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="exploring">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <p class="text-title-exploring">Exploring the Advantages of IT Training</p>
                </div>
                <div class="col-12">
                    <div class="row g-5 d-flex justify-content-center">
                        <div class="col-4 text-center">
                            <img style="width: 50px;height:50px;" src="{{ asset('assets/img/icon-training-1.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight:600;">Career Preparation</p>
                            <p>IT training helps you transition into a hands-on, tech-based job that suits your skills.</p>
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 45px;height:45px;" src="{{ asset('assets/img/icon-training-2.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">Unlimited Opportunities</p>
                            <p>Qualify for entry-level tech positions and explore work in fields that interest you.</p>
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 45px;height:45px;" src="{{ asset('assets/img/icon-training-3.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">Stay Current</p>
                            <p>Learn advanced concepts and keep up with the latest industry trends with relevant skills.</p>
                        </div>
                        <div class="col-1">
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 40px;height:40px;" src="{{ asset('assets/img/icon-training-4.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">Hands-on Experience</p>
                            <p>Get practical, real-world experience beyond just reading manuals and guides.</p>
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 40px;height:40px;" src="{{ asset('assets/img/icon-training-5.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">In-Demand Skills</p>
                            <p>Acquire sought-after IT skills, making you a valuable asset in any field.</p>
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="upgrade">
        <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    <p class="text-title-upgrade">Upgrade Your IT Skills with Various Training Options</p>
                </div>
                <div class="col-12">
                    <p class="text-desc-upgrade">Elevate your IT skills with a range of dynamic training options tailored to
                        your needs. Each format
                        is designed to equip you with the latest knowledge and practical expertise, ensuring you stay ahead
                        in the fast-evolving tech landscape. </p>
                </div>
                <div class="col-12">
                    <div class="row">

                        <div class="col-12 col-lg-3">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="m-0 text-center">
                                    <img style="width:60%;" src="{{ asset('assets/img/logo-training-2.png') }}"
                                        alt="">
                                </div>
                                <div class="btn-custom-upgrade">Online Course</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="m-0 text-center">
                                    <img style="width:60%;" src="{{ asset('assets/img/logo-training-3.png') }}"
                                        alt="">
                                </div>
                                <div class="btn-custom-upgrade">Training Seminars</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="m-0 text-center">
                                    <img style="width:60%;" src="{{ asset('assets/img/logo-training-4.png') }}"
                                        alt="">
                                </div>
                                <div class="btn-custom-upgrade">Bootcamp</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="m-0 text-center">
                                    <img style="width:60%;" src="{{ asset('assets/img/logo-training-5.png') }}"
                                        alt="">
                                </div>
                                <div class="btn-custom-upgrade">Community</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
