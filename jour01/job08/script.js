function sommenombrespremiers(a, b) {
    if (estNombrePremier(a) && estNombrePremier(b)) {
      return a + b;
    } else {
      return false;
    }
  }
  
  // Fonction pour vérifier si un nombre est premier
  function estNombrePremier(n) {
    if (n <= 1) {
      return false;
    }
  
    for (var i = 2; i <= Math.sqrt(n); i++) {
      if (n % i === 0) {
        return false;
      }
    }
  
    return true;
  }
  