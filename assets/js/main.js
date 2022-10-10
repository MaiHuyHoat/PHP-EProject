$(document).ready(function(){

    $('.ads-banner').slick({
        infinite: true,
        arrows: false,
    });


    
    $(".tab-menu-right").click(function(){
        $(".list-items").toggle(200);
    });
    $(".tab-menu-right1").click(function(){
        $(".list-items1").toggle(200);
    });

    //giỏ hàng
    $(".giohang a").click(function(){
        $(".tab-giohang").toggle(500);
    });


    $("button").click(function(){
        $(".tab-giohang").hide(500);
    });

    // MUA HÀNG
    $(".buy-now").click(function(){
        $(".giohang-buy").toggle(500);
    });


    $("button").click(function(){
        $(".giohang-buy").hide(500);
    });
});