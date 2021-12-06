    <div class="modal">
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->

      <div class="modal__dialog">
        <a href="#" class="modal__close">
          <img src="img/close.svg" alt="icon: close" />
        </a>
        <h3 class="modal__title">Booking</h3>
        <form action="send.php" method="post" class="form modal__form">
          <input
            type="text"
            class="input modal__input"
            placeholder="Your Full Name*"
            name="name"
            required
            minlength="2"
          />
          <input
            type="text"
            class="input modal__input"
            placeholder="Phone Number*"
            name="phone"
          />
          <input
            type="text"
            class="input modal__input"
            placeholder="Email*"
            name="email"
          />
          <textarea
            class="message modal__message"
            placeholder="Message"
            name="message"
          ></textarea>
          <button type="submit" class="button modal__button">Send</button>
          <span class="modal__info">* Required Fields</span>
        </form>
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal -->

    <div class="modaltwo">
      <div class="modaltwo__overlay"></div>
      <!-- /.modal__overlay -->

      <div class="modaltwo__dialog">
        <a href="#" class="modaltwo__close">
          <img src="img/close.svg" alt="icon: close" />
        </a>
        <h3 class="modaltwo__title">Give us your feedback</h3>
        <form action="send.php" method="post" class="form modaltwo__form">
          <input
            type="text"
            class="input modaltwo__input"
            placeholder="Your Full Name*"
            name="name"
          />
          <input
            type="text"
            class="input modaltwo__input"
            placeholder="Phone Number*"
            name="phone"
          />
          <input
            type="text"
            class="input modaltwo__input"
            placeholder="Email*"
            name="email"
          />
          <textarea
            class="mytextarea modaltwo__mytextarea"
            placeholder="👎"
            name="message"
          >
⭐⭐⭐⭐⭐</textarea
          >
          <button type="submit" class="button modaltwo__button">Send</button>
          <span class="modaltwo__info"> Thank You</span>
        </form>
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal- -->