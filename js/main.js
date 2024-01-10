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
    items: 5,
    autoplay:true,
    autoplayTimeout:1000,
    autoplaySpeed:4000,
    loop:true
});
