(function ($) {
 "use strict";

    
    /*----------------------------
    jQuery MeanMenu
    ------------------------------ */
        $('nav#dropdown').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu",
    });	
    /*----------------------------
    wow js active
    ------------------------------ */
        new WOW().init();
    
    /*----------------------------
    top search active
    ------------------------------ */   
        $('.icon_search').on('click', function(e){
        e.preventDefault();
        $('.widget_searchform_content').toggleClass('active');
        });  
    
    /*----------------------------
    top cart active
    ------------------------------ */   
        $('.top-shop-title').on('click', function(e){
            e.preventDefault();
            $('.wish-cart').toggleClass('active');
        });   
    /*----------------------------
    top search active
    ------------------------------ */   
        $('.header-menu-item-icon').on('click', function(e){
            e.preventDefault();
            $('.widget_searchform').toggleClass('active');
        });      
    /*----------------------------
     sticky active
    ------------------------------ */  
    var stickyTop = $('.header-menu').offset().top;
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > stickyTop) {
            $('.header-menu').addClass('stick');
        } else {
            $('.header-menu').removeClass('stick');
        }
    });
    
    
    /*----------------------------
    features-curosel2 owl active
    ------------------------------ */
    $('.features-curosel2').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        smartSpeed:2000,
        margin: 30,
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });
    
    /*----------------------------
    slider-active-two owl active
    ------------------------------ */
    $('.slider-active-two').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        margin: 30,
        item: 3,
        smartSpeed:2000, 
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });
    
    /*----------------------------
    owlcarousel client-all active
    ------------------------------ */
        $('.client-all').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
    
    
    /*---------------------
    price slider
    --------------------- */  
	
    $( "#slider-range" ).slider({
        range: true,
        min: 40,
        max: 600,
        values: [ 20, 1560 ],
        slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - "+ "$" + ui.values[ 1 ] );
        $('input[name="first_price"]').val( "$" + ui.values[0]);
        $('input[name="last_price"]').val( "$" + ui.values[1]);
    },
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - "+"$" + $( "#slider-range" ).slider( "values", 1 ) );
    $('input[name="first_price"]').val( "$" + $( "#slider-range" ).slider( "values", 0 ));
    $('input[name="last_price"]').val( "$" + $( "#slider-range" ).slider( "values", 1 ));
    
    
    
    
    /*-------------------------
    checkout showcoupon toggle function
    --------------------------*/
        $( '#showcoupon' ).on('click', function() {
            $( '#checkout_coupon' ).slideToggle(900);
        });
    
    /*-------------------------
    checkout showcoupon toggle function
    --------------------------*/
    $( '#showcoupon2 input' ).on('click', function() {
        $( '#checkout_coupon2' ).slideToggle(900);
    });
    
    /*-------------------------
    checkout showcoupon toggle function
    --------------------------*/
    $( '#showcoupon3' ).on('click', function() {
        $( '#checkout_coupon3' ).slideToggle(900);
    });
    
    /*-------------------------
    checkout one click toggle function
    --------------------------*/
    var checked = $( '.sin-payment input:checked' )
    if(checked){
        $(checked).siblings( '.payment_box' ).slideDown(900);
    };
	 $( '.sin-payment input' ).on('change', function() {
        $( '.payment_box' ).slideUp(900);
        $(this).siblings( '.payment_box' ).slideToggle(900);
    });
    
    
    
    
    
    
    /*-------------------------
    single-product count
    --------------------------*/
    
    
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
     $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
     $(".qtybutton").on("click", function() {
      var $button = $(this);
      var oldValue = $button.parent().find("input").val();
      if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
         // Don't allow decrementing below zero
        if (oldValue > 0) {
       var newVal = parseFloat(oldValue) - 1;
       } else {
       newVal = 0;
        }
        }
      $button.parent().find("input").val(newVal);
     });
    
    
    /*-------------------------
    zoom-img single-product
    --------------------------*/   
    $('.demo4').snipe({
        class: 'zoom',
    });
    
    
    
    
    /*--------------------------
     scrollUp
    ---------------------------- */	
    $(window).on('scroll',function () {
        if($(window).scrollTop()>200) {
            $("#toTop").fadeIn();
        } else {
            $("#toTop").fadeOut();
        }
    });
    $("#toTop").on('click', function() {
        $("html,body").animate({
            scrollTop:0
        }, 500)
    });    
    
    
    
    /*------------------------------------
        DateCountdown active 1
    ------------------------------------- */
    $(".DateCountdown").TimeCircles({
        direction: "Counter-clockwise",
        fg_width: 0.009,
        bg_width: 0,
        use_background: false,
        time: {
            Days: {
                text: "Days",
                color: "#fff"
            },
            Hours: {
                text: "Hours",
                color: "#fff"
            },
            Minutes: {
                text: "Mins",
                color: "#fff"
            },
            Seconds: {
                text: "Secs",
                color: "#fff"
            }
        }
    }); 
    
    
    
    
    
    
    
    
    
    
    
 
})(jQuery); 