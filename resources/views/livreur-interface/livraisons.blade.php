@extends('livreur_base') <!-- Cette ligne indique d'utiliser le layout de base -->

@section('content') <!-- Ici commence le contenu spécifique à cette page -->
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
              <option value="Confirmée">En attente</option>
              <option value="En cours de livraison">En cours</option>
              <option value="Livrée">Livrée</option>
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
            <th>Date de commande</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($commandes as $commande)
          <tr class="{{ $commande->statut === 'Livrée' ? 'table-success' : '' }}">
            <td>{{ $commande->id }}</td>
            <td>{{ $commande->adresse }}</td>
            <td>{{ $commande->created_at ? $commande->created_at->format('d/m/Y') : '' }}</td>
            <td>
              @if($commande->statut === 'Confirmée')
                <span class="badge bg-warning text-dark">En attente</span>
              @elseif($commande->statut === 'En cours de livraison')
                <span class="badge bg-primary">En cours</span>
              @elseif($commande->statut === 'Livrée')
                <span class="badge bg-success">Livrée</span>
              @else
                <span class="badge bg-secondary">{{ $commande->statut }}</span>
              @endif
            </td>
            <td>
              <button class="btn btn-sm btn-link" onclick="showProducts({{ $commande->id }})">
                Voir les produits
              </button>
              @if($commande->statut === 'Confirmée')
                <button class="btn btn-sm btn-primary accepter-commande" data-id="{{ $commande->id }}">
                  Accepter
                </button>
              @elseif($commande->statut === 'En cours de livraison')
                <button class="btn btn-sm btn-success livree-commande" data-id="{{ $commande->id }}">
                  Livrée
                </button>
              @endif
            </td>
          </tr>
        @endforeach
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
@endsection <!-- Ici finit le contenu spécifique à cette page -->




