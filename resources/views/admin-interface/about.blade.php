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
            @if(session('user'))
              <div class="col-md-6 mb-3">
                <div class="user-info-item">
                  <span class="user-info-label">Nom :</span>
                  <span class="user-info-value">{{ session('user')['nom'] }}</span>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="user-info-item">
                  <span class="user-info-label">Prénom :</span>
                  <span class="user-info-value">{{ session('user')['prenom'] }}</span>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="user-info-item">
                  <span class="user-info-label">Email :</span>
                  <span class="user-info-value">{{ session('user')['email'] }}</span>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="user-info-item">
                  <span class="user-info-label">Téléphone :</span>
                  <span class="user-info-value">{{ session('user')['telephone'] }}</span>
                </div>
              </div>
              <div class="col-12">
                <div class="user-info-item">
                  <span class="user-info-label">Type d'utilisateur :</span>
                  <span class="user-info-value">{{ session('user')['type'] }}</span>
                </div>
              </div>
            @else
              <p class="text-center">Aucune information disponible. Veuillez vous connecter d'abord.</p>
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
            <form id="editProfileForm" action="{{ url('/admin/about') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="editNom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="editNom" name="nom" value="{{ session('user')['nom'] ?? '' }}" required />
              </div>
              <div class="mb-3">
                <label for="editPrenom" class="form-label">Prénom</label>
                <input
                  type="text"
                  class="form-control"
                  id="editPrenom"
                  name="prenom"
                  value="{{ session('user')['prenom'] ?? '' }}"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="editEmail" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="editEmail"
                  name="email"
                  value="{{ session('user')['email'] ?? '' }}"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="editTelephone" class="form-label">Téléphone</label>
                <input
                  type="tel"
                  class="form-control"
                  id="editTelephone"
                  name="telephone"
                  value="{{ session('user')['telephone'] ?? '' }}"
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
                  name="password"
                />
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
                  type="submit"
                  class="btn btn-primary"
                  id="saveProfileChanges"
                >
                  Enregistrer
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Gérer l'ouverture du modal d'édition
        document.getElementById("editProfileBtn").addEventListener("click", function() {
          new bootstrap.Modal(document.getElementById("editProfileModal")).show();
        });
      });
    </script>
@endsection <!-- Ici finit le contenu spécifique à cette page -->
