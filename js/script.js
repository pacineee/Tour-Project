let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};


/* Grand Home slider */
var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: (".swiper-button-next"),
        prevEl: (".swiper-button-prev"),
    },
});


/* Scripting Home-Package swiper */
var swiper = new Swiper(".home-package-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

/* Scripting Package swiper */
<<<<<<< Updated upstream
var swiper = new Swiper(".package-slider", {
=======
var swiper = new Swiper(".about-slider", {
>>>>>>> Stashed changes
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  /* Scripting About swiper */
  var swiper = new Swiper(".about-slider", {
    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    mousewheel: true,
  });