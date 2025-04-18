<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png')}}" />

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
    <title>ShopAll - Nos Services</title>
  </head>

  <body>
    <!-- Début de l'en-tête/Navigation -->
    <nav
      class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
      arial-label="Barre de navigation ShopAll"
    >
      <div class="container">
        <a class="navbar-brand" href="{{url('/vendeur_home')}}">ShopAll<span>.</span></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarsShopAll"
          aria-controls="navbarsShopAll"
          aria-expanded="false"
          aria-label="Basculer la navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
          <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li>
              <a class="nav-link" href="{{url('/vendeur_home')}}">Accueil</a>
            </li>
            <li>
              <a class="nav-link" href="{{url('/vendeur_shop')}}">Ma Boutique</a>
            </li>
            <li><a class="nav-link" href="{{url('/vendeur_about')}}">À propos</a></li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/vendeur_service')}}">Services</a>
            </li>
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
    <!-- Fin de l'en-tête/Navigation -->

    <!-- Début de la section Héros -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <h1>Nos Services</h1>
              <p class="mb-4">
                Découvrez comment ShopAll peut vous aider à trouver les
                meilleurs produits et à améliorer votre expérience d'achat en
                ligne.
              </p>
              <p>
                <a href="" class="btn btn-secondary me-2">Acheter maintenant</a
                ><a href="#" class="btn btn-white-outline">Explorer</a>
              </p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="hero-img-wrap">
              <img
                src="https://www.pngall.com/wp-content/uploads/5/Gaming-Headset-PNG-Free-Download.png"
                class="img-fluid casque"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de la section Héros -->

    <!-- Début de la section Pourquoi nous choisir -->
    <div class="why-choose-section">
      <div class="container">
        <div class="row my-5">
          <div class="col-6 col-md-6 col-lg-3 mb-4">
            <div class="feature">
              <div class="icon">
                <img src="../images/truck.svg" alt="Image" class="imf-fluid" />
              </div>
              <h3>Livraison rapide et gratuite</h3>
              <p>
                Profitez d'une livraison rapide et gratuite pour tous vos achats
                sur ShopAll.
              </p>
            </div>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-4">
            <div class="feature">
              <div class="icon">
                <img src="../images/bag.svg" alt="Image" class="imf-fluid" />
              </div>
              <h3>Achat facile</h3>
              <p>
                Notre plateforme intuitive rend vos achats simples et agréables.
              </p>
            </div>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-4">
            <div class="feature">
              <div class="icon">
                <img src="../images/support.svg" alt="Image" class="imf-fluid" />
              </div>
              <h3>Support 24/7</h3>
              <p>
                Notre équipe de support est disponible à tout moment pour
                répondre à vos questions.
              </p>
            </div>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-4">
            <div class="feature">
              <div class="icon">
                <img src="../images/return.svg" alt="Image" class="imf-fluid" />
              </div>
              <h3>Retours sans tracas</h3>
              <p>
                Politique de retour simple pour votre tranquillité d'esprit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de la section Pourquoi nous choisir -->

    <!-- Début de la section Produits -->
    <div class="product-section pt-0">
      <div class="container">
        <div class="row">
          <!-- Début Colonne 1 -->
          <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
            <h2 class="mb-4 section-title">
              Découvrez notre sélection de produits.
            </h2>
            <p class="mb-4">
              ShopAll vous offre une large gamme de produits de qualité pour
              tous vos besoins.
            </p>
            <p><a href="#" class="btn">Explorer</a></p>
          </div>
          <!-- Fin Colonne 1 -->

          <!-- Début Colonne 2 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="#">
              <img
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                class="img-fluid product-thumbnail"
              />
              <h3 class="product-title">Montre Intelligente Pro</h3>
              <strong class="product-price">199.99 €</strong>
              <span class="icon-cross">
                <img src="../images/cross.svg" class="img-fluid" />
              </span>
            </a>
          </div>
          <!-- Fin Colonne 2 -->

          <!-- Début Colonne 3 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="#">
              <img
                src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                class="img-fluid product-thumbnail"
              />
              <h3 class="product-title">Sac à dos Aventurier</h3>
              <strong class="product-price">89.00 €</strong>
              <span class="icon-cross">
                <img src="../images/cross.svg" class="img-fluid" />
              </span>
            </a>
          </div>
          <!-- Fin Colonne 3 -->

          <!-- Début Colonne 4 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="#">
              <img
                src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                class="img-fluid product-thumbnail"
              />
              <h3 class="product-title">Écouteurs Sans Fil Pro</h3>
              <strong class="product-price">129.99 €</strong>
              <span class="icon-cross">
                <img src="../images/cross.svg" class="img-fluid" />
              </span>
            </a>
          </div>
          <!-- Fin Colonne 4 -->
        </div>
      </div>
    </div>
    <!-- Fin de la section Produits -->

    <!-- Début du Slider de Témoignages -->
    <div class="testimonial-section before-footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="section-title">Témoignages</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="testimonial-slider-wrap text-center">
              <div id="testimonial-nav">
                <span class="prev" data-controls="prev"
                  ><span class="fa fa-chevron-left"></span
                ></span>
                <span class="next" data-controls="next"
                  ><span class="fa fa-chevron-right"></span
                ></span>
              </div>

              <div class="testimonial-slider">
                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto">
                      <div class="testimonial-block text-center">
                        <blockquote class="mb-5">
                          <p>
                            &ldquo;La diversité des produits et le service
                            client de qualité m'ont vraiment
                            impressionné.&rdquo;
                          </p>
                        </blockquote>

                        <div class="author-info">
                          <div class="author-pic">
                            <img
                              src="../images/user-img.png"
                              alt="Youssef Amrani"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="font-weight-bold">Youssef Amrani</h3>
                          <span class="position d-block mb-3"
                            >PDG, Tech Innovate Maroc</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- FIN item -->

                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto">
                      <div class="testimonial-block text-center">
                        <blockquote class="mb-5">
                          <p>
                            &ldquo;Les produits sont arrivés rapidement et en
                            parfait état. Une plateforme de confiance.&rdquo;
                          </p>
                        </blockquote>

                        <div class="author-info">
                          <div class="author-pic">
                            <img
                              src="../images/user-img.png"
                              alt="Fatima Zahra Benali"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="font-weight-bold">Fatima Zahra Benali</h3>
                          <span class="position d-block mb-3"
                            >Architecte d'intérieur, Design Élégance</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- FIN item -->

                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto">
                      <div class="testimonial-block text-center">
                        <blockquote class="mb-5">
                          <p>
                            &ldquo;J'ai trouvé exactement ce dont j'avais besoin
                            à un excellent prix. Le site est facile à naviguer,
                            et le service est impeccable.&rdquo;
                          </p>
                        </blockquote>

                        <div class="author-info">
                          <div class="author-pic">
                            <img
                              src="../images/user-img.png"
                              alt="Karim Tazi"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="font-weight-bold">Karim Tazi</h3>
                          <span class="position d-block mb-3"
                            >Propriétaire, Café Lumière</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- FIN item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin du Slider de Témoignages -->

    <!-- Début de la section Pied de page -->
    <footer class="footer-section">
      <div class="container relative">
        <div class="sofa-img">
          <img src="../images/sofa.png" alt="Image" class="img-fluid" />
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="subscription-form">
              <h3 class="d-flex align-items-center">
                <span class="me-1"
                  ><img
                    src="../images/envelope-outline.svg"
                    alt="Image"
                    class="img-fluid" /></span
                ><span>Abonnez-vous à notre newsletter</span>
              </h3>

              <form action="#" class="row g-3">
                <div class="col-auto">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Entrez votre nom"
                  />
                </div>
                <div class="col-auto">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Entrez votre email"
                  />
                </div>
                <div class="col-auto">
                  <button class="btn btn-primary">
                    <span class="fa fa-paper-plane"></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row g-5 mb-5">
          <div class="col-lg-4">
            <div class="mb-4 footer-logo-wrap">
              <a href="#" class="footer-logo">ShopAll<span>.</span></a>
            </div>
            <p class="mb-4">
              Chez ShopAll, nous sommes passionnés par l'offre d'une large gamme
              de produits de qualité pour tous vos besoins. Notre engagement
              envers l'excellence et la satisfaction du client fait de nous
              votre choix idéal pour le shopping en ligne.
            </p>

            <ul class="list-unstyled custom-social">
              <li>
                <a href="#"><span class="fa fa-brands fa-facebook-f"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-linkedin"></span></a>
              </li>
            </ul>
          </div>

          <div class="col-lg-8">
            <div class="row links-wrap">
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">À propos de nous</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Nous contacter</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Base de connaissances</a></li>
                  <li><a href="#">Chat en direct</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Emplois</a></li>
                  <li><a href="#">Notre équipe</a></li>
                  <li><a href="#">Leadership</a></li>
                  <li><a href="#">Politique de confidentialité</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Catégorie 1</a></li>
                  <li><a href="#">Catégorie 2</a></li>
                  <li><a href="#">Catégorie 3</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="border-top copyright">
          <div class="row pt-4">
            <div class="col-lg-6">
              <p class="mb-2 text-center text-lg-start">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                . Tous droits réservés. &mdash; Conçu avec amour par
                <a href="https://untree.co">Untree.co</a> Distribué par
                <a hreff="https://themewagon.com">ThemeWagon</a>
                <!-- License information: https://untree.co/license/ -->
              </p>
            </div>

            <div class="col-lg-6 text-center text-lg-end">
              <ul class="list-unstyled d-inline-flex ms-auto">
                <li class="me-4"><a href="#">Conditions générales</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Fin de la section Pied de page -->

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
  </body>
</html>
