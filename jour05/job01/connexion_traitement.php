<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs_deux;charset=utf8', 'root', 'Laplateforme.06!');

// Récupération des données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Recherche de l'utilisateur dans la base de données
$req = $bdd->prepare('SELECT * FROM utilisateurs_deux WHERE email = ? AND password = ?');
$req->execute([$email, $password]);
$user = $req->fetch();

if ($user) {
  // Authentification réussie
  // Vous pouvez stocker les informations de l'utilisateur dans une session ou un cookie pour les utiliser ultérieurement
  header('Location: accueil.php');
} else {
  // Authentification échouée
  echo "Identifiants invalides";
}
?>
