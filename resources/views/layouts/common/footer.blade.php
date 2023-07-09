<footer id="sitefooter" class="bg-white text-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="footer-logo w-50">
                </a>
                <p class="footer-text">Export Your Need</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading fw-bold">Products</h6>
                <ul class="footer-links text-dark ms-3">
                    <li><a href="{{ route('product', 'Rice') }}" class="text-dark">Rice</a></li>
                    <li><a href="{{ route('product', 'vermicompost') }}" class="text-dark">Vermicompost</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading fw-bold">Menu</h6>
                <ul class="footer-links text-dark ms-3">
                    <li><a href="{{ route('page-name', 'terms-conditions') }}" class="text-dark">Terms &amp; Conditions</a></li>
                    <li><a href="{{ route('page-name', 'privacy-policy') }}" class="text-dark">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading fw-bold">Contact</h6>
                <ul class="footer-links footer-contact text-dark ms-3">
                    <li><i class="fa fa-home mr-3 "></i> &nbsp; Dakshin Barasat, West Bengal, India, 743372</li>
                    <li><i class="fa fa-envelope mr-2"></i>&nbsp;<a href="mailto:info@carelyexport.com" class="text-dark">info@carelyexport.com</a></li>
                    <li><i class="fa fa-phone mr-2"></i>&nbsp;<a href="tel:+917001821069"  class="text-dark">+91 7001821069</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3" style="background-color: #F5F5F5 !important;">
        <div class="text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</footer>
