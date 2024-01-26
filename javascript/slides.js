const header = document.querySelector('.header');
const imagePaths = ['images/Nexo_SS_1.png', 'images/Nexo_SS_2.png'];
let currentIndex = 0;

function changeBackground() {
    header.style.backgroundImage = `linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), url(${imagePaths[currentIndex]})`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % imagePaths.length;
    changeBackground();
}

setInterval(nextSlide, 5000);

changeBackground();