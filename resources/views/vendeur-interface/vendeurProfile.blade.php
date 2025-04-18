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
    <link href="{{ asset('assets/css/tiny-slider.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
    <title>Informations utilisateur</title>

    <style>
      .user-info-card {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
      }
      .user-info-card h2 {
        font-size: 24px;
        font-weight: bold;
        color: #343a40;
        margin-bottom: 20px;
      }
      #userInfo p {
        font-size: 16px;
        margin: 8px 0;
        line-height: 1.6;
        color: #495057;
      }
      #userInfo p strong {
        color: #212529;
        font-weight: 600;
      }
    </style>
  </head>

  <body>
    <nav
      class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
      arial-label="Furni navigation bar"
    >
      <div class="container">
        <a class="navbar-brand" href="{{url('/vendeur_home')}}">ShopAll<span>.</span></a>

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
            <li><a class="nav-link" href="{{url('/vendeur_home')}}">Accueil</a></li>
            <li>
              <a class="nav-link" href="{{url('/vendeur_shop')}}">Ma Boutique</a>
            </li>
            <li><a class="nav-link" href="{{url('/vendeur_about')}}">À propos</a></li>
            <li><a class="nav-link" href="{{url('/vendeur_service')}}">Services</a></li>
            <li><a class="nav-link" href="{{url('/vendeur_contact')}}">Contact</a></li>
          </ul>

          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li>
              <a class="nav-link" href="{{url('/vendeur_profile')}}"
                ><img src="../images/user.svg"
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

    <div class="main-content">
      <div class="container">
        <div class="user-info-card">
          <h2 class="text-center mb-4">Informations de votre compte</h2>
          <div id="userInfo" class="row">
            <!-- Les informations de l'utilisateur seront affichées ici -->
          </div>
        </div>
      </div>
    </div>

    <script>
      // Récupérer les informations de l'utilisateur connecté depuis le localStorage
      const connectedUser = JSON.parse(localStorage.getItem("connectedUser"));

      if (connectedUser) {
        // Afficher les informations de l'utilisateur
        const userInfoContainer = document.getElementById("userInfo");
        userInfoContainer.innerHTML = `
            <p><strong>Nom :</strong> ${connectedUser.nom}</p>
            <p><strong>Prénom :</strong> ${connectedUser.prenom}</p>
            <p><strong>Email :</strong> ${connectedUser.email}</p>
            <p><strong>Téléphone :</strong> ${connectedUser.telephone}</p>
            <p><strong>Type d'utilisateur :</strong> ${connectedUser.type_utilisateur}</p>
        `;
      } else {
        // Si aucun utilisateur connecté n'est trouvé
        const userInfoContainer = document.getElementById("userInfo");
        userInfoContainer.innerHTML =
          "<p>Aucune information disponible. Veuillez vous connecter d'abord.</p>";
      }
    </script>
  </body>
</html>
