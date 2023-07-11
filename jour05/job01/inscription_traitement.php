<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs_deux;charset=utf8', 'root', 'Laplateforme.06!');

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insertion des données dans la base de données
$req = $bdd->prepare('INSERT INTO utilisateurs_deux (nom, prenom, email, password) VALUES (?, ?, ?, ?)');
$req->execute([$nom, $prenom, $email, $password]);

// Réponse de succès (peut être adaptée en fonction de vos besoins)
echo "Inscription réussie !";
?>
