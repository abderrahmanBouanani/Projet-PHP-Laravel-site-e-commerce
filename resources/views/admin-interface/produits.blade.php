<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopAll - Produits</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <style>
      :root {
        --primary-green: #2f4f4f;
        --light-green: #3c5f5f;
        --accent-yellow: #ffd700;
        --text-white: #ffffff;
      }

      body {
        background-color: #fafcfc;
      }

      .sidebar {
        background-color: var(--primary-green);
        height: 100vh;
        width: 280px;
        position: fixed;
        left: 0;
        top: 0;
        padding: 20px;
        border-top-right-radius: 40px;
        border-bottom-right-radius: 40px;
      }

      .custom-navbar {
        margin-bottom: 30px;
      }

      .navbar-brand {
        color: var(--text-white);
        font-size: 28px;
        font-weight: bold;
        text-decoration: none;
      }

      .navbar-brand span {
        color: var(--accent-yellow);
      }

      .side-bar-content {
        display: flex;
        flex-direction: column;
      }

      .nav-link {
        color: var(--text-white);
        padding: 12px 20px;
        border-radius: 10px;
        margin-bottom: 5px;
        transition: all 0.3s ease;
      }

      .nav-link:hover {
        background-color: var(--light-green);
        color: var(--text-white);
      }

      .nav-link.active {
        background-color: var(--light-green);
        color: var(--text-white);
        border-left: 3px solid var(--accent-yellow);
      }

      .main-content {
        margin-left: 280px;
        padding: 20px 40px;
      }

      .table th {
        color: var(--primary-green);
        font-weight: 500;
      }

      .search-sort-container {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      .product-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <nav class="custom-navbar">
        <a class="navbar-brand" href="{{url('/admin_home')}}">ShopAll<span>.</span></a>
      </nav>

      <nav class="side-bar-content">
        <a href="{{url('/admin_home')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-grid me-2"></i>
          Tableau de Bord
        </a>
        <a href="{{url('/admin_utilisateur')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-person-lines-fill me-2"></i>
          Utilisateur
        </a>
        <a
          href="{{url('/admin_produit')}}"
          class="nav-link active d-flex align-items-center"
        >
          <i class="bi bi-box-seam me-2"></i>
          Produits
        </a>
        <a href="{{url('/admin_commande')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-cart me-2"></i>
          Commandes
        </a>
        <a href="{{url('/admin_about')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-person me-2"></i>
          Profile
        </a>
        <a class="nav-link" href="{{url('/')}}"
          ><img
            src="../images/logout2.png"
            style="height: 30px; width: 30px; margin-left: 15px"
        /></a>
      </nav>
    </div>

    <div class="main-content">
      <h1 class="h3 mb-4">Liste des Produits</h1>

      <div class="search-sort-container">
        <div class="row g-3">
          <div class="col-md-4">
            <input
              type="text"
              class="form-control"
              id="searchInput"
              placeholder="Rechercher un produit"
            />
          </div>
          <div class="col-md-4">
            <select class="form-select" id="categoryFilter">
              <option value="">Toutes les catégories</option>
            </select>
          </div>
          <div class="col-md-4">
            <select class="form-select" id="sortSelect">
              <option value="name">Trier par nom</option>
              <option value="price-asc">Prix croissant</option>
              <option value="price-desc">Prix décroissant</option>
            </select>
          </div>
        </div>
      </div>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody id="productsList">
          <!-- Les produits seront ajoutés ici dynamiquement -->
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        let allProducts = [];

        // Fonction pour charger les produits
        function loadProducts() {
          // Combinaison des produits existants et ceux du localStorage
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
              image: "../images/clavier1.jpg",
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
              image: "../images/clavier3.jpg",
              category: "Claviers",
            },
            {
              name: "Clavier Normal Standard",
              price: 250.0,
              image: "../images/clavier4.jpg",
              category: "Claviers",
            },
          ];
          const localStorageProducts =
            JSON.parse(localStorage.getItem("products")) || [];
          allProducts = [...existingProducts, ...localStorageProducts];
          displayProducts(allProducts);
          populateCategoryFilter();
        }

        // Fonction pour afficher les produits
        function displayProducts(products) {
          const productsList = document.getElementById("productsList");
          productsList.innerHTML = "";
          products.forEach((product) => {
            const row = `
                    <tr>
                        <td><img src="${product.image}" alt="${
              product.name
            }" class="product-image"></td>
                        <td>${product.name}</td>
                        <td>${product.category}</td>
                        <td>${product.price.toFixed(2)} DH</td>
                    </tr>
                `;
            productsList.insertAdjacentHTML("beforeend", row);
          });
        }

        // Fonction pour peupler le filtre de catégories
        function populateCategoryFilter() {
          const categoryFilter = document.getElementById("categoryFilter");
          const categories = [
            ...new Set(allProducts.map((product) => product.category)),
          ];
          categories.forEach((category) => {
            const option = document.createElement("option");
            option.value = category;
            option.textContent = category;
            categoryFilter.appendChild(option);
          });
        }

        // Fonction de recherche
        function searchProducts() {
          const searchTerm = document
            .getElementById("searchInput")
            .value.toLowerCase();
          const categoryFilter =
            document.getElementById("categoryFilter").value;
          const filteredProducts = allProducts.filter(
            (product) =>
              product.name.toLowerCase().includes(searchTerm) &&
              (categoryFilter === "" || product.category === categoryFilter)
          );
          displayProducts(filteredProducts);
        }

        // Fonction de tri
        function sortProducts() {
          const sortValue = document.getElementById("sortSelect").value;
          let sortedProducts = [...allProducts];
          switch (sortValue) {
            case "name":
              sortedProducts.sort((a, b) => a.name.localeCompare(b.name));
              break;
            case "price-asc":
              sortedProducts.sort((a, b) => a.price - b.price);
              break;
            case "price-desc":
              sortedProducts.sort((a, b) => b.price - a.price);
              break;
          }
          displayProducts(sortedProducts);
        }

        // Initialisation
        loadProducts();

        // Écouteurs d'événements
        document
          .getElementById("searchInput")
          .addEventListener("input", searchProducts);
        document
          .getElementById("categoryFilter")
          .addEventListener("change", searchProducts);
        document
          .getElementById("sortSelect")
          .addEventListener("change", sortProducts);
      });
    </script>
  </body>
</html>
