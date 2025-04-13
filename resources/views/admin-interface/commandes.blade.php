<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopAll - Commandes</title>
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

      .btn-outline-primary {
        color: var(--primary-green);
        border-color: var(--primary-green);
      }

      .btn-outline-primary:hover {
        background-color: var(--primary-green);
        color: var(--text-white);
      }

      .form-control:focus,
      .form-select:focus {
        border-color: var(--primary-green);
        box-shadow: 0 0 0 0.2rem rgba(47, 79, 79, 0.25);
      }

      .modal-header {
        background-color: var(--primary-green);
        color: var(--text-white);
      }

      .modal-title {
        color: var(--text-white);
      }

      .search-sort-container {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
        <a href="{{url('/admin_produit')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-box-seam me-2"></i>
          Produits
        </a>
        <a
          href="{{url('/admin_commande')}}"
          class="nav-link active d-flex align-items-center"
        >
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
      <h1 class="h3 mb-4">Liste des Commandes</h1>

      <div class="search-sort-container">
        <div class="row g-3">
          <div class="col-md-6">
            <input
              type="text"
              class="form-control"
              id="searchInput"
              placeholder="Rechercher par ID, nom ou date (jj/mm/aaaa)"
            />
          </div>
          <div class="col-md-3">
            <select class="form-select" id="sortSelect">
              <option value="date-desc">Date (plus récent)</option>
              <option value="date-asc">Date (plus ancien)</option>
              <option value="total-desc">Total (décroissant)</option>
              <option value="total-asc">Total (croissant)</option>
            </select>
          </div>
          <div class="col-md-3">
            <button class="btn btn-outline-primary w-100" id="searchButton">
              Rechercher
            </button>
          </div>
        </div>
      </div>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID Commande</th>
            <th>Client</th>
            <th>Produits</th>
            <th>Date</th>
            <th>Total</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="ordersList">
          <!-- Les commandes seront ajoutées ici dynamiquement -->
        </tbody>
      </table>
    </div>

    <!-- Modal pour afficher les produits d'une commande -->
    <div class="modal fade" id="productsModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Produits de la commande</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody id="modalProductsList">
                  <!-- Les produits seront ajoutés ici dynamiquement -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      let allOrders = [];

      document.addEventListener("DOMContentLoaded", () => {
        loadOrders();
        document
          .getElementById("searchButton")
          .addEventListener("click", filterOrders);
        document
          .getElementById("sortSelect")
          .addEventListener("change", sortOrders);
      });

      function loadOrders() {
        allOrders = JSON.parse(localStorage.getItem("orders")) || [];

        allOrders = allOrders.map((order) => ({
          ...order,
          status: order.status || "En attente",
        }));
        displayOrders(allOrders);
      }

      function displayOrders(orders) {
        const ordersList = document.getElementById("ordersList");
        ordersList.innerHTML = "";

        orders.forEach((order) => {
          const row = document.createElement("tr");
          row.innerHTML = `
                    <td>${order.id}</td>
                    <td>${order.customer.firstName} ${
            order.customer.lastName
          }</td>
                    <td>
                        <button class="btn btn-sm btn-link" onclick="showProducts(${
                          order.id
                        })">
                            Voir les produits
                        </button>
                    </td>
                    <td>${formatDate(order.date)}</td>
                    <td>${order.total.toFixed(2)} DH</td>
                    <td>${getStatusBadge(order.status)}</td>
                    <td>${getActionButtons(order)}</td>
                `;
          ordersList.appendChild(row);
        });
      }

      function formatDate(dateString) {
        const date = new Date(dateString);
        return `${date.getDate().toString().padStart(2, "0")}/${(
          date.getMonth() + 1
        )
          .toString()
          .padStart(2, "0")}/${date.getFullYear()}`;
      }

      function getStatusBadge(status) {
        switch (status) {
          case "Confirmée":
            return '<span class="badge bg-success">Confirmée</span>';
          case "Annulée":
            return '<span class="badge bg-danger">Annulée</span>';
          default:
            return '<span class="badge bg-warning text-dark">En attente</span>';
        }
      }

      function getActionButtons(order) {
        if (order.status === "En attente") {
          return `
                    <button class="btn btn-sm btn-success me-2" onclick="confirmOrder(${order.id})">Confirmer</button>
                    <button class="btn btn-sm btn-danger" onclick="cancelOrder(${order.id})">Annuler</button>
                `;
        }
        return "";
      }

      function showProducts(orderId) {
        const order = allOrders.find((o) => o.id === orderId);

        if (order) {
          const modalProductsList =
            document.getElementById("modalProductsList");
          modalProductsList.innerHTML = "";

          order.items.forEach((item) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                        <td>${item.name}</td>
                        <td>${item.quantity}</td>
                        <td>${item.price.toFixed(2)} DH</td>
                        <td>${(item.price * item.quantity).toFixed(2)} DH</td>
                    `;
            modalProductsList.appendChild(row);
          });

          const modal = new bootstrap.Modal(
            document.getElementById("productsModal")
          );
          modal.show();
        }
      }

      function filterOrders() {
        const searchTerm = document
          .getElementById("searchInput")
          .value.toLowerCase();
        const filteredOrders = allOrders.filter(
          (order) =>
            order.id.toString().includes(searchTerm) ||
            `${order.customer.firstName} ${order.customer.lastName}`
              .toLowerCase()
              .includes(searchTerm) ||
            formatDate(order.date).includes(searchTerm)
        );
        displayOrders(filteredOrders);
      }

      function sortOrders() {
        const sortValue = document.getElementById("sortSelect").value;
        let sortedOrders = [...allOrders];

        switch (sortValue) {
          case "date-desc":
            sortedOrders.sort((a, b) => new Date(b.date) - new Date(a.date));
            break;
          case "date-asc":
            sortedOrders.sort((a, b) => new Date(a.date) - new Date(b.date));
            break;
          case "total-desc":
            sortedOrders.sort((a, b) => b.total - a.total);
            break;
          case "total-asc":
            sortedOrders.sort((a, b) => a.total - b.total);
            break;
        }

        displayOrders(sortedOrders);
      }

      function saveOrders() {
        localStorage.setItem("orders", JSON.stringify(allOrders));
      }

      function addOrder(newOrder) {
        allOrders.push(newOrder);
        saveOrders();
        displayOrders(allOrders);
      }

      function deleteOrder(orderId) {
        allOrders = allOrders.filter((order) => order.id !== orderId);
        saveOrders();
        displayOrders(allOrders);
      }

      function confirmOrder(orderId) {
        const order = allOrders.find((o) => o.id === orderId);
        if (order) {
          order.status = "Confirmée";
          saveOrders();
          displayOrders(allOrders);
        }
      }

      function cancelOrder(orderId) {
        const order = allOrders.find((o) => o.id === orderId);
        if (order) {
          order.status = "Annulée";
          saveOrders();
          displayOrders(allOrders);
        }
      }
    </script>
  </body>
</html>
