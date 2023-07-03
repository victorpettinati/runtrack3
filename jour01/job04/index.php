<!DOCTYPE html>
<html>
<head>
  <title>Exemple de fichier index.php</title>
  <script src="script.js"></script>
</head>
<body>
  <h1>Exemple de fichier index.php</h1>
  
  <?php
    // Utilisation de la fonction bisextile
    $annee = 2024; // Exemple d'année à tester
    $estBisextile = '<script>document.write(bisextile('.$annee.'));</script>';
    
    if ($estBisextile) {
      echo "<p>L'année $annee est bissextile.</p>";
    } else {
      echo "<p>L'année $annee n'est pas bissextile.</p>";
    }
  ?>
</body>
</html>
