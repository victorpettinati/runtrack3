<!DOCTYPE html>
<html>
<head>
  <title>Exemple de fichier index.php</title>
  <script src="script.js"></script>
</head>
<body>
  <h1>Exemple de fichier index.php</h1>
  
  <script>
    // Appel de la fonction sommenombrespremiers avec des nombres donnés
    var a = 17; // Exemple de premier nombre
    var b = 13; // Exemple de deuxième nombre
    var resultat = sommenombrespremiers(a, b);

    if (resultat !== false) {
      console.log("La somme des nombres premiers " + a + " et " + b + " est : " + resultat);
    } else {
      console.log("Au moins l'un des nombres n'est pas premier.");
    }
  </script>
</body>
</html>
