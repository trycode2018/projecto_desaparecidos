/*toggle menu when hamburger or close icon clicked*/
const nav = document.querySelector("#header nav")
const toggle = document.querySelectorAll("nav .toggle")

for(const element of toggle){
    element.addEventListener("click",()=>{
        nav.classList.toggle('show')
    })
}

/*when each item os menu was clicked close menu*/
const links = document.querySelectorAll('nav ul li a')

for(const link of links){
    link.addEventListener('click',()=>{
        nav.classList.remove('show')
    })
}

/*add shadow no header da página quando o scroll acontecet*/
const header = document.querySelector("#header")
const navheight = header.offsetHeight
function shadow(){
     if(window.scrollY >= navheight){
        header.classList.add('scroll')
    }else{
        header.classList.remove('scroll')
    }
}

//==============BACK TO TOP BOTTON=========
const backToTop= document.querySelector('.back-to-top')
function goToTheTop(){
      if(window.scrollY >=560){
        backToTop.classList.add('show')
    }else{
        backToTop.classList.remove('show')
    }
}


//Active the current section button menu
const sections = document.querySelectorAll('section[id]')

function activeCurrentSection(){
    const checkpoint = window.pageYOffset + (window.innerHeight/8)*4 

    for(const section of sections){
        const sectionTop = section.offsetTop
        const sectionHeight = section.offsetHeight
        const sectionId = section.getAttribute('id')

        const checkpointStart = checkpoint >= sectionTop
        const checkpointEnd = checkpoint <= sectionTop + sectionHeight 

        if(checkpointStart && checkpointEnd){
            document
            .querySelector('nav ul li a[href*='+sectionId+']')
            .classList.add('active')
        }else{
              document
            .querySelector('nav ul li a[href*='+sectionId+']')
            .classList.remove('active')
        }
    }

}


//When scroll invoc this functions
window.addEventListener('scroll',function(){
   shadow()
   goToTheTop()
   activeCurrentSection()
})

//swiper code============================================
const swiper = new Swiper('.swiper', {
    // Optional parameters
    slidesPreView: 1,
    pagination:{
        el:'.swiper-pagination',
    },
    mousewheel: true,
    keyboard: true,
    breakpoints: {
        767: {
            slidesPreView: 2,
            setWrapperSize: true
        }
    }
  });

//scrollReveal============================================

const scrollReveal = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 700,
    reset: true
})
/*
scrollReveal.reveal(
   `#home .image, #home .text,
    #about .image, #about .text,
    #services header, #services .card,
    #testimonials header, #testimonials .testimonials,
    #contact .text, #contact .links,
    `,
    { interval: 100 }
);*/


