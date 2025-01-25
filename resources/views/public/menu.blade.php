@extends('layouts.base-menu')

@section('content')
    <!-- #MENU -->
    <section class="section menu" aria-label="menu-label" id="menu" >
        <div class="container">
        <p class="section-subtitle text-center label-2">Special Selection</p>
        <h2 class="headline-1 section-title text-center">Delicious Menu</h2>
        <ul class="grid-list">

            <li>
            <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>

                <div class="title-wrapper">
                    <h3 class="title-3">
                    <a href="#" class="card-title">Greek Salad</a>
                    </h3>

                    <span class="badge label-1">Seasonal</span>

                    <span class="span title-2">$25.50</span>
                </div>

                <p class="card-text label-1">
                    Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.
                </p>

                </div>

            </div>
            </li>

            <li>
            <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./assets/images/menu-2.png" width="100" height="100" loading="lazy" alt="Lasagne"
                    class="img-cover">
                </figure>

                <div>

                <div class="title-wrapper">
                    <h3 class="title-3">
                    <a href="#" class="card-title">Lasagne</a>
                    </h3>

                    <span class="span title-2">$40.00</span>
                </div>

                <p class="card-text label-1">
                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                </p>

                </div>

            </div>
            </li>

            <li>
            <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./assets/images/menu-3.png" width="100" height="100" loading="lazy" alt="Butternut Pumpkin"
                    class="img-cover">
                </figure>

                <div>

                <div class="title-wrapper">
                    <h3 class="title-3">
                    <a href="#" class="card-title">Butternut Pumpkin</a>
                    </h3>

                    <span class="span title-2">$10.00</span>
                </div>

                <p class="card-text label-1">
                    Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.
                </p>

                </div>

            </div>
            </li>

            <li>
            <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./assets/images/menu-4.png" width="100" height="100" loading="lazy" alt="Tokusen Wagyu"
                    class="img-cover">
                </figure>

                <div>

                <div class="title-wrapper">
                    <h3 class="title-3">
                    <a href="#" class="card-title">Tokusen Wagyu</a>
                    </h3>

                    <span class="badge label-1">New</span>

                    <span class="span title-2">$39.00</span>
                </div>

                <p class="card-text label-1">
                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.
                </p>

                </div>

            </div>
            </li>

            <li>
            <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./assets/images/menu-5.png" width="100" height="100" loading="lazy" alt="Olivas Rellenas"
                    class="img-cover">
                </figure>

                <div>

                <div class="title-wrapper">
                    <h3 class="title-3">
                    <a href="#" class="card-title">Olivas Rellenas</a>
                    </h3>

                    <span class="span title-2">$25.00</span>
                </div>

                <p class="card-text label-1">
                    Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper.
                </p>

                </div>

            </div>
            </li>

            <li>
            <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="./assets/images/menu-6.png" width="100" height="100" loading="lazy" alt="Opu Fish"
                    class="img-cover">
                </figure>

                <div>

                <div class="title-wrapper">
                    <h3 class="title-3">
                    <a href="#" class="card-title">Opu Fish</a>
                    </h3>

                    <span class="span title-2">$49.00</span>
                </div>

                <p class="card-text label-1">
                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                </p>

                </div>

            </div>
            </li>

        </ul>

        <p class="menu-text text-center">
            During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
        </p>

        <a href="#" class="btn btn-primary">
            <span class="text text-1">View All Menu</span>

            <span class="text text-2" aria-hidden="true">View All Menu</span>
        </a>

        <img src="./assets/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
        <img src="./assets/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
    </section>

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
