@extends('admin_base') <!-- Cette ligne indique d'utiliser le layout de base -->


@section('head')
    @if(Request::is('admin_about'))
    <link rel="stylesheet" href="{{ asset('assets/css/adminprofile.css')}}" />
    @endif
@endsection


@section('content') <!-- Ici commence le contenu spécifique à cette page -->
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
@endsection <!-- Ici finit le contenu spécifique à cette page -->



