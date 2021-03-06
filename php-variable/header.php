<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;700&family=Nunito:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="icons/96.png" sizes="96x96" />
    <link rel="shortcut icon" href="icons/android-icon.png" sizes="196x196" />
    <link rel="apple-touch-icon" href="icons/apple-icon-180x180.png" />
    <meta name="msapplication-square310x310logo" content="/icons/310.png" />
  </head>

  <body>
    <header class="navbar navbar--mobile-fixed">
      <div class="container navbar__container">
        <div class="navbar-top">
          <a
            href="https://www.papagai.de/tour-plan/"
            class="logo"
            data-aos="fade-right"
            data-aos-delay="2000"
          >
            <img
              src="img/horizontal-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>

          <form
            action="#"
            class="search navbar__search navbar__search--mobile--hidden"
            data-aos="flip-right"
            data-aos-delay="1500"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: search" />
            </button>
          </form>

          <a
            href="hotels.php"
            class="user navbar__user navbar__user--mobile--hidden"
            data-aos="fade-left"
            data-aos-delay="2000"
          >
            <img
              src="img/user-avatar.jpg"
              alt="Avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->

      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <a
                href="#"
                class="user navbar__user navbar__user--mobile--visible"
              >
                <img
                  src="img/user-avatar.jpg"
                  alt="Avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name-light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <form
                action="#"
                class="search navbar__search navbar__search--mobile--visible"
              >
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a
                href="https://hiltonhonors3.hilton.com/en/offers/index.htm"
                class="navbar-menu__link"
                >All Deals</a
              >
            </li>
            <li class="navbar-menu__item">
              <a href="hotels.php" class="navbar-menu__link"> Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a
                href="https://newsroom.hilton.com/hhr"
                class="navbar-menu__link"
                >Activities</a
              >
            </li>
            <li class="navbar-menu__item">
              <a
                href="https://www.hilton.com/en/corporate/development/"
                class="navbar-menu__link"
                >Hotel Day Packages</a
              >
            </li>
            <li class="navbar-menu__item">
              <a
                href="https://travel.hilton.com/en_us/articles/"
                class="navbar-menu__link"
                >Restaurants</a
              >
            </li>
            <li class="navbar-menu__item">
              <a
                href="https://travel.hilton.com/en_us/guides/french-polynesia/"
                class="navbar-menu__link"
                >Events</a
              >
            </li>
            <li class="navbar-menu__item">
              <a
                href="https://travel.hilton.com/en_us/guides/mexico-resorts/"
                class="navbar-menu__link"
                >Rodrigues</a
              >
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar-bottom -->
    </header>

    <!-- /.breadcrumb -->
    <nav class="breadcrumb">
      <!-- /.container -->
      <div class="container breadcrumb__container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->