<?php
session_start();

if (isset($_SESSION['prenom'])) {
  $prenomUtilisateur = $_SESSION['prenom'];
  echo "Bonjour " . $prenomUtilisateur;
} else {
  echo '<a href="inscription.php">Inscription</a> | <a href="connexion.php">Connexion</a>';
}
?>
