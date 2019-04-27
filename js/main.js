$(document).ready(function(){

    var sw = false;
    var scroll;
    $(window).scroll(function () {
        scroll = $(window).scrollTop();
        if (scroll > 200){
            $('#menu').css({ "box-shadow": "0px 0px 10px #99a3a4",
                                "background-color": "#fff"
                            });
            $('a.nav-link').css({ "color": "#000" });
            $('.nav-link').css({ "font-size": "15pt" });
            $('.navbar-brand>img').css({"width":"100px", "heigth":"40px"})
        }
        else{
            $('#menu').css({ "background": "none",
                            "box-shadow": "none"
                            });
            $('a.nav-link').css({ "color": "#fff" });
            $('.nav-link').css({ "font-size": "18pt"});
            $('.navbar-brand>img').css({ "width": "160px", "heigth": "60px" })
        }

    })
});
