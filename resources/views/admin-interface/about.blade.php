<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopAll - Profil</title>
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
        margin-left: 280px;
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
        padding: 40px;
      }

      .user-info-card {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-bottom: 30px;
      }

      .user-info-card h2 {
        color: var(--primary-green);
        margin-bottom: 20px;
        font-weight: 600;
      }

      .user-info-item {
        margin-bottom: 15px;
        padding: 10px;
        background-color: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
      }

      .user-info-item:hover {
        background-color: #e9ecef;
      }

      .user-info-label {
        font-weight: 600;
        color: var(--primary-green);
      }

      .user-info-value {
        color: #495057;
      }

      .btn-edit {
        background-color: var(--primary-green);
        color: var(--text-white);
        border: none;
      }

      .btn-edit:hover {
        background-color: var(--light-green);
        color: var(--text-white);
      }

      @media (max-width: 768px) {
        body {
          margin-left: 0;
        }

        .sidebar {
          width: 100%;
          height: auto;
          position: relative;
          border-radius: 0;
        }

        .main-content {
          margin-left: 0;
          padding: 20px;
        }
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
        <a href="{{url('/admin_commande')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-cart me-2"></i>
          Commandes
        </a>
        <a href="{{url('/admin_about')}}" class="nav-link active d-flex align-items-center">
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
      <div class="container">
        <div class="user-info-card">
          <h2 class="text-center mb-4">Informations de votre compte</h2>
          <div id="userInfo" class="row">
            <!-- Les informations de l'utilisateur seront affichées ici -->
          </div>
          <div class="text-center mt-4">
            <button id="editProfileBtn" class="btn btn-edit">
              Modifier le profil
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal pour modifier le profil -->
    <div
      class="modal fade"
      id="editProfileModal"
      tabindex="-1"
      aria-labelledby="editProfileModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editProfileModalLabel">
              Modifier le profil
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="editProfileForm">
              <div class="mb-3">
                <label for="editNom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="editNom" required />
              </div>
              <div class="mb-3">
                <label for="editPrenom" class="form-label">Prénom</label>
                <input
                  type="text"
                  class="form-control"
                  id="editPrenom"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="editEmail" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="editEmail"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="editTelephone" class="form-label">Téléphone</label>
                <input
                  type="tel"
                  class="form-control"
                  id="editTelephone"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="editMotDePasse" class="form-label"
                  >Nouveau mot de passe (laisser vide si inchangé)</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="editMotDePasse"
                />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Annuler
            </button>
            <button
              type="button"
              class="btn btn-primary"
              id="saveProfileChanges"
            >
              Enregistrer
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Récupérer les informations de l'utilisateur connecté depuis le localStorage
      let connectedUser = JSON.parse(localStorage.getItem("connectedUser"));

      function displayUserInfo() {
        if (connectedUser) {
          // Afficher les informations de l'utilisateur
          const userInfoContainer = document.getElementById("userInfo");
          userInfoContainer.innerHTML = `
                    <div class="col-md-6 mb-3">
                        <div class="user-info-item">
                            <span class="user-info-label">Nom :</span>
                            <span class="user-info-value">${connectedUser.nom}</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="user-info-item">
                            <span class="user-info-label">Prénom :</span>
                            <span class="user-info-value">${connectedUser.prenom}</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="user-info-item">
                            <span class="user-info-label">Email :</span>
                            <span class="user-info-value">${connectedUser.email}</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="user-info-item">
                            <span class="user-info-label">Téléphone :</span>
                            <span class="user-info-value">${connectedUser.telephone}</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="user-info-item">
                            <span class="user-info-label">Type d'utilisateur :</span>
                            <span class="user-info-value">${connectedUser.type_utilisateur}</span>
                        </div>
                    </div>
                `;
        } else {
          // Si aucun utilisateur connecté n'est trouvé
          const userInfoContainer = document.getElementById("userInfo");
          userInfoContainer.innerHTML =
            "<p class='text-center'>Aucune information disponible. Veuillez vous connecter d'abord.</p>";
        }
      }

      displayUserInfo();

      // Gérer l'ouverture du modal d'édition
      document
        .getElementById("editProfileBtn")
        .addEventListener("click", function () {
          if (connectedUser) {
            document.getElementById("editNom").value = connectedUser.nom;
            document.getElementById("editPrenom").value = connectedUser.prenom;
            document.getElementById("editEmail").value = connectedUser.email;
            document.getElementById("editTelephone").value =
              connectedUser.telephone;
            new bootstrap.Modal(
              document.getElementById("editProfileModal")
            ).show();
          }
        });

      // Gérer la sauvegarde des modifications
      document
        .getElementById("saveProfileChanges")
        .addEventListener("click", function () {
          const newNom = document.getElementById("editNom").value;
          const newPrenom = document.getElementById("editPrenom").value;
          const newEmail = document.getElementById("editEmail").value;
          const newTelephone = document.getElementById("editTelephone").value;
          const newMotDePasse = document.getElementById("editMotDePasse").value;

          // Mettre à jour les informations de l'utilisateur connecté
          connectedUser.nom = newNom;
          connectedUser.prenom = newPrenom;
          connectedUser.email = newEmail;
          connectedUser.telephone = newTelephone;
          if (newMotDePasse) {
            connectedUser.motdepasse = newMotDePasse;
          }

          // Mettre à jour le localStorage
          localStorage.setItem("connectedUser", JSON.stringify(connectedUser));

          // Mettre à jour la liste des utilisateurs dans le localStorage
          let users = JSON.parse(localStorage.getItem("users")) || [];
          const userIndex = users.findIndex(
            (user) => user.email === connectedUser.email
          );
          if (userIndex !== -1) {
            users[userIndex] = connectedUser;
            localStorage.setItem("users", JSON.stringify(users));
          }

          // Rafraîchir l'affichage
          displayUserInfo();

          // Fermer le modal
          bootstrap.Modal.getInstance(
            document.getElementById("editProfileModal")
          ).hide();
        });
    </script>
  </body>
</html>
