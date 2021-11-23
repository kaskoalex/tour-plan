const swiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".slider-button--next",
    prevEl: ".slider-button--prev",
  },
});

window.addEventListener("keydown", (e) => {
  if (e.key === "ArrowRight") {
    document.querySelector(".slider-button--next").click();
  }
  if (e.key === "ArrowLeft") {
    document.querySelector(".slider-button--prev").click();
  }
});
