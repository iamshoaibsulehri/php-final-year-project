$(document).ready(function() {

    $('.owl-carousel-3col').owlCarousel({
        loop: true,
        responsiveClass: true,
        items: 3,
        nav: true,
        margin: 15,
        dots: false,
        navText: [
            '<i class="fa fa-chevron-left"></i>',
            '<i class="fa fa-chevron-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    $('.owl-carousel-2col').owlCarousel({
        loop: true,
        responsiveClass: true,
        items: 1,
        nav: false,
        margin: 15,
        dots: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        navText: [
            '<i class="fa fa-chevron-left"></i>',
            '<i class="fa fa-chevron-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    var top = $('.header-nav').offset().top;
    $(window).scroll(function(event) {
        var y = $(this).scrollTop();
        if (y >= top) {
            $('.header-nav').addClass('fixed');
            $('body').addClass('sticky');
        } else {
            $('.header-nav').removeClass('fixed');
            $('body').removeClass('sticky');
        }
    });

    $('.odometer-animate-number').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    var $nivo_lightbox = $('a[data-lightbox-gallery]');
    var portfolio_filter = ".portfolio-filter a";
    var $portfolio_filter_first_child = $(".portfolio-filter a:eq(0)");
    if ($nivo_lightbox.length > 0) {
        $nivo_lightbox.nivoLightbox({
            effect: 'fadeScale',
            afterShowLightbox: function() {
                var $nivo_iframe = $('.nivo-lightbox-content > iframe');
                if ($nivo_iframe.length > 0) {
                    var src = $nivo_iframe.attr('src');
                    $nivo_iframe.attr('src', src + '?autoplay=1');
                }
            }
        });
    }
    var $portfolio_gallery = $(".gallery-isotope");
    if ($portfolio_gallery.hasClass("masonry")) {
        $portfolio_gallery.isotope({
            itemSelector: '.gallery-item',
            layoutMode: "masonry"
        });
    } else {
        $portfolio_gallery.isotope({
            itemSelector: '.gallery-item',
            layoutMode: "fitRows"
        });
    }
    $("body").on('click', portfolio_filter, function(e) {
        $(portfolio_filter).removeClass("active");
        $(this).addClass("active");
        var fselector = $(this).data('filter');
        if ($portfolio_gallery.hasClass("masonry")) {
            $portfolio_gallery.isotope({
                itemSelector: '.gallery-item',
                layoutMode: "masonry",
                masonry: {
                    columnWidth: '.gallery-item-sizer'
                },
                filter: fselector
            });
        } else {
            $portfolio_gallery.isotope({
                itemSelector: '.gallery-item',
                layoutMode: "fitRows",
                filter: fselector
            });
        }
        return false;
    });
    var $mfpLightboxImage = $('[data-lightbox="image"]');
    if ($mfpLightboxImage.length > 0) {
        $mfpLightboxImage.magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins ', // class to remove default margin from left and right side
            image: {
                verticalFit: true
            }
        });
    }


});