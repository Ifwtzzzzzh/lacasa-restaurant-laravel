@extends('layouts.base')

@section('content')
<main>
    <article>

      <!-- #Restaurant -->
      <section
        class="section Restaurant bg-black-10 text-center"
        aria-labelledby="restaurant-label"
        id="restaurant"
      >
      <!-- #Restaurant -->

        <div class="container">
            <div class="about-content">
                <p class="label-2 section-subtitle" id="about-label">
                  Restaurant
                </p>

                <h2 class="headline-1 section-title">
                  List Restaurant
                </h2>
                <ul class="grid-list">
                    <li>
                      <div class="Restaurant-card">
                        <div class="has-before">
                          <figure class="card-banner">
                            <img
                              src="{{ asset('assets/images/thumbnail-1.png') }}"
                              alt="La Maison Elegante"
                            />
                          </figure>
                        </div>
                        <div class="card-konten">
                          <h3 class="card-judul">
                            <a href="#">Masakan Padang Pagi Sore</a>
                          </h3>
                          <div class="restaurant-info">
                            <span class="rating">★★★★★ 4.8</span>
                            <p class="location">📍 BSD</p>
                          </div>
                          <div class="action-buttons">
                          </div>
                        </div>
                        <a href="{{ route('reservation') }}" class="btn-text book-table"
                          >Book Table</a
                        >
                      </div>
                    </li>

                    <li>
                      <div class="Restaurant-card">
                        <div class="has-before">
                          <figure class="card-banner">
                            <img
                              src="{{ asset('assets/images/thumbnail-2.png') }}"
                              alt="Sakura Japanese"
                            />
                          </figure>
                        </div>
                        <div class="card-konten">
                          <h3 class="card-judul">
                            <a href="">Restaurant Japanese</a>
                          </h3>
                          <div class="restaurant-info">
                            <span class="rating">★★★★½ 4.5</span>
                            <p class="location">📍 Jakarta Timur</p>
                          </div>
                          <div class="action-buttons">
                          </div>
                        </div>
                        <a href="{{ route('reservation') }}" class="btn-text book-table"
                          >Book Table</a
                        >
                      </div>
                    </li>

                    <li>
                      <div class="Restaurant-card">
                        <div class="has-before">
                          <figure class="card-banner">
                            <img
                              src="{{ asset('assets/images/thumbnail-3.png') }}"
                              alt="Il Gusto Italiano"
                            />
                          </figure>
                        </div>
                        <div class="card-konten">
                          <h3 class="card-judul">
                            <a href="#">Warung Ahog</a>
                          </h3>
                          <div class="restaurant-info">
                            <span class="rating">★★★★★ 4.7</span>
                            <p class="location">📍 BSD</p>
                          </div>
                          <div class="action-buttons">
                          </div>
                        </div>
                        <a href="{{ route('reservation') }}" class="btn-text book-table"
                          >Book Table</a
                        >
                      </div>
                    </li>
                  </ul>
                  <img
                    src="{{ asset('assets/images/shape-1.png') }}"
                    width="246"
                    height="412"
                    loading="lazy"
                    alt="shape"
                    class="shape shape-1 move-anim"
                  />
                  <img
                    src="{{ asset('assets/images/shape-2.png') }}"
                    width="343"
                    height="345"
                    loading="lazy"
                    alt="shape"
                    class="shape shape-2 move-anim"
                  />
              </div>
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
@endsection
