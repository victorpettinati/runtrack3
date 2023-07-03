function jourtravaille(date) {
    var annee = date.getFullYear();
    var mois = date.getMonth();
    var jour = date.getDate();
  
    var joursFeries2020 = [
      new Date(annee, 0, 1),   // Nouvel An
      new Date(annee, 3, 10),  // Vendredi saint
      new Date(annee, 4, 1),   // Fête du Travail
      new Date(annee, 4, 8),   // Victoire 1945
      new Date(annee, 4, 21),  // Ascension
      new Date(annee, 5, 1),   // Pentecôte
      new Date(annee, 6, 14),  // Fête nationale
      new Date(annee, 7, 15),  // Assomption
      new Date(annee, 10, 1),  // Toussaint
      new Date(annee, 10, 11), // Armistice
      new Date(annee, 11, 25)  // Noël
    ];
  
    // Vérification si la date est un jour férié
    for (var i = 0; i < joursFeries2020.length; i++) {
      if (date.getTime() === joursFeries2020[i].getTime()) {
        console.log("Le " + jour + " " + moisToString(mois) + " " + annee + " est un jour férié.");
        return;
      }
    }
  
    // Vérification si la date est un week-end
    var jourSemaine = date.getDay();
    if (jourSemaine === 0 || jourSemaine === 6) {
      console.log("Non, " + jour + " " + moisToString(mois) + " " + annee + " est un week-end.");
    } else {
      console.log("Oui, " + jour + " " + moisToString(mois) + " " + annee + " est un jour travaillé.");
    }
  }
  
  // Fonction pour convertir le numéro du mois en chaîne de caractères
  function moisToString(mois) {
    var moisString = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    return moisString[mois];
  }
  