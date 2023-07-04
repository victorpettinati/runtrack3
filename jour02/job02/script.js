function showhide() {
    var contentDiv = document.getElementById("content");
  
    if (contentDiv.firstChild) {
      // L'article existe déjà, on le supprime
      contentDiv.innerHTML = "";
    } else {
      // L'article n'existe pas encore, on le crée et l'ajoute au contenu
      var article = document.createElement("article");
      article.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
      contentDiv.appendChild(article);
    }
  }
  