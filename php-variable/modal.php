    <div class="modal">
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->

      <div class="modal__dialog">
        <a href="#" class="modal__close">
          <img src="img/close.svg" alt="icon: close" />
        </a>
        <h3 class="modal__title">Booking</h3>
        <form action="send.php" method="post" class="modal__form form">
          <input
            type="text"
            class="input modal__input"
            placeholder="Your Full Name*"
            name="name"
            required
            minlength="2"
            maxlength="20"
          />
          <input
            type="tel"
            class="input modal__input phone"
            placeholder="Phone Number*"
            name="phone"
            required
            minlength="17"
          />
          <input
            type="email"
            class="input modal__input"
            placeholder="Email*"
            name="email"
            required
          />
          <textarea
            class="message modal__message"
            placeholder="Message"
            name="message"
            maxlength="100"
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
        <form action="send.php" method="post" class="modaltwo__form form">
          <input
            type="text"
            class="input modaltwo__input"
            placeholder="Your Full Name*"
            name="name"
            required
            minlength="2"
            maxlength="20"
          />
          <input
            type="tel"
            class="input modaltwo__input phone"
            placeholder="Phone Number*"
            name="phone"
            required
            minlength="17"
          />
          <input
            type="email"
            class="input modaltwo__input"
            placeholder="Email*"
            name="email"
            required
          />
          <textarea
            class="mytextarea modaltwo__mytextarea"
            placeholder="Your message"
            name="message"
            maxlength="100"
          ></textarea>
          <button type="submit" class="button modaltwo__button">Send</button>
          <p style="font-size: 20px">
            letters left: <span class="charsleft">100</span>
          </p>
        </form>
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal- -->