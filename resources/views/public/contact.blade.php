@extends('layouts.base')
@section('footer')
  <!-- #FOOTER -->
  <footer
    class="footer section has-bg-image text-center"
    style="background-image: url('/assets/images/footer-bg.jpg')"
    aria-labelledby="contact-label"
    id="contact"
  >
    <div class="container">
      <div class="footer-top grid-list">
        <div class="footer-brand has-before has-after">
          <a href="#" class="logo">
            <img
              src="{{ asset('assets/images/Logo LaCasa2.png') }}"
              width="160"
              height="50"
              loading="lazy"
            />
          </a>

          <address class="body-4">
            Duri Kosambi Jakarta Barat, Indonesia
          </address>

          <a href="Email : itpln@ac.id" class="body-4 contact-link"
            >Email : itpln@ac.id</a
          >

          <a href="+62 812-1234-5678" class="body-4 contact-link"
            >Layanan Customer Service 24/7</a
          >

          <p class="body-4">+62 812-1234-5678</p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Contact Us</p>

          <p class="label-1">
            Get in touch with us & Get
            <span class="span">Quick Response</span>
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              <input
                type="text"
                name="full_name"
                placeholder="Your full name"
                autocomplete="off"
                class="input-field"
              />
            </div>

            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
              <input
                type="email"
                name="email_address"
                placeholder="Your email"
                autocomplete="off"
                class="input-field"
              />
            </div>

            <div class="icon-wrapper">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
              <input
                type="tel"
                name="phone_number"
                placeholder="Your phone number"
                autocomplete="off"
                class="input-field"
              />
            </div>

            <div class="icon-wrapper">
              <ion-icon name="chatbox-outline" aria-hidden="true"></ion-icon>
              <textarea
                name="message"
                placeholder="Your message"
                class="input-field"
                rows="4"
              ></textarea>
            </div>
          </form>

          <button type="submit" class="tombol tombol-footer">
            <span class="text text-1">Submit Message</span>
            <span class="text text-2" aria-hidden="true">Submit Message</span>
          </button>
        </div>

        <ul class="footer-list">
          <li>
            <a href="#Home" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="#about" class="label-2 footer-link hover-underline"
              >About us</a
            >
          </li>

          <li>
            <a href="#restaurant" class="label-2 footer-link hover-underline"
              >Restaurant</a
            >
          </li>

          <li>
            <a href="#article" class="label-2 footer-link hover-underline"
              >Article</a
            >
          </li>

          <li>
            <a href="#contact" class="label-2 footer-link hover-underline"
              >Contact</a
            >
          </li>
        </ul>

        <ul class="footer-list">
          <li>
            <a href="#" class="label-2 footer-link hover-underline"
              >Facebook</a
            >
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"
              >Instagram</a
            >
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"
              >Twitter</a
            >
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"
              >Youtube</a
            >
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"
              >Google Map</a
            >
          </li>
        </ul>
      </div>
      </div>
    </div>
  </footer>

  <!-- #BACK TO TOP -->
  <a
    href="#top"
    class="back-top-btn active"
    aria-label="back to top"
    data-back-top-btn
  >
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>
@endsection
