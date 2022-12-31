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
                    <li>SEA FREIGHT</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- product 1 Pic -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold about-us-title">SEA FREIGHT</h2>
            </div>
            <div class="container mt-5 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/assets/img/ourSolutions/seaFreight.jpg" class="img-materials" alt="">
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
                    Sea Freight is a method of transporting large amounts of goods using carrier ships and also known as ocean freight. At Pundi Mas, we can organize the effective transport for your goods by sea freight. Goods are packed into containers and then loaded onto a vessel. With our LCL (Less than Container Load) service, you don’t need to have enough cargo to fill a whole container in order to get a beneficial shipping rate.
                </p>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    We also offer FCL (Full Container Load) shipments, we provide  CY/Door-to- CY/Door services from major International ports. These are the advantages of sea freight:
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Possibility of carrying a wide variety of cargo, with high availability of routes and vessels
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Sea freight rates are low for transporting large quantities at once, over long distances
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Most carbon-efficient mode of transport when comparing the fuel consumption to the weight transported per shipment
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Shipping by sea or ocean is the safest form of worldwide transport
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Possibility of safely transporting dangerous and hazardous goods that are forbidden in other shipping services
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Lower maintenance costs compared to rail or road transport
                    </li>
                </ul>
                <p class="mt-2">
                    Do not hesitate to contact us, our customer service will support you with shipping documents requirement, bookings, planning of your shipment as well as will assist you for the duration of your shipment and beyond. Getting a quote is free, with no obligation to register or book.
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
