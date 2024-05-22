@extends('app')
@section('content')
    <!-- about us -->
    <section class="section-lg about pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">About us</h2>
                </div>
                <div class="col-lg-12 mb-100">
                    <p>Synergy Eight is dedicated to propelling business success through innovation and collaboration. With
                        a passionate team, we deliver bespoke solutions that empower clients to thrive in today’s
                        ever-evolving landscape. Our expertise spans various industries and technologies, allowing us to
                        tackle complex challenges and drive tangible results.</p>
                    <p>Committed to excellence and integrity, we consistently exceed expectations. We hold ourselves to the highest standards of quality, ensuring that every solution we provide meets our clients’ unique needs. Let's join forces for your success and unlock the full potential of your business.</p>
                </div>
                <div class="col-lg-12">
                    <!-- about video -->
                    <div class="about-video">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/about/video-thumb.jpg') }}"
                            alt="video-thumb">
                        <a class="venobox play-btn" href="https://www.youtube.com/embed/Lvj1PaCBPQo" data-vbtype="iframe"><i
                                class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img src="{{ asset('assets/images/background-shape/green-dot.png') }}" alt="background-shape"
            class="about-bg-1 up-down-animation">
        <img src="{{ asset('assets/images/background-shape/blue-dot.png') }}" alt="background-shape"
            class="about-bg-2 left-right-animation">
        <img src="{{ asset('assets/images/background-shape/green-half-cycle.png') }}" alt="background-shape"
            class="about-bg-3 up-down-animation">
        <img src="{{ asset('assets/images/background-shape/seo-ball-1.png') }}" alt="background-shape"
            class="about-bg-4 left-right-animation">
        <img src="{{ asset('assets/images/background-shape/team-bg-triangle.png') }}" alt="background-shape"
            class="about-bg-5 up-down-animation">
        <img src="{{ asset('assets/images/background-shape/service-half-cycle.png') }}" alt="background-shape"
            class="about-bg-6 left-right-animation">
    </section>
    <!-- /about us -->

    <!-- product -->
    <section class="section product" style="background-image: url(assets/images/backgrounds/about-bg.png);">
        <!-- our vision -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-title">Our Vision</h2>
                        <p>Our vision is to be the leading provider of innovative technological solutions, empowering businesses to achieve their full potential. We aim to foster a collaborative environment where creativity and excellence thrive, delivering exceptional value and driving sustainable growth for our clients worldwide.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/vision.png') }}" alt="vision" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>
        <!-- /our vision -->

        <!-- clients -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Our Clients</h2>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-1.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-2.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-3.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-4.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-5.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-6.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-7.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="{{ asset('assets/images/clients-logo/client-8.png') }}" alt="clients-logo"
                                        class="img-fluid"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /clients -->
    </section>
    <!-- /product -->
@endsection
