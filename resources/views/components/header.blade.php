<header class="header" data-header>
    {{-- LARAVEL NOTIFY --}}
    <x-notify::notify/>

    <div class="container">
      <a href="{{ route('home') }}" class="logo">
        <img
          src="{{ asset('assets/images/Logo LaCasa2.png') }}"
          width="160"
          height="50"
          alt="Grilli - Home"
        />
      </a>

      <nav class="navbar" data-navbar>
        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="{{ route('home') }}" class="logo">
          <img
            src="{{ asset("assets/images/Logo LaCasa2.png") }}"
            width="160"
            height="50"
            alt="Grilli - Home"
          />
        </a>

        @if (Route::has('login'))
        @auth
            <a href="{{ url('/admin') }}" class="btn btn-secondary" style="margin-bottom: 10px">
                <span class="text text-1">Dashboard</span>
                <span class="text text-2" aria-hidden="true">Dashboard </span>
            </a>
        @else
            <a href="{{ url('/login') }}" class="btn" style="margin-bottom: 10px">
                <span class="text text-1">Login</span>
                <span class="text text-2" aria-hidden="true">Login </span>
            </a>
            @if (Route::has('register'))
                <a href="{{ url('/register') }}" class="btn btn-secondary">
                    <span class="text text-1">Register</span>

                    <span class="text text-2" aria-hidden="true">Register</span>
                </a>
            @endif
        @endauth
      @endif

        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="{{ route('home') }}" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="{{ route('restaurant') }}" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Restaurant</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="{{ route('benefit') }}" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Benefit</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="{{ route('article') }}" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Article</span>
            </a>
          </li>
          <li class="navbar-item">
            <a href="{{ route('contact') }}" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
      @if (Route::has('login'))
        @auth
            <a href="{{ url('/admin') }}" class="btn header-btn btn-secondary mr-8" >
                <span class="text text-1">Dashboard</span>

                <span class="text text-2" aria-hidden="true">Dashboard </span>
            </a>
        @else
            <a href="{{ url('/login') }}" class="btn header-btn mr-8" data-nav-toggler>
                <span class="text text-1">Login</span>

                <span class="text text-2" aria-hidden="true">Login </span>
            </a>
            @if (Route::has('register'))
                <a href="{{ url('/register') }}" class="btn header-btn btn-secondary">
                    <span class="text text-1">Register</span>

                    <span class="text text-2" aria-hidden="true">Register</span>
                </a>
            @endif
        @endauth
      @endif
      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>
