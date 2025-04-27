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

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        // Liste des produits existants
        const existingProducts = [
          {
            name: "MSI",
            price: 11500.0,
            image: "../images/pc1.jpg",
            category: "Ordinateurs",
          },
          {
            name: "Ecran Dell",
            price: 1500.0,
            image: "../images/ecran12.jpg",
            category: "Écrans",
          },
          {
            name: "Ecran Dell mini",
            price: 2000.0,
            image: "../images/pc2.jpg",
            category: "Écrans",
          },
          {
            name: "Ecran Gamer 60HZ",
            price: 3500.0,
            image: "../images/pc4.jpg",
            category: "Écrans",
          },
          {
            name: "Asus i3",
            price: 3500.0,
            image: "../images/unite1.jpg",
            category: "Ordinateurs",
          },
          {
            name: "Dell I5",
            price: 3000.0,
            image: "../images/unite4.webp",
            category: "Ordinateurs",
          },
          {
            name: "HP I7",
            price: 5000.0,
            image: "../images/uniten1.webp",
            category: "Ordinateurs",
          },
          {
            name: "HP I5",
            price: 3000.0,
            image: "../images/uniten2.jpeg",
            category: "Ordinateurs",
          },
          {
            name: "World Time",
            price: 5000.0,
            image: "../images/montre1.jpg",
            category: "Montres",
          },
          {
            name: "Rolex",
            price: 7000.0,
            image: "../images/montre2.jpg",
            category: "Montres",
          },
          {
            name: "Boss Collection",
            price: 8500.0,
            image: "../images/montre6.jpg",
            category: "Montres",
          },
          {
            name: "Boss Collection Black",
            price: 8000.0,
            image: "../images/montre7.jpg",
            category: "Montres",
          },
          {
            name: "Chaise Gamer",
            price: 2500.0,
            image: "../images/chaise1.jpg",
            category: "Chaises",
          },
          {
            name: "Chaise Gamer",
            price: 3000.0,
            image: "../images/chaise2.jpg",
            category: "Chaises",
          },
          {
            name: "Chaise normal",
            price: 700.0,
            image: "../images/product-2.png",
            category: "Chaises",
          },
          {
            name: "Chaise Zen",
            price: 400.0,
            image: "../images/product-1.png",
            category: "Chaises",
          },
          {
            name: "Clavier Mécanique",
            price: 1500.0,
            image:
              "https://jmb.com.tn/wp-content/uploads/2024/06/clavier-gamer-spirit-of-gamer-xpert-k200-rgb-noir-600x600.jpg",
            category: "Claviers",
          },
          {
            name: "Clavier Mécanique (puissant)",
            price: 1700.0,
            image: "../images/clavier2.jpg",
            category: "Claviers",
          },
          {
            name: "Clavier Normal",
            price: 200.0,
            image:
              "https://rightech.ma/2774-medium_default/clavier-dell-multimedia-keyboard-kb216-azerty-noir.webp",
            category: "Claviers",
          },
          {
            name: "Clavier Normal Standard",
            price: 250.0,
            image: "../images/clavier4.jpg",
            category: "Claviers",
          },
        ];

        // Fonction pour récupérer les produits depuis localStorage
        function getProductsFromLocalStorage() {
          return JSON.parse(localStorage.getItem("products")) || [];
        }

        // Fonction pour combiner les produits existants et ceux du localStorage
        function getAllProducts() {
          const localStorageProducts = getProductsFromLocalStorage();
          return [...existingProducts, ...localStorageProducts];
        }

        // Fonction pour afficher les produits
        function displayProducts(productsToDisplay) {
          const productList = document.getElementById("product-list");
          productList.innerHTML = ""; // Vide le conteneur avant d'afficher les produits
          productsToDisplay.forEach((product) => {
            const productElement = document.createElement("div");
            productElement.className = "col-12 col-md-4 col-lg-3 mb-5";
            productElement.innerHTML = `
        <a class="product-item product add-to-cart"
           href="#"
           data-name="${product.name}"
           data-price="${product.price}"
           data-image="${product.image}">
          <img src="${product.image}" class="img-fluid product-thumbnail" style="mix-blend-mode: multiply;">
          <h3 class="product-title">${product.name}</h3>
          <strong class="product-price">${product.price} DH</strong>
          <span class="icon-cross">
            <img src="../images/cross.svg" class="img-fluid">
          </span>
        </a>
      `;
            productList.appendChild(productElement);
          });
        }

        // Initialisation : afficher tous les produits
        const allProducts = getAllProducts();
        displayProducts(allProducts);

        // Gestion des événements pour le panier
        document.addEventListener("click", (e) => {
          if (e.target.closest(".add-to-cart")) {
            e.preventDefault();
            const product = e.target.closest(".add-to-cart");
            const name = product.getAttribute("data-name");
            const price = parseFloat(product.getAttribute("data-price"));
            const image = product.getAttribute("data-image");

            // Création de l'objet produit
            const productData = { name, price, image, quantity: 1 };

            // Récupération du panier depuis localStorage ou initialisation
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            // Vérifie si le produit existe déjà dans le panier
            const existingProduct = cart.find((item) => item.name === name);
            if (existingProduct) {
              existingProduct.quantity += 1;
            } else {
              cart.push(productData);
            }

            // Sauvegarde le panier mis à jour dans localStorage
            localStorage.setItem("cart", JSON.stringify(cart));
            alert(`${name} a été ajouté à votre panier.`);
          }
        });

        // Gestion de la recherche
        const searchInput = document.getElementById("search");
        searchInput.addEventListener("input", () => {
          const searchTerm = searchInput.value.toLowerCase();
          const filteredProducts = allProducts.filter((product) =>
            product.name.toLowerCase().includes(searchTerm)
          );
          displayProducts(filteredProducts);
        });

        // Gestion du filtrage
        const filterSelect = document.getElementById("filtrer");
        filterSelect.addEventListener("change", () => {
          const filterValue = filterSelect.value;
          let filteredProducts;
          if (filterValue === "prix") {
            filteredProducts = [...allProducts].sort(
              (a, b) => a.price - b.price
            );
          } else if (filterValue === "categorie") {
            // Group products by category
            const groupedProducts = allProducts.reduce((acc, product) => {
              if (!acc[product.category]) {
                acc[product.category] = [];
              }
              acc[product.category].push(product);
              return acc;
            }, {});

            // Flatten the grouped products back into an array
            filteredProducts = Object.values(groupedProducts).flat();
          } else {
            filteredProducts = allProducts;
          }
          displayProducts(filteredProducts);
        });

        // Gestion de la sélection de catégorie
        const categorySelect = document.getElementById("categorie");
        filterSelect.addEventListener("change", () => {
          if (filterSelect.value === "categorie") {
            categorySelect.style.display = "block";
            document.querySelector('label[for="categorie"]').style.display =
              "block";
          } else {
            categorySelect.style.display = "none";
            document.querySelector('label[for="categorie"]').style.display =
              "none";
          }
        });

        categorySelect.addEventListener("change", () => {
          const selectedCategory = categorySelect.value;
          const filteredProducts = selectedCategory
            ? allProducts.filter(
                (product) => product.category === selectedCategory
              )
            : allProducts;
          displayProducts(filteredProducts);
        });
      });
    </script>

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
