(function ($) {
    "use strict";
    /*===================================================================
                     StickyJS & SpyScroll & SmoothScroll
    =====================================================================*/
    // Sticky JS
    $(".main-nav").sticky({
        topSpacing: 0
    });
    // Spy Scroll
    $('body').scrollspy({
        target: ".main-nav"
    });
    // Smooth Scroll
    $('a.nav-link').on("click", function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 5
        }, 1000);
        e.preventDefault();
    });

    /*===================================================================
                            Text-Slider [owl-carousel]
    =====================================================================*/
    $('.text-slider').owlCarousel({
        loop: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        smartSpeed: 800,
        items: 1
    });

    /*===================================================================
								Text-Rotator
    =====================================================================*/
    $(".rotate-dissolve").textrotator({
        animation: "dissolve",
        speed: 3000
    });

    $(".rotate-flip").textrotator({
        animation: "flip",
        speed: 3000
    });

    $(".rotate-flipUp").textrotator({
        animation: "flipUp",
        speed: 3000
    });
	
	/*===================================================================
								Textillate
    =====================================================================*/
	$('.tlt').textillate();
	
	/*===================================================================
								YTPlayer
    =====================================================================*/
	$("#bgndVideo").YTPlayer({
		showControls:false,
		autoPlay:true,
		mute:true,
		startAt:0,
		opacity:1
	});
    
    /*===================================================================
                                Range-Slider
    =====================================================================*/
    var minVal = 0;
    var maxVal = 150000;

    $("#slider-range").slider({
        range: true,
        orientation: "vertical",
        min: minVal,
        max: maxVal,
        values: [minVal, maxVal],
        slide: function (event, ui) {
            $("#amount-min").val("$ " + ((minVal + maxVal) - ui.values[0]));
            $("#amount-max").val("$ " + ((minVal + maxVal) - ui.values[1]));
        }
    });

    //Minimum value
    $("#amount-min").val("$ " + $("#slider-range").slider("values", 1));
    //Maximum value
    $("#amount-max").val("$ " + $("#slider-range").slider("values", 0));

    /*===================================================================
                             Custom select_menu
    =====================================================================*/
    $('.select_menu button').on('click', function () {
        $(".select-area").fadeToggle(100);
        $(this).toggleClass('active');

        return false;
    });

    /*===================================================================
                         Agent-Slider [owl-carousel]
    =====================================================================*/
    $('.agent-slider').owlCarousel({
        nav: false,
        dots: true,
        smartSpeed: 800,
        animateOut: 'bounceOutRight',
        animateIn: 'slideInLeft',
        items: 1
    });

    /*===================================================================
                         DirectionAwareHover Effect
    =====================================================================*/
    $(' #project-gallery> div > div.single-project ').each(function () {
        $(this).hoverdir();
    });

    /*===================================================================
                        Image Gallery [Magnific popup]
    =====================================================================*/
    $('.view-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*===================================================================
                        Project-Slider [Owl-carousel]
    =====================================================================*/
    $('.d-project-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
	
    /*===================================================================
                                Project Circle
    =====================================================================*/
	$('.circle.one').css('transform', 'rotate(90deg)'); //For circle one
	$('.circle.two').css('transform', 'rotate(175deg)'); //For circle two
	$('.circle.three').css('transform', 'rotate(270deg)'); //For circle three

    /*===================================================================
                     Client Review Slider [Owl-Carousel]
    =====================================================================*/
    $('.creview-slider').owlCarousel({
        items: 1,
        loop: false,
        nav: true,
        navText: ['<img src="images/client-review/left.png" alt="Left">', '<img src="images/client-review/right.png" alt="Right">'],
        smartSpeed: 500,
        dots: true,
        dotsData: true,
        onInitialized: counter,
        onTranslated: counter
    });

    function counter(event) {
        var item = event.item.index + 1; // Position of the current item
        $('.current-position').html("0" + item);
    }

    /*===================================================================
								Footer Reveal
    =====================================================================*/
    $('footer').footerReveal({
        shadow: false,
        zIndex: -101
    });

    /*===================================================================
                                    Wow Js
    =====================================================================*/
    new WOW().init();
})(jQuery);