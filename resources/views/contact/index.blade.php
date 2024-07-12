@extends('app')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="row g-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="col-12 text-center">
                    <p class="text-title-contact">Contact</p>
                    <p class="text-desc-contact">Get in touch and let us know how can we help you!</p>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <p style="color:#CA2026;font-weight:bold;">PT SINERGI 8</p>
                    <P class="pe-5">Jl. Sido Mulyo No. 31, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123
                    </P>
                    <p class="text-email-footer">
                        <img class="img-email-footer" src="{{ asset('assets/img/icon-email-footer.png') }}" alt="email">
                        info_sinergi@sinergi8.com
                    </p>
                    <p class="text-phone-footer">
                        <img class="img-phone-footer" src="{{ asset('assets/img/icon-phone-footer.png') }}" alt="email">
                        (022) 2500442
                    </p>
                    <br>
                    <p>Find us on :</p>
                    <div class="d-flex flex-row">
                        <div class="">
                            <img class="w-100" src="{{ asset('assets/img/icon-ig-footer.png') }}" alt="instagram">
                        </div>
                        <div class="">
                            <img class="w-100" src="{{ asset('assets/img/icon-linkin-footer.png') }}" alt="instagram">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card rounded-3" style="border: 1px solid #c9c7c76a">
                        <div class="card-body">
                            <form class="row g-4" action="{{ route('sendmail') }}" method="post">
                                @csrf
                                <div class="col-12 col-md-6">
                                    <label for="name" class="form-label fw-semibold">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your full name" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="company" class="form-label fw-semibold">Company</label>
                                    <input type="text" class="form-control" id="company" name="company"
                                        placeholder="Enter your company name" required>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label fw-semibold">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter your email address" required>
                                </div>
                                <div class="col-12">
                                    <label for="phone_number" class="form-label fw-semibold">Phone Number (WhatsApp)</label>
                                    <input type="number" class="form-control" id="phone_number" name="phone_number"
                                        placeholder="Enter a telephone number where you can be contacted" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea class="form-control" name="message" id="message" cols="2" rows="2"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger rounded-5"
                                        style="background-color:#CA2026 !important;">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
