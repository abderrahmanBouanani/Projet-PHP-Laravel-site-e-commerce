<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Untree.co" />
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
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css')}}" />
    <script src="{{ asset('assets/js/shop.js')}}"></script>
    <title>ShopAll - Boutique</title>

    <style>
      /* Style global pour les inputs */
      .hero input,
      .hero select {
        border: 2px solid #fff;
        border-radius: 5px;
        padding: 10px;
        color: #333;
        background-color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        width: 100%;
        transition: all 0.3s ease;
      }

      /* Survol des inputs */
      .hero input:focus,
      .hero select:focus {
        outline: none; /* Supprime le contour par défaut */
        border-color: #007bff; /* Bordure bleue au survol */
        background-color: #fff; /* Fond solide */
      }

      /* Style pour le label */
      .hero .form-label {
        font-weight: bold; /* Texte en gras */
        margin-bottom: 5px; /* Espacement sous le label */
        display: block; /* Label au-dessus des inputs */
      }

      /* Style spécifique pour les conteneurs */
      .hero .form-control {
        margin-bottom: 15px; /* Espacement entre les champs */
      }

      /* Style spécifique pour le champ de recherche */
      .hero #search {
        width: 80%; /* Largeur personnalisée */
        max-width: 400px; /* Largeur maximum */
      }

      /* Style spécifique pour le champ de filtrage */
      .hero #filtrer {
        width: 80%; /* Largeur personnalisée */
        max-width: 400px; /* Largeur maximum */
      }
    </style>
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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/client_home')}}">Accueil</a>
            </li>
            <li class="active">
              <a class="nav-link" href="{{url('/client_shop')}}">Boutique</a>
            </li>
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
              <h1>Shop</h1>
            </div>
          </div>
          <div class="col-lg-7" style="margin-right: 200px">
            <label for="search" class="form-label text-light">Rechercher</label>
            <input
              type="text"
              id="search"
              class="form-control w-50"
              placeholder="Tapez pour chercher"
            />
            <br />
            <label for="filtrer" class="form-label text-light">Filtrer</label>
            <select id="filtrer" class="form-control w-50">
              <option value="">Tous les produits</option>
              <option value="prix">Prix (croissant)</option>
              <option value="categorie">Catégorie</option>
            </select>
            <label
              for="categorie"
              class="form-label text-light mt-3"
              style="display: none"
              >Choisissez une catégorie</label
            >
            <select
              id="categorie"
              class="form-control w-50"
              style="display: none"
            >
              <option value="">Toutes les catégories</option>
              <option value="Écrans">Écrans</option>
              <option value="Ordinateurs">Ordinateurs</option>
              <option value="Montres">Montres</option>
              <option value="Chaises">Chaises</option>
              <option value="Claviers">Claviers</option>
              <option value="Téléphones">Téléphone</option>
              <option value="MontresTactiles">Montres tactiles</option>
            </select>
          </div>

          <div class="col-lg-7">
            <div class="hero-img-wrap">
              <img
                src="https://assets.corsair.com/image/upload/c_pad,q_85,h_1100,w_1100,f_auto/products/Cases/2500D/CC-9011263-WW/Gallery/2500D_AIRFLOW_BLACK_HERO_01.webp"
                class="img-fluid pc-gamer"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Products Section -->
    <div class="untree_co-section product-section before-footer-section">
      <div class="container">
        <div class="row" id="product-list">
          <!-- Les produits seront générés dynamiquement ici -->
        </div>
      </div>
    </div>
    <!-- End Products Section -->

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

              <form id="email-form" class="row g-3">
                <div class="col-auto">
                  <input
                    type="text"
                    id="user-name"
                    class="form-control"
                    placeholder="Enter your name"
                    required
                  />
                </div>
                <div class="col-auto">
                  <input
                    type="email"
                    id="user-email"
                    class="form-control"
                    placeholder="Enter your email"
                    required
                  />
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary">
                    <span class="fa fa-paper-plane"></span>
                  </button>
                </div>
              </form>

              <!-- Confirmation message -->
              <p id="response-message"></p>
            </div>
          </div>
        </div>

        <div class="row g-5 mb-5">
          <div class="col-lg-4">
            <div class="mb-4 footer-logo-wrap">
              <a href="#" class="footer-logo">Shopall<span>.</span></a>
            </div>
            <p class="mb-4">
              Facilités faites, de telle manière qu'elles remplissent le rôle de
              base. Vivre dans la haine, c'est rechercher un but précis dans la
              lutte contre la douleur. Une forme de lutte dans la capacité de se
              tenir ferme dans la tempête. Les habitants d'un endroit.
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
                . Tous droits reservés.
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

    <!-- Include EmailJS script -->
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
  </body>
</html>
