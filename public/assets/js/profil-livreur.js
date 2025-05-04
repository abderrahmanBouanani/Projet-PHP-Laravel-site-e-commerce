document.addEventListener("DOMContentLoaded", () => {
  const editProfileBtn = document.getElementById("editProfileBtn");
  if (editProfileBtn) {
    editProfileBtn.addEventListener("click", () => {
      new bootstrap.Modal(document.getElementById("editProfileModal")).show();
    });
  }

  const saveProfileChangesBtn = document.getElementById("saveProfileChanges");
  if (saveProfileChangesBtn) {
    saveProfileChangesBtn.addEventListener("click", () => {
      const form = document.getElementById("editProfileForm");
      const formData = new FormData(form);
      
      // Envoyer les données au serveur
      fetch('/livreur/profile/update', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
          nom: formData.get('nom'),
          prenom: formData.get('prenom'),
          email: formData.get('email'),
          telephone: formData.get('telephone'),
          motdepasse: formData.get('motdepasse')
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          // Recharger la page pour afficher les nouvelles données
          window.location.reload();
        } else {
          alert('Erreur lors de la mise à jour du profil: ' + data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Une erreur est survenue lors de la mise à jour du profil');
      });
    });
  }
});

