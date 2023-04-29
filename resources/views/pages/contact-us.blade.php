@extends('layouts.master')
@section('content')
    @push('header_css')

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
                                <p><a href="mailto:info@carelyexport.com">info@carelyexport.com</a></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p><a href="tel:+917001821069">+91 7001821069</a></p>
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
                    <form action="{{ route('contact-us.store') }}" method="post" role="form" class="php-email-form" id="contactForm">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name">
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="mobile" id="mobile"
                                   placeholder="Your Mobile">
                        </div>

                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                        </div>
                        <input type="text" id="countryCode">
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
