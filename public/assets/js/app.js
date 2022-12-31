$(window).on("load", function() {

    var elem = document.querySelector('.masonry');
    var msnry = new Masonry( elem, {
        itemSelector: '.masonry-item',
        columnWidth: 200,
        gutter: 20,
        columnWidth: ".masonry-sizer",
        percentPosition: true, 
    });

    $('.btn-to-top').click(function() {
        $("html", "body").animate(
            {
                scrollTop: 0,
            },
            2000,
            "easeInOutExpo"
        );
    });

    AOS.init();

    const galleryIsotope = $('.gallery-container').isotope({
        itemSelector: ".gallery-item",
    });

    $('.gallery-filters li').click(function() {
        $(".gallery-filters li").removeClass("filter-active");
        $(".gallery-filters li").removeClass("text-white");
        $(this).addClass("filter-active");
        $(this).addClass("text-white");
        
        galleryIsotope.isotope({
            filter: $(this).data("filter"),
        });
        
        AOS.init();
    });

});