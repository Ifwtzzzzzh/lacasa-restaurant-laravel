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

    {{-- LARAVEL NOTIFY CSS --}}
    @notifyCss

    <!-- favicons -->
    <link rel="icon" sizes="76x76" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="icon" sizes="76x76" href="{{ asset('assets/images/favicon.svg') }}" />

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
      rel="stylesheet"
    />

    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('./assets/css/menu.css') }}">

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


    @include('components.header')

    <main>
        <article>
            {{-- CONTENT --}}
            @yield('content')
        </article>
    </main>

    <!-- HEADER -->


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

    {{-- LARAVEL NOTIFY JS --}}
    @notifyJs
  </body>
</html>
