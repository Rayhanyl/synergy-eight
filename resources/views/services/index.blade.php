@extends('app')
@section('content')
    <!-- service -->
    <section class="section-lg service-bg-image position-relative"
        style="background-image: url(assets/images/backgrounds/service-page.png);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Services overview</h2>
                    <p class="mb-100">At Synergy Eight, we understand the diverse needs of businesses in today's dynamic
                        landscape.
                        <br>That's why we offer a comprehensive suite of innovative solutions aimed at empowering your
                        organization to thrive and succeed. Here's a closer look at our range of services
                    </p>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon blue mb-4"></i>
                        <h4>Professional Programmers</h4>
                        <p>Our team of seasoned professionals brings a wealth of expertise in software development to the
                            table. From web development to mobile app creation, our programmers are proficient in a variety
                            of programming languages and frameworks.<br><br>Whether you need to augment your in-house team
                            or outsource an entire project, we have the skills and resources to deliver top-notch solutions
                            tailored to your specific requirements.</p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4 translate-y-150">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon green mb-4"></i>
                        <h4>Training</h4>
                        <p>In today's fast-paced technological environment, staying ahead of the curve is essential for
                            business success. That's why we offer a comprehensive range of training programs designed to
                            empower your team with the latest skills and knowledge. <br><br>
                            Whether you're looking to upskill your developers in a specific programming language or want to
                            dive into emerging technologies like AI and machine learning, our expert instructors are here to
                            guide you every step of the way.
                        </p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon orange mb-4"></i>
                        <h4>APICENTRUM</h4>
                        <p>APIs (Application Programming Interfaces) play a crucial role in modern software development,
                            enabling seamless communication between different systems and applications. Our APICENTRUM
                            service specializes in custom API development, integration, and management. <br><br>Whether you need to create a custom API tailored to your unique business needs or want to integrate third-party APIs into your existing systems, our team has the expertise to ensure smooth and efficient operation.</p>
                    </div>
                </div>
                {{-- <!-- service item -->
                <div class="col-sm-6 mb-4 translate-y-150">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon blue mb-4"></i>
                        <h4>Maximum Support</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia.<br><br>There live the blind texts. Separated they live in Bookmarksgrove right at
                            the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon green mb-4"></i>
                        <h4>Lower Budget</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia.<br><br>There live the blind texts. Separated they live in Bookmarksgrove right at
                            the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4 translate-y-150">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon orange mb-4"></i>
                        <h4>Great service</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia.<br><br>There live the blind texts. Separated they live in Bookmarksgrove right at
                            the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- background shapes -->
        <img class="service-bg-1 up-down-animation" src="{{ asset('assets/images/background-shape/feature-bg-2.png') }}"
            alt="">
        <img class="service-bg-2 left-right-animation"
            src="{{ asset('assets/images/background-shape/seo-half-cycle.png') }}" alt="">
        <img class="service-bg-3 up-down-animation" src="{{ asset('assets/images/background-shape/team-bg-triangle.png') }}"
            alt="">
        <img class="service-bg-4 left-right-animation" src="{{ asset('assets/images/background-shape/green-dot.png') }}"
            alt="">
        <img class="service-bg-5 up-down-animation" src="{{ asset('assets/images/background-shape/team-bg-triangle.png') }}"
            alt="">
    </section>
    <!-- /service -->
@endsection
