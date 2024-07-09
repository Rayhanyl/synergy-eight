@extends('app')
@section('content')
    <div class="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-center">
                        <p class="text-title-about px-1">About</p>
                        <p class="text-title-us px-1">Us</p>
                    </div>
                    <p class="text-center">
                        Sinergi Delapan Mandiri, founded in 2021 in Bandung, West Java, specializes in professional IT
                        services, offering reliable solutions and seamless integration. Their experienced team helps
                        businesses streamline operations and enhance technology capabilities, with IT training programs for
                        programmers to advance their careers.
                    </p>
                    <p class="text-center">
                        Additionally, Sinergi Delapan Mandiri offers APIcentrum, an advanced API management platform that
                        streamlines processes and integrates systems for businesses, government organizations, and
                        individuals. Committed to community engagement and maintaining dignity in all their work, they help
                        clients succeed in today's competitive market. Contact them to learn how they can help your business
                        thrive.
                    </p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="card card-about-bg rounded-4">
                                <div class="card-body text-center">
                                    <p class="text-number-trusted">20+</p>
                                    <p>IT Outsources</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card card-about-bg rounded-4">
                                <div class="card-body text-center">
                                    <p class="text-number-trusted">5+</p>
                                    <p>Applications</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card card-about-bg rounded-4">
                                <div class="card-body text-center">
                                    <p class="text-number-trusted">10+</p>
                                    <p>Industry Fields</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="vision">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-10">
                        <ul class="pt-3 pe-5">
                            <li>
                                <p class="text-about-mission">
                                    Sinergi Delapan Mandiri aspires to be a leading force in the global IT landscape,
                                    recognized for its innovative and impactful solutions that empower businesses,
                                    government, and individuals alike.
                                </p>
                            </li>
                            <li>
                                <p class="text-about-mission">
                                    Driven by a passion for technology and a commitment to excellence.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2">
                        <p class="text-title-vision">VISION</p>
                        <img style="width:55px;height:45px;" src="{{ asset('assets/img/vision.png') }}" alt="vision">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mission">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-2 col-lg-2">
                        <p class="text-title-vision">MISSION</p>
                        <div class="text-end">
                            <img style="width:55px;height:45px;" src="{{ asset('assets/img/mission.png') }}" alt="vision">
                        </div>
                    </div>
                    <div class="col-12 col-md-10 col-lg-10">
                        <ul class="pt-3 ps-5">
                            <li>
                                <p class="text-about-mission">
                                    Develop cutting-edge IT solutions that address real-world challenges, transforming
                                    industries and driving sustainable growth.
                                </p>
                            </li>
                            <li>
                                <p class="text-about-mission">
                                    Foster a vibrant ecosystem of partnerships, collaborating with leading organizations and
                                    individuals to deliver comprehensive and tailored solutions.
                                </p>
                            </li>
                            <li>
                                <p class="text-about-mission">
                                    Constantly push the boundaries of innovation, investing in research and development to
                                    create cutting-edge technologies that redefine industry standards.
                                </p>
                            </li>
                            <li>
                                <p class="text-about-mission">
                                    Cultivate cultures of continuous empowerment while advancing social and environmental
                                    responsibility, enabling our team to thrive and contribute their unique talents to the
                                    collective success of Sinergi Delapan Mandiri.
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="value">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <p class="text-title-value">Our Value</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <p>Winning</p>
                    <img class="w-25" src="{{ asset('assets/img/our-value-1.png') }}" alt="logo our value 1">
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <p>Giving</p>
                    <img class="w-25" src="{{ asset('assets/img/our-value-2.png') }}" alt="logo our value 2">
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <p>Dignity</p>
                    <img class="w-25" src="{{ asset('assets/img/our-value-3.png') }}" alt="logo our value 3">
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-10 text-center">
                            <p>Company's commitments to achieving excellence, embracing philanthropy as a core value, and
                                upholding
                                integrity in all aspects of their operations.</p>
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="client">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <p class="text-title-clientpart">Clients & Partners</p>
                </div>
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <div class="box-img-client">
                                    <img style="width:150px;height:150px;" src="{{ asset('assets/img/client1.png') }}"
                                        alt="client 1">
                                </div>
                                <div class="box-img-client">
                                    <img style="width:150px;height:150px;" src="{{ asset('assets/img/client2.png') }}"
                                        alt="client 2">
                                </div>
                                <div class="box-img-client">
                                    <img style="width:150px;height:150px;" src="{{ asset('assets/img/client3.png') }}"
                                        alt="client 3">
                                </div>
                                <div class="box-img-client">
                                    <img style="width:120px;height:120px;" src="{{ asset('assets/img/client4.png') }}"
                                        alt="client 4">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <div class="box-img-client2">
                                    <img style="width:130px;height:130px;" src="{{ asset('assets/img/client6.png') }}"
                                        alt="client 6">
                                </div>
                                <div class="box-img-client2">
                                    <img style="width:100px;height:100px;" src="{{ asset('assets/img/client7.png') }}"
                                        alt="client 7">
                                </div>
                                <div class="box-img-client2">
                                    <img style="width:90px;height:90px;" src="{{ asset('assets/img/client13.png') }}"
                                        alt="client 13">
                                </div>
                                <div class="box-img-client2">
                                    <img style="width:100px;height:100px;" src="{{ asset('assets/img/client14.png') }}"
                                        alt="client 14">
                                </div>

                                <div class="box-img-client2">
                                    <img style="width:80px;height:80px;" src="{{ asset('assets/img/client5.png') }}"
                                        alt="client 5">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <div class="box-img-client3">
                                    <img style="width:50px;height:50px;" src="{{ asset('assets/img/client8.png') }}"
                                        alt="client 8">
                                </div>
                                <div class="box-img-client3">
                                    <img style="width:70px;height:70px;" src="{{ asset('assets/img/client11.png') }}"
                                        alt="client 8">
                                </div>
                                <div class="box-img-client3">
                                    <img style="width:50px;height:50px;" src="{{ asset('assets/img/client9.png') }}"
                                        alt="client 8">
                                </div>
                                <div class="box-img-client3">
                                    <img style="width:90px;height:50px;" src="{{ asset('assets/img/client12.png') }}"
                                        alt="client 8">
                                </div>
                                <div class="box-img-client3">
                                    <img style="width:60px;height:60px;" src="{{ asset('assets/img/client10.png') }}"
                                        alt="client 8">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
