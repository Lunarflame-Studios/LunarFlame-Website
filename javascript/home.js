const header = document.querySelector('.home-header');
const images = ['images/PL_SS_1.png', 'images/PL_SS_4.png', 'images/Horizon_Skyline_1.png', 'images/PL_SS_5.png'];
//const imagePaths = ['images/PL_SS_1.png', 'images/PL_SS_4.png', 'images/Horizon_Skyline_1.png', 'images/PL_SS_5.png'];
let currentIndex = 0;

function changeBackground() {
    header.style.backgroundImage = `linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), url(${images[currentIndex]})`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % imagePaths.length;
    changeBackground();
}

setInterval(nextSlide, 5000);

changeBackground();