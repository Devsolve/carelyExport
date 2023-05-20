@extends('layouts.master')
@section('content')
    @push('header_css')
    @endpush
    <!-- ======= Contact Section ======= -->
    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">



        <!-- Top Banner Start-->
        <div class="inner_page_block">

            <div class="banner_shapes">
                <div class="container">
                    <span><img src="assets/img/plus.svg" alt="image"></span>
                    <span><img src="assets/img/polygon.svg" alt="image"></span>
                    <span><img src="assets/img/round.svg" alt="image"></span>
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
                        <h5>Feel free to reach out to us with any inquiries, questions, or collaboration opportunities. Our
                            dedicated team is ready to assist you with your import needs. Whether you need assistance with
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
                                <img src="assets/img/mail.png" alt="image">
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
                            <img src="assets/img/location.png" alt="image">
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
                                <img src="assets/img/phone.png" alt="image">
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
                        <form action="submit">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Company Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="mobile_code" placeholder="Phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="submit_button text-center">
                                <button type="submit" class="btn">Send Message</button>
                            </div>

                            <h5 class="mt-5 text-center"> Our team looks forward to providing you with excellent customer
                                service and ensuring your import
                                experience is smooth and successful. Don't hesitate to get in touch with us today!</h5>
                        </form>

                        <!-- <div class="form-graphic">
                                       <img src="assets/img/paperplane.png" alt="image">
                                    </div> -->
                    </div>


                </div>
            </div>
        </section>
        <!-- <section id="contact_us">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-12 text-center">
                                    <h5> Our team looks forward to providing you with excellent customer service and ensuring your import
                                       experience is smooth and successful. Don't hesitate to get in touch with us today!</h5>
                                 </div>
                              </div>
                           </div>
                        </section> -->


        <!-- Contact Us form End -->



        </body>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
        <script src="custom.js"></script>
        <script>
            // -----Country Code Selection
            $("#mobile_code").intlTelInput({
                initialCountry: "in",
                separateDialCode: true,
            });
        </script>
        </body>
    @endsection
