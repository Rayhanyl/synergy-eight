    @if (!Route::is('contact'))
        <footer data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-container-footer">

                <div class="container">
                    <div class="row g-3 p-3">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="row g-2">
                                <div class="col-12">
                                    <img class="img-logo-footer" src="{{ asset('assets/img/logo-footer.png') }}"
                                        alt="footer">
                                </div>
                                <div class="col-12">
                                    <p class="text-desc-footer">
                                        Sinergi Delapan Mandiri is a leading provider of professional IT services,
                                        training,
                                        and
                                        API management solutions. We take pride in serving a diverse range of customers
                                        and
                                        strive to exceed their expectations every step of the way.
                                    </p>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-row">
                                        <div class="">
                                            <img class="w-100" src="{{ asset('assets/img/icon-ig-footer.png') }}"
                                                alt="instagram">
                                        </div>
                                        <div class="">
                                            <img class="w-100" src="{{ asset('assets/img/icon-linkin-footer.png') }}"
                                                alt="instagram">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="row g-3">
                                <div class="col-12">
                                    <p class="text-title-footer">Location</p>
                                    <p class="text-address-footer">Jl. Sido Mulyo No.31, Sukaluyu, Kec. Cibeunying
                                        Kaler,
                                        Kota
                                        Bandung, Jawa Barat 40123</p>
                                </div>
                                <div class="col-12">
                                    <p class="text-title-footer">Contact</p>
                                    <p class="text-email-footer">
                                        <img class="img-email-footer me-3"
                                            src="{{ asset('assets/img/icon-email-footer.png') }}" alt="email">
                                        info_sinergi@sinergi8.com
                                    </p>
                                    <p class="text-phone-footer">
                                        <img class="img-phone-footer me-3"
                                            src="{{ asset('assets/img/icon-phone-footer.png') }}" alt="email">
                                        (022) 2500442
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <p class="text-copy-right">© 2024 Sinergi8. All Rights Reserved</p>
            </div>
        </footer>
    @endif
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        document.addEventListener('scroll', function() {
            const header = document.querySelector('.fixed-top');
            if (window.scrollY > 0) {
                header.classList.add('bg-navbar');
            } else {
                header.classList.remove('bg-navbar');
            }
        });
    </script>
    @stack('script')
    </body>

    </html>
