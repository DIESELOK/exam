$(window).scroll(function() {

    var st = $(this).scrollTop() /10;

    $(".hero .container").css({
        "transform" : "translate3d(0px, -" + st  + "%, .01px)",
        "-webkit-transform" : "translate3d(0px, -" + st  + "%, .01px)"
    });

    $("#pure h2").css({
        "transform" : "translate3d(0px, " + st  + "%, .01px)",
        "-webkit-transform" : "translate3d(0px, " + st  + "%, .01px)"
    });

    $("#help-sec h2").css({
        "transform" : "translate3d(0px, " + st  + "%, .01px)",
        "-webkit-transform" : "translate3d(0px, " + st  + "%, .01px)"
    });

    $("#quote h2").css({
        "transform" : "translate3d(0px, " + st/3  + "%, .01px)",
        "-webkit-transform" : "translate3d(0px, " + st/3  + "%, .01px)"
    });
});