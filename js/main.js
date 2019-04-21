$(document).ready(function(){

    var sw = false;
    var scroll;
    $(window).scroll(function () {
        scroll = $(window).scrollTop();
        if (scroll > 200){
            $('#menu').css({ "background": "#808b96" });
            $('.nav-link').css({ "font-size": "12pt" });
            $('.navbar-brand>img').css({"width":"100px", "heigth":"40px"})
        }
        else{
            $('#menu').css({ "background": "none"});
            $('.nav-link').css({ "font-size": "18pt"});
            $('.navbar-brand>img').css({ "width": "160px", "heigth": "60px" })
        }

    })
});