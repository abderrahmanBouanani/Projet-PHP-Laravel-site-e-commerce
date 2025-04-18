<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('assets/css/tiny-slider.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <title>ShopAll - Contactez-nous</title>
</head>

<body>

  <!-- Début de l'en-tête/Navigation -->
  <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Barre de navigation ShopAll">

    <div class="container">
      <a class="navbar-brand" href="{{url('/vendeur_home')}}">ShopAll<span>.</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsShopAll" aria-controls="navbarsShopAll" aria-expanded="false" aria-label="Basculer la navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

     
				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li >
							<a class="nav-link" href="{{url('/vendeur_home')}}">Accueil</a>
						</li>
						<li><a class="nav-link" href="{{url('/vendeur_shop')}}">Ma Boutique</a></li>
						<li><a class="nav-link" href="{{url('/vendeur_about')}}">À propos</a></li>
						<li><a class="nav-link" href="{{url('/vendeur_service')}}">Services</a></li>
						<li class="nav-item active"><a class="nav-link" href="{{url('/vendeur_contact')}}">Contact</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="{{url('/vendeur_profile')}}"><img src="../images/user.svg"></a></li>
						<li><a class="nav-link" href="{{url('/')}}"><img src="../images/logout2.png" style="height: 30px; width: 30px; margin-left: 15px;"></a></li>
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
			<h1>Contact</h1>
			<p class="mb-4">Nous sommes là pour vous aider ! N'hésitez pas à nous contacter pour toute question ou demande concernant nos produits et services.</p>
			<p><a href="" class="btn btn-secondary me-2">Acheter maintenant</a><a href="#" class="btn btn-white-outline">Explorer</a></p>
		  </div>
		</div>
		<div class="col-lg-7">
		  <div class="hero-img-wrap">
			<img src="https://assets.corsair.com/image/upload/c_pad,q_85,h_1100,w_1100,f_auto/products/Gaming-Chairs/tc500-luxe/Gallery/SHERWOOD/CF-9010068-WW_01.webp" class="img-fluid chaise" alt="Gaming Headset">
		  </div>
		</div>
    
	  </div>
	</div>
  </div>
  <!-- Fin de la section Héros -->
  
  

  
  <!-- Début du formulaire de contact -->
  <div class="untree_co-section">
    <div class="container">

      <div class="block">
        <div class="row justify-content-center">


          <div class="col-md-8 col-lg-8 pb-4">


            <div class="row mb-5">
              <div class="col-lg-4">
                <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                  <div class="service-icon color-1 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                  </div> <!-- /.icon -->
                  <div class="service-contents">
                    <p>123 Avenue Hassan II, 20000 Casablanca, Maroc</p>
                  </div> <!-- /.service-contents-->
                </div> <!-- /.service -->
              </div>

              <div class="col-lg-4">
                <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                  <div class="service-icon color-1 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                      <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                    </svg>
                  </div> <!-- /.icon -->
                  <div class="service-contents">
                    <p>contact@shopall.com</p>
                  </div> <!-- /.service-contents-->
                </div> <!-- /.service -->
              </div>

              <div class="col-lg-4">
                <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                  <div class="service-icon color-1 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                  </div> <!-- /.icon -->
                  <div class="service-contents">
                    <p>+212 5 22 12 34 56</p>
                  </div> <!-- /.service-contents-->
                </div> <!-- /.service -->
              </div>
            </div>

            <form>
              <div class="row" id="contact-form">
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="fname">Prénom</label>
                    <input type="text" class="form-control" id="fname">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="lname">Nom</label>
                    <input type="text" class="form-control" id="lname">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="text-black" for="email">Adresse email</label>
                <input type="email" class="form-control" id="email">
              </div>

              <div class="form-group mb-5">
                <label class="text-black" for="message">Message</label>
                <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
              </div>

              <button type="submit" class="btn btn-primary-hover-outline">Envoyer le message</button>
            </form>

          </div>

        </div>

      </div>

    </div>


  </div>
</div>

<!-- Fin du formulaire de contact -->

  

  <!-- Start Footer Section -->
<footer class="footer-section">
  <div class="container relative">
    <div class="row g-5 mb-5">
      <div class="col-lg-4">
        <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">ShopAll<span>.</span></a></div>
        <p class="mb-4">ShopAll est votre destination en ligne pour tous vos besoins d'achat au Maroc. Nous offrons une large gamme de produits de qualité, un service client exceptionnel et une expérience d'achat sans tracas.</p>

        <ul class="list-unstyled custom-social">
          <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
          <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
          <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
          <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
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
              <li><a href="#">Électronique</a></li>
              <li><a href="#">Mode</a></li>
              <li><a href="#">Maison & Jardin</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <div class="border-top copyright">
      <div class="row pt-4">
        <div class="col-lg-6">
          <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Tous droits réservés. &mdash; Conçu avec amour par <a href="https://untree.co">Untree.co</a> Distribué par <a href="https://themewagon.com">ThemeWagon</a>
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
<!-- End Footer Section -->	


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
	</body>
  
  <script src="{{ asset('assets/js/contact.js')}}"></script>


</html>