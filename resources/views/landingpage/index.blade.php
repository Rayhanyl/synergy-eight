@extends('app')
@section('content')
    <!-- hero area -->
    <section class="hero-section hero" data-background=""
        style="background-image: url({{ asset ('assets/images/hero-area/banner-bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="mb-3">Empowering Businesses Through<br>
                        Collaborative Innovation</h1>
                    <p class="mb-4">Empowering businesses through collaborative innovation,<br>
                        combining expertise with your vision for tailored success.</p>
                    <a href="{{ route('aboutus.view') }}" class="btn btn-secondary btn-lg">about us</a>
                    <!-- banner image -->
                    <img class="img-fluid w-75 banner-image rounded shadow-img"
                        src="{{ asset ('assets/images/hero-area/picture-1.jpg') }}" alt="banner-img">
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation"
                src="{{ asset('assets/images/background-shape/feature-bg-2.png') }}" alt="">
            <img class="img-fluid hero-bg-2 left-right-animation"
                src="{{ asset('assets/images/background-shape/seo-ball-1.png') }}" alt="">
            <img class="img-fluid hero-bg-3 left-right-animation"
                src="{{ asset('assets/images/background-shape/seo-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-4 up-down-animation"
                src="{{ asset('assets/images/background-shape/green-dot.png') }}" alt="">
            <img class="img-fluid hero-bg-5 left-right-animation"
                src="{{ asset('assets/images/background-shape/blue-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-6 up-down-animation"
                src="{{ asset('assets/images/background-shape/seo-ball-1.png') }}" alt="">
            <img class="img-fluid hero-bg-7 left-right-animation"
                src="{{ asset('assets/images/background-shape/yellow-triangle.png') }}" alt="">
            <img class="img-fluid hero-bg-8 up-down-animation"
                src="{{ asset('assets/images/background-shape/service-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-9 up-down-animation"
                src="{{ asset('assets/images/background-shape/team-bg-triangle.png') }}" alt="">
        </div>
    </section>
    <!-- /hero-area -->

    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Awesome Features</h2>
                    <p class="mb-100">At Synergy Eight, we pride ourselves on offering an array of awesome features that set
                        us apart from the competition. Whether you're leveraging our Professional Programmers, Training
                        services, or APICENTRUM, you'll experience unparalleled benefits designed to drive your success.</p>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-ruler-pencil feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>APICENTRUM</h4>
                            <p>Comprehensive API Management: Monitor, secure, optimize API lifecycle.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout-cta-left feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>APICENTRUM</h4>
                            <p>Custom API Development: Tailored APIs for seamless integration and functionality.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-split-v-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Professional Programmers</h4>
                            <p>Diverse Expertise: Proficient in Python, Java, JS, C++, .NET, Ruby on Rails.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Training</h4>
                            <p>Comprehensive Courses: Vast array covering languages, methodologies, cybersecurity, AI, ML.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="{{ asset('assets/images/background-shape/feature-bg-1.png') }}"
            alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="{{ asset('assets/images/background-shape/feature-bg-2.png') }}"
            alt="bg-shape">
    </section>
    <!-- /feature -->

    <!-- marketing -->
    <section class="section-lg seo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="seo-image">
                        <img class="img-fluid rounded shadow-img"
                            src="{{ asset('assets/images/marketing/picture-2.jpg') }}" alt="form-img">
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="section-title">Elevating Business Through Collaborative Innovation</h3>

                    <p>Synergy Eight Bandung is a premier outsourcing company based in the heart of Indonesia's vibrant
                        city, Bandung.<br>
                        With a dedicated team of professionals and a commitment to excellence, we offer a range of services
                        tailored to meet the diverse needs of our clients.
                    </p>
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid seo-bg" src="{{ asset('assets/images/backgrounds/seo-bg.png') }}" alt="seo-bg">
        <!-- background-shape -->
        <img class="seo-bg-shape-1 left-right-animation" src="{{ asset('assets/images/background-shape/seo-ball-1.png') }}"
            alt="bg-shape">
        <img class="seo-bg-shape-2 up-down-animation"
            src="{{ asset('assets/images/background-shape/seo-half-cycle.png') }}" alt="bg-shape">
        <img class="seo-bg-shape-3 left-right-animation" src="{{ asset('assets/images/background-shape/seo-ball-2.png') }}"
            alt="bg-shape">
    </section>
    <!-- /marketing -->

    <!-- client logo slider -->
    <section class="section">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-1.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-2.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-3.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-4.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-5.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-1.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-2.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-3.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-4.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="{{ asset('assets/images/clients-logo/client-logo-5.png') }}" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->

    <!-- newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Receive updates, news and deals</p>
                </div>
                <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                    <form action="#">
                        <div class="input-wrapper position-relative">
                            <input type="email" class="newsletter-form" id="newsletter"
                                placeholder="Enter your email">
                            <button type="submit" value="send" class="btn newsletter-btn">subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="newsletter-bg-shape left-right-animation"
            src="{{ asset('assets/images/background-shape/seo-ball-2.png') }}" alt="background-shape">
    </section>
    <!-- /newsletter -->
@endsection
