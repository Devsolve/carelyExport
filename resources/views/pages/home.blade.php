@extends('layouts.master')
@section('content')
    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section id="Hero_banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="hero_content">
                            <h1>Isometric webinar landing page</h1>
                            <p>Introducing Carely Export's premium Vermicompost, the ultimate soil amendment for all
                                your
                                agricultural needs. Our Vermicompost is made through a natural process of
                                vermicomposting,
                            </p>
                            <a href="{{ route('page-name', 'contact-us') }}">Contect Now</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="hero_img">
                            <img src="{{ asset('assets/img/hero_bg.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Value proposition and tagline for Carely Export -->
        <section id="Value_propostion">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="Carely_Export">
                            <h2 class="two_Color text-center">Value proposition <span>Carely Export</span></h2>
                            <p class="paragraph_value text-center mt-5">Welcome to Carely Export, <strong>Reliable
                                    Partner
                                    in
                                    Global Trade</strong>. We're dedicated to providing exceptional service and quality
                                products
                                to
                                help you succeed in the global marketplace. As an exporter, we're committed to going the
                                extra
                                mile
                                to earn your trust and build a long-lasting partnership. With our extensive industry
                                knowledge,
                                attention to detail, and personalized approach, we make exporting easy and hassle-free.
                                Plus, as
                                we
                                expand our product portfolio, you can count on us to continually offer new and
                                innovative
                                solutions
                                to meet your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->


        {{-- trust seal start --}}
        <section id="Provide_trustseal">
            <div class="container">
                <div class="row">
                    <h2 class="two_Color text-center">Provide <span>trust seal</span></h2>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="client_logo">
                                <img src="assets/img/trustlogo-1.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client_logo">
                                <img src="assets/img/trustlogo-2.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client_logo">
                                <img src="assets/img/trustlogo-3.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client_logo">
                                <img src="assets/img/trustlogo-4.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client_logo">
                                <img src="assets/img/trustlogo-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- trust seal end --}}


        {{-- popular products corusel start --}}


        <section id="Popular_Products">
            <div class="container">
                <div class="row">
                    <div class="com-md-12">
                        <h2 class="two_Color text-center">Popular <span> Products</span></h2>
                        <p class="paragraph_value text-center mt-5 mb-5">Introducing Carely Export's premium
                            Vermicompost,
                            the
                            ultimate soil amendment for all your agricultural needs. Our Vermicompost is made through a
                            natural
                            process of vermicomposting, which utilizes earthworms to transform organic Animal waste into
                            a
                            nutrient-rich fertilizer.Our vermicompost is carefully crafted to ensure maximum nutrient
                            retention
                            and plant uptake, providing your crops with the essential elements they need to thrive.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-loaded owl-drag" id="featured">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-4560px, 0px, 0px); transition: all 5s ease 5s; width: 9120px;">
                                    <div class="owl-item cloned" style="width: 1110px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="work-wrap d-flex">
                                                <div class="img "
                                                     style="background-image: url({{ asset('assets/img/istockphoto-153737841-170667a.jpg') }});">
                                                </div>
                                                <div class="text text-left  p-4 px-xl-5 d-flex align-items-center">
                                                    <div class="py-md-5">
                                                        <h2 class="mb-4">Rice</h2>
                                                        <div class="row">
                                                            <div class="col-xl-8">
                                                                <p>Experience the finest quality rice with Carely
                                                                    Export.
                                                                    Our carefully
                                                                    selected rice varieties are sourced from trusted
                                                                    suppliers, ensuring
                                                                    exceptional taste, texture, and aroma. Whether
                                                                    you're
                                                                    looking for
                                                                    Basmati rice, Jasmine rice, or other popular
                                                                    varieties,
                                                                    we offer a range
                                                                    of options to suit your culinary preferences.
                                                                    Discover
                                                                    the perfect rice
                                                                    for your meals and elevate your dining experience
                                                                    with
                                                                    Carely Export.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <button type="button" class="btn btn-dark mb-2 py-3 px-4">
                                                                Learn
                                                                More
                                                            </button>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 1110px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="work-wrap d-md-flex">
                                                <div class="img"
                                                     style="background-image: url(assets/img/Vermicompost_Factory_-_panoramio__3_1100x.jpg);">
                                                </div>
                                                <div
                                                    class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                                    <div class="py-md-5">
                                                        <h2 class="mb-4">Vermicompost</h2>
                                                        <div class="row">
                                                            <div class="col-xl-8">
                                                                <p>Experience the finest quality rice with Carely
                                                                    Export.
                                                                    Our carefully
                                                                    selected rice varieties are sourced from trusted
                                                                    suppliers, ensuring
                                                                    exceptional taste, texture, and aroma. Whether
                                                                    you're
                                                                    looking for
                                                                    Basmati rice, Jasmine rice, or other popular
                                                                    varieties,
                                                                    we offer a range
                                                                    of options to suit your culinary preferences.
                                                                    Discover
                                                                    the perfect rice
                                                                    for your meals and elevate your dining experience
                                                                    with
                                                                    Carely Export.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <button type="button" class="btn btn-dark mb-2 py-3 px-4">
                                                                Learn
                                                                More
                                                            </button>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev">
                                    <p><small>Prev</small><span class="ion-ios-arrow-round-back"></span></p>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <p><small>Next</small><span class="ion-ios-arrow-round-forward"></span></p>
                                </button>
                            </div>

                            <div class="owl-dots">
                                <button role="button" class="owl-dot">
                                    <span></span>
                                </button>
                                <button role="button" class="owl-dot">
                                    <span></span>
                                </button>
                                <button role="button" class="owl-dot active">
                                    <span></span>
                                </button>
                                <button role="button" class="owl-dot">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- popular products corusel end --}}



        {{-- why choose us start --}}


        <section id="why_choose_us">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <span class="pre-title">CARELY EXPORT</span>
                            <h3 class="title">Why choose us ?</h3>
                        </div>
                    </div>
                </div>
                <div class="container py-5">
                    <div class="main-timeline-4 text-white">
                        <div class="timeline-4 left-4">
                            <div class="card gradient-custom">
                                <div class="card-body p-4">
                                    <img src="assets/img/quality-service.png" alt="">
                                    <h4>Product Quality</h4>
                                    <p>At Carely Export, we guarantee high-quality products that meet international
                                        standards and
                                        are
                                        thoroughly inspected before shipment to ensure they meet mporters'
                                        specifications
                                        and
                                        requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-4 right-4">
                            <div class="card gradient-custom-4">
                                <div class="card-body p-4">
                                    <img src="assets/img/unique.png" alt="">
                                    <h4>Competing Pricing</h4>
                                    <p>At Carely Export, we provide competitive and transparent pricing on our products,
                                        with
                                        flexible
                                        options based on customer needs, to offer the best value for money for our
                                        importers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-4 left-4">
                            <div class="card gradient-custom">
                                <div class="card-body p-4">
                                    <img src="assets/img/fast-delivery.png" alt="">
                                    <h4>Timely Delivery/Reliable Shipping</h4>
                                    <p>At Carely Export, we have a strong logistics network that ensures reliable and
                                        timely
                                        delivery with
                                        regular updates and proactive issue resolution, meeting our clients' deadlines
                                        and
                                        handling
                                        all
                                        export documentation for a smooth shipping process.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-4 right-4">
                            <div class="card gradient-custom-4">
                                <div class="card-body p-4">
                                    <img src="assets/img/customer-service.png" alt="">
                                    <h4>Customer Service</h4>
                                    <p>At Carely Export, we prioritize exceptional customer service by offering
                                        personalized
                                        solutions,
                                        working closely with clients to understand their unique needs, and providing
                                        expert
                                        support
                                        and
                                        responsiveness to ensure their satisfaction and success in the global
                                        marketplace
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-4 left-4">
                            <div class="card gradient-custom">
                                <div class="card-body p-4">
                                    <img src="assets/img/statistics.png" alt="">
                                    <h4>Growing Portfolio of Products</h4>
                                    <p>The Indian government's favorable policies, such as tax incentives, export
                                        promotion
                                        zones,
                                        and
                                        free trade agreements, have created a business-friendly environment that
                                        encourages
                                        foreign
                                        investment and boosts exports. This means that importers can enjoy quality
                                        products
                                        at a
                                        competitive price, while also benefiting from the country's technical expertise
                                        and
                                        skilled
                                        workforce.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-4 right-4">
                            <div class="card gradient-custom-4">
                                <div class="card-body p-4">
                                    <img src="assets/img/logistic.png" alt="">
                                    <h4>Hassle-Free Imports with Carely Export</h4>
                                    <p>Carely Export offers a comprehensive solution to handle all aspects of the import
                                        process,
                                        allowing
                                        importers to focus on their core business while we take care of sourcing,
                                        quality
                                        control,
                                        customs
                                        clearance, and logistics.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- why choose us end --}}



        <!-- call to action start -->

        <section id="call_to_act">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content_cta">
                            <p class="text-center">
                                Looking to import products with ease and confidence? Look no further than Carely Export!
                                Our
                                comprehensive import services, including sourcing, quality control, customs clearance,
                                and
                                logistics, make importing simple and stress-free. With our expertise in international
                                trade
                                and
                                commitment to customer satisfaction, you can trust us to handle all aspects of your
                                imports
                                with
                                professionalism and efficiency.
                            </p>

                            <h5 class="text-center">"Join us now and import with confidence - experience seamless
                                logistics, get
                                the best value, and start hassle-free importing with Carely Export!"</h5>

                            <div class="button_cta_pro d-flex align-items-center justify-content-center">
                                <a href="{{ route('page-name', 'contact-us') }}">Get Quote Now</a>
                                <a href="#">View More Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- call to action end -->


        <!-- why should India choose start -->

        <section id="Why_importers_should">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="two_Color text-center">Why importers should <span> choose India </span></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-pixle">
                        <div class="card_importers">
                            <span class="card_number">1</span>
                            <h4 class="cars_title">
                                Cost-effective production
                            </h4>
                            <p>India is known for its cost-effective production, which means that products manufactured
                                in
                                India
                                can be exported at a relatively lower cost. This makes Indian products competitive in
                                the
                                global
                                market, which is attractive for importers looking for cost-effective products.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-pixle">
                        <div class="card_importers">
                            <span class="card_number">2</span>
                            <h4 class="cars_title">
                                Abundant natural resources
                            </h4>
                            <p>India's diverse natural resource base, including minerals, agricultural products, and
                                other
                                raw
                                materials, provides manufacturers with easy access to high-quality inputs, resulting in
                                high-quality finished products.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-pixle">
                        <div class="card_importers">
                            <span class="card_number">3</span>
                            <h4 class="cars_title">
                                India's Skilled Workforce
                            </h4>
                            <p>A Competitive Advantage for High-Quality and Specialized Products.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="shaps">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-pixle">
                        <div class="card_importers">
                            <span class="card_number">4</span>
                            <h4 class="cars_title">
                                Favorable government policies
                            </h4>
                            <p>The Indian government's favorable policies, such as tax incentives, export promotion
                                zones,
                                and
                                free trade agreements, have created a business-friendly environment that encourages
                                foreign
                                investment and boosts exports. This means that importers can enjoy quality products at a
                                competitive price, while also benefiting from the country's technical expertise and
                                skilled
                                workforce.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-pixle">
                        <div class="card_importers">
                            <span class="card_number">5</span>
                            <h4 class="cars_title">
                                Diverse Indian Products for Endless Possibilities
                            </h4>
                            <p>India's diverse range of products and industries offers endless possibilities for
                                importers
                                seeking
                                quality goods.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-pixle">
                        <div class="card_importers">
                            <span class="card_number">6</span>
                            <h4 class="cars_title">
                                Cultural Affinity
                            </h4>
                            <p>A Boon for Importers Dealing with India:Unlocking trust and facilitating business
                                relationships,
                                India's strong cultural ties with the world offer a competitive edge for importers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- why should India choose end -->

    </main><!-- End #main -->
@endsection
