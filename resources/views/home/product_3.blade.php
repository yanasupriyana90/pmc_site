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
                    <li>DOMESTIC TRANSPORT</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- product 1 Pic -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold about-us-title">DOMESTIC TRANSPORT</h2>
            </div>
            <div class="container mt-5 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/assets/img/ourSolutions/domesticTransport.jpg" class="img-materials" alt="">
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
                    Pundi Mas provide the movement of goods within the national borders of a country with efficient, professional, and competitive transport service. We offer door–to–door domestic transportation solutions.
                </p>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    Depending on the urgency of your shipment, the commodity and the mode of transportation you require, Pundi Mas can accommodate your domestic transportation shipment requirements with a customized freight logistics plan. We combine the best of our sea freight and ground logistics in order to help you meet your deadline.
                </p>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Air freight is quick, particularly if you use a direct service. You can expect goods to be at its intended destination within days of sending it whilst sea freight can take several weeks.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Air freight is charged based on weight as opposed to volume which makes it more cost effective to send smaller deliveries via air freight than by sea.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        We are able to offer more options to the importer with air freight, including consoles and direct routes.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        Providing the goods are correctly packaged, air freight is usually a better way of shipping fragile items as damage is less likely compared to sea freight.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double primary"></i>
                        As flights are tracked, shipments are more easily traceable which can give businesses more peace of mind.
                    </li>
                </ul> --}}
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
