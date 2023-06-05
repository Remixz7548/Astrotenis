var swiper = new Swiper(".ads-container", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


let Closebtn = document.querySelector('.icon-close');
let Searchbtn = document.querySelector('.icon-search');
let Searchbox = document.querySelector('.search-box');

Searchbtn.onclick = function(){
    Searchbox.classList.add('active');
    Closebtn.classList.add('active');
}

Closebtn.onclick = function(){
    Searchbox.classList.remove('active');
    Closebtn.classList.remove('active');
}


