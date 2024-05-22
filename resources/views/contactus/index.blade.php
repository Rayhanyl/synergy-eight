@extends('app')
@section('content')
    <!-- contact -->
    <section class="section-lg contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Contact</h2>
                </div>
            </div>
            <div class="row contact-bg p-5 rounded mb-5">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <form action="#">
                        <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
                        <input type="email" class="form-control mb-3" id="mail" name="mail"
                            placeholder="Your Email">
                        <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
                        <button type="submit" value="send" class="btn btn-secondary">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5">Ready to revolutionize your business with Synergy Eight's innovative solutions? Have
                        questions about our services or need expert advice on your technology challenges? Reach out to us
                        today!</p>
                    <a href="#" class="text-color h5 d-block">(022) 2500442</a>
                    <a href="#" class="mb-5 text-color h5 d-block">swainfo@swamedia.co.id</a>
                    <p>Jl. Sido Mulyo No.29, Sukaluyu, Kec. Cibeunying Kaler<br>Kota Bandung, Jawa Barat 40123</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card p-4 border-blue">
                        <h5><i class="ti-layers-alt round-icon blue mr-2"></i> Sales</h5>
                        <p class="mb-0">Discover services tailored to boost business growth and propel success.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card p-4 border-blue">
                        <h5><i class="ti-desktop round-icon green mr-2"></i> Help & Support</h5>
                        <p class="mb-0"> Assistance available for resolving technical issues promptly, ensuring smooth
                            operations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card p-4 border-blue">
                        <h5><i class="ti-panel round-icon orange mr-2"></i> Legal Departments</h5>
                        <p class="mb-0">For compliance and agreement assistance, our team is here to support you promptly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="contact-bg-1 up-down-animation" src="{{ asset('assets/images/background-shape/feature-bg-2.png') }}"
            alt="background-shape">
        <img class="contact-bg-2 left-right-animation"
            src="{{ asset('assets/images/background-shape/green-half-cycle.png') }}" alt="background-shape">
        <img class="contact-bg-3 up-down-animation" src="{{ asset('assets/images/background-shape/green-dot.png') }}"
            alt="background-shape">
        <img class="contact-bg-4 left-right-animation"
            src="{{ asset('assets/images/background-shape/service-half-cycle.png') }}" alt="background-shape">
        <img class="contact-bg-5 up-down-animation" src="{{ asset('assets/images/background-shape/feature-bg-2.png') }}"
            alt="background-shape">
    </section>
    <!-- /contact -->
@endsection
