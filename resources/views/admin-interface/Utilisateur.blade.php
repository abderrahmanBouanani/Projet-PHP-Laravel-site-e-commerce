@extends('admin_base') <!-- Cette ligne indique d'utiliser le layout de base -->

@section('content') <!-- Ici commence le contenu spécifique à cette page -->
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
@endsection <!-- Ici finit le contenu spécifique à cette page -->





