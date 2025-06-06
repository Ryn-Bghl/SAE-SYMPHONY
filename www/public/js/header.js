const header = document.querySelector("header");
const burgerMenuBtn = header.querySelector("#burger-menu");

const burgerPopup = header.querySelector(".burger-popup");

burgerMenuBtn.addEventListener("click", (e) => {
  burgerPopup.classList.toggle("hidden");
  document.body.style.overflow = burgerPopup.classList.contains("hidden")
    ? ""
    : "hidden";
});
