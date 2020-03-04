$(document).ready(function() {
    
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        responsive:{
            0:{//para mostrar en telefono
                items:1
            },
            600:{//para mostrar en tablet
                items:2
            },
            1000:{//para mostrar en escritorio
                items:3
            }
        }
      })
});