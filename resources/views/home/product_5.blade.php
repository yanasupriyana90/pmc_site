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
                    <li>STORAGE & WAREHOUSE</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- product 1 Pic -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold about-us-title">STORAGE & WAREHOUSE</h2>
            </div>
            <div class="container mt-5 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/assets/img/ourSolutions/storageWarehouse.jpg" class="img-materials" alt="">
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
                    Pundi Mas provide many logistics warehouses in Indonesia and overseas such as chilled/frozen storage warehouses, dry warehouses, etc. We also offer a one-stop distribution processing service to suit the product, including storage at the client’s desired temperature range.
                </p>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    We prepare multifunctional warehouses that can meet all the various needs of our clients. Our storage will protect goods from pests and insects. Pundi Mas provide cold storage for longer life to certain easily perishable items like fish, dairy products, etc. We also provide facilitates for large-scale production of goods.
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
                    We will give you the best services depending upon your goods or products. We will always ready to help you as well as possible.
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
