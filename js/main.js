$(document).ready(function () {
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

  var menuButton = $(".menu-button");
  menuButton.on("click", function () {
    console.log("Клик по кнопке Меню");
    $(".navbar-bottom").toggleClass("navbar-bottom--visible");
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

  const modalButton = $("[data-toggle=modal]");
  const closemodalButton = $(".modal__close");
  modalButton.on("click", openModal);
  closemodalButton.on("click", closeModal);

  function openModal() {
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.addClass("modal__overlay--visible");
    modalDialog.addClass("modal__dialog--visible");
  }

  function closeModal(event) {
    event.preventDefault("");
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.removeClass("modal__overlay--visible");
    modalDialog.removeClass("modal__dialog--visible");
  }




  var openButton = $("[data-toggletwo=modaltwo]");
  var closeButton = $(".modaltwo__close");
  openButton.on("click", openModaltwo);
  closeButton.on("click", closeModaltwo);

  function openModaltwo () {
    var modalOverlay = $(".modaltwo__overlay");
    var modalDialog = $(".modaltwo__dialog");
    modalOverlay.addClass("modaltwo__overlay--visible");
    modalDialog.addClass("modaltwo__dialog--visible");
    }

  function closeModaltwo(event) {
    event.preventDefault("");
    var modalOverlay = $(".modaltwo__overlay");
    var modalDialog = $(".modaltwo__dialog");
    modalOverlay.removeClass("modaltwo__overlay--visible");
    modalDialog.removeClass("modaltwo__dialog--visible");
    }

  $(document).keyup(function (e) {
    if (e.key === "Escape" || e.keyCode === 27) {
      const modalOverlay = $(".modal__overlay");
      const modalDialog = $(".modal__dialog");
      modalOverlay.removeClass("modal__overlay--visible");
      modalDialog.removeClass("modal__dialog--visible");
    }
  });

  $(document).keyup(function (e) {
    if (e.key === "Escape" || e.keyCode === 27) {
      const modalOverlay = $(".modaltwo__overlay");
      const modalDialog = $(".modaltwo__dialog");
      modalOverlay.removeClass("modaltwo__overlay--visible");
      modalDialog.removeClass("modaltwo__dialog--visible");
    }
  });

  

});
