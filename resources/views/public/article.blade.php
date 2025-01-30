@extends('layouts.base')
@section('content')
<main>
    <article>

      <!-- #Article -->
      <section
        class="section event bg-black-10 article-page"
        aria-labelledby="article-label"
        id="article"
      >
        <div class="container">
          <p class="section-subtitle label-2 text-center">Event & News</p>

          <h2 class="section-title headline-1 text-center">
            Berita / Event Terbaru
          </h2>

          <ul class="grid-list">
            <li>
              <div class="event-card has-before hover:shine">
                <div
                  class="card-banner img-holder"
                  style="--width: 350; --height: 450"
                >
                  <img
                    src="{{ asset('assets/images/event-1.jpg') }}"
                    width="350"
                    height="450"
                    loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes."
                    class="img-cover"
                  />

                  <time class="publish-date label-2" datetime="2022-09-15">15/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    Food, Flavour
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">
                <div
                  class="card-banner img-holder"
                  style="--width: 350; --height: 450"
                >
                  <img
                    src="{{ asset('assets/images/event-2.jpg') }}"
                    width="350"
                    height="450"
                    loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes."
                    class="img-cover"
                  />

                  <time class="publish-date label-2" datetime="2022-09-08"
                    >08/09/2022</time
                  >
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    Healthy Food
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">
                <div
                  class="card-banner img-holder"
                  style="--width: 350; --height: 450"
                >
                  <img
                    src="{{ asset('assets/images/event-3.jpg') }}"
                    width="350"
                    height="450"
                    loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes."
                    class="img-cover"
                  />

                  <time class="publish-date label-2" datetime="2022-09-03"
                    >03/09/2022</time
                  >
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Recipie</p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

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
