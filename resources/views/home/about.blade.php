@include('layouts.frontEnd.header')

<body>

    <!-- navbar -->
    @include('layouts.frontEnd.navbarFront')
    <!-- end navbar -->

    <!-- breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-center text-white">
                <h2>ABOUT</h2>
                <ol class="d-flex list-unstyled">
                    <li>HOME</li>
                    <li>ABOUT</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- about -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <h3 class="fw-bold about-us-title">
                    Pundi Mas Corporation
                </h3>
                <p class="fw-bolder mt-4 about-us-subtitle">
                    Pundi Mas Corporation formed in 2010, is an international freight forwarding Company and also the first logistics company starting professional overseas personal & machineries mover project, also handling for General commodity export.
                </p>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    "The Professional" personal & machineries mover project features our operation characteristic, and "the worldwide trade lanes" is our advantage. With continuous growth of the business, Pundi Mas has now become a comprehensive logistics company with service covering:
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Ocean, Air and Sea Air Transportation;
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Inland Trucking, Customs Clearance, Packing, Warehousing;
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        and As Supply Chain Company.
                    </li>
                </ul>
                {{-- <p class="mt-2">
                    Our International Network, Cv Pundi Mas has an agency cooperation with big 5 China Consolidator named, Tianjin Consol International Group Co., Ltd. (TCl's) TC l's international network, WorldWide Alliance, short for WWA, is founded in 2007 and comprised of exclusive and world's leading NVOCCs. As a proud member of WWA, TCI proves its strength and influence in the local LCL industry. WWA's extensive global network provides a strong support and guarantee for our business development and innovation.
                </p> --}}
            </div>
        </div>
    </div>
    <!-- end about -->

        <!-- Vision -->
        <div class="teams bg-light mt-5 py-5">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">VISION</h2>
                </div>
                <h5 class="text-center mt-4 mb-5">
                    "Your satisfaction is our goal"
                </h5>
                <div class="title-container">
                    <h2 class="text-center fw-bold">MISSION</h2>
                </div>
                <h5 class="text-center mt-4">
                    "We deliver your shipment until final destination with safe & efficient"
                </h5>
            </div>
        </div>
        <!-- end teams -->

    <!-- teams -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">BOARD of MANAGEMENT</h2>
            </div>
            <p class="text-center mt-4">
                Every month we move many of containers to various destinations around the world for our regular & satisfied clients.<br>
                We will support you and give the best service as well as possible to satisfy our customers everywhere.
            </p>
                <div class="row">
                    <div class="col-md-4 mt-4" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card text-dark bg-warning" style="width: 20rem;">
                            <img src="/assets/img/lia1.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">LIA FARIANA</h5>
                                <p class="card-subtitle text-muted">COMMISSIONER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card text-dark bg-warning" style="width: 20rem;">
                            <img src="/assets/img/Ferry Wong.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">EDI FERRY WONG</h5>
                                <p class="card-subtitle text-muted">MANAGING DIRECTOR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card text-dark bg-warning" style="width: 20rem; ">
                            <img src="/assets/img/ayu1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">SRI RAHAYU (AYU)</h5>
                                <p class="card-subtitle text-muted">DEPUTY MANAGING DIRECTOR</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- end teams -->

    <!-- footer -->
    @include('layouts.frontEnd.footer')
    <!-- end footer -->

</body>

</html>
