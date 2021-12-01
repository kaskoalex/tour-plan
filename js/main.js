const hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
  effect: "coverflow",
});

window.addEventListener("keydown", (e) => {
  if (e.key === "ArrowRight") {
    document.querySelector(".slider-button--next").click();
  }
  if (e.key === "ArrowLeft") {
    document.querySelector(".slider-button--prev").click();
  }
});

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click", function () {
  console.log("Клик по кнопке Меню");
  document
  .querySelector(".navbar-bottom")
  .classList.toggle("navbar-bottom--visible")
});


const reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
});
