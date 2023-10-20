function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

const slideshow = document.querySelector('.background-slideshow');
const images = ['./assets/image1.jpg', './assets/image2.jpg', './assets/image3.jpg', './assets/image4.jpg'];
let index = 0;

function changeBackgroundImage() {
  slideshow.style.transform = 'scale(1.1)';
  slideshow.style.backgroundImage = `url(${images[index]})`;
  index = (index + 1) % images.length;

  setTimeout(() => {
    slideshow.style.transform = 'scale(1)';
  }, 500);
}

// SCROLL //

const elementsToObserve = document.querySelectorAll('.text-container-page-2 h2, .text-container-page-2 p1, .text-container-page-2 p2,.readmore-button,.aboutme_circle, .menu_square_1, .menu_square_2, .image_to_observe_1, .image_to_observe_2,.slider-frame-1, .slider-frame-2, .slider-frame-3,.slider-frame-4, .soffers_square_1, .soffers_square_2, .soffers_square_3, .box_1, .menu-button, .facility_circle, .contactus-button,.book-button, .text-container-page-6 h2, .background-section-4 p1, .facility_1, .facility_2, .facility_3');

function handleIntersection(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Element is in the viewport, make it visible
      entry.target.style.opacity = '1';
    } else {
      // Element is out of the viewport, make it invisible
      entry.target.style.opacity = '0';
    }
  });
}

const observer = new IntersectionObserver(handleIntersection, {
  threshold: 0.5, // Trigger the callback when 50% of the element is visible
});

// Observe each element
elementsToObserve.forEach((element) => {
  observer.observe(element);
});


// SCROLL //

let scrollContainer = document.querySelector(".gallery");
let backBtn = document.getElementById("backBtn");
let nextBtn = document.getElementById("nextBtn");

scrollContainer.addEventListener("wheel", (evt) => {
  evt.preventDefault();
  scrollContainer.scrollLeft += evt.deltaY;
  scrollContainer.style.scrollBehavior = "auto";
});

nextBtn.addEventListener("click", ()=>{
  scrollContainer.style.scrollBehavior = "smooth";
  scrollContainer.scrollLeft += 900;
})

backBtn.addEventListener("click", ()=>{
  scrollContainer.style.scrollBehavior = "smooth";
  scrollContainer.scrollLeft -= 900;
})


const searchButton = document.getElementById("search-button");
const searchInput = document.getElementById("search-input");

searchButton.addEventListener("click", () => {
  searchInput.style.display = searchInput.style.display === "block" ? "none" : "block";
});
