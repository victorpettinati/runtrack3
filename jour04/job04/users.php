<?php
$servername = "localhost";
$username = "root";
$password = "Laplateforme.06!";
$dbname = "utilisateurs";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "SELECT * FROM utilisateurs";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

  header("Content-Type: application/json");
  echo json_encode($users);
} catch (PDOException $e) {
  die("Erreur : " . $e->getMessage());
}
?>
