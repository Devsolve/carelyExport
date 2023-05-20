  <!-- ======= Header ======= -->
  {{-- <section id="topbar" class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
              <i class="bi bi-envelope d-flex align-items-center"><a
                      href="mailto:contact@example.com">contact@example.com</a></i>
              <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
      </div>
  </section> --}}

  <!-- End Top Bar -->




  {{-- 
  {{-- <header id="header" class="header d-flex align-items-center">

      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <img src="{{ asset('assets/img/carelyexport_icon.png') }}" alt="CarelyExport">
              <h1><span>Carely Export</span></h1>
          </a>
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a href="{{ route('home') }}">Home</a></li>

                  <li><a href="{{ route('page-name', 'about-us') }}">About Us</a></li>

                  <li class="dropdown"><a href="{{ route('product', 'vermicompost') }}"><span>Product</span>
                          <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="{{ route('product', 'vermicompost') }}">Vermicompost</a></li>
                      </ul>
                  </li>
                  <li><a href="{{ route('page-name', 'blog') }}">Blog</a></li>
                  <li><a href="{{ route('page-name', 'contact-us') }}">Contact Us</a></li>
              </ul>
          </nav><!-- .navbar -->
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      </div>
  </header> --}}


  <!-- End Header -->
  <!-- End Header -->


  <header id="siteheader">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}"><img src="assets/img/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span>
                      <i class="fa fa-bars"></i>
                  </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                      </li>


                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('page-name', 'about-us') }}">About Us</a>
                      </li>


                      {{-- <li class="dropdown"><a href="{{ route('product', 'vermicompost') }}"><span>Product</span>
                              <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                          <ul>
                              <li><a href="{{ route('product', 'vermicompost') }}">Vermicompost</a></li>
                          </ul>
                      </li> --}}

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Product
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li class="multiple_memu"><a class="dropdown-item" href="#">Action</a>
                                  <ul class="submenu_hover">
                                      <li><a href="#">Rice 1</a></li>
                                      <li><a href="#">Rice 1</a></li>
                                      <li><a href="#">Rice 1</a></li>
                                      <li><a href="#">Rice 1</a></li>
                                  </ul>
                              </li>
                              <li class="multiple_memu2"><a class="dropdown-item" href="#">Another action</a>
                                  <ul class="submenu_hover">
                                      <li><a href="#">Rice 2</a></li>
                                      <li><a href="#">Rice 2</a></li>
                                      <li><a href="#">Rice 2</a></li>
                                      <li><a href="#">Rice 2</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>


                      {{-- <li><a href="{{ route('page-name', 'blog') }}">Blog</a></li> --}}
                      <li class="nav-item"><a class="nav-link" href="{{ route('page-name', 'blog') }}">Blog</a></li>

                      {{-- <li><a href="{{ route('page-name', 'contact-us') }}">Contact Us</a></li> --}}
                      <li class="nav-item"><a class="nav-link" href="{{ route('page-name', 'contact-us') }}">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>
