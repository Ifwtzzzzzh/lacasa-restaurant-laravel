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

        <img src="./assets/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
        <img src="./assets/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
    </section>

    {{-- #RESERVATION --}}
    <section class="reservation">
        <div class="container">
          <div class="form form-right text-center bg-black-10">
            <form action="" class="form-left">
              <h2 class="headline-1 text-center">Online Reservation</h2>
              <p class="form-text text-center">
                Booking request <a href="tel:+88123123456" class="link">+88-123-123456</a>
                or fill out the order form
              </p>
              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field">
                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field">
                <div class="icon-wrapper">
                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                    <select name="person" class="input-field">
                      <option value="table">Meja 1</option>
                      <option value="table">Meja 2</option>
                      <option value="table">Meja 3</option>
                      <option value="table">Meja 4</option>
                      <option value="table">Meja 5</option>
                    </select>
                    <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                  </div>
                  <div class="icon-wrapper">
                    <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                    <input type="date" name="reservation-date" class="input-field">
                    <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                  </div>
              </div>

              <h2 class="headline-1 text-center text-menu">Menu</h2>
              <div class="icon-wrapper" id='icon-wrapper'>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                  <select name="menu" class="input-field">
                    <option value="tiramisu-cake">Tiramisu Cake</option>
                    <option value="tiramisu-cake">Spagheti</option>
                    <option value="tiramisu-cake">Toast</option>
                  </select>
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
              <div class="icon-wrapper" id="icon-wrapper">
                <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                  <input type="number" name="number" placeholder="Quantity" autocomplete="off" class="input-field">
                </div>

                <div class="menu-container" id="menu-container">
                    <!-- Dynamic menu items will appear here -->
                </div>

                <a class="btn btn-menu" id="btn-menu">
                    <span class="text text-1">Add Menu</span>
                    <span class="text text-2" aria-hidden="true">Add Menu</span>
                </a>
                <p class="text-summary">
                    Total Pembelian : Rp. 0
                </p>
                <p>Sub Total : Rp. 0</p>
                <p>PPN 11% : Rp. 0</p>
                <p>PPN 11% : Rp. 0</p>
                <p class="text-total">Total Pembelian : Rp. 0</p>
                <button type="submit" class="btn btn-secondary btn-submit">
                  <span class="text text-1">Book A Table</span>
                  <span class="text text-2" aria-hidden="true">Book A Table</span>
                </button>
              </div>

            </form>

            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

              <h2 class="headline-1 text-center">Contact Us</h2>

              <p class="contact-label">Booking Request</p>

              <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+88-123-123456</a>

              <div class="separator"></div>

              <p class="contact-label">Location</p>

              <address class="body-4">
                Restaurant St, Delicious City, <br>
                London 9578, UK
              </address>

              <p class="contact-label">Lunch Time</p>

              <p class="body-4">
                Monday to Sunday <br>
                11.00 am - 2.30pm
              </p>

              <p class="contact-label">Dinner Time</p>

              <p class="body-4">
                Monday to Sunday <br>
                05.00 pm - 10.00pm
              </p>

            </div>

          </div>

        </div>
    </section>
    <script>
        document.getElementById('btn-menu').addEventListener('click', function() {
            const menuContainer = document.getElementById('menu-container');

            // Create a new div
            const newDiv = document.createElement('div');

            // Add content to the new div
            newDiv.innerHTML = `
                <div class="icon-wrapper" id='icon-wrapper'>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                  <select name="menu" class="input-field">
                    <option value="tiramisu-cake">Tiramisu Cake</option>
                    <option value="tiramisu-cake">Spagheti</option>
                    <option value="tiramisu-cake">Toast</option>
                  </select>
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
              <div class="icon-wrapper" id="icon-wrapper">
                <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                  <input type="number" name="number" placeholder="Quantity" autocomplete="off" class="input-field">
                </div>
            `;

            // Append the new div to the menu container
            menuContainer.appendChild(newDiv);
        });
    </script>
@endsection
