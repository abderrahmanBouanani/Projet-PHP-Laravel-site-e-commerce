<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
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
    <link href="{{ asset('assets/css/tiny-slider.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
    <title>ShopAll &mdash; Panier</title>
  </head>

  <body>
    <!-- Start Header/Navigation -->
    <nav
      class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
      arial-label="Barre de navigation ShopAll"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html">ShopAll<span>.</span></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarsShopAll"
          aria-controls="navbarsShopAll"
          aria-expanded="false"
          aria-label="Basculer la navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsShopAll">
          <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/client_home')}}">Accueil</a>
            </li>
            <li><a class="nav-link" href="{{url('/client_shop')}}">Boutique</a></li>
            <li><a class="nav-link" href="{{url('/client_about')}}">À propos</a></li>
            <li><a class="nav-link" href="{{url('/client_service')}}">Services</a></li>
            <li><a class="nav-link" href="{{url('/client_contact')}}">Contact</a></li>
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

    <!-- Start Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <h1>Panier</h1>
            </div>
          </div>
          <div class="col-lg-7"></div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section before-footer-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Produit</th>
                    <th class="product-price">Prix</th>
                    <th class="product-quantity">Quantité</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Supprimer</th>
                  </tr>
                </thead>
                <tbody id="cart-items">
                  <!-- Les éléments du panier seront ajoutés ici dynamiquement -->
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <button class="btn btn-outline-black btn-sm btn-block">
                  Continuer les achats
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Entrez votre code coupon si vous en avez un.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input
                  type="text"
                  class="form-control py-3"
                  id="coupon"
                  placeholder="Code coupon"
                />
              </div>
              <div class="col-md-4">
                <button class="btn btn-black" id="applyCoupon">
                  Appliquer Coupon
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">
                      Total du panier
                    </h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Sous-total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black" id="subtotal">0.00 DH</strong>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Réduction</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black" id="discount">0.00 DH</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black" id="total">0.00 DH</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button
                      class="btn btn-black btn-lg py-3 btn-block"
                      onclick="window.location=`{{url('/client/checkout')}}`"
                    >
                      Procéder au paiement
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                ><span>Abonnez-vous à notre newsletter</span>
              </h3>
              <form action="#" class="row g-3">
                <div class="col-auto">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Entrez votre nom"
                  />
                </div>
                <div class="col-auto">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Entrez votre email"
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
              <a href="#" class="footer-logo">ShopAll<span>.</span></a>
            </div>
            <p class="mb-4">
              Chez ShopAll, nous sommes passionnés par l'offre d'une large gamme
              de produits de qualité pour tous vos besoins. Notre engagement
              envers l'excellence et la satisfaction du client fait de nous
              votre choix idéal pour le shopping en ligne.
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
                  <li><a href="#">À propos de nous</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Nous contacter</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Base de connaissances</a></li>
                  <li><a href="#">Chat en direct</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Notre équipe</a></li>
                  <li><a href="#">Leadership</a></li>
                  <li><a href="#">Politique de confidentialité</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Chaise nordique</a></li>
                  <li><a href="#">Kruzo Aero</a></li>
                  <li><a href="#">Chaise ergonomique</a></li>
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
                . Tous droits réservés. &mdash; Conçu avec amour par ShopAll.
              </p>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
              <ul class="list-unstyled d-inline-flex ms-auto">
                <li class="me-4"><a href="#">Conditions générales</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const cartTableBody = document.querySelector("#cart-items"); // Corps du tableau du panier
        let cart = JSON.parse(localStorage.getItem("cart")) || []; // Récupérer le panier du stockage local

        // Fonction pour afficher le panier
        function renderCart() {
          cartTableBody.innerHTML = ""; // Effacer le corps du tableau
          cart.forEach((product) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                    <td class="product-thumbnail"><img src="${
                      product.image
                    }" alt="${
              product.name
            }" class="img-fluid" style="mix-blend-mode: multiply;"></td>
                    <td class="product-name"><h2 class="h5 text-black">${
                      product.name
                    }</h2></td>
                    <td>${product.price} DH</td>
                    <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                            <input type="text" class="form-control text-center quantity-amount" value="${
                              product.quantity
                            }" readonly>
                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                        </div>
                    </td>
                    <td class="total-price">${(
                      product.price * product.quantity
                    ).toFixed(2)} DH</td>
                    <td><a href="#" class="btn btn-black btn-sm remove-item">X</a></td>
                `;
            cartTableBody.appendChild(row);
          });
          calculateTotal(); // Calculer le total après le rendu
          attachEventListeners(); // Réattacher les écouteurs d'événements
        }

        // Fonction pour calculer le total
        function calculateTotal() {
          let subtotal = cart.reduce(
            (sum, product) => sum + product.price * product.quantity,
            0
          );
          document.getElementById("subtotal").innerText =
            subtotal.toFixed(2) + " DH";
          document.getElementById("total").innerText =
            subtotal.toFixed(2) + " DH"; // Mettre à jour le total affiché
        }

        // Fonction pour attacher les écouteurs aux boutons après chaque rendu
        function attachEventListeners() {
          document
            .querySelectorAll(".increase, .decrease")
            .forEach((button) => {
              button.addEventListener("click", function () {
                const input = this.closest(".quantity-container").querySelector(
                  ".quantity-amount"
                );
                let value = parseInt(input.value);
                if (this.classList.contains("increase")) {
                  value++;
                } else if (value > 1) {
                  value--;
                }
                input.value = value;

                // Mettre à jour la quantité dans le panier
                const row = this.closest("tr");
                const name = row.querySelector(".product-name h2").innerText;
                const product = cart.find((item) => item.name === name);
                if (product) {
                  product.quantity = value;
                  localStorage.setItem("cart", JSON.stringify(cart)); // Mettre à jour le stockage local
                  row.querySelector(".total-price").innerText =
                    (product.price * product.quantity).toFixed(2) + " DH";
                  calculateTotal(); // Recalculer le total
                }
              });
            });

          // Supprimer un produit
          cartTableBody.querySelectorAll(".remove-item").forEach((button) => {
            button.addEventListener("click", function () {
              const row = this.closest("tr");
              const name = row.querySelector(".product-name h2").innerText;
              cart = cart.filter((item) => item.name !== name);
              localStorage.setItem("cart", JSON.stringify(cart));
              renderCart(); // Réafficher le panier
            });
          });
        }

        renderCart(); // Afficher le panier initial

        // Gestion du code promo
        document.getElementById("applyCoupon").addEventListener("click", () => {
          const couponCode = document
            .getElementById("coupon")
            .value.toUpperCase();
          const subtotal = parseFloat(
            document.getElementById("subtotal").textContent
          );

          // Liste des codes promo
          const coupons = {
            PROMO10: 0.1, // Réduction de 10%
            PROMO20: 0.2, // Réduction de 20%
          };

          if (coupons[couponCode]) {
            const discount = subtotal * coupons[couponCode];
            document.getElementById("discount").textContent =
              discount.toFixed(2) + " DH";
            document.getElementById("total").textContent =
              (subtotal - discount).toFixed(2) + " DH";
            alert("Code promo appliqué avec succès !");
          } else {
            alert("Code promo invalide");
          }
        });
      });
    </script>
  </body>
</html>
