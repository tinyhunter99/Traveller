let searchBtn=document.querySelector('#search-btn');
let searchBar=document.querySelector('.search-bar-container');

searchBtn.addEventListener('click',()=>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});


// Login modal
let formBtn=document.querySelector('#login-btn');
let loginForm=document.querySelector('.login-form-container');
let formClose=document.querySelector('#form-close');


// Hamburger icon 
let menu=document.querySelector('#menu-bar');
let navbar=document.querySelector('.navbar');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    menu.classList.toggle('fa-bars');
    navbar.classList.toggle('active');
});

// Closing of hamburger menu after clicking on any of anchor tag in navbar
let menu_close=document.getElementsByClassName('close-menu')
Array.from(menu_close).forEach((element)=>{
    element.addEventListener('click',()=>{
        navbar.classList.toggle('active');
        menu.classList.toggle('fa-bars');
        menu.classList.toggle('fa-times');
    })
})


// SwiperJS
var swiper = new Swiper(".review-slider", {
    spaceBetween:20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay:{
        delay:10000,
        disableOnInteraction:false,
    }
});

function togglePassword(){
    let show=document.querySelector('.showPassword');
    // console.log(show)
    if(show.type=='password'){
        show.type='text';
    }
    else{
        show.type='password'
    }
}
function toggleCPassword(){
    let show=document.querySelector('.showCPassword');
    // console.log(show)
    if(show.type=='password'){
        show.type='text';
    }
    else{
        show.type='password'
    }
}

formBtn.addEventListener('click',()=>{
    loginForm.classList.add('active');
});
formClose.addEventListener('click',()=>{
    loginForm.classList.remove('active');
})

