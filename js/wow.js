$(document).ready(function(){
    $('.animate-nav li a').click(function(){
        var id = $(this).attr('href');
        $(this).parent().addClass('active').siblings().removeClass('active');
        $('html, body').animate({
            scrollTop: $(id).offset().top - 71
        }, 200)
        return false;
    });
    new WOW().init();
});

$(document).ready(function(){
    $('.animate-nav2 a').click(function(){
        var id = $(this).attr('href');
        $(this).parent().addClass('active').siblings().removeClass('active');
        $('html, body').animate({
            scrollTop: $(id).offset().top - 71
        }, 200)
        return false;
    });
    new WOW().init();
});