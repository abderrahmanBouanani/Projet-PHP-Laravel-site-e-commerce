<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
    

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/shopspe.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/profileclient.css')}}" />
    <script src="{{ asset('assets/js/shop.js')}}"></script>
    <title>{{ $page ?? 'ShopAll - Home' }}</title>
  </head>

  <body>
    <!-- Start Header/Navigation -->
    <nav
      class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
      arial-label="Furni navigation bar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html">ShopAll<span>.</span></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarsFurni"
          aria-controls="navbarsFurni"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
    <li class="nav-item {{ request()->is('client_home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/client_home') }}">Accueil</a>
    </li>
    <li class="nav-item {{ request()->is('client_shop') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/client_shop') }}">Boutique</a>
    </li>
    <li class="nav-item {{ request()->is('client_about') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/client_about') }}">À propos</a>
    </li>
    <li class="nav-item {{ request()->is('client_service') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/client_service') }}">Services</a>
    </li>
    <li class="nav-item {{ request()->is('client_contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/client_contact') }}">Contact</a>
    </li>
</ul>



          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li>
              <a class="nav-link" href="{{url('/client_profile')}}"
                ><img src="../images/user.svg"
              /></a>
            </li>
            <li>
              <a class="nav-link" href="{{url('/client_cart')}}"
                ><img src="../images/cart.svg"
              /></a>
            </li>
            <li>
              <a class="nav-link" href="{{url('/')}}"
                ><img
                  src="../images/logout2.png"
                  style="height: 30px; width: 30px; margin-left: 15px"
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Header/Navigation -->
    @yield('content')
    


    <!-- Start Footer Section -->
    <footer class="footer-section">
      <div class="container relative">
        <div class="sofa-img">
          <img src="../images/sofa.png" alt="Image" class="img-fluid" />
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="subscription-form">
              <h3 class="d-flex align-items-center">
                <span class="me-1"
                  ><img
                    src="../images/envelope-outline.svg"
                    alt="Image"
                    class="img-fluid" /></span
                ><span>Subscribe to Newsletter</span>
              </h3>

              <form action="#" class="row g-3">
                <div class="col-auto">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your name"
                  />
                </div>
                <div class="col-auto">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter your email"
                  />
                </div>
                <div class="col-auto">
                  <button class="btn btn-primary">
                    <span class="fa fa-paper-plane"></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row g-5 mb-5">
          <div class="col-lg-4">
            <div class="mb-4 footer-logo-wrap">
              <a href="#" class="footer-logo">Furni<span>.</span></a>
            </div>
            <p class="mb-4">
              La facilitation commence par un pur blocage du travail. Nous vous
              offrons une alternative à cette situation. Ensemble, nous
              trouverons une solution pour améliorer ce processus. Le confort
              d'un Client est essentiel
            </p>

            <ul class="list-unstyled custom-social">
              <li>
                <a href="#"><span class="fa fa-brands fa-facebook-f"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-linkedin"></span></a>
              </li>
            </ul>
          </div>

          <div class="col-lg-8">
            <div class="row links-wrap">
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Knowledge base</a></li>
                  <li><a href="#">Live chat</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Our team</a></li>
                  <li><a href="#">Leadership</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Nordic Chair</a></li>
                  <li><a href="#">Kruzo Aero</a></li>
                  <li><a href="#">Ergonomic Chair</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="border-top copyright">
          <div class="row pt-4">
            <div class="col-lg-6">
              <p class="mb-2 text-center text-lg-start">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                . Tous droits réservés.
              </p>
            </div>

            <div class="col-lg-6 text-center text-lg-end">
              <ul class="list-unstyled d-inline-flex ms-auto">
                <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
	<script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/contact.js')}}"></script>
    <script
      type="text/javascript"
      src="https://cdn.emailjs.com/dist/email.min.js"
    ></script>
    <script src="{{ asset('assets/js/boutique.js')}}"></script>
    


<script>
      // Fonction pour charger le résumé de la commande
      function loadOrderSummary() {
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const orderSummaryContainer = document.getElementById("order-summary");
        orderSummaryContainer.innerHTML = "";

        let total = 0;
        cart.forEach((item) => {
          const itemTotal = item.price * item.quantity;
          total += itemTotal;
          const row = document.createElement("tr");
          row.innerHTML = `
          <td>${item.name} <strong class="mx-2">x</strong> ${item.quantity}</td>
          <td>${itemTotal.toFixed(2)} DH</td>
        `;
          orderSummaryContainer.appendChild(row);
        });

        const totalRow = document.createElement("tr");
        totalRow.innerHTML = `
        <td class="text-black font-weight-bold"><strong>Total de la commande</strong></td>
        <td class="text-black font-weight-bold"><strong>${total.toFixed(
          2
        )} DH</strong></td>
      `;
        orderSummaryContainer.appendChild(totalRow);

        // Mettre à jour le total dans le localStorage
        localStorage.setItem("orderTotal", total.toFixed(2));
      }

      // Fonction pour vérifier le formulaire
      function validateForm() {
        const requiredFields = [
          "c_fname",
          "c_lname",
          "c_address",
          "c_state_country",
          "c_postal_zip",
          "c_email_address",
          "c_phone",
        ];
        let isValid = true;

        requiredFields.forEach((field) => {
          const input = document.getElementById(field);
          if (!input.value.trim()) {
            input.classList.add("is-invalid");
            isValid = false;
          } else {
            input.classList.remove("is-invalid");
          }
        });

        return isValid;
      }

      // Fonction pour sauvegarder la commande
      function saveOrder() {
        const order = {
          id: Date.now(), // Utiliser le timestamp comme ID unique
          date: new Date().toISOString(),
          customer: {
            firstName: document.getElementById("c_fname").value,
            lastName: document.getElementById("c_lname").value,
            email: document.getElementById("c_email_address").value,
            phone: document.getElementById("c_phone").value,
            address: document.getElementById("c_address").value,
            city: document.getElementById("c_country").value,
            state: document.getElementById("c_state_country").value,
            postalCode: document.getElementById("c_postal_zip").value,
          },
          items: JSON.parse(localStorage.getItem("cart")) || [],
          total: parseFloat(localStorage.getItem("orderTotal") || "0"),
        };

        // Récupérer les commandes existantes ou initialiser un tableau vide
        const orders = JSON.parse(localStorage.getItem("orders")) || [];

        // Ajouter la nouvelle commande
        orders.push(order);

        // Sauvegarder les commandes mises à jour
        localStorage.setItem("orders", JSON.stringify(orders));
      }

      // Écouteurs d'événements
      document.addEventListener("DOMContentLoaded", () => {
        loadOrderSummary();

        document
          .getElementById("place-order")
          .addEventListener("click", (e) => {
            e.preventDefault();
            if (validateForm()) {
              saveOrder(); // Sauvegarder la commande
              localStorage.removeItem("cart");
              localStorage.removeItem("orderTotal");
              window.location.href = "{{url('/client/thankyou')}}";
            } else {
              alert("Veuillez remplir tous les champs obligatoires.");
            }
          });
      });
    </script>
  </body>
</html>
