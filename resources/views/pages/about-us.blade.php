@extends('layouts.master')
@section('content')
    <!-- ======= About Us Section ======= -->
    <div class="page_wrapper">
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
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <section id="Welcome_about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="two_Color text-center">Welcome to <span>Carely Export</span></h2>
                        <p class="text-center mt-3">Welcome to Carely Export, a merchant exporting company committed to
                            providing
                            high-quality products and services to our clients worldwide. We are a team of experienced
                            professionals dedicated to ensuring a smooth and successful export process for our
                            clients.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="About_misson">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card_misson">
                            <img src="assets/img/target.png" alt="">
                            <h3>Our Mission</h3>
                            <p>Our vision is to become a leading merchant exporting company that is known for its
                                high-quality
                                products, exceptional customer service, and commitment to sustainability.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card_misson">
                            <img src="assets/img/binoculars.png" alt="">
                            <h3>Our vission</h3>
                            <p>Our mission is to provide our clients with high-quality products and services that meet
                                their
                                needs and exceed their expectations. We are committed to building long-term
                                relationships
                                based
                                on trust, transparency, and excellent customer service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="About_misson" >
            <div class="container" >
                <div class="row values" >
                    <div class="col-md-12">
                        <div class="value">
                            <h2 class="mb-3 text-center">Value</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="vlaue_card bg-white">
                            <img src="assets/img/trust.png" alt="">
                            <p>Integrity: Your trusted partner, committed to honesty and transparency.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="vlaue_card bg-white">
                            <img src="assets/img/customer-focus.png" alt="">
                            <p>Customer Focus: Putting you first, delivering exceptional service and lasting
                                relationships.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="vlaue_card bg-white">
                            <img src="assets/img/service.png" alt="">
                            <p>Quality Excellence: Uncompromising quality for superior products and peace of mind.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="vlaue_card bg-white">
                            <img src="assets/img/project-management.png" alt="">
                            <p>Innovation: Driving forward-thinking solutions to meet your evolving needs.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="vlaue_card bg-white">
                            <img src="assets/img/sustainability.png" alt="">
                            <p>Sustainability: Embracing eco-friendly practices for a greener future.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="vlaue_card bg-white">
                            <img src="assets/img/teamwork.png" alt="">
                            <p>Collaboration: Building strong partnerships for seamless supply chains and shared
                                success.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="vlaue_card bg-white">
                            <img src="assets/img/businessman.png" alt="">
                            <p>Professionalism: A dedicated team delivering excellence with expertise and
                                professionalism.</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <!-- <div class="vlaue_card">
                               <img src="assets/img/trust.png" alt="">
                               <p>Integrity: Your trusted partner, committed to honesty and transparency.</p>
                            </div> -->
                    </div>
                </div>
            </div>
        </section>
        <section id="Who_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="two_Color text-center">Who are we?</h2>
                        <p class="text-start mt-3">We are a team of experienced professionals with a passion for
                            international
                            trade. Our team has extensive experience in exporting, and we are committed to ensuring that
                            our
                            clients' orders are processed smoothly and efficiently.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="What_Do">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="two_Color text-center">What We Do?</h2>
                        <p class="text-start mt-3">We specialize in exporting high-quality products to clients
                            worldwide.
                            Our
                            flagship product, Vermicompost, is a premium quality, nutrient-rich, and sustainable. We are
                            constantly exploring new markets and products to expand our portfolio and better serve our
                            clients'
                            needs. We work closely with our clients to understand their needs and provide flexible and
                            customized solutions to meet those needs. If you are looking for a reliable and professional
                            merchant exporting company to partner with, we invite you to learn more about our products
                            and
                            services and to contact us for more information. We look forward to the opportunity to work
                            with
                            you
                            and to help you achieve your importing goals.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
