<header class="header" data-header>
    <div class="container">
      <a href="#" class="logo">
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

        <a href="#" class="logo">
          <img
            src="{{ asset("assets/images/Logo LaCasa2.png") }}"
            width="160"
            height="50"
            alt="Grilli - Home"
          />
        </a>

        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">About Us</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#restaurant" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Restaurant</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#keunggulan" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Benefit</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#article" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Article</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Contact</span>
            </a>
          </li>

          @if (Route::has('login'))
            @auth
                <li class="navbar-item" style="margin-top: 25rem">
                    <a href="{{ url('/admin') }}" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Dashboard</span>
                    </a>
                </li>
            @else
                <li class="navbar-item" style="margin-top: 25rem">
                    <a href="{{ url('/login') }}" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Login</span>
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class="navbar-item">
                        <a href="{{ url('/register') }}" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Register</span>
                        </a>
                    </li>
                @endif
            @endauth
        @endif
        </ul>
      </nav>
      @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-secondary mr-8">
                <span class="text text-1">Dashboard</span>

                <span class="text text-2" aria-hidden="true">Login </span>
            </a>
        @else
            <a href="{{ url('/login') }}" class="btn btn-secondary mr-8">
                <span class="text text-1">login</span>

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
      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>
