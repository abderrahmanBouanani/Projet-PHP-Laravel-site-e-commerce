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
    <link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/css/style.css')}}" rel="stylesheet" />
    <title>ShopAll - Home</title>
  </head>

  <body>
    <!-- Start Header/Navigation -->
    <nav
      class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
      arial-label="Furni navigation bar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html">ShopAll<span>.</span></a>

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
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/client_home')}}">Accueil</a>
            </li>
            <li><a class="nav-link" href="{{ url('/client_shop')}}">Boutique</a></li>
            <li><a class="nav-link" href="{{ url('/client_about')}}">À propos</a></li>
            <li><a class="nav-link" href="{{ url('/client_service')}}">Services</a></li>
            <li><a class="nav-link" href="{{ url('/client_contact')}}">Contact</a></li>
          </ul>

          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li>
              <a class="nav-link" href="{{url('/client_profile')}}"
                ><img src="../images/user.svg"
              /></a>
            </li>
            <li>
              <a class="nav-link" href="{{url('/client_cart')}}"
                ><img src="../images/cart.svg"
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

    <!-- Start Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <h1>
                Espaces Élégants <span clsas="d-block">d'Outils Modernes</span>
              </h1>
              <p class="mb-4">
                votre destination en ligne pour découvrir une large gamme de
                produits de qualité à des prix compétitifs. Profitez d’une
                expérience d’achat simple, rapide et sécurisée, avec des
                promotions exclusives et une livraison à votre porte.
              </p>
              <p>
                <a href="shop.html" class="btn btn-secondary me-2"
                  >Acheter maintenant</a
                ><a href="#" class="btn btn-white-outline">Explorer</a>
              </p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="hero-img-wrap">
              <img
                src="../images/1-removebg-preview.png.png"
                class="img-fluid"
                style="width: 1500px; margin-top: 20px"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
      <div class="container">
        <div class="row">
          <!-- Start Column 1 -->
          <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
            <h2 class="mb-4 section-title">
              Conçu avec des matériaux d'excellence.
            </h2>
            <p class="mb-4">
              Nos produits sont soigneusement fabriqués à partir de matériaux de
              qualité supérieure, sélectionnés pour leur durabilité, leur
              performance et leur élégance. Chaque détail est pensé pour offrir
              une expérience exceptionnelle, alliant esthétique et fiabilité.
            </p>
            <p><a href="shop.html" class="btn">Explorer</a></p>
          </div>
          <!-- End Column 1 -->

          <!-- Start Column 2 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="shop.html">
              <img
                src="../images/pc1.jpg"
                class="img-fluid product-thumbnail"
                style="mix-blend-mode: multiply"
              />
              <h3 class="product-title">MSI</h3>
              <strong class="product-price">11500.00 DH</strong>

              <span class="icon-cross">
                <img src="../images/cross.svg" class="img-fluid" />
              </span>
            </a>
          </div>
          <!-- End Column 2 -->

          <!-- Start Column 3 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="shop.html">
              <img
                src="../images/product-2.png"
                class="img-fluid product-thumbnail"
              />
              <h3 class="product-title">Kruzo Aero Chair</h3>
              <strong class="product-price">400.00 DH</strong>

              <span class="icon-cross">
                <img src="../images/cross.svg" class="img-fluid" />
              </span>
            </a>
          </div>
          <!-- End Column 3 -->

          <!-- Start Column 4 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="shop.html">
              <img
                src="../images/montre1.jpg"
                class="img-fluid product-thumbnail"
                style="mix-blend-mode: multiply"
              />
              <h3 class="product-title">World Time</h3>
              <strong class="product-price">5000.00 DH</strong>

              <span class="icon-cross">
                <img src="../images/cross.svg" class="img-fluid" />
              </span>
            </a>
          </div>
          <!-- End Column 4 -->
        </div>
      </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <h2 class="section-title">Pourquoi nous choisir</h2>
            <p>Vivez dans la simplicité pour atteindre vos objectifs..</p>

            <div class="row my-5">
              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="../images/truck.svg" alt="Image" class="imf-fluid" />
                  </div>
                  <h3>Rapide &amp; Livraison gratuite</h3>
                  <p>
                    Vivez avec de la simplicité pour atteindre vos objectifs,
                    tout en gardant la motivation et une relation de respect.
                  </p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img src="../images/bag.svg" alt="Image" class="imf-fluid" />
                  </div>
                  <h3>Facile à magasiner</h3>
                  <p>
                    Vivez avec des besoins simples d'amélioration positive de
                    votre communauté directe.
                  </p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img
                      src="../images/support.svg"
                      alt="Image"
                      class="imf-fluid"
                    />
                  </div>
                  <h3>24/7 Support</h3>
                  <p>
                    Vivez avec de la simplicité pour atteindre vos objectifs.
                  </p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <div class="icon">
                    <img
                      src="../images/return.svg"
                      alt="Image"
                      class="imf-fluid"
                    />
                  </div>
                  <h3>Retours sans tracas</h3>
                  <p>Adoptez la simplicité pour favoriser votre progression.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-wrap">
              <img
                src="../images/why-choose-us-img.jpg"
                alt="Image"
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="imgs-grid">
              <div class="grid grid-1">
                <img
                  src="https://m.media-amazon.com/images/I/71EWAUphg2L._AC_UY327_FMwebp_QL65_.jpg"
                  alt="laptop"
                  style="mix-blend-mode: multiply"
                />
              </div>
              <div class="grid grid-2">
                <img src="../images/img-grid-3.jpg" alt="product" />
              </div>
              <div class="grid grid-3">
                <img
                  src="https://m.media-amazon.com/images/I/61l5+LvEhcL._AC_UL480_FMwebp_QL65_.jpg"
                  alt="product"
                  style="margin-bottom: 10px; mix-blend-mode: multiply"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-5 ps-lg-5">
            <h2 class="section-title mb-4">
              Nous vous aidons de trouver ce que vous voulez
            </h2>
            <p>
              Faites en sorte que la facilité vienne à travers une approche
              simple à améliorer. Rechercher la correction quotidienne avec
              effort modéré.
            </p>

            <ul class="list-unstyled custom-list my-4">
              <li>
                Vivez avec une simplification radical de votre organisation
              </li>
              <li>
                Cherchez à équilibrer vos efforts pour maximiser les résultats
              </li>
              <li>Adoptez une approche fluide pour surmonter les défis</li>
              <li>
                Simplifiez vos méthodes pour favoriser une meilleure exécution
              </li>
            </ul>
            <p><a href="shop.html" class="btn">Explorer</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Testimonial Slider -->
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

    <!-- Start Blog Section -->
    <div class="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <h2 class="section-title">Blog</h2>
          </div>
          <div class="col-md-6 text-start text-md-end"></div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
              <a href="#" class="post-thumbnail"
                ><img
                  src="https://m.media-amazon.com/images/I/71A3uOhqVmL._AC_UY327_FMwebp_QL65_.jpg"
                  alt="Image"
                  class="img-fluid"
                  style="mix-blend-mode: multiply"
              /></a>
              <div class="post-content-entry">
                <h3>
                  <a href="#"
                    >Découvrez nos ordinateurs spécialement conçus pour les
                    primo-accédants
                  </a>
                </h3>
                <div class="meta">
                  <span>by <a href="#">Kristin Watson</a></span>
                  <span>on <a href="#">Dec 19, 2021</a></span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
              <a href="#" class="post-thumbnail"
                ><img
                  src="https://m.media-amazon.com/images/I/61VqPRU2-UL._AC_UL480_FMwebp_QL65_.jpg"
                  alt="Image"
                  class="img-fluid"
                  style="
                    mix-blend-mode: multiply;
                    height: 300px;
                    margin-left: 60px;
                  "
              /></a>
              <div class="post-content-entry">
                <h3>
                  <a href="#"
                    >Des chaises confortables et stylées, parfaites pour un
                    premier aménagement !</a
                  >
                </h3>
                <div class="meta">
                  <span>by <a href="#">Robert Fox</a></span>
                  <span>on <a href="#">Dec 15, 2021</a></span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
              <a href="#" class="post-thumbnail"
                ><img
                  src="https://images-na.ssl-images-amazon.com/images/I/61JEYonZa6L._AC_UL330_SR330,330_.jpg"
                  alt="Image"
                  class="img-fluid"
                  style="mix-blend-mode: multiply"
              /></a>
              <div class="post-content-entry">
                <h3>
                  <a href="#"
                    >Des montres élégantes et abordables pour votre première
                    collection !</a
                  >
                </h3>
                <div class="meta">
                  <span>by <a href="#">Kristin Watson</a></span>
                  <span>on <a href="#">Dec 12, 2021</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Section -->

    <!-- Start Footer Section -->
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
                ><span>Subscribe to Newsletter</span>
              </h3>

              <form action="#" class="row g-3">
                <div class="col-auto">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your name"
                  />
                </div>
                <div class="col-auto">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter your email"
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
              <a href="#" class="footer-logo">Furni<span>.</span></a>
            </div>
            <p class="mb-4">
              La facilitation commence par un pur blocage du travail. Nous vous
              offrons une alternative à cette situation. Ensemble, nous
              trouverons une solution pour améliorer ce processus. Le confort
              d'un Client est essentiel
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
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Knowledge base</a></li>
                  <li><a href="#">Live chat</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Our team</a></li>
                  <li><a href="#">Leadership</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Nordic Chair</a></li>
                  <li><a href="#">Kruzo Aero</a></li>
                  <li><a href="#">Ergonomic Chair</a></li>
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
                . Tous droits réservés.
              </p>
            </div>

            <div class="col-lg-6 text-center text-lg-end">
              <ul class="list-unstyled d-inline-flex ms-auto">
                <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/tiny-slider.js"></script>
    <script src="../js/custom.js"></script>
  </body>
</html>
