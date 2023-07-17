<?php
session_start();

if (isset($_SESSION['prenom'])) {
  $prenomUtilisateur = $_SESSION['prenom'];
  echo 'Bonjour ' . $prenomUtilisateur;

  // Afficher le pop-up avec le message de bienvenue en utilisant JavaScript
  echo '<script type="text/javascript">
    $(document).ready(function() {
      alert("Bonjour ' . $prenomUtilisateur . '");
    });
  </script>';
} else {
  echo '<a href="inscription.php">Inscription</a> | <a href="connexion.php">Connexion</a>';
}
?>
