<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

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
    <title>ShopAll &mdash; Paiement</title>
  </head>

  <body>
    <!-- Début de l'en-tête/Navigation -->
    <nav
      class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
      arial-label="Barre de navigation ShopAll"
    >
      <div class="container">
        <a class="navbar-brand" href="{{url('/client_home')}}">ShopAll<span>.</span></a>

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

        <div class="collapse navbar-collapse" id="navbarsShopAll">
          <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/client_home')}}">Accueil</a>
            </li>
            <li><a class="nav-link" href="{{url('/client_shop')}}">Boutique</a></li>
            <li><a class="nav-link" href="{{url('/client_about')}}">À propos</a></li>
            <li><a class="nav-link" href="{{url('/client_service')}}">Services</a></li>
            <li><a class="nav-link" href="{{url('/client_contact')}}">Contact</a></li>
          </ul>

          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li>
              <a class="nav-link" href="{{url('/client_profile')}}"><img src="../images/user.svg" /></a>
            </li>
            <li>
              <a class="nav-link" href="{{url('/client_cart')}}"
                ><img src="../images/cart.svg"
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
              <h1>Paiement</h1>
            </div>
          </div>
          <div class="col-lg-7"></div>
        </div>
      </div>
    </div>
    <!-- Fin de la section Héros -->

    <div class="untree_co-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Déjà client ? <a href="{{url('/')}}">Cliquez ici</a> pour vous connecter
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Détails de facturation</h2>
            <div class="p-3 p-lg-5 border bg-white">
              <div class="form-group">
                <label for="c_country" class="text-black"
                  >Ville <span class="text-danger">*</span></label
                >
                <select id="c_country" class="form-control">
                  <option value="1">Sélectionnez un pays</option>
                  <option value="1">Casablanca</option>
                  <option value="2">Marrakech</option>
                  <option value="3">Fès</option>
                  <option value="4">Rabat</option>
                  <option value="5">Tanger</option>
                  <option value="6">Agadir</option>
                  <option value="7">Meknès</option>
                  <option value="8">Oujda</option>
                  <option value="9">Tétouan</option>
                  <option value="10">Essaouira</option>
                  <option value="11">El Jadida</option>
                  <option value="12">Nador</option>
                  <option value="13">Kénitra</option>
                  <option value="14">Laâyoune</option>
                  <option value="15">Dakhla</option>
                  <option value="16">Chefchaouen</option>
                  <option value="17">Ifrane</option>
                  <option value="18">Beni Mellal</option>
                  <option value="19">Taroudant</option>
                  <option value="20">Ouarzazate</option>
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black"
                    >Prénom <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="c_fname"
                    name="c_fname"
                  />
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black"
                    >Nom <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="c_lname"
                    name="c_lname"
                  />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black"
                    >Adresse <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="c_address"
                    name="c_address"
                    placeholder="Adresse"
                  />
                </div>
              </div>

              <div class="form-group mt-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Appartement, suite, unité, etc. (optionnel)"
                />
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black"
                    >Région / Département
                    <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="c_state_country"
                    name="c_state_country"
                  />
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black"
                    >Code postal <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="c_postal_zip"
                    name="c_postal_zip"
                  />
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black"
                    >Adresse e-mail <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="c_email_address"
                    name="c_email_address"
                  />
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black"
                    >Téléphone <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="c_phone"
                    name="c_phone"
                    placeholder="Numéro de téléphone"
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black"
                  >Notes de commande</label
                >
                <textarea
                  name="c_order_notes"
                  id="c_order_notes"
                  cols="30"
                  rows="5"
                  class="form-control"
                  placeholder="Écrivez vos notes ici..."
                ></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Votre commande</h2>
                <div class="p-3 p-lg-5 border bg-white">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Produit</th>
                      <th>Total</th>
                    </thead>
                    <tbody id="order-summary">
                      <!-- Le résumé de la commande sera ajouté ici dynamiquement -->
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0">
                      <a
                        class="d-block"
                        data-bs-toggle="collapse"
                        href="#collapsebank"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapsebank"
                        >Virement bancaire direct</a
                      >
                    </h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">
                          Effectuez votre paiement directement sur notre compte
                          bancaire. Veuillez utiliser votre numéro de commande
                          comme référence de paiement. Votre commande ne sera
                          pas expédiée tant que les fonds n'auront pas été reçus
                          sur notre compte.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0">
                      <a
                        class="d-block"
                        data-bs-toggle="collapse"
                        href="#collapsecheque"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapsecheque"
                        >Paiement par chèque</a
                      >
                    </h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">
                          Veuillez envoyer votre chèque à Store Name, Store
                          Street, Store Town, Store State / County, Store
                          Postcode.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0">
                      <a
                        class="d-block"
                        data-bs-toggle="collapse"
                        href="#collapsepaypal"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapsepaypal"
                        >Paypal</a
                      >
                    </h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">
                          Vous serez redirigé vers le site PayPal pour effectuer
                          le paiement en toute sécurité.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button
                      class="btn btn-black btn-lg py-3 btn-block"
                      id="place-order"
                    >
                      Passer la commande
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

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
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Notre équipe</a></li>
                  <li><a href="#">Leadership</a></li>
                  <li><a href="#">Politique de confidentialité</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="#">Chaise nordique</a></li>
                  <li><a href="#">Kruzo Aero</a></li>
                  <li><a href="#">Chaise ergonomique</a></li>
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
                . Tous droits réservés. &mdash; Conçu avec amour par ShopAll.
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

    <script>
      // Fonction pour charger le résumé de la commande
      function loadOrderSummary() {
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const orderSummaryContainer = document.getElementById("order-summary");
        orderSummaryContainer.innerHTML = "";

        let total = 0;
        cart.forEach((item) => {
          const itemTotal = item.price * item.quantity;
          total += itemTotal;
          const row = document.createElement("tr");
          row.innerHTML = `
          <td>${item.name} <strong class="mx-2">x</strong> ${item.quantity}</td>
          <td>${itemTotal.toFixed(2)} DH</td>
        `;
          orderSummaryContainer.appendChild(row);
        });

        const totalRow = document.createElement("tr");
        totalRow.innerHTML = `
        <td class="text-black font-weight-bold"><strong>Total de la commande</strong></td>
        <td class="text-black font-weight-bold"><strong>${total.toFixed(
          2
        )} DH</strong></td>
      `;
        orderSummaryContainer.appendChild(totalRow);

        // Mettre à jour le total dans le localStorage
        localStorage.setItem("orderTotal", total.toFixed(2));
      }

      // Fonction pour vérifier le formulaire
      function validateForm() {
        const requiredFields = [
          "c_fname",
          "c_lname",
          "c_address",
          "c_state_country",
          "c_postal_zip",
          "c_email_address",
          "c_phone",
        ];
        let isValid = true;

        requiredFields.forEach((field) => {
          const input = document.getElementById(field);
          if (!input.value.trim()) {
            input.classList.add("is-invalid");
            isValid = false;
          } else {
            input.classList.remove("is-invalid");
          }
        });

        return isValid;
      }

      // Fonction pour sauvegarder la commande
      function saveOrder() {
        const order = {
          id: Date.now(), // Utiliser le timestamp comme ID unique
          date: new Date().toISOString(),
          customer: {
            firstName: document.getElementById("c_fname").value,
            lastName: document.getElementById("c_lname").value,
            email: document.getElementById("c_email_address").value,
            phone: document.getElementById("c_phone").value,
            address: document.getElementById("c_address").value,
            city: document.getElementById("c_country").value,
            state: document.getElementById("c_state_country").value,
            postalCode: document.getElementById("c_postal_zip").value,
          },
          items: JSON.parse(localStorage.getItem("cart")) || [],
          total: parseFloat(localStorage.getItem("orderTotal") || "0"),
        };

        // Récupérer les commandes existantes ou initialiser un tableau vide
        const orders = JSON.parse(localStorage.getItem("orders")) || [];

        // Ajouter la nouvelle commande
        orders.push(order);

        // Sauvegarder les commandes mises à jour
        localStorage.setItem("orders", JSON.stringify(orders));
      }

      // Écouteurs d'événements
      document.addEventListener("DOMContentLoaded", () => {
        loadOrderSummary();

        document
          .getElementById("place-order")
          .addEventListener("click", (e) => {
            e.preventDefault();
            if (validateForm()) {
              saveOrder(); // Sauvegarder la commande
              localStorage.removeItem("cart");
              localStorage.removeItem("orderTotal");
              window.location.href = "{{url('/client/thankyou')}}";
            } else {
              alert("Veuillez remplir tous les champs obligatoires.");
            }
          });
      });
    </script>
  </body>
</html>



