function jsonValueKey(jsonString, key) {
    // Analyser la chaîne de caractères JSON en un objet JavaScript
    var jsonObj = JSON.parse(jsonString);
  
    // Vérifier si la clé existe dans l'objet
    if (key in jsonObj) {
      return jsonObj[key];
    } else {
      return "Clé non trouvée";
    }
  }
  
  // Exemple d'utilisation
  var jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
  }`;
  
  var key = "creation";
  var value = jsonValueKey(jsonString, key);
  console.log(value); // Affiche "Marseille"
  