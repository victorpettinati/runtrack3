<!DOCTYPE html>
<html>
<head>
  <title>Connexion</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#connexionForm").submit(function(e) {
        e.preventDefault(); // Empêche le rafraîchissement de la page lors de la soumission du formulaire

        // Effectuez les vérifications du formulaire ici
        // Utilisez AJAX pour envoyer les données à un script PHP qui les traitera et vérifiera l'authentification

        // Exemple de code AJAX pour envoyer les données à un script PHP
        $.ajax({
          url: "connexion_traitement.php",
          type: "POST",
          data: $(this).serialize(),
          success: function(response) {
            // Traitez la réponse du serveur ici
            // Si l'authentification est réussie, redirigez l'utilisateur vers la page d'accueil
            window.location.href = "accueil.php";
          }
        });
      });
    });
  </script>
</head>
<body>
  <h1>Connexion</h1>
  <form id="connexionForm" method="POST">
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
    <button type="submit">Se connecter</button>
  </form>
</body>
</html>
