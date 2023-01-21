@include('layouts.frontEnd.header')

<body>

    <!-- navbar -->
    @include('layouts.frontEnd.navbarFront')
    <!-- end navbar -->

    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-current="true" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/Chinese New Year Lanscape.jpg" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>HAPPY CHINESE NEW YEAR 2023</h5>
                    <p>Good fortune is ahead! May you and your family have a prosperous and joyful New Year!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slide_1.jpg" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>LAND TRANSPORTATION</h5>
                    <p>We provide various trucking services to support your supply chain needs, integrated GPS systems and experienced operational teams that monitor every delivery 24 hours.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slide_2.jpg" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FREIGHT FORWARDING</h5>
                    <p>At PMC, we assure your shipments, by using our extensive global freight forwarding network alliances we are able to provide excellent service lanes and connectivity to major gateways.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slide_3.jpg" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PROJECT LOGISTICS</h5>
                    <p>When cargo is either immensely massive or has disproportionate dimensions, project logistics is a logistics manager's best solution. We can handle and manage the entire transportation process of project cargos from start-to-finish.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end carousel -->

    <!-- Why Choose us-->
    <div class="about-us mt-5">
        <div class="container">
            <div class="about-us-container">
            {{-- <div class="title-container"> --}}
                <h2 class="text-center fw-bold">WHY CHOOSE US ?</h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <h3 class="fw-bold about-us-title">
                        Pundi Mas Corporation
                    </h3>
                    <p class="fw-bolder mt-4 about-us-subtitle">
                        Pundi Mas Corporation is a freight forwarding that offers the best service with the best rates for various destinations around the world based of Indonesia. We will carry out freight rate negotiations, container tracking, customs documentation and freight consolidation, among other tasks. While having a strong network and alliances with carriers and agents all over the world, we are able to provide every logistic solution to our valued customers.
                    </p>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <p>
                        FIND REASONS TO CHOOSE US AS YOUR FREIGHT PARTNER
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fa-solid fa-check-double primary"></i>
                            We see our role as an extension of your business, delivering excellence and zero defect service that contributes towards your reputation.
                        </li>
                        <li class="list-group-item">
                            <i class="fa-solid fa-check-double primary"></i>
                            We prioritize safety, health and the environment in all our operations through ongoing training of our people, continuous risk assessment and the cross–fertilization of innovative ideas from across our various operations. We offer safer, cleaner and more efficient shipping service solutions.
                        </li>
                    </ul>
                    <p class="mt-5">
                        {{-- Our International Network, Cv Pundi Mas has an agency cooperation with big 5 China Consolidator named, Tianjin Consol International Group Co., Ltd. (TCl's) TC l's international network, WorldWide Alliance, short for WWA, is founded in 2007 and comprised of exclusive and world's leading NVOCCs. As a proud member of WWA, TCI proves its strength and influence in the local LCL industry. WWA's extensive global network provides a strong support and guarantee for our business development and innovation. --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end Why Choose us-->

    <div class="bg-warning text-dark px-6 py-2">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <p class="fs-5 mt-0"><strong>PROVIDE FASTEST & AFFORDABLE SHIPPING SERVICES</strong></p>
                    <p class="fs-8 mb-0">Global supplier of transport and logistics solutions</p>
                </div>
                {{-- <div class="row align-items-center"> --}}
                    <div class="col-2">
                        <a href='/contact' class='btn btn-sm btn-outline-light'>REQUEST A FREE QUOTE</a>
                        {{-- <button type="button" class="btn btn-sm btn-outline-light">REQUEST A FREE QUOTE</button> --}}
                    {{-- </div> --}}
                    {{-- <div class="credits">
                        Designed by <strong>Yana Corbia</strong>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services -->
    <div class="services mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">OUR SERVICES</h2>
            </div>
            <p class="text-center mt-4" data-aos="zoom-in" data-aos-duration="1000">
                WE HAVE WIDE NETWORK OF OFFICES IN ALL MAJOR LOCATIONS TO HELP YOU WITH THE SERVICES WE OFFER
            </p>
            <div class="row mt-5">
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 text-center p-4 mb-4">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-ship fa-3x"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">SEA<br>FREIGHT</div>
                            <p class="card-description">
                                The word cargo refers in particular to goods or produce being...
                            </p>
                            <a href="/product_1" class="btn btn-warning">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 text-center p-4 mb-4">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-plane fa-3x"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">AIR<br>FREIGHT</div>
                            <p class="card-description">
                                The word cargo refers in particular to goods or produce being...
                            </p>
                            <a href="/product_2" class="btn btn-warning">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 text-center p-4 mb-4">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-road fa-3x"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">DOMESTIC<br>TRANSPORT</div>
                            <p class="card-description">
                                The word cargo refers in particular to goods or produce being...
                            </p>
                            <a href="/product_3" class="btn btn-warning">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 text-center p-4 mb-4">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-warehouse fa-3x"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">CUSTOM<br>CLEARANCE</div>
                            <p class="card-description">
                                The word cargo refers in particular to goods or produce being...
                            </p>
                            <a href="/product_4" class="btn btn-warning">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 text-center p-4 mb-4">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-box-open fa-3x"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">STORAGE & WAREHOUSE</div>
                            <p class="card-description">
                                The word cargo refers in particular to goods or produce being...
                            </p>
                            <a href="/product_5" class="btn btn-warning">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 text-center p-4 mb-4">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-truck fa-3x"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">LOGISTICS &<br>SUPPLY CHAIN</div>
                            <p class="card-description">
                                The word cargo refers in particular to goods or produce being...
                            </p>
                            <a href="/product_6" class="btn btn-warning">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card border-0 text-center p-4 mb-4">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-train fa-3x"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">PROJECT/OUT OF<br>GAUGE CARGOES</div>
                            <p class="card-description">
                                The word cargo refers in particular to goods or produce being...
                            </p>
                            <a href="/product_7" class="btn btn-warning">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Our Services -->




    <!-- gallery -->
    {{-- <div class="gallery mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">GALERY</h2>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled d-flex gallery-filters">
                        <li data-filter="*" class="py-2 px-4 filter-active text-white">All</li>
                        <li data-filter=".filter-factory" class="py-2 px-4">Company</li>
                        <li data-filter=".filter-worker" class="py-2 px-4">Worker</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="masonry gallery-container" data-aos="zoom-in-up">
                        <div class="masonry-sizer"></div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/gallery_1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/gallery_2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/gallery_3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/gallery_4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/gallery_5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/gallery_6.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/gallery_7.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/gallery_8.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end gallery -->

    <!-- client -->
    <div class="clients mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">OUR PARTNERS</h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/Mediterranean_Shipping_Company_logo.svg" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/YangMing.png" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/cosco-shipping-vector-logo.svg" alt="" class="img-fluid brand-image mt-4">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/esl.png" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/SITC.svg" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/hanjin.svg" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/hapag.svg" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/oocl.svg" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/CMA_CGM_logo.svg" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/KMTC- Group.svg" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/tanto-logo.png" alt="" class="img-fluid brand-image">
                </div>
                <div class="col-md-3 pt-5 text-center m-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="/assets/img/benLine.png" alt="" class="img-fluid brand-image">
                </div>
            </div>
        </div>

    </div>
    <!-- end client -->

    <!-- footer -->
    @include('layouts.frontEnd.footer')
    <!-- end footer -->

</body>

</html>
