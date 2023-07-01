<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
    }

    img {
        width: 100%;
    }

    body {
        overflow-x: hidden;
    }

    /* header Css  */

    header#siteheader .bg-light {
        background-color: #ffffff !important;
        border-bottom: salmon;
    }

    header#siteheader {
        position: absolute;
        left: 0;
        right: 0;
        z-index: 999;
    }

    header#siteheader ul.navbar-nav li.nav-item a {
        color: #525fe1;
        font-size: 20px;
        font-family: 'Lato', sans-serif;
    }

    header#siteheader ul.navbar-nav li.nav-item {
        margin: 0 22px;
    }

    ul.dropdown-menu.show {
        background: #525fe1;
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #1e2125;
        background-color: transparent;
    }

    li.multiple_memu ul.submenu_hover {
        display: none;
        transition: 0.6s;
    }

    li.multiple_memu:hover ul.submenu_hover {
        position: absolute;
        right: -131px;
        top: 4px;
        list-style: none;
        background: #0c0f7a;
        padding: 26px 40px;
        display: block;
        transition: 0.6s;
    }

    li.multiple_memu2 ul.submenu_hover {
        display: none;
        transition: 0.6s;
    }

    li.multiple_memu2:hover ul.submenu_hover {
        position: absolute;
        right: -131px;
        top: 4px;
        list-style: none;
        background: #0c0f7a;
        padding: 26px 40px;
        display: block;
        transition: 0.6s;
    }


    /* On scroll fix header */
    header#siteheader.fixed {
        position: fixed;
        top: 0;
        z-index: 9;
        width: 100%;
        transition: 0.8s ease-in-out;
        background: #ffead9;
    }


    /* Home Page Hero*/
    section#Hero_banner {
        height: 700px;
        background:#F5F5F5;
        /* background: url("{{ asset('assets/img/home-one-testimonial-2.jpg') }}"); */
        background-position: center;
        background-size: cover;
    }

    section#Hero_banner .row {
        display: flex;
        align-items: center;
    }

    .hero_img img {
        margin-top: 80px;
    }

    .hero_content h1 {
        font-size: 58px;
        line-height: 60px;
        color: #231F40;
        font-weight: 900;
        margin-bottom: 30px;
        font-family: 'Lato', sans-serif;
        margin-top: 100px;
    }

    .hero_content p {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    .hero_content a {
        font-size: 20px;
        background: #525FE1;
        padding: 14px 30px;
        color: #fff;
        font-weight: 500;
        border-radius: 10px;
        margin-top: 12px;
        display: inline-block;
    }

    /* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    value propostion section css Start
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
    section#Value_propostion {
        padding: 100px 0;
    }

    h2.two_Color.text-center {
        margin-top: 5px;
        margin-bottom: 0;
        font-size: 40px;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
        position: relative;
    }

    h2 span {
        line-height: 26px;
        color: #525FE1;
        display: inline-block;
        margin-bottom: 0;
        letter-spacing: .1em;
    }

    h2:after {
        content: "";
        position: absolute;
        width: 79px;
        height: 2px;
        background-color: #525fe1;
        left: 48%;
        top: 115%;
    }

    section#Value_propostion h2:before {
        content: "";
        position: absolute;
        background: url("{{ asset('assets/img/shape-02-2.png') }}");
        width: 200px;
        height: 100%;
        left: 22%;
        top: -44%;
        background-repeat: no-repeat;
    }

    p.paragraph_value {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    section#why_choose_us {
        padding: 100px 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background: #ebe5f1;
    }

    .section-title .pre-title {
        font-weight: 800;
        font-size: 18px;
        line-height: 26px;
        color: #525fe1;
        display: inline-block;
        margin-bottom: 0;
        letter-spacing: .1em;
        font-family: 'Urbanist', sans-serif;
    }

    .section-title .title {
        margin-top: 5px;
        margin-bottom: 0;
        font-size: 50px;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
        position: relative;
    }

    /* *****************
    section#Provide_trustseal
    *************************/
    section#Provide_trustseal {
        background:#F5F5F5;
    /* background: url(img/home-three-testimonial-2.jpg); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
        position: relative;
    }

    h2.two_Color {
        margin-top: 5px;
        margin-bottom: 0;
        font-size: 40px;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
        position: relative;
    }

    section#Provide_trustseal:before {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        /* border: 40px solid rgb(227 35 35 / 11%); */
        border: 40px solid rgb(0 0 0 / 11%);
        border-radius: 50%;
        left: -129px;
        top: -149px;
    }

    /* *********
    section#Popular_Products
    ************/

    section#Popular_Products {
        padding: 100px 0;
    }

    section#Provide_trustseal .owl-carousel.owl-theme {
        padding: 70px 0px 40px;
    }


    /* **********
    Products slider
    ***************/
    .work-wrap .img {
        height: 700px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .work-wrap .text,
    .work-wrap .img {
        width: 50%;
    }

    #Popular_Products .text.text-left {
        background: #f5f0f7;
    }

    #Popular_Products .owl-carousel .owl-nav {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        display: inline-block;
    }

    #Popular_Products .owl-carousel .owl-nav .owl-prev {
        left: 50%;
        margin-left: -35px;
        position: absolute;
    }

    #Popular_Products .owl-carousel .owl-nav .owl-next {
        position: absolute;
        right: 50%;
        margin-right: -35px;
    }

    #Popular_Products .owl-carousel .owl-nav .owl-prev p span,
    .owl-carousel .owl-nav .owl-prev p small,
    .owl-carousel .owl-nav .owl-next p span,
    .owl-carousel .owl-nav .owl-next p small {
        display: block;
        color: #000;
        line-height: .8;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    #Popular_Products .owl-carousel .owl-nav .owl-prev span:before,
    .owl-carousel .owl-nav .owl-next span:before {
        font-size: 40px;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    .work-wrap .text h2 {
        font-size: 60px;
        font-weight: 800;
        text-transform: uppercase;
    }


    section#why_choose_us .row {
        display: flex;
    }

    section#why_choose_us .card_importers {
        height: 100%;
    }

    section#why_choose_us h3.title {
        margin-bottom: 40px;
    }

    section#why_choose_us .card_importers p {
        color: rgb(35, 31, 64);
        font-size: 20px;
        font-family: Urbanist, sans-serif;
    }

    section#why_choose_us h4.cars_title {
        color: #525fe1;
        font-size: 22px;
    }

    section#why_choose_us .card_importers:hover {
        background: linear-gradient(rgb(14 8 2) 0%, rgb(58 11 163) 100%);
        transition: all 0.6s ease 0s;
        cursor: pointer;
    }

    section#why_choose_us .card_importers:hover p {
        color: #ffffff;
    }

    /* ************
    section#Why_importers_should
    *****************/

    section#Why_importers_should {
        background:#F5F5F5;
    /* background: url(img/home-three-testimonial-2.jpg); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 80px 0;
        position: relative;
    }

    section#Why_importers_should h2.two_Color.text-center {
        margin-bottom: 60px;
    }

    section#Why_importers_should .card_importers {
        height: 100%;
    }

    .mb-pixle {
        margin-bottom: 25px;
    }

    .card_importers {
        box-shadow: 0px 10px 20px #d9d9d9;;
        background: #fff;
        padding: 25px;
        border-radius: 25px;
        margin-bottom: 25px;
    }

    span.card_number {
        width: 55px;
        height: 55px;
        display: block;
        background: #525fe1;
        line-height: 55px;
        text-align: center;
        color: #fff;
        font-family: 'Urbanist', sans-serif;
        font-weight: 900;
        font-size: 30px;
        border-radius: 50%;
        box-shadow: 0 10px 30px rgb(0 0 0 / 6%);
        margin-bottom: 22px;
    }

    h4.cars_title {
        margin-bottom: 20px;
        color: #231F40;
        font-size: 26px;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
    }

    section#Why_importers_should .card_importers p {
        font-size: 19px;
        font-weight: normal;
        line-height: 1.6em;
        font-family: 'Roboto', sans-serif;
    }


    /* Cta css start */
    section#call_to_action {
        background: #fff;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }


    section#call_to_action:before {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        border: 40px solid rgb(227 35 35 / 11%);
        border-radius: 50%;
        left: -100px;
        top: -149px;
    }

    /* The actual timeline (the vertical ruler) */
    .main-timeline-4 {
        position: relative;
    }

    /* The actual timeline (the vertical ruler) */
    .main-timeline-4::after {
        content: "";
        position: absolute;
        width: 3px;
        background-color: #525fe1;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
    }

    /* Container around content */
    .timeline-4 {
        position: relative;
        background-color: inherit;
        width: 50%;
    }

    /* The circles on the timeline */
    .timeline-4::after {
        content: "";
        position: absolute;
        width: 25px;
        height: 25px;
        right: -11px;
        background-color: #525fe1;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
    }

    .main-timeline-4 .card h4 {
        margin-bottom: 25px;
    }

    /* Place the container to the left */
    .left-4 {
        padding: 0px 40px 20px 0px;
        left: 0;
    }

    /* Place the container to the right */
    .right-4 {
        padding: 0px 0px 20px 40px;
        left: 50%;
    }

    /* Fix the circle for containers on the right side */
    .right-4::after {
        left: -14px;
    }

    section#call_to_act {
        padding: 100px 0;
        position: relative;
    }

    section#call_to_act:before {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        border: 40px solid rgb(0 0 0 / 11%);
        /* border: 40px solid rgb(227 35 35 / 11%); */
        border-radius: 50%;
        right: -129px;
        top: -149px;
    }

    section#Why_importers_should {
        position: relative;
    }

    section#Why_importers_should:before {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        border: 40px solid rgb(0 0 0 / 11%);
        border-radius: 50%;
        left: -129px;
        top: -149px;
    }

    /* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
    Home Page css End
    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>*/


    /* -------------------------------------
    ABOUT US PAGE
    --------------------------------------*/
    section#about_hero {
        background: url("{{ asset('assets/img/home-one-testimonial-2.jpg') }}");
        background-size: cover;
        height: 500px;
        background-position: center;
        position: relative;
    }

    section#Welcome_about {
        padding: 100px 0;
    }

    section#about_hero h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #525fe1;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 52px;
    }

    section#Welcome_about p {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    section#Welcome_about h2:before {
        content: "";
        position: absolute;
        background: url("{{ asset('assets/img/shape-02-2.png') }}");
        width: 200px;
        height: 100%;
        left: 27%;
        top: -44%;
        background-repeat: no-repeat;
    }

    section#About_misson {
        {{--background: url("{{ asset('assets/img/home-one-testimonial-2.jpg') }}");--}}
        background-color:#F5F5F5;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 80px 0;
        position: relative;
    }

    section#About_misson .row {
        display: flex;
    }

    section#About_misson h2 {
        color: #212529;
        margin-bottom: 0;
        font-size: 40px;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
        position: relative;
    }

    section#About_misson h2:before {
        content: "";
        position: absolute;
        background: url("{{ asset('assets/img/shape-02-2.png') }}");
        width: 200px;
        height: 100%;
        left: 43%;
        top: -44%;
        background-repeat: no-repeat;
    }

    section#About_misson p {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    section#About_misson img {
        width: 70px;
        margin-bottom: 20px;
    }

    section#About_misson ul.value_li li {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    section#About_misson ul.value_li li {
        list-style: disc;
    }

    .card_misson {
        background: #ffffff;
        height: 100%;
        padding: 30px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
        border-radius: 30px;
    }

    ul.value_li {
        padding-left: 21px;
    }

    section#What_Do {
        padding-bottom: 70px;
    }

    section#Who_are {
        padding: 100px 0;
    }

    section#Who_are p {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    section#What_Do p {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    .row.values {
        margin-bottom: 40px;
    }

    .vlaue_card {
        text-align: center;
    }

    .vlaue_card {
        text-align: center;
        background: transparent;
        height: 100%;
        padding: 30px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
        border-radius: 30px;
        border: 3px solid #ffead9;
    }

    section#About_misson .vlaue_card p {
        font-size: 22px;
        font-weight: 500;
        font-family: roboto;
        line-height: 1.67;
        color: #3d64b3;
    }


    /* -------------------------------------
    ABOUT US PAGE
    --------------------------------------*/

    section#products_img {
        background: url("{{ asset('assets/img/Vermicomposting.jpg') }}");
        background-position: center;
        background-size: cover;
        height: 300px;
        padding: 100px 0;
    }

    .title_products {
        text-align: center;
    }

    section#products_img h1 {
        color: #fff;
        font-size: 60px;
        margin-top: 29px;
        font-weight: 700;
    }

    section#products_details {
        background: #92a0bb;
    }

    /* -------------------------------------
    Single Prodcust page css
    --------------------------------------*/

    section.products_img {
        background: url(img/);
        background-position: center;
        background-size: cover;
        height: 300px;
        padding: 100px 0;
    }

    section#products_details {
        background: url("{{ asset('assets/home-one-testimonial-2.jpg') }}");
        background-position: center;
        background-size: cover;
        padding: 70px 0;
        text-align: center;
    }

    section#products_details h3 {
        margin-bottom: 0;
        font-size: 36px;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
        position: relative;
        margin-bottom: 10px;
    }

    h3.main_export_heading {
        margin-bottom: 0;
        font-size: 48px !important;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
        position: relative;
        margin-bottom: 10px;
    }

    section#products_details p {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
    }

    section#products_categeory {
        padding: 100px 0;
    }

    section#products_categeory a {
        text-decoration: none;
    }

    .card_products {
        background-color: #fff;
        border-radius: 12px;
        text-align: center;
        transition: 0.4s all;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
        overflow: hidden;
        cursor: pointer;
    }

    .card_products:hover img {
        transform: scale(1.10);
        transition: 0.4s ease;
    }

    .card_products .products_title p {
        margin-bottom: 0;
        padding: 12px 0;
        font-size: 22px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #251667;
    }

    .food-menu-list {
        text-align: center;
    }

    .food-menu-list a {
        display: inline-block;
    }

    .all_details-products .food-menu-list a {
        border: 2px dashed #525fe1;
        padding: 10px 20px;
        margin: 0 10px;
        color: #525fe1;
        text-transform: uppercase;
        text-decoration: none;
        margin-bottom: 0;
    }

    .all_details-products .food-menu-list a h5 {
        margin-bottom: 0;
        font-size: 20px;
        font-weight: 700;
    }

    .all_details-products .food-menu-list {
        margin-bottom: 50px;
    }

    h3.products_title_details {
        font-size: 28px;
        font-weight: 900;
        line-height: 1.4;
        font-family: 'Urbanist', sans-serif;
        position: relative;
        margin-bottom: 10px;
    }

    section#Description p, section#Uses p {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
        margin-bottom: 100px;
    }

    section#Ingredients {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    section#Uses {
        margin-bottom: 100px;
    }

    section#Specification table.table {
        border: 2px solid #525fe1;
    }

    .table td, .table th {
        padding: 0.75rem;
        vertical-align: top;
        border: 2px solid #525fe1 !important;
    }

    td {
        font-size: 20px;
        font-weight: 400;
        font-family: roboto;
        line-height: 1.67;
        color: #6F6B80;
        margin-bottom: 100px;
    }

    section#products_detals_Benefits {
        margin-top: 100px;
    }

    /* -------------------------------------
    Single Prodcust page css
    --------------------------------------*/


    .timeline-4 .card-body img {
        width: 64px;
        margin-bottom: 20px;
    }

    section#why_choose_us .main-timeline-4 .card.gradient-custom {
        background: transparent !important;
        border: none;
    }

    section#why_choose_us .main-timeline-4 .card-body h4 {
        color: #525fe1;
        font-size: 30px;
    }

    section#why_choose_us .main-timeline-4 .card-body p {
        color: #000;
    }

    .timeline-4.right-4 .card.gradient-custom-4 {
        background: transparent !important;
        border: none;
    }

    /* ---------------Call to action ------------ */
    section#call_to_act {
        padding: 100px 0;
    }

    section#call_to_act .container {
        background: linear-gradient(0deg, rgb(55 15 94 / 95%), rgb(18 17 98 / 61%)), url("{{ asset('assets/img/Cta.jpg') }}");
        background-size: cover;
        background-position: center;
        position: relative;
        padding: 90px;
        border-radius: 20px;
        background-attachment: fixed;
    }

    section#call_to_act p {
        font-size: 20px;
        font-weight: 400;
        line-height: 1.67;
        color: #ffffff;
        font-family: 'Urbanist', sans-serif;
    }

    section#call_to_act h5 {
        font-size: 26px;
        font-weight: 600;
        color: #ffffff;
        font-family: 'Urbanist', sans-serif;
    }

    section#call_to_act .button_cta_pro a {
        background: #525fe1;
        color: #fff;
        font-weight: 500;
        font-size: 22px;
        padding: 14px 40px;
        margin: 33px 0 0px 30px;
        border-radius: 8px;
    }

    section#Uses {
        position: relative;
    }

    section#Uses:before {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        border: 40px solid rgb(227 35 35 / 11%);
        border-radius: 50%;
        left: -129px;
        top: 224px;
    }

    section#What_Do {
        position: relative;
    }

    section#What_Do:before {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        border: 40px solid rgb(0 0 0 / 11%);
        border-radius: 50%;
        left: -129px;
        top: 185px;
    }

    section#products_categeory {
        position: relative;
    }

    section#products_categeory::before {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        border: 40px solid rgba(227, 35, 35, 0.11);
        border-radius: 50%;
        left: -129px;
        top: 80%;
    }

    /* footer */
    footer#sitefooter p i {
        margin-right: 10px;
    }

    footer#sitefooter a.hover_action {
        color: #fff;
    }

    footer#sitefooter img.text-md-center {
        width: 194px;
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 1024px) {
        .hero_content h1 {
            font-size: 42px;
        }
    }

    @media only screen and (max-width: 768px) {
        .hero_img img {
            width: 500px;
        }

        section#Hero_banner {
            height: 100%;
            padding: 0 0 50px 0;
        }

        section#Hero_banner .row {
            flex-direction: column-reverse;
            text-align: center;
        }

        section#Provide_trustseal:before {
            height: 250px;
            width: 250px;
            left: -129px;
            top: -121px;
        }

        section#call_to_act .button_cta_pro a {
            margin: 33px 0 0px 0px;

        }

        button.navbar-toggler i.fa.fa-bars {
            color: #7151f4;
            font-size: 45px;
            font-weight: 300;
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: none;
        }

        header#siteheader .navbar-collapse {
            display: block;
            width: 350px;
            background-color: #ffffff;
            position: fixed;
            left: -350px;
            top: 88px;
            bottom: 0;
            transition: ease-in-out 0.5s;
            height: 100%;
            z-index: 10;
        }

        header#siteheader .navbar-collapse.collapse.show {
            left: 0px;
        }

        ul.navbar-nav li.nav-item {
            text-align: left;
            padding: 36px 15px 3px 51px;
        }

        header#siteheader ul.navbar-nav li.nav-item a {
            color: #fff;
            font-size: 27px;
            font-family: 'Lato', sans-serif;
        }


        header#siteheader .navbar-collapse ul.navbar-nav li.nav-item a {
            color: #525fe1;
        }

        ul.dropdown-menu.show {
            background: #ffead9;
            margin-left: -11px;
        }

        footer#sitefooter {
            text-align: center;
            position: relative;
        }

        footer#sitefooter .row {
            display: inherit;
        }

        footer#sitefooter {
            padding: 30px 0;
        }
    }


    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {
        body {
            overflow-x: hidden;
        }

        /* Place the timelime to the left */
        .main-timeline-4::after {
            left: 31px;
        }

        /* Full-width containers */
        .timeline-4 {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        .main-timeline-4.text-white .card h4 {
            margin-bottom: 25px;
        }

        /* Make sure all circles are at the same spot */
        .left-4::after,
        .right-4::after {
            left: 18px;
        }

        .left-4::before {
            right: auto;
        }

        /* Make all right containers behave like the left ones */
        .right-4 {
            left: 0%;
        }
    }

    @media only screen and (max-width: 600px) {
        .hero_img img {
            width: 300px;
        }

        button.navbar-toggler i.fa.fa-bars {
            font-size: 28px;
        }

        header#siteheader ul.navbar-nav li.nav-item a {
            font-size: 22px;
        }

        .hero_content h1 {
            font-size: 35px;
            line-height: 45px;
            margin-top: 32px;
        }

        h2.two_Color.text-center {
            font-size: 24px;
        }

        section#Value_propostion h2:before {
            height: 100px;
            left: 16%;
            top: -48%;
        }

        .client_logo img {
            width: 200px !important;
            margin: 0 auto;
        }

        h2:after {
            left: 39%;
        }

        section#Provide_trustseal .owl-carousel.owl-theme {
            padding: 31px 0px 9px;
        }

        section#Popular_Products {
            padding: 60px 0;
        }

        .section-title .title {
            font-size: 32px;
        }

        h4.cars_title {
            font-size: 22px;
        }

        h3.title.text-center {
            font-size: 28px;
        }

        form#cta_form button.btn.btn-primary {
            font-size: 13px;
            padding: 15px 18px 15px 18px;
        }

        header#siteheader .navbar-collapse {
            width: 250px;
            left: -250px;
        }

        section#call_to_act .container {
            padding: 20px;
            border-radius: 20px;
        }

        section#call_to_act .container .button_cta_pro.d-flex {
            text-align: center;
            margin-top: 59px;
            display: block !important;
        }

        section#call_to_act .button_cta_pro a {
            margin-top: 30px;
            display: block;
        }

        .work-wrap .text, .work-wrap .img {
            width: 100% !important;
        }

        .work-wrap .img {
            height: 300px;
        }

        .work-wrap .text h2 {
            font-size: 30px;
        }

        .work-wrap.d-flex {
            display: inherit !important;
        }

        .work-wrap .img {
            height: 237px;
        }

        section#why_choose_us .main-timeline-4 .card.gradient-custom .p-4 {
            padding: 0rem !important;
        }

        .timeline-4 {
            padding-left: 50px;
        }

        .timeline-4 .card-body img {
            width: 40px;
        }

        section#why_choose_us .main-timeline-4 .card-body h4 {
            font-size: 20px;
            margin-bottom: 12px;
        }

        section#why_choose_us .main-timeline-4 .card-body p {
            font-size: 16px;
        }

        .timeline-4.right-4 .card.gradient-custom-4 .card-body.p-4 {
            padding: 0 !important;
        }

        section#why_choose_us {
            padding: 50px 0;
        }

        section#call_to_act {
            padding: 20px 20px;
        }

        section#call_to_act p {
            font-size: 16px;
        }

        section#call_to_act h5 {
            font-size: 16px;
        }

        section#call_to_act .button_cta_pro a {
            background: #525fe1;
            color: #fff;
            font-weight: 500;
            font-size: 17px;
            padding: 21px 2px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        section#call_to_action:before {
            content: "";
            position: absolute;
            height: 200px;
            width: 200px;
            border: 35px solid rgb(227 35 35 / 11%);
            border-radius: 50%;
            left: -100px;
            top: -95px;
        }

        p.paragraph_value {
            font-size: 16px;
        }

        .hero_content p {
            font-size: 16px;
        }

        /* About page  */
        section#about_hero h1 {
            font-size: 34px;
        }

        section#about_hero {
            height: 400px;
        }

        section#Welcome_about {
            padding: 50px 0;
        }

        section#Welcome_about h2:before {
            left: 0%;
        }

        section#About_misson {
            padding: 40px 0;
        }

        .value ul li span {
            margin-bottom: 0;
            margin-right: 20px;
            display: block;
        }

        .value ul li {
            margin-bottom: 20px;
        }

        /* Single products */
        section#products_img h1 {
            font-size: 38px;
        }

        section#products_details {
            padding: 40px 20px;
        }

        section#products_details h3 {
            font-size: 30px;
        }

        section#products_details p {
            font-size: 18px;
        }

        .all_details-products .food-menu-list a {
            display: block;
            margin-bottom: 20px;
        }

        section#products_detals_Benefits {
            margin-top: 50px;
        }

        section#Description p, section#Uses p {
            font-size: 18px;
            margin-bottom: 00px;
        }

        section#Description {
            margin-bottom: 40px;
        }

        section#Provide_trustseal:before {
            height: 150px;
            width: 150px;
            left: -68px;
            top: -81px;
        }

        section#Uses:before {
            height: 150px;
            width: 150px;
            left: -79px;
            top: 399px;
        }

        section#What_Do:before {
            height: 150px;
            width: 150px;
            left: -76px;
            top: 89%;
        }

        section#products_categeory::before {
            height: 150px;
            width: 150px;
            left: -77px;
            top: 98%;
        }

        section#products_categeory {
            padding: 50px 0;
        }

        section#About_misson h2:before {
            left: 32%;
            top: -81%;
        }

        section#Welcome_about h2:before {
            height: 100px;
            top: -84%;
            background-repeat: no-repeat;
        }

        section#About_misson h2 {
            font-size: 24px;
        }

        section#About_misson h2:before {
            height: 100px;
        }

        section#About_misson h2:after {
            left: 44%;
        }

        section#About_misson h2:after {
            width: 47px;
        }

        section#call_to_act:before {
            height: 0px;
            width: 0px;
            border: 0px;
        }

        section#Why_importers_should:before {
            content: "";
            position: absolute;
            height: 150px;
            width: 150px;
            border: 40px solid rgb(227 35 35 / 11%);
            border-radius: 50%;
            left: -69px;
            top: -74px;
        }

        section#Value_propostion .Carely_Export h2 {
            padding: 0 20px;
        }

        #Popular_Products .text.text-left {
            background: #f5f0f7;
            height: 600px;
        }

        section#products_details {
            padding: 12px;
        }

        section#Description {
            padding: 12px;
        }

        section#Specification {
            padding: 12px;
        }

        section#Ingredients {
            padding: 12px;
            margin: 30px 0;
        }

        section#Uses {
            padding: 12px;
        }

        h3.main_export_heading {
            font-size: 30px !important;
        }

        ul.dropdown-menu.show {
            background: #ffead9;
            margin-left: -11px;
        }
    }


    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .card_importers {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .top-circle {
        content: "";
        position: absolute;
        height: 300px;
        width: 300px;
        border: 40px solid rgba(0, 0, 0, 0.11);
        border-radius: 50%;
        left: -129px;
        top: 85%;
    }
    @media (max-width: 768px) {
        .top-circle {
            height: 150px;
            width: 150px;
            border-width: 20px;
            left: -64px;
            top: 100%;
            transform: translateY(-50%);
        }
    }
    /* Default font size */
    .carousel-caption h2,
    .carousel-caption h4,
    .carousel-caption p {
        font-size: 24px;
        line-height: 40px;
    }

    /* Media query for screens with a maximum width of 768px (for mobile devices) */
    @media (max-width: 768px) {
        .carousel-caption h2,
        .carousel-caption h4,
        .carousel-caption p {
            font-size: 18px;
            line-height: 25px;
        }
        @media (min-width: 200px) {
            .carousel-caption h2,
            .carousel-caption h4,
            .carousel-caption p {
                font-size: 15px;
                line-height: 23px;
            }
        }
    }

    #Welcome_about {
        background-color: #f8f8f8;
        padding: 40px 0;
    }

    #Welcome_about h2 {
        font-size: 32px;
        font-weight: bold;
        color: #333;
    }

    #Welcome_about span {
        color: #ff7f50;
    }

    #Welcome_about p {
        font-size: 18px;
        color: #777;
        margin-top: 20px;
        text-align: center;
    }
/*about us style*/
    #Welcome_about {
        background-color: #f8f8f8;
        padding: 40px 0;
    }

    #Welcome_about h2 {
        font-size: 32px;
        font-weight: bold;
        color: #333;
    }

    #Welcome_about span {
        color: #ff7f50;
    }

    #Welcome_about p {
        font-size: 18px;
        color: #777;
        margin-top: 20px;
        text-align: center;
    }
    .iti--allow-dropdown{
        height: 60px;
    }
/*    footer color*/
    .white-links a {
        color: white;
        margin-left: 10px;
    }
    .footer-heading{
        margin-left: 5px;
        padding:10px;
    }
    .footer-links{
        list-style: none;
        padding: 0px;
    }
</style>
