const sessionStorage = window.sessionStorage;

console.log("Session Storage Data:");
Object.keys(sessionStorage).forEach((key) => {
  console.log(`${key}: ${sessionStorage.getItem(key)}`);
});

// Add event listeners to each list item in the main section
const pp = document.querySelectorAll("main li");
pp.forEach((listElement) => {
  listElement.addEventListener("click", function () {
    // Create popup container
    const popup = document.createElement("div");
    popup.classList.add("popup");

    const infoText = document.createElement("p");

    // Get the description from the data-description attribute
    const sessionDescription = sessionStorage.getItem(
      `description_${listElement.dataset.id}`
    );
    console.log(listElement);
    const description =
      listElement.getAttribute("data-description") ||
      "Aucune description disponible.";
    infoText.textContent = description;

    // If sessionStorage has a description, use it
    const nameMatch = listElement.innerHTML.match(
      /<h2>[A-Za-z0-9À-ÿœŒæÆçÇëËïÏüÜöÖéÉèÈêÊàÀâÂîÎôÔùÙûÛÿŸ\- ]+<\/h2>/i
    );
    let name = "";
    console.log(`Name match: ${nameMatch}`);

    if (nameMatch) {
      name = nameMatch[0].replace(/<\/?h2>/g, "");
      const sessionDescription = sessionStorage.getItem(name);
      console.log(`Session description for ${name}:`, sessionDescription);
      if (sessionDescription) {
        infoText.textContent = sessionDescription;
      }
    }

    infoText.classList.add("info");
    popup.appendChild(infoText);

    // Add close button
    const closeBtn = document.createElement("button");
    closeBtn.textContent = "x";
    closeBtn.addEventListener("click", function () {
      document.body.removeChild(popup);
    });
    popup.appendChild(closeBtn);

    // Add popup to the document
    document.body.appendChild(popup);
  });
});
