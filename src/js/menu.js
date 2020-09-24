/* The animation of the fixed menu made with JQuery, its definition when the fixed menu should appear after scrolling in the window*/
$(document).ready(function(){

    var header_nav = $('header nav');

    $(window).scroll(function(){
        var menu = $('.menu'), logo = $('.log'), menu_a = $('.menu a');
        var scroll = $(window).scrollTop();
      
        if (scroll > 100) {

            menu.css({"position":"fixed"});
            menu.css({"width":"100%"});
            menu.css({"top":"0"});
            menu.css({"background":"#fff"});
            menu_a.css({"color":"#000"});
            logo.css({"color":"#000"});
            menu.css({"box-shadow":"rgba(0, 0, 0, 0.22) 6px 1px 1px"});
            menu.css({"z-index":"10"});/*It goes on top of any element*/
            
        } else {
            /* Here the default properties are applied after scrolling */
            menu.css({"position":"relative"});
            menu.css({"background":"transparent"});
            menu.css({"box-shadow":"0 0 0"});
            menu_a.css({"color":"#fff"});
            logo.css({"color":"#fff"});
        }

        // When you slide more than 100vh in mobile mode and validate that the screen sizes where the app is being used are mobile, it will execute the event that hides the nav or menu header
        let ancho_pantalla = screen.width, alto_pantalla = screen.height;
        
        if((scroll > 100 && (ancho_pantalla <= 768  && alto_pantalla <= 1024)) && (ancho_pantalla >= 320 && alto_pantalla >= 511)) {
            
            header_nav.slideUp();
            $('nav ul li').click(() => {
                header_nav.slideUp();
            });
        }
        
    });
    
    /* The menu in responsive mode must be displayed and picked up with the slideToggle event */
    $('.menu-icon').click(() => {
      header_nav.slideToggle();
      header_nav.css({"z-index":"10"}); // You must be on top of the photo-profile in the header so you don't see the photo on top of the menu in mobile mode
    });

  });