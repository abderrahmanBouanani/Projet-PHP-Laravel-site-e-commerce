<!DOCTYPE html>
<html lang="en">
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
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css')}}" />
    <title>ShopAll - Ma Boutique</title>
  </head>

  <body>
    <!-- Start Header/Navigation -->
    <nav
      class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark"
      arial-label="Furni navigation bar"
    >
      <div class="container">
        <a class="navbar-brand" href="{{ url('/vendeur_home')}}">ShopAll<span>.</span></a>
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
            <li><a class="nav-link" href="{{ url('/vendeur_home')}}">Accueil</a></li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/vendeur_shop')}}">Ma Boutique</a>
            </li>
            <li><a class="nav-link" href="{{ url('/vendeur_about')}}">À propos</a></li>
            <li><a class="nav-link" href="{{ url('/vendeur_service')}}">Services</a></li>
            <li><a class="nav-link" href="{{ url('/vendeur_contact')}}">Contact</a></li>
          </ul>
          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li>
              <a class="nav-link" href="{{ url('/vendeur_profile')}}"
                ><img src="../images/user.svg"
              /></a>
            </li>
            <li>
              <a class="nav-link" href="{{ url('/')}}"
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

    <!-- Start Hero Section -->
    <form action="{{ route('vendeur.addProduct') }}" method="post" enctype="multipart/form-data">
       @csrf
       <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
         <div class="intro-excerpt">
           <h1>Ma Boutique</h1>
           <div class="product-form mb-5">
          <h2 style="color: white">Ajouter un Produit</h2>
          <input
            type="text"
            id="product-name"
            class="form-control mb-2"
            placeholder="Nom du produit"
            name="nom"
          />
          <input
            type="number"
            id="product-price"
            class="form-control mb-2"
            placeholder="Prix du produit"
            name="prix_unitaire"
          />
          <select id="product-category" class="form-control mb-2" name="categorie">
            <option value="">Sélectionnez une catégorie</option>
            <option value="Ordinateurs">Ordinateurs</option>
            <option value="Écrans">Écrans</option>
            <option value="Montres">Montres</option>
            <option value="Chaises">Chaises</option>
            <option value="Claviers">Claviers</option>
            <option value="Téléphones">Téléphones</option>
            <option value="MontresTactiles">Montres tactiles</option>
          </select>
          <input
            type="file"
            id="product-image"
            class="form-control mb-2"
            name="image"
          />
          <input type="hidden" name="vendeur_id" value="{{ Auth::id() }}" />
          <button
            id="add-product"
            class="btn btn-primary"
            style="background-color: rgb(55, 142, 55)"
            name="add-product"
            type="submit"
          >
            Ajouter le produit
          </button>
           </div>
         </div>
          </div>
        </div>
      </div>
       </div>
    </form>
    
    <!-- End Hero Section -->

    <!-- Start Product Table Section -->
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered" id="product-table">
              <thead>
              <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Produit</th>
                <th class="product-price">Prix</th>
                <th class="product-category">Catégorie</th>
                <th class="product-remove">Supprimer</th>
              </tr>
              </thead>
              <tbody>
              @foreach($produits as $produit)
              <tr>
                <td>
                @if($produit->image)
                  <img src="data:image/jpeg;base64,{{ base64_encode($produit->image) }}" alt="{{ $produit->nom }}" style="width: 100px; height: auto;mix-blend-mode: multiply;">
                @endif
                </td>
                <td>{{ $produit->nom }}</td>
                <td>{{ number_format($produit->prix_unitaire, 2) }} DH</td>
                <td>{{ $produit->categorie }}</td>
                
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
    <!-- End Product Table Section -->

    <!-- Start Footer Section -->
    <footer class="footer-section">
      <div class="container relative">
        <div class="sofa-img"></div>
        <div class="row">
          <div class="col-lg-8">
            <div class="subscription-form">
              <h3 class="d-flex align-items-center">
                <span class="me-1"
                  ><img
                    src="../images/envelope-outline.svg"
                    alt="Image"
                    class="img-fluid" /></span
                ><span>Subscribe to Newsletter</span>
              </h3>
              <form id="email-form" class="row g-3">
                <div class="col-auto">
                  <input
                    type="text"
                    id="user-name"
                    class="form-control"
                    placeholder="Enter your name"
                    required
                  />
                </div>
                <div class="col-auto">
                  <input
                    type="email"
                    id="user-email"
                    class="form-control"
                    placeholder="Enter your email"
                    required
                  />
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary">
                    <span class="fa fa-paper-plane"></span>
                  </button>
                </div>
              </form>
              <!-- Confirmation message -->
              <p id="response-message"></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
  </body>
</html>
