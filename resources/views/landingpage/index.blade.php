@extends('app')
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-7">
                    <p class="text-title-hero">Enhance Your Business <br> with Sinergi Delapan</p>
                    <p class="text-desc-hero">Sinergi Delapan Mandiri is a leading provider of
                        professional IT services,
                        training, and API
                        management solutions. Our team of skilled IT specialists delivers reliable solutions and
                        seamless
                        delivery to meet the unique needs of our clients. Through our IT training programs, we empower
                        programmers to upgrade their skills and advance their careers in the ever-evolving tech industry
                    </p>
                    <div class="py-2">
                        <a class="btn btn-danger rounded-5 px-4 py-2 text-btn-hero">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="text-end">
                        <img class="img-hero" src="{{ asset('assets/img/hero.png') }}" alt="hero">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 text-center">
                    <p class="text-title-head-service">Our Top Services for You</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 hover-service p-4 text-center">
                            <img class="img-service-training" src="{{ asset('assets/img/icon-training.png') }}"
                                alt="training">
                            <div class="d-flex flex-column align-items-center">
                                <div class="">
                                    <p class="text-title-service" style="color:#E89F00;">Professional Services</p>
                                </div>
                                <div class="">
                                    <p class="text-desc-service">Provide IT Specialist for reliable solutions and seamlessly
                                        delivery</p>
                                </div>
                            </div>
                            <a class="" href="{{ route('professional-service') }}">
                                <img class="img-icon-arrow" src="{{ asset('assets/img/icon-arrow.png') }}" alt="arrow">
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 hover-service p-4 text-center">
                            <img class="img-service-service" src="{{ asset('assets/img/icon-service.png') }}"
                                alt="service">
                            <div class="d-flex flex-column align-items-center">
                                <div class="">
                                    <p class="text-title-service" style="color:#FB563F;">IT Training</p>
                                </div>
                                <div class="">
                                    <p class="text-desc-service">Provide IT Training for Programmers to upgrade their skills
                                        and careers</p>
                                </div>
                            </div>
                            <a class="" href="{{ route('training-service') }}">
                                <img class="img-icon-arrow" src="{{ asset('assets/img/icon-arrow.png') }}" alt="arrow">
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 hover-service p-4 text-center">
                            <img class="img-service-api" src="{{ asset('assets/img/icon-api.png') }}" alt="api">
                            <div class="d-flex flex-column align-items-center">
                                <div class="">
                                    <p class="text-title-service" style="color:#3A4864;">APIcentrum</p>
                                </div>
                                <div class="">
                                    <p class="text-desc-service">Provide API Manager for business, government, and
                                        individual</p>
                                </div>
                            </div>
                            <a class="" href="https://apicentrum.io/">
                                <img class="img-icon-arrow" src="{{ asset('assets/img/icon-arrow.png') }}" alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="next-level">
        <div class="bg-blur-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-md-6 col-lg-7 d-flex align-items-end">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="custom-hr"></div>
                            </div>
                            <div class="col-12">
                                <p class="text-title-nextlevel">Taking Your Business to The <span
                                        style="font-weight: 600">Next Level</span></p>
                            </div>
                            <div class="col-12">
                                <p class="text-desc-nextlevel">We urging businesses to improve their performance by
                                    adopting
                                    the latest, customized, and
                                    reliable technological solutions. Business will conduct some benefits such as
                                    reduced
                                    costs, scalability, new technologies, expertise and experience, improved security,
                                    and
                                    strategic planning</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-md-6 col-lg-5">
                        <div class="text-end">
                            <img class="img-nextlevel" src="{{ asset('assets/img/logo-next-level.png') }}" alt="next level">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trusted-partner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="text-right">
                        <img class="img-trusted" src="{{ asset('assets/img/logo-trusted.png') }}" alt="trusted">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="custom-hr"></div>
                        </div>
                        <div class="col-12">
                            <p class="text-title-nextlevel"><span style="font-weight: 600;">Trusted Partner</span> for All
                                Your IT Needs</p>
                        </div>
                        <div class="col-12">
                            <p class="text-desc-nextlevel">With a diverse portfolio of satisfied customers, we specialize
                                in
                                providing innovative
                                solutions to help businesses thrive in today's digital world. Our team of experts is
                                dedicated to delivering top-notch services and support to ensure your success.</p>
                        </div>
                        <div class="col-12">
                            <div class="row g-3">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card rounded-5">
                                        <div class="card-body text-center">
                                            <p class="text-number-trusted">20+</p>
                                            <p>IT Outsources</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card rounded-5">
                                        <div class="card-body text-center">
                                            <p class="text-number-trusted">5+</p>
                                            <p>Applications</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card rounded-5">
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
    </div>
    <div class="testimonial">
        <div class="bg-blur-left">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 text-center">
                        <p class="text-title-testimonial">Testimonials</p>
                        <p class="text-subtitle-testimonial">Trust Our Clients</p>
                    </div>
                    <div class="col-12">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="swiper-slide">
                                        <div class="row g-3 text-center">
                                            <div class="col-12 text-center">
                                                <img style="width: 75px;height:75px;"
                                                    src="{{ asset('assets/img/profile.png') }}" alt="profile">
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <div style="width:60%; height:auto;">
                                                    <p class="text-name-testimonial"><b style="color:#CA2026;">Arif Bijak
                                                            Bestari</b> / PT. PLN (Persero)</p>
                                                    <p>As a mobile application project user, I want to be able to seamlessly
                                                        sync my
                                                        app data across different devices, allowing me to view it from
                                                        anywhere.
                                                        The
                                                        Sinergi Delapan crew is able to collaborate and work as a unit with
                                                        ease.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="client">
        {{-- <div class="bg-blur-bottom">
            <div class="container-fluid">
                <div class="swiper-client">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Test</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Test2</p>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div> --}}
    </div>
    @push('script')
        <script>
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    @endpush
@endsection
