<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#inscriptionForm").submit(function(e) {
        e.preventDefault(); // Empêche le rafraîchissement de la page lors de la soumission du formulaire

        // Effectuez les vérifications du formulaire ici
        // Utilisez AJAX pour envoyer les données à un script PHP qui les traitera et les insérera dans la base de données

        // Exemple de code AJAX pour envoyer les données à un script PHP
        $.ajax({
          url: "inscription_traitement.php",
          type: "POST",
          data: $(this).serialize(),
          success: function(response) {
            // Traitez la réponse du serveur ici
            // Si l'inscription est réussie, redirigez l'utilisateur vers la page de connexion
            window.location.href = "connexion.php";
          }
        });
      });
    });
  </script>
</head>
<body>
  <h1>Inscription</h1>
  <form id="inscriptionForm" method="POST">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>
      <div id="erreurNom"></div>
    </div>
    <div>
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required>
      <div id="erreurPrenom"></div>
    </div>
    <div>
      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required>
      <div id="erreurEmail"></div>
    </div>
    <div>
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" required>
      <div id="erreurPassword"></div>
    </div>
    <div>
      <label for="confirmPassword">Confirmer le mot de passe :</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      <div id="erreurConfirmPassword"></div>
    </div>
    <button type="submit">S'inscrire</button>
  </form>
</body>
</html>
