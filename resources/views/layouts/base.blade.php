<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary Meta Tags -->
    <title>Cafe Pemrograman Web</title>
    <meta name="title" content="Cafe Pemrograman Web" />
    <meta name="description" content="Cafe Pemrograman Web" />

    <!-- favicons -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
      rel="stylesheet"
    />

    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- link jquery -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- preload images -->
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-1.jpg') }}" />
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-2.jpg') }}" />
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-slider-3.jpg') }}" />
  </head>

  <body id="top">
    <!-- Preloader -->
    <div class="preload" data-preaload>
      <div class="circle"></div>
      <p class="text">Restaurant</p>
    </div>

    <!-- HEADER -->
    @include('components.header')

     <main>
      <article>
        <!-- #HERO -->
        <section class="hero text-center" aria-label="home" id="home">
          <ul class="hero-slider" data-hero-slider>
            <li class="slider-item active" data-hero-slider-item>
              <div class="slider-bg">
                <img
                  src="{{ asset('assets/images/hero-slider-1.jpg') }}"
                  width="1880"
                  height="950"
                  alt=""
                  class="img-cover"
                />
              </div>

              <p class="label-2 section-subtitle slider-reveal">Restaurant & Cafe</p>

              <h1 class="display-1 hero-title slider-reveal">
                For the love of <br />
                delicious food
              </h1>

              <p class="body-2 hero-text slider-reveal">
                Come with family & feel the joy of mouthwatering food
              </p>
            </li>

            <li class="slider-item" data-hero-slider-item>
              <div class="slider-bg">
                <img
                  src="{{ asset('assets/images/hero-slider-2.jpg') }}"
                  width="1880"
                  height="950"
                  alt=""
                  class="img-cover"
                />
              </div>

              <p class="label-2 section-subtitle slider-reveal">
                delightful experience
              </p>

              <h1 class="display-1 hero-title slider-reveal">
                Flavors Inspired by <br />
                the Seasons
              </h1>

              <p class="body-2 hero-text slider-reveal">
                Come with family & feel the joy of mouthwatering food
              </p>
            </li>

            <li class="slider-item" data-hero-slider-item>
              <div class="slider-bg">
                <img
                  src="{{ asset('assets/images/hero-slider-3.jpg') }}"
                  width="1880"
                  height="950"
                  alt=""
                  class="img-cover"
                />
              </div>

              <p class="label-2 section-subtitle slider-reveal">
                amazing & delicious
              </p>

              <h1 class="display-1 hero-title slider-reveal">
                Where every flavor <br />
                tells a story
              </h1>

              <p class="body-2 hero-text slider-reveal">
                Come with family & feel the joy of mouthwatering food
              </p>
            </li>
          </ul>

          <button
            class="slider-btn prev"
            aria-label="slide to previous"
            data-prev-btn
          >
            <ion-icon name="chevron-back"></ion-icon>
          </button>

          <button
            class="slider-btn next"
            aria-label="slide to next"
            data-next-btn
          >
            <ion-icon name="chevron-forward"></ion-icon>
          </button>
        </section>

        <!-- #ABOUT -->

        <section
          class="section about text-center"
          aria-labelledby="about-label"
          id="about"
        >
          <div class="container">
            <div class="about-content">
              <p class="label-2 section-subtitle" id="about-label">
                Tentang Kami
              </p>

              <h2 class="headline-1 section-title">
                Perjalanan Wesbite Reservasi
              </h2>

              <p class="section-text">
                Ucapkan selamat tinggal pada antrian panjang! Dengan website reservasi restoran, kamu bisa menghindari kekecewaan karena kehabisan tempat duduk. Pesan meja kapan saja dan di mana saja, lalu nikmati hidangan lezat tanpa perlu repot.
              </p>

              <div class="contact-label">Book Through Call</div>

              <a
                href="+62 1234 5678"
                class="body-1 contact-number hover-underline"
                >+62 1234 5678</a
              >

              <a href="#" class="btn btn-primary">
                <span class="text text-1">Read More</span>

                <span class="text text-2" aria-hidden="true">Read More</span>
              </a>
            </div>

            <figure class="about-banner">
              <img
                src="{{ asset('assets/images/about-banner.jpg') }}"
                width="570"
                height="570"
                loading="lazy"
                alt="about banner"
                class="w-100"
                data-parallax-item
                data-parallax-speed="1"
              />

              <div
                class="abs-img abs-img-1 has-before"
                data-parallax-item
                data-parallax-speed="1.75"
              >
                <img
                  src="{{ asset('assets/images/about-abs-image.jpg') }}"
                  width="285"
                  height="285"
                  loading="lazy"
                  alt=""
                  class="w-100"
                />
              </div>

              <div class="abs-img abs-img-2 has-before">
                <img
                  src="{{ asset('assets/images/badge-2.png') }}"
                  width="133"
                  height="134"
                  loading="lazy"
                  alt=""
                />
              </div>
            </figure>
            <img
              src="{{ asset('assets/images/shape-3.png') }}"
              width="197"
              height="194"
              loading="lazy"
              alt=""
              class="shape"
            />
          </div>
        </section>

        <!-- #Restaurant -->
        <section
          class="section Restaurant bg-black-10 text-center"
          aria-labelledby="restaurant-label"
          id="restaurant"
        >
        <!-- #Restaurant -->

          <div class="container">
            <h2 class="section-title">Restaurant</h2>
            <p class="section-text">
              Menyediakan Reservasi Restaurant Yang Berkualitas
            </p>

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
                  <a href="reservasi.html" class="btn-text book-table"
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
                      <a href="#">Restaurant Japanese</a>
                    </h3>
                    <div class="restaurant-info">
                      <span class="rating">★★★★½ 4.5</span>
                      <p class="location">📍 Jakarta Timur</p>
                    </div>
                    <div class="action-buttons">
                    </div>
                  </div>
                  <a href="reservasi.html" class="btn-text book-table"
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
                  <a href="reservasi.html" class="btn-text book-table"
                    >Book Table</a
                  >
                </div>
              </li>
            </ul>
            <a href="#" class="btn btn-primary">
              <span class="text text-1">View All Restaurant & Cafe</span>

              <span class="text text-2" aria-hidden="true"
                >View All Restaurant & Cafe</span
              >
            </a>
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
        </section>

        <!-- #keunggulan -->
        <section
          class="section features text-center"
          aria-labelledby="keunggulan-label"
          id="keunggulan"
        >
          <div class="container">
            <p class="section-subtitle label-2">Kenapa Harus Disini</p>

            <h2 class="headline-1 section-title">Benefit Yang Di dapat</h2>

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
                    Rasakan pengalaman kuliner yang tak terlupakan dengan menu sehat, suasana restoran yang menenangkan, sentuhan kreatif chef profesional, serta penawaran menarik yang selalu ada.
                  </p>
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

        <!-- #TESTIMONIALS WEBSITE -->

        <section>
          <div class="testimonials-section">
            <header class="section-header">
              <h1>Apa Kata Mereka</h1>
            </header>
            <div class="testimonial-controls">
              <button class="create-testimonial">Buat Ulasan Anda</button>
              <div class="owl-dots"></div>
              <div class="owl-nav"></div>
            </div>
            <div class="owl-carousel owl-theme testimonials-container">
              <!-- Item1 Starts -->
              <div class="item testimonial-card">
                <main class="test-card-body">
                  <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>John Doe</h2>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse.
                  </p>
                  <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </main>
                <div class="profile">
                  <div class="profile-image">
                    <img src="{{ asset('assets/images/pic-1.jpg') }}" />
                  </div>
                  <div class="profile-desc">
                    <span>Jhon Doe</span>
                    <span></span>
                  </div>
                </div>
              </div>
              <!-- Item1 Ends -->

              <!-- Item2 Starts -->
              <div class="item testimonial-card">
                <main class="test-card-body">
                  <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>Good</h2>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse.
                  </p>
                  <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </main>
                <div class="profile">
                  <div class="profile-image">
                    <img src="{{ asset('assets/images/pic-2.jpeg') }}" />
                  </div>
                  <div class="profile-desc">
                    <span>Doe Jhon</span>
                    <span></span>
                  </div>
                </div>
              </div>
              <!-- Item2 Ends -->

              <!-- Item3 Starts -->
              <div class="item testimonial-card">
                <main class="test-card-body">
                  <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>Awesome Coding</h2>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse.
                  </p>
                  <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </main>
                <div class="profile">
                  <div class="profile-image">
                    <img src="{{ asset('assets/images/pic-3.jpg') }}" />
                  </div>
                  <div class="profile-desc">
                    <span>Seseorang</span>
                    <span></span>
                  </div>
                </div>
              </div>
              <!-- Item3 Ends -->

              <!-- Item4 Starts -->
              <div class="item testimonial-card">
                <main class="test-card-body">
                  <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>Awesome Coding</h2>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse.
                  </p>
                  <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </main>
                <div class="profile">
                  <div class="profile-image">
                    <img src="{{ asset('assets/images/pic-2.jpeg') }}" />
                  </div>
                  <div class="profile-desc">
                    <span>Person Name</span>
                    <span>Description</span>
                  </div>
                </div>
              </div>
              <!-- Item4 Ends -->

              <!-- Item5 Starts -->
              <div class="item testimonial-card">
                <main class="test-card-body">
                  <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>Awesome Coding</h2>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse.
                  </p>
                  <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </main>
                <div class="profile">
                  <div class="profile-image">
                    <img src="{{ asset('assets/images/pic-1.jpg') }}" />
                  </div>
                  <div class="profile-desc">
                    <span>Person Name</span>
                    <span>Description</span>
                  </div>
                </div>
              </div>
              <!-- Item5 Ends -->

              <!-- Item6 Starts -->
              <div class="item testimonial-card">
                <main class="test-card-body">
                  <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>Awesome Coding</h2>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse.
                  </p>
                  <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </main>
                <div class="profile">
                  <div class="profile-image">
                    <img src="{{ asset('assets/images/pic-2.jpeg') }}" />
                  </div>
                  <div class="profile-desc">
                    <span>Person Name</span>
                    <span>Description</span>
                  </div>
                </div>
              </div>
              <!-- Item6 Ends -->
            </div>
            <!-- Owl Carousel Slider Ends -->
          </div>
        </section>

        <!-- #Article -->

        <section
          class="section event bg-black-10"
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

                    <time class="publish-date label-2" datetime="2022-09-15"
                      >15/09/2022</time
                    >
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

            <a href="#" class="btn btn-primary">
              <span class="text text-1">View Our Article</span>

              <span class="text text-2" aria-hidden="true"
                >View Our Article</span
              >
            </a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom js link -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- ionicon link -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
