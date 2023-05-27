@extends('layouts.master')
@section('content')
    <!-- ======= Contact Section ======= -->
    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">
        <!-- Top Banner Start-->
        <div class="inner_page_block">
            <div class="banner_shapes">
                <div class="container">
                    <span><img src="{{ asset('assets/img/plus.svg') }}" alt="image"></span>
                    <span><img src="{{ asset('assets/img/polygon.svg') }}" alt="image"></span>
                    <span><img src="{{ asset('assets/img/round.svg') }}" alt="image"></span>
                </div>
            </div>
            <!-- Bread Crumb -->
            <div class="bread_crumb" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                <div class="container">
                    <div class="bred_text">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Banner End-->
        <section id="contact_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5>Feel free to reach out to us with any inquiries, questions, or collaboration opportunities.
                            Our
                            dedicated team is ready to assist you with your import needs. Whether you need assistance
                            with
                            product information, pricing, logistics, or any other aspect of the import process, we
                            are here to help.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact list Start -->
        <section class="row_am contact_list_section">
            <div class="container">
                <div class="contact_list_inner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
                    <!-- card -->
                    <a class="hover_action" href="mailto:info@carelyexport.com">
                        <div class="c_list_card">
                            <div class="icons">
                                <img src="{{ asset('assets/img/mail.png') }}" alt="image">
                                <div class="dot_block">
                                    <span class="dot_anim"></span>
                                    <span class="dot_anim"></span>
                                    <span class="dot_anim"></span>
                                </div>
                            </div>
                            <div class="inner_text">
                                <h3>Email Us</h3>
                                <p>Let’s discuss with our sales team
                                </p>
                                <a class="hover_action" href="mailto:info@carelyexport.com">info@carelyexport.com</a>
                            </div>
                        </div>
                    </a>
                    <!-- card -->
                    <div class="c_list_card">
                        <div class="icons">
                            <img src="{{ asset('assets/img/location.png') }}" alt="image">
                            <div class="dot_block">
                                <span class="dot_anim"></span>
                                <span class="dot_anim"></span>
                                <span class="dot_anim"></span>
                            </div>
                        </div>
                        <div class="inner_text">
                            <h3>Visit our office</h3>
                            <p>Reach us to our offcie and meest us
                            </p>
                            <a href="#" class="text_btn">Dakshin Barasat, West Bengal, India, 743372
                            </a>
                        </div>
                    </div>
                    <!-- card -->
                    <a href="tel:+91 7001821069">
                        <div class="c_list_card">
                            <div class="icons">
                                <img src="{{ asset('assets/img/phone.png') }}" alt="image">
                                <div class="dot_block">
                                    <span class="dot_anim"></span>
                                    <span class="dot_anim"></span>
                                    <span class="dot_anim"></span>
                                </div>
                            </div>
                            <div class="inner_text">
                                <h3>Call us</h3>
                                <p>Call us directly with sales team
                                </p>
                                <a href="tel:+91 7001821069" class="text_btn hover_action">+91 7001821069</a>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>
        <!-- contact list End -->
        <!-- Contact Us form Start -->
        <section class="contact_form_section mb-5">
            <div class="container">
                <div class="contact_inner">
                    <div class="contact_form">
                        <div class="row">
                            <div class="section_title">
                                <h1>Leave a <span>message</span></h1>
                                <p>Fill up form below, our team will get back soon</p>
                            </div>
                        </div>
                        @include('pages.contact-us-form')
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
