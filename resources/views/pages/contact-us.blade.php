@extends('layouts.master')
@section('content')
    @push('header_css')
        <style>
            .country-select .flag {
                background-image: url("{{ asset('assets/libraries/country-select-js/img/flags.png') }}");
            }

            .country-select {
                width: 100%;
            }
        </style>
    @endpush
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Contact</h2>
                <p>Thank you for your interest in our company and products. We are a merchant exporter specializing in
                    [product category] and are committed to providing our customers with high-quality products and
                    exceptional service. If you have any questions or would like to place an order, please don’t hesitate to
                    get in touch with us using the contact form below or by calling or emailing us directly. We look forward
                    to hearing from you!</p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Dakshin Barasat, West Bengal, India, 743372</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@carelyexport.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+91 7001821069</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours:</h4>
                                <p>Mon-Sat: 11AM - 23PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form" id="contactForm">
                        {{-- <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                        </div> --}}
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name">
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email">
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group mt-3">
                                    <input type="text" name="country_code" id="countryCode">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                    placeholder="Your Mobile">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
