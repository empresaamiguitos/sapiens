$(document).ready(function(){
    // Efecto para loader - quitar loader
    $('#contenedor').css({"visibility": "hidden", "opacity": "0"})

    var ancho = $(window).width();
    if(ancho > 799)
    {
        var sw = false;
        var scroll;
        $(window).scroll(function () {
            scroll = $(window).scrollTop();
            if (scroll > 200){
                mayor();
            }
            else{
                $('#menu').css({ "background": "none",
                                "box-shadow": "none"
                                });
                $('a.nav-link').css({ "color": "#fff" });
                $('.nav-link').css({ "font-size": "18pt"});
                $('.navbar-brand>img').css({ "width": "160px", "heigth": "60px" });
            }
    
        })
    }else{
        mayor();
    }

});

function mayor(){
    $('#menu').css({
        "box-shadow": "0px 0px 10px #99a3a4",
        "background-color": "#fff"
    });
    $('a.nav-link').css({ "color": "#000" });
    $('.nav-link').css({ "font-size": "15pt" });
    $('.navbar-brand>img').css({ "width": "100px", "heigth": "40px" });
}
