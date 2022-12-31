@include('layouts.frontEnd.header')

<body>

    <!-- navbar -->
    @include('layouts.frontEnd.navbarFront')
    <!-- end navbar -->

    <!-- breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-center text-white">
                <h2>GALLERY</h2>
                <ol class="d-flex list-unstyled">
                    <li>HOME</li>
                    <li>GALLERY</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- gallery -->

    <div class="container mt-5">
        <div class="title-container">
            <h2 class="text-center fw-bold">GALLERY VIDEO</h2>
        </div>
        <div class="containerVideo mt-3">
            <div class="video-list">
                <video class="active" src="/assets/video/PMC New Year 1080p.mp4" muted></video>
                <video src="/assets/video/New Year PMC.mp4" muted></video>
            </div>
            <div class="main-video">
                <video src="/assets/video/PMC New Year 1080p.mp4" muted controls></video>
            </div>
        </div>

    </div>

    <div class="gallery mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">GALLERY PHOTO</h2>
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
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_8.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_9.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_10.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_1.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_2.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_2.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_3.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_4.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_5.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_6.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_6.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-worker">
                            <img src="/assets/img/worker_7.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_7.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_8.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_9.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_10.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_11.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_12.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 gallery-item filter-factory">
                            <img src="/assets/img/company_13.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->

    <!-- footer -->
    @include('layouts.frontEnd.footer')
    <!-- end footer -->

</body>

</html>

<script>
    $(document).ready(function() {

        $('.video-list video').click(function() {

            $(this).addClass('active').siblings().removeClass('active');

            let src = $(this).attr('src')
            $('.main-video video').attr('src',src);
        });
    });
</script>
