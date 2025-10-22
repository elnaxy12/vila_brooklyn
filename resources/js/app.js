const slides = document.querySelectorAll(".slide");
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const dotsContainer = document.querySelector(".dots");

let index = 0;
let interval;

// Buat dot sesuai jumlah slide
slides.forEach((_, i) => {
    const dot = document.createElement("span");
    dot.addEventListener("click", () => goToSlide(i));
    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".dots span");

function showSlide(i) {
    slides.forEach((slide) => slide.classList.remove("active"));
    dots.forEach((dot) => dot.classList.remove("active"));

    slides[i].classList.add("active");
    dots[i].classList.add("active");
}

function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
}

function goToSlide(i) {
    index = i;
    showSlide(index);
    resetInterval();
}

function autoSlide() {
    interval = setInterval(nextSlide, 4000); // 4 detik
}

function resetInterval() {
    clearInterval(interval);
    autoSlide();
}

prev.addEventListener("click", () => {
    prevSlide();
    resetInterval();
});

next.addEventListener("click", () => {
    nextSlide();
    resetInterval();
});

// Inisialisasi
showSlide(index);
autoSlide();

// ========================================
// Rating Stars
// ========================================
const stars = document.querySelector(".stars");
const rating = parseFloat(stars.dataset.rating);
const ratingPercent = (rating / 5) * 100;
stars.style.setProperty("--rating-percent", `${ratingPercent}%`);
