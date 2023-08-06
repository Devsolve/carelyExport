<header id="siteheader">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                onclick="toggleHeader()">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}"
                    alt=""></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page-name', 'about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                            <li class="multiple_memu">
                                <a class="dropdown-item " href="{{route('product', 'rice')  }}">Rice</a>
                                {{-- <ul class="submenu_hover">
                                    <li><a href="{{ route('product', 'rice') }}">Rice</a></li>
                                    <li><a href="{{ route('product', 'vermicompost') }}">Vermicompost</a></li>
                                </ul> --}}
                            </li>
                            <li class="multiple_memu">
                                <a class="dropdown-item " href="{{ route('product', 'vermicompost') }}">Vermicompost</a>
                                {{-- <ul class="submenu_hover">
                                    <li><a href="{{ route('product', 'rice') }}">Rice</a></li>
                                    <li><a href="{{ route('product', 'vermicompost') }}">Vermicompost</a></li>
                                </ul> --}}
                            </li>
                        </ul>
                    </li>
                    {{--                    <li class="nav-item"><a class="nav-link" href="{{ route('page-name', 'blog') }}">Blog</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('page-name', 'contact-us') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="overlay"></div>

<script>
    function toggleHeader() {
        var header = document.getElementById('siteheader');
        if (header.classList.contains('open')) {
            header.classList.remove('open');
        } else {
            header.classList.add('open');
            window.scrollTo({
                top: header.offsetTop,
                behavior: 'smooth'
            });
        }
    }
</script>

<style>
    @media (min-width: 300px) {
        #siteheader.open .navbar-collapse {
            display: none !important;
        }
    }

    .navbar {
        border-bottom: 1px solid lightgray !important;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: black;
        opacity: 0.5;
        visibility: hidden;
        transition: opacity 0.3s;
        z-index: 9999;
    }

    .show-overlay {
        visibility: initial;
    }
</style>
