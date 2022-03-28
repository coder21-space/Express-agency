(function($) {
    "use strict";

	//========================
    // Slider carousel
    //========================
    $('.slider-caro').nivoSlider({
        effect: 'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 800,
        pauseTime: 5000,
        startSlide: 0,
        directionNav: true,
        controlNavThumbs: false,
        pauseOnHover: false,
        manualAdvance: false
    });
    $(".nivo-prevNav").text("<");
    $(".nivo-nextNav").text(">");


	//========================
    // Service carousel
    //========================
    $('.service-caro').owlCarousel({
    	autoplay: true,
        center: true,
        loop: true,
        nav: true,
        items: 3,
        smartSpeed: 1000,
        navText: ['<span><i class="flaticon-back"></i></span>', '<span><i class="flaticon-next"></i></span>'],
        responsive: {
            992: {
                items: 3
            },
            576: {
                items: 2
            },
            0: {
                items: 1
            }
        }
    });

    //========================
    // Team carousel
    //========================
    $('.team-caro').owlCarousel({
    	autoplay: true,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,  
        smartSpeed: 1000,
        navText: ['<span><i class="flaticon-back"></i></span>', '<span><i class="flaticon-next"></i></span>'],
        responsive:{
            0:{
                items:1
            },
            401:{
                items:2
            },
            768:{
                items:3
            }
        }
    });


    //========================
    // Testiomonial carousel
    //========================
    $('.testiomonial-caro').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        smartSpeed: 500,
        thumbs: true,
        thumbsPrerendered: true
    });

    $('.post-carousel').owlCarousel({
    	autoplay: true,
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
        dots: false,
        items: 1,
        smartSpeed: 500
    });


    //========================
    // Skills
    //========================
    if ($(".skill-set").length > 0)
    {
        $('.skill-set').appear();
        $('.skill-set').on('appear', loadSkills);
    }
    var count = true;
    function loadSkills() {
        $(".single-skill").each(function() {
            var datacount = $(this).attr("data-limit");
            $(".skill", this).animate({'width': datacount + '%'}, 2000);
            if (count)
            {
                $(this).find('.parcent').each(function() {
                    var $this = $(this);
                    $({Counter: 0}).animate({Counter: datacount}, {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.ceil(this.Counter) + '%');
                        }
                    });
                });
            }
        });
        count = false;
    }
    
	//======================
    // Smooth scroll
    //======================
    var $root = $('html, body');
    $('.primary-menu li a[href^="#"]').on('click', function () {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 1000);

        return false;
    });


    //======================
    // Sticky header
    //======================
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 100) {
            $('.header-sec').addClass('sticky');
        } else {
            $('.header-sec').removeClass('sticky');
        }
    });
    

    //======================
    // Scroll to Top 
    //======================
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 100) {
            $('#back-to-top').fadeIn(200);
        } else {
            $('#back-to-top').fadeOut(200);
        }
    });
    $('#back-to-top').on('click', function() {
        $('body,html').animate({scrollTop : 0}, 500);
    });


	//======================
    // WoW Js
    //======================
    new WOW().init();

    //======================
    // Mobile menu
    //======================
    if($('.mobile-menu').length > 0) {
        $('.mobile-menu').on('click', function() {
            $(this).siblings('.primary-menu').toggleClass('slideRight');

            if($('.header-sec').hasClass('sticky')) {
                var sticky_height = $('.header-sec').outerHeight();
                $('.slideRight').css('top', sticky_height + "px");
            }
            else if($('.primary-menu').hasClass('slideRight')) {
                var topHeader_height = $('.header-sec').outerHeight() + $('.header-top').outerHeight();
                $('.slideRight').css('top', topHeader_height + "px");
            }
        });
    }

    //======================
    // Search box
    //======================
    $('.search-btn').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('search-active');
    });

    //======================
    // Preloder
    //======================
    $(window).on('load', function() {
        $('#status').fadeOut();
        $('#preloader').delay(500).fadeOut('slow');
        $('body').delay(500).css({'overflow':'visible'});
    });


    $('.primary-menu > li.menu-item-has-children > a, .sub-menu > li.menu-item-has-children > a').on('click', function(e) {
        e.preventDefault();
        $(this).siblings('.sub-menu').toggleClass('active');
    });


})(jQuery);

