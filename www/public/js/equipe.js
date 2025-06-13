console.log("Session Storage Data:");
// Affiche un titre dans la console pour indiquer que les données du sessionStorage vont suivre
Object.entries(sessionStorage).forEach(([key, value]) => {
// Transforme le contenu du sessionStorage en un tableau de paires [clé, valeur]
// Ensuite, on parcourt chaque paire avec une boucle forEach
  console.log(`${key}: ${value}`);
});

document.querySelectorAll("main li").forEach((listElement) => {
  // on selectionne et cible les balises <li>
  listElement.addEventListener("click", () => {
  // on ajoute un écouteur d'événement qui réagit au clic sur chaque <li>
    const popup = document.createElement("div");
    //On crée un nouvel élément <div> qui servira de popup
    popup.classList.add("popup");
    //On ajoute à cette <div> une classe CSS "popup"
    const infoText = document.createElement("p");
   // On crée un paragraphe <p> qui contiendra le texte d'information
    const name = listElement.querySelector("h2").textContent.trim();
    // On récupère le texte contenu dans la balise <h2> de l'élément <li>
    const sessionDescription =
      sessionStorage.getItem(name) || "Aucune description disponible.";
    // On recupere une description stockée dans le sessionStorage sous la clé correspondant au nom
    // Si aucune description n'est trouvée, on affiche un texte par défaut "Aucune description disponible"
    infoText.textContent = sessionDescription;
    // On place la description récupérée comme contenu du paragraphe

    infoText.classList.add("info");
    // On ajoute une classe CSS "info" au paragraphe pour le styliser

    popup.appendChild(infoText);
    // On ajoute le paragraphe à la popup
    const closeBtn = document.createElement("button");
    // On crée un bouton pour fermer la popup
    closeBtn.textContent = "x";
    // Le texte du bouton est un simple "x" (croix de fermeture
    closeBtn.addEventListener("click", () => document.body.removeChild(popup));
    // Lorsqu'on clique sur ce bouton, on retire la popup du body (fermeture de la popup)
    popup.appendChild(closeBtn);
    // On ajoute le bouton à la popup
    document.body.appendChild(popup);
    // Enfin, on ajoute la popup complète au body de la page pour l'afficher
  });
});
