@extends('layouts.base')
@section('content')
<main>
    <article>

      <!-- #keunggulan -->
      <section
        class="section features features-page text-center"
        aria-labelledby="keunggulan-label"
        id="keunggulan"
      >
        <div class="container">
          <p class="section-subtitle label-2">Kenapa Harus Disini</p>

          <h2 class="headline-1 section-title">Benefit yang Didapat</h2>

          <ul class="grid-list">
            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{ asset('assets/images/features-icon-1.png') }}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>

                <h3 class="title-2 card-title">Makanan Sehat</h3>

                <p class="label-1 card-text">
                  Nikmati hidangan sehat dan lezat di restoran nyaman kami, hasil kreasi chef profesional. Dapatkan diskon menarik dan ikuti event seru kami!
                </p>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{ asset('assets/images/features-icon-2.png') }}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>

                <h3 class="title-2 card-title">Restaurant Nyaman</h3>

                <p class="label-1 card-text">
                  Rasakan pengalaman kuliner yang tak terlupakan dengan menu sehat, suasana restoran yang menenangkan, dan sentuhan kreatif chef profesional.
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{ asset('assets/images/features-icon-3.png') }}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>

                <h3 class="title-2 card-title">Chef Profesional</h3>

                <p class="label-1 card-text">
                  Manjakan diri dengan hidangan sehat yang dibuat oleh chef berpengalaman di restoran yang nyaman. Dapatkan lebih banyak dengan diskon dan event eksklusif kami!
                </p>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{ asset('assets/images/features-icon-4.png') }}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>

                <h3 class="title-2 card-title">Diskon & Event</h3>

                <p class="label-1 card-text">
                  Kombinasi sempurna antara hidangan sehat, suasana nyaman, keahlian chef, dan penawaran menarik hanya ada di sini. Kunjungi kami dan rasakan perbedaannya!
                </p>
              </div>
            </li>
          </ul>

          <img
            src="{{ asset('assets/images/shape-7.png') }}"
            width="208"
            height="178"
            loading="lazy"
            alt="shape"
            class="shape shape-1"
          />

          <img
            src="{{ asset('assets/images/shape-7.png') }}"
            width="120"
            height="115"
            loading="lazy"
            alt="shape"
            class="shape shape-2"
          />
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
