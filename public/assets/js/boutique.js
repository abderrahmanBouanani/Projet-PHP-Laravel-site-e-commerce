document.addEventListener("DOMContentLoaded", () => {
    // Fonction pour récupérer les produits depuis l'API
    function getProducts() {
      return fetch('http://127.0.0.1:8000/api/produits')  // Assurez-vous que cette URL renvoie les produits
        .then(response => response.json())
        .then(data => {
          return data;
        })
        .catch(error => console.error('Erreur lors de la récupération des produits:', error));
    }
  
    // Fonction pour afficher les produits
    function displayProducts(productsToDisplay) {
      const productList = document.getElementById("product-list");
      productList.innerHTML = ""; // Vide le conteneur avant d'afficher les produits
  
      productsToDisplay.forEach((product) => {
        const productElement = document.createElement("div");
        productElement.className = "col-12 col-md-4 col-lg-3 mb-5";
        productElement.innerHTML = `
          <a class="product-item product add-to-cart"
             href="#"
             data-id="${product.id}"
             data-name="${product.nom}"
             data-price="${product.prix_unitaire}"
             data-image="http://127.0.0.1:8000/storage/${product.image}">
            <img src="http://127.0.0.1:8000/storage/${product.image}" class="img-fluid product-thumbnail" style="mix-blend-mode: multiply;">
            <h3 class="product-title">${product.nom}</h3>
            <strong class="product-price">${product.prix_unitaire} DH</strong>
            <span class="icon-cross">
              <img src="../images/cross.svg" class="img-fluid">
            </span>
          </a>
        `;
        productList.appendChild(productElement);
      });
    }
  
    // Initialisation : récupérer et afficher tous les produits
    getProducts().then(products => {
      displayProducts(products);
      
      // Gestion des événements pour le panier
      document.addEventListener("click", (e) => {
        if (e.target.closest(".add-to-cart")) {
          e.preventDefault();
          const product = e.target.closest(".add-to-cart");
          const name = product.getAttribute("data-name");
          const price = parseFloat(product.getAttribute("data-price"));
          const image = product.getAttribute("data-image");
  
          // Création de l'objet produit
          const productData = { name, price, image, quantity: 1 };
  
          // Récupération du panier depuis localStorage ou initialisation
          let cart = JSON.parse(localStorage.getItem("cart")) || [];
  
          // Vérifie si le produit existe déjà dans le panier
          const existingProduct = cart.find((item) => item.name === name);
          if (existingProduct) {
            existingProduct.quantity += 1;
          } else {
            cart.push(productData);
          }
  
          // Sauvegarde le panier mis à jour dans localStorage
          localStorage.setItem("cart", JSON.stringify(cart));
          alert(`${name} a été ajouté à votre panier.`);
        }
      });
  
      // Gestion de la recherche
      const searchInput = document.getElementById("search");
      searchInput.addEventListener("input", () => {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredProducts = products.filter((product) =>
          product.nom.toLowerCase().includes(searchTerm) // Utilisez 'nom' au lieu de 'name'
        );
        displayProducts(filteredProducts);
      });
  
      // Gestion du filtrage
      const filterSelect = document.getElementById("filtrer");
      filterSelect.addEventListener("change", () => {
        const filterValue = filterSelect.value;
        let filteredProducts;
  
        if (filterValue === "prix") {
          filteredProducts = [...products].sort((a, b) => a.prix_unitaire - b.prix_unitaire); // Utilisez 'prix_unitaire'
        } else if (filterValue === "categorie") {
          const selectedCategory = document.getElementById("categorie").value; // Assurez-vous que 'categorie' est sélectionnée
          filteredProducts = selectedCategory
            ? products.filter((product) => product.categorie === selectedCategory) // Utilisez 'categorie' et pas 'category'
            : products;
        } else {
          filteredProducts = products;
        }
        displayProducts(filteredProducts);
      });
  
      // Gestion de la sélection de catégorie
      const categorySelect = document.getElementById("categorie");
      filterSelect.addEventListener("change", () => {
        if (filterSelect.value === "categorie") {
          categorySelect.style.display = "block";
          document.querySelector('label[for="categorie"]').style.display = "block";
        } else {
          categorySelect.style.display = "none";
          document.querySelector('label[for="categorie"]').style.display = "none";
        }
      });
  
      categorySelect.addEventListener("change", () => {
        const selectedCategory = categorySelect.value;
        const filteredProducts = selectedCategory
          ? products.filter((product) => product.categorie === selectedCategory)
          : products;
        displayProducts(filteredProducts);
      });
    });
});


//Cart 
