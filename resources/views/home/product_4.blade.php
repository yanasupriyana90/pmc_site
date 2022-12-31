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
                    <li>CUSTOM CLEARANCE</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- product 1 Pic -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold about-us-title">CUSTOM CLEARANCE</h2>
            </div>
            <div class="container mt-5 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/assets/img/ourSolutions/customClearance.jpg" class="img-materials" alt="">
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
                    Our well experienced team has a wealth of knowledge and will advise you what documents will be require for your consignment depending upon the nature of product and customs regulations.
                </p>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    We can assist you with documents requirement for Import and Export of any product inside or outside of Indonesia for below type of movement.
                </p>
                <ul class="list-group list-group-flush">
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
                </ul>
                <p class="mt-2">
                    {{-- We are ready to help throughout the process of your shipment, from handling the initial quote with detail and diligence to tracking the shipping details from origin through to final destination. --}}
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
