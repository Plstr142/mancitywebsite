// swiper.js
var swiper = new Swiper(".swiper", {
  spacebetween: 22,
  loop: true,
  speed: 4500,
  slidesPerView: "auto",
  freeMode: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  grabCursor: true,
});

const swiperEl = document.querySelector(".swiper");

swiperEl.addEventListener("mouseenter", () => {
  swiper.autoplay.stop();
});

swiperEl.addEventListener("mouseleave", () => {
  swiper.autoplay.start();
});
