<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopAll - Utilisateurs</title>
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

      .card {
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      .card-header {
        background-color: #fff;
        border-bottom: 1px solid #eee;
      }

      .table th {
        color: var(--primary-green);
        font-weight: 500;
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
        <a
          href="{{url('/admin_utilisateur')}}"
          class="nav-link active d-flex align-items-center"
        >
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
      <h1 class="h3 mb-4" id="pageTitle">Liste des Utilisateurs</h1>
      <div class="card">
        <div
          class="card-header d-flex justify-content-between align-items-center"
        >
          <h5 class="mb-0" id="cardTitle">Utilisateurs</h5>
          <span id="clientCount" class="badge bg-primary"></span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Téléphone</th>
                  <th>Type</th>
                </tr>
              </thead>
              <tbody id="clientTable">
                <!-- Users will be populated here -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Get the user type from the URL parameter
        const urlParams = new URLSearchParams(window.location.search);
        const userType = urlParams.get("type");

        // Load and filter users
        const users = JSON.parse(localStorage.getItem("users")) || [];
        let filteredUsers = users;
        let pageTitle = "Liste des Utilisateurs";
        let cardTitle = "Utilisateurs";

        if (userType) {
          filteredUsers = users.filter(
            (user) => user.type_utilisateur === userType
          );
          if (userType === "client") {
            pageTitle = "Liste des Clients";
            cardTitle = "Clients";
          } else if (userType === "Vendeur") {
            pageTitle = "Liste des Vendeurs";
            cardTitle = "Vendeurs";
          }
        }

        // Update page title and card title
        document.getElementById("pageTitle").textContent = pageTitle;
        document.getElementById("cardTitle").textContent = cardTitle;
        document.title = `ShopAll - ${pageTitle}`;

        // Update user count
        const userCountElement = document.getElementById("clientCount");
        userCountElement.textContent = `Total : ${filteredUsers.length}`;

        // Populate table
        const tableBody = document.getElementById("clientTable");
        tableBody.innerHTML = ""; // Clear existing content

        filteredUsers.forEach((user) => {
          const row = document.createElement("tr");
          row.innerHTML = `
                    <td>${user.nom}</td>
                    <td>${user.email}</td>
                    <td>${user.telephone}</td>
                    <td>${user.type_utilisateur}</td>
                `;
          tableBody.appendChild(row);
        });
      });
    </script>
  </body>
</html>
