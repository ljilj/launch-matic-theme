jQuery(document).ready(function ($) {
    if (window.matchMedia("(min-width: 1025px)").matches) {
        var rellax = new Rellax('.rellax', {
            callback: function (position) {
            }
        });
    }
//    blog post carousel
    $('#blog-slider').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1500: {
                items: 3
            },
            2000: {
                items: 3
            },
            3000: {
                items: 3
            }
        }
    });
//    mobile menu
    $('header .show-mobile').click(function () {
        $('body').toggleClass('active-menu');
    });
    if (window.matchMedia("(max-width: 767px)").matches) {
        $('.email-input').attr('placeholder', 'Your email for early access');
    }
    new WOW().init();

    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = 0;

    $(window).scroll(function (event) {
        didScroll = true;
    });
    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    function hasScrolled() {
        var st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > navbarHeight) {
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
    }


}); 