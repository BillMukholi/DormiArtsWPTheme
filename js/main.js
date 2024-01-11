let heroCarousel = $(".hero-carousel")
let heroMarquee = $(".hero-marquee")

$(document).ready(()=>{
    //HERO CAROUSEL
    heroCarousel.owlCarousel({
        items:1,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay:true,
        autoplayTimeout:6000,
        // autoplaySpeed:8000,
        loop:true
    });

    //HERO MARQUEE
    heroMarquee.owlCarousel({
        autoplay:true,
        autoplayTimeout:3000,
        autoplaySpeed:4000,
        loop:true,
        touchDrag:false,
        mouseDrag:false,
        responsive:{
            0:{
                items:3
            },
            767:{
                items:4
            },
            1023:{
                items:3
            },
            1439:{
                items:5
            },
        }
    });

})
