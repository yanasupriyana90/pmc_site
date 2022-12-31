@include('layouts.frontEnd.header')

<body>

    <!-- navbar -->
    @include('layouts.frontEnd.navbarFront')
    <!-- end navbar -->

    <!-- breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-center text-white">
                <h2>Contact</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- contact -->
    <div class="contact mt-5">
        <div class="maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3548962849513!2d107.55341421175984!3d-6.967392881223747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ef7620598add%3A0xbfb21941088bbb47!2sPUNDI%20MAS%20CORPS!5e0!3m2!1sen!2sid!4v1668583013753!5m2!1sen!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow shadow-sm">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Location</h4>
                                        <p class="ms-5">Jl. Taman Kopo Indah 3 No.72, Mekar Rahayu, Kec. Margaasih, Kabupaten Bandung, Jawa Barat, 40218 | Indonesia</p>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="mailto:info@pundimascorps.com">
                                            <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder text-black">Email</h4>
                                            <p class="ms-5 text-black">info@pundimascorps.com</p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="tel:+622254430315">
                                            <i class="fa fa-phone-alt fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder text-black">Phone</h4>
                                            <p class="ms-5 text-black">(+62-22) 54430315</p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <a href="https://api.whatsapp.com/send?phone=6287763559777">
                                            <i class="fa-brands fa-whatsapp fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder text-black">Whatsapp</h4>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <a href="https://t.me/PundiMasCorps">
                                            <i class="fa-brands fa-telegram fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder text-black">Telegram</h4>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <a href="https://www.instagram.com/pundi_mas_cargo">
                                            <i class="fa-brands fa-instagram fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder text-black">Instagram</h4>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <a href="https://www.linkedin.com/">
                                            <i class="fa-brands fab fa-linkedin fa-2x primary float-start me-3"></i>
                                            <h4 class="fw-bolder text-black">Linkedin</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    @include('layouts.frontEnd.footer')
    <!-- end footer -->
</body>

</html>
