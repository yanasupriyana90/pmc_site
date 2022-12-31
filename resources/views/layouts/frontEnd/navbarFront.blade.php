<nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <img src="/assets/img/logo.png" class="img-logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bolder {{ request()->is('/') ? 'active' : '' }}" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder {{ request()->is('about') ? 'active' : '' }}" href="about">ABOUT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bolder dropdown-toggle {{ request()->is(['product_1', 'product_2', 'product_3', 'product_4', 'product_5', 'product_6', 'product_7']) ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        OUR SERVICES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item {{ request()->is('product_1') ? 'active' : '' }}" href="product_1">SEA FREIGHT</a></li>
                        <li><a class="dropdown-item {{ request()->is('product_2') ? 'active' : '' }}" href="product_2">AIR FREIGHT</a></li>
                        <li><a class="dropdown-item {{ request()->is('product_3') ? 'active' : '' }}" href="product_3">DOMESTIC TRANSPORT</a></li>
                        <li><a class="dropdown-item {{ request()->is('product_4') ? 'active' : '' }}" href="product_4">CUSTOM CLEARANCE</a></li>
                        <li><a class="dropdown-item {{ request()->is('product_5') ? 'active' : '' }}" href="product_5">STORAGE & WAREHOUSE</a></li>
                        <li><a class="dropdown-item {{ request()->is('product_6') ? 'active' : '' }}" href="product_6">LOGISTICS & SUPPLY CHAIN</a></li>
                        <li><a class="dropdown-item {{ request()->is('product_7') ? 'active' : '' }}" href="product_7">PROJECT/OUT OF GAUGE CARGOES</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder {{ request()->is('gallery') ? 'active' : '' }}" href="gallery">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder {{ request()->is('contact') ? 'active' : '' }}" href="contact">CONTACT</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link fw-bold" href="login">Login <i class="fas fa-power-off"></i></a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
