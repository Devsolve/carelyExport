@extends('layouts.master')
@section('content')
    <section id="products_img">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_products">
                        <h1>All Products</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="products_details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main_export_heading">Indian Vermicompost Exporters</h3>
                    <p class="text-center">India is one of the most important players in the global market today. Being one
                        of the major agricultural exporters in the world, grain and cereal export from India has been
                        growing rapidly. Pisum Foods is one of the most reliable grains importers from India. We work on the
                        export of grains and cereal, fruits, vegetables, pulses, spices, and such other food products from
                        India. Being one of the leading cereal exporters in India, we have been accredited to TPCI, APEDA,
                        and such other certifications.
                        <br>
                        Known to be the best grains and cereal exporter in India, we at Pisum Foods make sure that premium
                        quality grains and cereal in India are exported abroad. When we work on the export of Indian grains,
                        we make sure that all the health and safety regulations are followed. With extensive experience in
                        the Food export industry and export of Indian grains, we make sure that we can get the best buyers
                        for grains exporter from India. If you are looking for cereal import from India, Pisum is the best
                        choice for you!</p>
                </div>
            </div>
        </div>
    </section>
    <section id="products_categeory">
        <div class="container">
            @forelse(range(1, 2) as $val)
                <div class="row mb-3">
                    @forelse(range(1, 4) as $val)
                        <div class="col-xl-3 col-lg-3 col-md-12 mb-3">
                        <a href="#">
                            <div class="card_products">
                                <img alt="" src="{{ asset('assets/img/istockphoto-153737841-170667a.jpg') }}">
                                <div class="products_title">
                                    <p>Rice</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                    @endforelse
                </div>
            @empty
            @endforelse
        </div>
    </section>
@endsection
