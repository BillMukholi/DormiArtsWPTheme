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
        loop:true,
        responsive:{
            0:{
                touchDrag:true,
                mouseDrag:true,
            },
            700:{
                touchDrag:true,
                mouseDrag:true,
            },
            1023:{
                touchDrag:false,
                mouseDrag:false,
            }
        }
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


//PORTFOLIO CAROUSEL


//MENU BTN
//MENU BTN
let body = document.getElementsByTagName('html')[0]
let hamburgerMenuStatus = 0
let hamburgerMenu = document.getElementsByClassName("hamburger-menu")[0]
let hamburgerMenuLine = document.getElementsByClassName("hamburger-menu-line")
let hamburgerMenuLineAnimation = gsap.timeline()
let mobileMenu = document.getElementsByClassName("mobile-navigation-cont")[0]
let mobileMenuItemsItems = document.getElementsByClassName("mobile-navigation-list")[0]
hamburgerMenuLineAnimation.pause()


hamburgerMenuLineAnimation.to(hamburgerMenuLine[1],{
    width:"0%",
    duration:0.25
})
hamburgerMenuLineAnimation.to(hamburgerMenuLine[0],{
    top:"50%",
    y:"50%",
    height:"3px",
    rotate:90,
    scale:0.6,
    duration:0.5,
    delay:-0.25
})
hamburgerMenuLineAnimation.to(hamburgerMenuLine[2],{
    top:"50%",
    y:"50%",
    height:"3px",
    rotate:0,
    scale:0.6,
    duration:0.5,
    delay:-0.5
})
hamburgerMenuLineAnimation.to(mobileMenu,{
    display:"block",
    opacity:1,
    delay:-0.5
})
hamburgerMenuLineAnimation.from(mobileMenuItemsItems,{
    opacity:0,
    duration:0.25
})


window.addEventListener("resize",()=>{
    hamburgerMenuLineAnimation.reverse()
    hamburgerMenuStatus = 0
    body.style.setProperty('overflow-y','visible')
})
hamburgerMenu.addEventListener('click',()=>{
    if (hamburgerMenuStatus == 0){
        hamburgerMenuLineAnimation.restart()
        hamburgerMenuStatus = 1
        body.style.setProperty('overflow-y','hidden')

    }
    else{
        if(hamburgerMenuLineAnimation.isActive()){
            hamburgerMenuLineAnimation.pause()
        }
        else{
            hamburgerMenuLineAnimation.reverse()
            hamburgerMenuStatus = 0
            body.style.setProperty('overflow-y','visible')

        }
    }
})