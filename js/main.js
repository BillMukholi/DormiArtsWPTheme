let heroCarousel = $(".hero-carousel")
let heroMarquee = $(".hero-marquee")
let profilePictureWidget = $(".profile-picture-widget-lvl-carousel")

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

    //PROFILE PICTURES WIDGET

    profilePictureWidget.owlCarousel({
        items:1,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay:true,
        autoplayTimeout:5000,
        // autoplaySpeed:8000,
        loop:true
    });

})

let ring2Animation =  gsap.timeline({repeat:-1});
ring2Animation.pause()

ring2Animation.to(".profile-picture-widget-lvl-2",{
    rotate: "360deg",
    duration: 30,
})
ring2Animation.to(".profile-picture-widget-lvl-2-element",{
    rotate: "-360deg",
    duration: 30,
},"-=30")
ring2Animation.to(".profile-picture-widget-lvl-3",{
    rotate: "360deg",
    duration: 20,
},"-=30")
ring2Animation.to(".profile-picture-widget-lvl-3-element",{
    rotate: "-360deg",
    duration: 20,
},"-=20")


ring2Animation.play()