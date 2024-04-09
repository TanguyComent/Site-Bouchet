var clicked = false;

function navigationMenu(){
    var openClose = $(".nav-menu").attr("status");

    if(openClose == "false" && !clicked){
        clicked = true;
        setTimeout(() => clicked = false, 1000);
        $(".nav-menu").attr("status", "true");
        $(".nav-menu").css("display", "flex");
        $(".button-menu button").css("display", "flex");
        setTimeout(() => $(".button-menu").css("width", "20%"), 990);
        $(".open-nav").addClass("nav-active");
        $(".one").addClass("one-active");
        $(".two").addClass("two-active");
        $(".three").addClass("three-active");
        $(".button-menu").removeClass("inactive");
        $(".button-menu").addClass("active");
        setTimeout(() => $(".button-menu button").css("opacity", "1"), 500);
        $("body").addClass("hidden");

        setTimeout(() => {
            $(".button-menu").addClass("responsive");
        }, 990);
        
    }if(openClose == "true" && !clicked){
        clicked = true;
        setTimeout(() => clicked = false, 1000);
        $(".nav-menu").attr("status", "false");
        setTimeout(() => $(".nav-menu").css("display", "none"), 990);
        setTimeout(() => $(".button-menu button").css("display", "none"), 300);
        setTimeout(() => $(".button-menu").css("width", "0px"), 990);
        $(".open-nav").removeClass("nav-active");
        $(".one").removeClass("one-active");
        $(".two").removeClass("two-active");
        $(".three").removeClass("three-active");
        $(".button-menu").removeClass("active");
        $(".button-menu").addClass("inactive");
        $("body").removeClass("hidden");
        
        $(".button-menu").removeClass("responsive");
    }
}