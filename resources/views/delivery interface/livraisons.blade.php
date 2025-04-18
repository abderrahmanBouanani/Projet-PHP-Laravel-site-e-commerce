<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopAll - Livraisons</title>
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
        <a
          href="{{url('/livreur_livraison')}}"
          class="nav-link active d-flex align-items-center"
        >
          <i class="bi bi-truck me-2"></i>
          Livraisons
        </a>
        <a href="{{url('/livreur_profile')}}" class="nav-link d-flex align-items-center">
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
      <h1 class="h3 mb-4">Liste des Livraisons</h1>

      <div class="search-sort-container">
        <div class="row g-3">
          <div class="col-md-6">
            <input
              type="text"
              class="form-control"
              id="searchInput"
              placeholder="Rechercher par ID ou adresse"
            />
          </div>
          <div class="col-md-3">
            <select class="form-select" id="statusFilter">
              <option value="all">Tous les statuts</option>
              <option value="pending">En attente</option>
              <option value="in_progress">En cours</option>
              <option value="delivered">Livrée</option>
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
            <th>Adresse</th>
            <th>Date de livraison</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="deliveriesList">
          <!-- Les livraisons seront ajoutées ici dynamiquement -->
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
    <script src="{{ asset('assets/js/livraisons.js')}}"></script>
  </body>
</html>

