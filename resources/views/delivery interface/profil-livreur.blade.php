<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopAll - Profil Livreur</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/livreur.css')}}" />
    
  </head>
  <body>
    <div class="sidebar">
      <nav class="custom-navbar">
        <a class="navbar-brand" href="{{url('/livreur_livraison')}}">ShopAll<span>.</span></a>
      </nav>
      <nav class="side-bar-content">
        <a href="{{url('/livreur_livraison')}}" class="nav-link d-flex align-items-center">
          <i class="bi bi-truck me-2"></i>
          Livraisons
        </a>
        <a href="{{url('/livreur_profile')}}" class="nav-link active d-flex align-items-center">
          <i class="bi bi-person me-2"></i>
          Profile
        </a>
        <a class="nav-link logout-link" href="{{url('/')}}">
          <img
            src="../images/logout2.png"
            alt="Déconnexion"
            style="height: 30px; width: 30px; margin-left: 15px"
          />
          <span class="sr-only">Déconnexion</span>
        </a>
      </nav>
    </div>

    <div class="main-content">
      <div class="container">
        <div class="user-info-card">
          <h2 class="text-center mb-4">Informations de votre compte</h2>
          <div id="userInfo" class="row">
            <!-- Les informations du livreur seront affichées ici -->
            @if ($user)
        <p><strong>Nom :</strong> {{ $user['nom'] }}</p>
        <p><strong>Prénom :</strong> {{ $user['prenom'] }}</p>
        <p><strong>Email :</strong> {{ $user['email'] }}</p>
        <p><strong>Téléphone :</strong> {{ $user['telephone'] }}</p>
        <p><strong>Type d'utilisateur :</strong> {{ $user['type'] }}</p>
      @else
        <p>Aucune information disponible. Veuillez vous connecter d'abord.</p>
      @endif
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
    <script src="{{ asset('assets/js/profil-livreur.js')}}"></script>
  </body>
</html>

