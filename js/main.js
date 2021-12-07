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

  function openModaltwo() {
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

  //Обработка форм
  $(".form").each(function(){
    $(this).validate({
      errorClass: "invalid",
      messages: {
        name: {
          required: "Please specify your name.",
          minlength: "Name should have more than two letters.",
        },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com",
        },
        phone: {
          required: "Please specify your phone",
        },
      },
    });
    
  })

  
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

  $(document).ready(function () {
    $(".phone").mask("+7 (999)999-99-99",);
  });
  AOS.init();

  $(document).ready(function () {
    $("textarea[maxlength]").keyup(function () {
      var max = parseInt($(this).attr("maxlength"));

      if ($(this).val().length > max) {
        $(this).val($(this).val().substr(0, max));
      }

      $(this)
        .parent()
        .find(".charsleft")
        .html(max - $(this).val().length);
    });
  });

});


