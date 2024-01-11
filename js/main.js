let heroCarousel = $(".hero-carousel")
let heroMarquee = $(".hero-marquee")

//HERO CAROUSEL
heroCarousel.owlCarousel({
    items:1,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplay:true,
    autoplayTimeout:8000,
    autoplaySpeed:8000,
    loop:true
});

//HERO MARQUEE
heroMarquee.owlCarousel({
    autoplay:true,
    autoplayTimeout:3000,
    autoplaySpeed:4000,
    loop:true,
    responsive:{
        0:{
            items:3
        },
        767:{
            items:3
        },
        1023:{
            items:4
        },
        1439:{
            items:5
        },
    }
});
