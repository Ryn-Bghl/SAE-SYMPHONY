console.log("Session Storage Data:");
Object.entries(sessionStorage).forEach(([key, value]) => {
  console.log(`${key}: ${value}`);
});

document.querySelectorAll("main li").forEach((listElement) => {
  listElement.addEventListener("click", () => {
    const popup = document.createElement("div");
    popup.classList.add("popup");

    const infoText = document.createElement("p");
    const name = listElement.querySelector("h2").textContent.trim();
    const sessionDescription =
      sessionStorage.getItem(name) || "Aucune description disponible.";
    infoText.textContent = sessionDescription;

    infoText.classList.add("info");
    popup.appendChild(infoText);

    const closeBtn = document.createElement("button");
    closeBtn.textContent = "x";
    closeBtn.addEventListener("click", () => document.body.removeChild(popup));
    popup.appendChild(closeBtn);

    document.body.appendChild(popup);
  });
});
