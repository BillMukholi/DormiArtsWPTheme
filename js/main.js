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

let offersCarousel = $(".events-and-offers-carousel")

offersCarousel.owlCarousel({
    items:1,
    autoplay:true,
    dots:true
});



var service_card_items = document.getElementsByClassName('service-card-items')
 
for(let cc = 0; cc < service_card_items.length; cc++){
    var service_card_data = service_card_items[cc].getAttribute('data')
    if (!service_card_data){
    }
    var service_card_data_array = service_card_data.split(",");
    for(let cc1 = 0; cc1 < service_card_data_array.length; cc1++){
        var service_card_item = document.createElement("p")
        service_card_item.classList.add("service-card-item")
        service_card_item.textContent = service_card_data_array[cc1]
        service_card_items[cc].appendChild(service_card_item)
    }
    
}
