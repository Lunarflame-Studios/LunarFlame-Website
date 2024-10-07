const header = document.querySelector('.home-header');
const imagePaths = [
    'images/screenshots/PL_SS_1.png', 
    'images/screenshots/PL_SS_4.png', 
    'images/vfx/Background.png', 
    'images/screenshots/Horizon_Skyline_1.png', 
    'images/screenshots/PL_SS_5.png', 
    'images/vfx/Background.png'];

let currentIndex = 0;

const fadeOutSub = document.querySelector('#fade-out-sub');

let elementOpacity = 0;

function changeBackground() {
    let blue = (currentIndex == 2 || currentIndex == 5) ?  `0, 0, 0, 0` : `5, 18, 70, 0.7`;
    let purple = (currentIndex == 2 || currentIndex == 5) ?  `0, 0, 0, 0` : `59, 4, 70, 0.7`;

    header.style.backgroundImage = `linear-gradient(rgba(${blue}), rgba(${purple})), url(${imagePaths[currentIndex]})`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % imagePaths.length;
    changeBackground();
}

let fadeOutTriggered = false;

function fadeBackground(element, delay, targetOpacity) {
    element.style.backgroundColor = `rgba(0, 0, 0, ${elementOpacity})`;

    if (targetOpacity == 0 && elementOpacity > 0) {
        setTimeout(() => {
            elementOpacity -= 0.05;
            fadeBackground(element, delay, targetOpacity);
        }, delay);
    }

    if (targetOpacity == 1 && elementOpacity < 1) {
        setTimeout(() => {
            elementOpacity += 0.05;
            fadeBackground(element, delay, targetOpacity);
        }, delay);
    }

    if (elementOpacity >= 1 && targetOpacity == 1 && !fadeOutTriggered) {
        fadeOutTriggered = true;
        setTimeout(nextSlide, 50);
        setTimeout(() => {
            fadeBackground(element, delay, 0); // Trigger fade-out animation
        }, 50);
    }

    if (elementOpacity <= 0 && targetOpacity == 0) {
        fadeOutTriggered = false; // Reset flag
    }
}

/* direction = 1: Fade Out. direction = -1: Fade In.  */
setTimeout(() => {
    setInterval(() => {
        fadeBackground(fadeOutSub, 50, 1);
    }, 8000);
}, 8000);