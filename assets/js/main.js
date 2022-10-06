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
});