/*const slides = document.querySelector('.slides');
    const slideCount = document.querySelectorAll('.bieres_slide').length;
    const prevBtn = document.getElementById('precedant');
    const nextBtn = document.getElementById('suivant');
    let currentIndex = 0;
    function updateSlidePosition() {
      slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
    }
    prevBtn.addEventListener('click', () => {
      currentIndex = (currentIndex === 0) ? slideCount - 1 : currentIndex - 1;
      updateSlidePosition();
    });
    nextBtn.addEventListener('click', () => {
      currentIndex = (currentIndex === slideCount - 1) ? 0 : currentIndex + 1;
      updateSlidePosition();
    });*/

const slides = document.querySelectorAll(".bieres_slide");
const prevButton = document.querySelector(".precedant");
const nextButton = document.querySelector(".suivant");
let currentSlide = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle("active", i === index);
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  showSlide(currentSlide);
}

// Initialize carousel only if slides exist
if (slides.length > 0) {
  showSlide(currentSlide);
  if (prevButton) prevButton.addEventListener("click", prevSlide);
  if (nextButton) nextButton.addEventListener("click", nextSlide);
}
