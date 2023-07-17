// Fonction pour charger une feuille de style spécifique
function loadStyle(stylePath) {
    const link = document.getElementById("style-link");
    link.href = stylePath;
}

// Fonction pour déterminer la largeur de l'écran et charger la feuille de style appropriée
function switchStyleByScreenWidth() {
    const screenWidth = window.innerWidth;

    if (screenWidth >= 1680 && screenWidth <= 1920) {
        loadStyle("style2.css");
    } else if (screenWidth >= 1280 && screenWidth < 1680) {
        loadStyle("style3.css");
    } else if (screenWidth < 1280) {
        loadStyle("style4.css");
    } else {
        loadStyle("style1.css"); // Par défaut
    }
}

// Charger la feuille de style appropriée lors du chargement initial
switchStyleByScreenWidth();

// Attacher un écouteur d'événement pour redéterminer la largeur lorsqu'il y a un changement de taille de l'écran
window.addEventListener('resize', switchStyleByScreenWidth);