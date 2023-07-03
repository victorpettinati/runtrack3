function tri(numbers, order) {
    // Vérification de l'ordre spécifié
    if (order === "asc") {
      // Tri dans l'ordre ascendant
      for (var i = 0; i < numbers.length - 1; i++) {
        for (var j = i + 1; j < numbers.length; j++) {
          if (numbers[j] < numbers[i]) {
            var temp = numbers[i];
            numbers[i] = numbers[j];
            numbers[j] = temp;
          }
        }
      }
    } else if (order === "desc") {
      // Tri dans l'ordre descendant
      for (var i = 0; i < numbers.length - 1; i++) {
        for (var j = i + 1; j < numbers.length; j++) {
          if (numbers[j] > numbers[i]) {
            var temp = numbers[i];
            numbers[i] = numbers[j];
            numbers[j] = temp;
          }
        }
      }
    } else {
      // Ordre non valide, retourne le tableau inchangé
      console.log("Ordre de tri non valide");
    }
  
    return numbers;
  }
  