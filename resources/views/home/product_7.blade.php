@include('layouts.frontEnd.header')

<body>

    <!-- navbar -->
    @include('layouts.frontEnd.navbarFront')
    <!-- end navbar -->

    <!-- breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-center text-white">
                <h2>OUR SERVICES</h2>
                <ol class="d-flex list-unstyled">
                    <li>HOME</li>
                    <li>PROJECT/OUT OF GAUGE CARGOES</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- product 1 Pic -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold about-us-title">PROJECT/OUT OF GAUGE CARGOES</h2>
            </div>
            <div class="container mt-5 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/assets/img/ourSolutions/project.jpg" class="img-materials" alt="">
            </div>
        </div>
    </div>
    <!-- end product 1 pic -->

    <!-- product 1 desc -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                {{-- <h3 class="fw-bold about-us-title">
                    SEA FREIGHT
                </h3> --}}
                <p class="fw-bolder mt-4 about-us-subtitle">
                    Project and Out of Gauge cargo is one of the key factors for a successful import or export.
                </p>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    Pundi Mas will be the solution with the experienced employees and professional agency network for transporting out of gauge cargo, which cannot be transported by standard vehicles and equipment due to its weight and/or size.
                </p>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Clearance for Import/Export of New/Used Vehicles
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Clearance for Personal Effect shipments
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Clearance for Commercial Shipments
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Clearance for Dangerous Goods
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Clearance for Pharmaceutical Products
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Clearance for Electrical Items / Machinery / Cosmetic Products / Food Stuff, etc.
                    </li>
                </ul> --}}
                <p class="mt-2">
                    Pundi Mas provides operational services within the scope of land transportation especially in cases where solutions should be created, lifting crane usage and assemblage, and where handling is required.
                </p>
            </div>
        </div>
    </div>
    <!-- end product 1 desc -->

    <!-- footer -->
    @include('layouts.frontEnd.footer')
    <!-- end footer -->
</body>

</html>
