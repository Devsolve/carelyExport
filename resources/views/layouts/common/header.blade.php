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


                      {{--<li class="dropdown"><a href="{{ route('product', 'vermicompost') }}"><span>Product</span>
                              <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                          <ul>
                              <li><a href="{{ route('product', 'vermicompost') }}">Vermicompost</a></li>
                          </ul>
                      </li>--}}

                      {{--<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Product
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li class="multiple_memu"><a class="dropdown-item" href="{{ route('product') }}">Products</a>
                                  <ul class="submenu_hover">
                                      <li><a href="{{ route('product', 'vermicompost') }}">Vermicompost</a></li>
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
                      </li>--}}

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                              Product
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li class="multiple_memu"><a class="dropdown-item" href="{{ route('product') }}">Products</a>
                                  <ul class="submenu_hover">
                                      <li><a href="{{ route('product', 'all') }}">All Products</a></li>
                                      <li><a href="{{ route('product', 'vermicompost') }}">Vermicompost</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item"><a class="nav-link" href="{{ route('page-name', 'blog') }}">Blog</a></li>

                      <li class="nav-item"><a class="nav-link" href="{{ route('page-name', 'contact-us') }}">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>
