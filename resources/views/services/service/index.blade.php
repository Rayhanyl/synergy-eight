@extends('app')
@section('content')
    <div class="professional">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="2000">
                    <div>
                        <p class="text-title-professional">Professional Service</p>
                    </div>
                    <div>
                        <p style="text-align:left;">Contracting with outside service providers to deliver applications,
                            infrastructure solutions, and
                            business processes supported by IT to meet organizational goals.</p>
                    </div>
                    <div class="d-flex mt-2">
                        <div class="py-2 pe-4 text-left">
                            <img style="width:30px;height:30px;" src="{{ asset('assets/img/icon-traced-1.png') }}"
                                alt="">
                            <p class="my-3">Sourcing <br>Tactics</p>
                        </div>
                        <div class="py-2 px-4 text-left">
                            <img style="width:30px;height:30px;" src="{{ asset('assets/img/icon-traced-2.png') }}"
                                alt="">
                            <p class="my-3">Supplier <br>Selection</p>
                        </div>
                        <div class="py-2 px-4 text-left">
                            <img style="width:30px;height:30px;" src="{{ asset('assets/img/icon-traced-3.png') }}"
                                alt="">
                            <p class="my-3">Contract <br>Design</p>
                        </div>
                        <div class="py-2 ps-4 text-left">
                            <img style="width:30px;height:30px;" src="{{ asset('assets/img/icon-traced-4.png') }}"
                                alt="">
                            <p class="my-3">Governance <br>for Partnerships</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-end" data-aos="fade-left" data-aos-duration="2000">
                    <img style="width: 85%;" src="{{ asset('assets/img/logo-service-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="outsourcing">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5" data-aos="fade-right" data-aos-duration="2000">
                    <img style="width: 83%;" src="{{ asset('assets/img/logo-service-2.png') }}" alt="">
                </div>
                <div class="col-12 col-lg-7 pt-5">
                    <div class="row g-3">
                        <div class="col-12" data-aos="fade-down" data-aos-duration="2000">
                            <div class="custom-hr"></div>
                        </div>
                        <div class="col-12" data-aos="fade-down" data-aos-duration="2000">
                            <p class="text-title-outsourcing">How is
                                <span style="font-weight:600;">IT Outsourcing</span> Different from Other
                                Types of Outsourcing?
                            </p>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="2000">
                            <p style="text-align:justify;line-height: 35px">
                                IT outsourcing involves contracting third-party contractors for technology-related services
                                like software development, network management, and technical support. Unlike business
                                process or manufacturing outsourcing, it focuses on technology-driven tasks in order to
                                increase productivity, lower costs, and provide access to specialized expertise.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="adventages">
        <div class="container">
            <div class="row g-4">
                <div class="col-12" data-aos="fade-down" data-aos-duration="2000">
                    <p class="text-title-adventages">Exploring the Advantages of IT Outsourcing</p>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="row g-5 d-flex justify-content-center">
                        <div class="col-4 text-center">
                            <img style="width: 50px;height:50px;" src="{{ asset('assets/img/icon-service-1.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight:600;">Cost Reduction</p>
                            <p>Lowers the capital required for long-term staffing and IT
                                infrastructure, resulting in
                                cost
                                savings</p>
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 45px;height:45px;" src="{{ asset('assets/img/icon-service-2.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">Scaling Staf</p>
                            <p>Allows flexible addition or removal of IT specialists, saving time and money on hiring
                                and
                                training.</p>
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 45px;height:45px;" src="{{ asset('assets/img/icon-service-3.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">Improved Focus</p>
                            <p>Allows on-site staff to focus on their specializations and high-priority tasks, boosting
                                overall productivity</p>
                        </div>
                        <div class="col-1">
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 35px;height:37px;" src="{{ asset('assets/img/icon-service-4.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">Improved Security</p>
                            <p>Access to additional security services, enhances cyber security, and reduces potential
                                attacks.</p>
                        </div>
                        <div class="col-4 text-center">
                            <img style="width: 40px;height:40px;" src="{{ asset('assets/img/icon-service-5.png') }}"
                                alt="">
                            <p class="my-2" style="font-weight: 600">Essential Functions</p>
                            <p>Enables firms to integrate essential services like data storage and security by passing
                                capital constraints.</p>
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
