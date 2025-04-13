<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopAll - Tableau de Bord</title>
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
        --chart-color-1: #4caf50;
        --chart-color-2: #ffc430;
        --chart-color-3: #95f845;
        --chart-color-4: #0f6c31;
        --chart-color-5: #706272;
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

      .stats-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      .table th {
        color: var(--primary-green);
        font-weight: 500;
      }

      .see-more {
        color: var(--primary-green);
        text-decoration: none;
        font-weight: 500;
      }

      .see-more:hover {
        color: var(--light-green);
      }

      .card {
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      .card-header {
        background-color: #fff;
        border-bottom: 1px solid #eee;
      }

      .stats-icon {
        color: var(--primary-green);
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <nav class="custom-navbar">
        <a class="navbar-brand" href="{{url('/admin_home')}}">ShopAll<span>.</span></a>
      </nav>

      <nav class="side-bar-content">
        <a
          href="{{url('/admin_home')}}"
          class="nav-link active d-flex align-items-center"
        >
          <i class="bi bi-grid me-2"></i>
          Tableau de Bord
        </a>
        <a href="{{url('/admin_utilisateur')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-person-lines-fill me-2"></i>
          Utilisateur
        </a>
        <a href="{{url('/admin_produit')}}" class="nav-link d-flex align-items-center">
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
      <h1 class="h3 mb-4">Tableau de Bord</h1>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="stats-card">
            <h6 class="text-muted mb-3">Total Clients</h6>
            <div class="d-flex justify-content-between align-items-center">
              <h3 id="totalClients">0</h3>
              <i class="bi bi-people fs-3 stats-icon"></i>
            </div>
            <div class="mt-3">
              <a href="{{ url('/admin_utilisateur')}}?type=client" class="see-more"
                >Voir plus <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="stats-card">
            <h6 class="text-muted mb-3">Total Vendeurs</h6>
            <div class="d-flex justify-content-between align-items-center">
              <h3 id="totalVendors">0</h3>
              <i class="bi bi-person-workspace fs-3 stats-icon"></i>
            </div>
            <div class="mt-3">
              <a href="{{ url('/admin_utilisateur')}}?type=Vendeur" class="see-more"
                >Voir plus <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="stats-card">
            <h6 class="text-muted mb-3">Total Produits</h6>
            <div class="d-flex justify-content-between align-items-center">
              <h3 id="totalProducts">0</h3>
              <i class="bi bi-box-seam fs-3 stats-icon"></i>
            </div>
            <div class="mt-3">
              <a href="{{ url('/admin_produit')}}" class="see-more"
                >Voir plus <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="stats-card">
            <h6 class="text-muted mb-3">Total Commandes</h6>
            <div class="d-flex justify-content-between align-items-center">
              <h3 id="totalOrders">0</h3>
              <i class="bi bi-cart fs-3 stats-icon"></i>
            </div>
            <div class="mt-3">
              <a href="{{ url('/admin_commande')}}" class="see-more"
                >Voir plus <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <!-- Bar Chart for Daily Orders -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Commandes par Jour</h5>
            </div>
            <div class="card-body">
              <div id="ordersChart" style="height: 300px"></div>
            </div>
          </div>
        </div>

        <!-- Line Chart for Revenue -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Revenus</h5>
            </div>
            <div class="card-body">
              <div id="revenueChart" style="height: 300px"></div>
            </div>
          </div>
        </div>

        <!-- Product Categories Distribution -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Distribution des Catégories</h5>
            </div>
            <div class="card-body">
              <div id="categoriesChart" style="height: 300px"></div>
            </div>
          </div>
        </div>

        <!-- User Statistics -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Statistiques Utilisateurs</h5>
            </div>
            <div class="card-body">
              <div id="userStatsChart" style="height: 300px"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4">
        <div
          class="card-header d-flex justify-content-between align-items-center"
        >
          <h5 class="mb-0">Dernières Commandes</h5>
          <a href="{{url('/admin_commande')}}" class="see-more"
            >Voir toutes les commandes</a
          >
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Client</th>
                  <th>Produits</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody id="recentOrders">
                <!-- Les commandes seront ajoutées ici dynamiquement -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        loadDashboardData();
        initializeCharts();
      });

      function loadDashboardData() {
        loadTotalProducts();
        loadUserData();
        loadOrdersData();
      }

      function initializeCharts() {
        // Get data from localStorage
        const orders = JSON.parse(localStorage.getItem("orders")) || [];
        const users = JSON.parse(localStorage.getItem("users")) || [];
        const existingProducts = [
          {
            name: "MSI",
            price: 11500.0,
            image: "images/pc1.jpg",
            category: "Ordinateurs",
          },
          {
            name: "Ecran Dell",
            price: 1500.0,
            image: "images/ecran12.jpg",
            category: "Écrans",
          },
          {
            name: "Ecran Dell mini",
            price: 2000.0,
            image: "images/pc2.jpg",
            category: "Écrans",
          },
          {
            name: "Ecran Gamer 60HZ",
            price: 3500.0,
            image: "images/pc4.jpg",
            category: "Écrans",
          },
          {
            name: "Asus i3",
            price: 3500.0,
            image: "images/unite1.jpg",
            category: "Ordinateurs",
          },
          {
            name: "Dell I5",
            price: 3000.0,
            image: "images/unite4.webp",
            category: "Ordinateurs",
          },
          {
            name: "HP I7",
            price: 5000.0,
            image: "images/uniten1.webp",
            category: "Ordinateurs",
          },
          {
            name: "HP I5",
            price: 3000.0,
            image: "images/uniten2.jpeg",
            category: "Ordinateurs",
          },
          {
            name: "World Time",
            price: 5000.0,
            image: "images/montre1.jpg",
            category: "Montres",
          },
          {
            name: "Rolex",
            price: 7000.0,
            image: "images/montre2.jpg",
            category: "Montres",
          },
          {
            name: "Boss Collection",
            price: 8500.0,
            image: "images/montre6.jpg",
            category: "Montres",
          },
          {
            name: "Boss Collection Black",
            price: 8000.0,
            image: "images/montre7.jpg",
            category: "Montres",
          },
          {
            name: "Chaise Gamer",
            price: 2500.0,
            image: "images/chaise1.jpg",
            category: "Chaises",
          },
          {
            name: "Chaise Gamer",
            price: 3000.0,
            image: "images/chaise2.jpg",
            category: "Chaises",
          },
          {
            name: "Chaise normal",
            price: 700.0,
            image: "images/product-2.png",
            category: "Chaises",
          },
          {
            name: "Chaise Zen",
            price: 400.0,
            image: "images/product-1.png",
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
            image: "images/clavier2.jpg",
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
            image: "images/clavier4.jpg",
            category: "Claviers",
          },
        ];
        const localStorageProducts =
          JSON.parse(localStorage.getItem("products")) || [];
        const allProducts = [...existingProducts, ...localStorageProducts];

        // Process data for daily orders chart
        const last7Days = [...Array(7)]
          .map((_, i) => {
            const d = new Date();
            d.setDate(d.getDate() - i);
            return d.toISOString().split("T")[0];
          })
          .reverse();

        const dailyOrders = last7Days.map((date) => {
          return orders.filter((order) => order.date.startsWith(date)).length;
        });

        // Process data for revenue chart
        const dailyRevenue = last7Days.map((date) => {
          return orders
            .filter((order) => order.date.startsWith(date))
            .reduce((sum, order) => sum + order.total, 0);
        });

        // Process data for categories distribution
        const categoryCount = allProducts.reduce((acc, product) => {
          acc[product.category] = (acc[product.category] || 0) + 1;
          return acc;
        }, {});

        // Daily Orders Bar Chart
        const ordersChartOptions = {
          series: [
            {
              name: "Commandes",
              data: dailyOrders,
            },
          ],
          chart: {
            type: "bar",
            height: 300,
            toolbar: { show: false },
          },
          colors: [
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-1"
            ),
          ],
          plotOptions: {
            bar: { borderRadius: 4 },
          },
          xaxis: {
            categories: ["Mar", "Mer", "Jeu", "Ven", "Sam", "Dim", "Lun"],
          },
        };
        new ApexCharts(
          document.querySelector("#ordersChart"),
          ordersChartOptions
        ).render();

        // Revenue Line Chart
        const revenueChartOptions = {
          series: [
            {
              name: "Revenus",
              data: dailyRevenue,
            },
          ],
          chart: {
            type: "line",
            height: 300,
            toolbar: { show: false },
          },
          colors: [
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-2"
            ),
          ],
          stroke: { curve: "smooth" },
          xaxis: {
            categories: [
              "Lundi",
              "Mardi",
              "Mercredi",
              "Jeudi",
              "Vendredi",
              "Samedi",
              "Dimanche",
            ],
          },
          yaxis: {
            labels: {
              formatter: (value) => value + " DH",
            },
          },
        };
        new ApexCharts(
          document.querySelector("#revenueChart"),
          revenueChartOptions
        ).render();

        // Categories Distribution Chart
        const categoriesChartOptions = {
          series: Object.values(categoryCount),
          chart: {
            type: "pie",
            height: 300,
          },
          labels: Object.keys(categoryCount),
          colors: [
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-1"
            ),
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-2"
            ),
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-3"
            ),
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-4"
            ),
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-5"
            ),
          ],
        };
        new ApexCharts(
          document.querySelector("#categoriesChart"),
          categoriesChartOptions
        ).render();

        // User Statistics Chart
        const userStatsChartOptions = {
          series: [
            {
              name: "Clients",
              data: [
                users.filter((u) => u.type_utilisateur === "client").length,
              ],
            },
            {
              name: "Vendeurs",
              data: [
                users.filter((u) => u.type_utilisateur === "Vendeur").length,
              ],
            },
          ],
          chart: {
            type: "bar",
            height: 300,
            toolbar: { show: false },
          },
          colors: [
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-1"
            ),
            getComputedStyle(document.documentElement).getPropertyValue(
              "--chart-color-2"
            ),
          ],
          plotOptions: {
            bar: {
              horizontal: true,
              dataLabels: {
                position: "top",
              },
            },
          },
          xaxis: {
            categories: ["Utilisateurs"],
          },
        };
        new ApexCharts(
          document.querySelector("#userStatsChart"),
          userStatsChartOptions
        ).render();
      }

      function loadTotalProducts() {
        const existingProducts = [
          {
            name: "MSI",
            price: 11500.0,
            image: "images/pc1.jpg",
            category: "Ordinateurs",
          },
          {
            name: "Ecran Dell",
            price: 1500.0,
            image: "images/ecran12.jpg",
            category: "Écrans",
          },
          {
            name: "Ecran Dell mini",
            price: 2000.0,
            image: "images/pc2.jpg",
            category: "Écrans",
          },
          {
            name: "Ecran Gamer 60HZ",
            price: 3500.0,
            image: "images/pc4.jpg",
            category: "Écrans",
          },
          {
            name: "Asus i3",
            price: 3500.0,
            image: "images/unite1.jpg",
            category: "Ordinateurs",
          },
          {
            name: "Dell I5",
            price: 3000.0,
            image: "images/unite4.webp",
            category: "Ordinateurs",
          },
          {
            name: "HP I7",
            price: 5000.0,
            image: "images/uniten1.webp",
            category: "Ordinateurs",
          },
          {
            name: "HP I5",
            price: 3000.0,
            image: "images/uniten2.jpeg",
            category: "Ordinateurs",
          },
          {
            name: "World Time",
            price: 5000.0,
            image: "images/montre1.jpg",
            category: "Montres",
          },
          {
            name: "Rolex",
            price: 7000.0,
            image: "images/montre2.jpg",
            category: "Montres",
          },
          {
            name: "Boss Collection",
            price: 8500.0,
            image: "images/montre6.jpg",
            category: "Montres",
          },
          {
            name: "Boss Collection Black",
            price: 8000.0,
            image: "images/montre7.jpg",
            category: "Montres",
          },
          {
            name: "Chaise Gamer",
            price: 2500.0,
            image: "images/chaise1.jpg",
            category: "Chaises",
          },
          {
            name: "Chaise Gamer",
            price: 3000.0,
            image: "images/chaise2.jpg",
            category: "Chaises",
          },
          {
            name: "Chaise normal",
            price: 700.0,
            image: "images/product-2.png",
            category: "Chaises",
          },
          {
            name: "Chaise Zen",
            price: 400.0,
            image: "images/product-1.png",
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
            image: "images/clavier2.jpg",
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
            image: "images/clavier4.jpg",
            category: "Claviers",
          },
        ];
        const localStorageProducts =
          JSON.parse(localStorage.getItem("products")) || [];
        const totalProducts =
          existingProducts.length + localStorageProducts.length;
        document.getElementById("totalProducts").textContent = totalProducts;
      }

      function loadUserData() {
        const users = JSON.parse(localStorage.getItem("users")) || [];
        const totalClients = users.filter(
          (user) => user.type_utilisateur === "client"
        ).length;
        const totalVendors = users.filter(
          (user) => user.type_utilisateur === "Vendeur"
        ).length;

        document.getElementById("totalClients").textContent = totalClients;
        document.getElementById("totalVendors").textContent = totalVendors;
      }

      function loadOrdersData() {
        const orders = JSON.parse(localStorage.getItem("orders")) || [];
        document.getElementById("totalOrders").textContent = orders.length;

        const recentOrdersContainer = document.getElementById("recentOrders");
        const recentOrders = orders.slice(-5).reverse();

        if (recentOrders.length === 0) {
          recentOrdersContainer.innerHTML = `
                    <tr>
                        <td colspan="4" class="text-center">Aucune commande disponible</td>
                    </tr>
                `;
        } else {
          recentOrdersContainer.innerHTML = recentOrders
            .map(
              (order) => `
                    <tr>
                        <td>${getDayOfWeek(new Date(order.date))}</td>
                        <td>${order.customer.firstName} ${
                order.customer.lastName
              }</td>
                        <td>${order.items
                          .map((item) => item.name)
                          .join(", ")}</td>
                        <td>${order.total.toFixed(2)} DH</td>
                    </tr>
                `
            )
            .join("");
        }
      }

      function getDayOfWeek(date) {
        const days = [
          "Dimanche",
          "Lundi",
          "Mardi",
          "Mercredi",
          "Jeudi",
          "Vendredi",
          "Samedi",
        ];
        return days[date.getDay()];
      }
    </script>
  </body>
</html>
