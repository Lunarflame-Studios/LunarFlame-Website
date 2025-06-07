let homePageInstance = function() {
    const mainBody = document.querySelector('.main-content');
    const defaultBackground = 'images/vfx/Background.png'

    const imagePaths = [
        'images/screenshots/PL_SS_1.png', 
        'images/screenshots/PL_SS_4.png', 
        defaultBackground,
        'images/screenshots/Horizon_Skyline_1.png', 
        'images/screenshots/PL_SS_5.png', 
        defaultBackground];

    let currentIndex = 0;

    const fadeInterval = 8000;
    const fadePauseDuration = 50;
    const opacityDelta = 0.05;

    const fadeOutSub = document.querySelector('#fade-out-sub');

    let elementOpacity = 0;

    function changeBackground() {
        const blue = imagePaths[currentIndex] === defaultBackground ?  `0, 0, 0, 0` : `5, 18, 70, 0.7`;
        const purple = imagePaths[currentIndex] === defaultBackground ?  `0, 0, 0, 0` : `59, 4, 70, 0.7`;

        mainBody.style.backgroundImage = `linear-gradient(rgba(${blue}), rgba(${purple})), url(${rootPath}${imagePaths[currentIndex]})`;
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
                elementOpacity -= opacityDelta;
                fadeBackground(element, delay, targetOpacity);
            }, delay);
        }

        if (targetOpacity == 1 && elementOpacity < 1) {
            setTimeout(() => {
                elementOpacity += opacityDelta;
                fadeBackground(element, delay, targetOpacity);
            }, delay);
        }

        if (elementOpacity >= 1 && targetOpacity == 1 && !fadeOutTriggered) {
            fadeOutTriggered = true;
            setTimeout(nextSlide, delay);
            setTimeout(() => {
                fadeBackground(element, delay, 0); // Trigger fade-out animation
            }, delay);
        }

        if (elementOpacity <= 0 && targetOpacity == 0) {
            fadeOutTriggered = false; // Reset flag
        }
    }

    let backgroundOpacity = 0.8;

    const fadeOutMain = document.querySelector('#fade-out-all');

    function fadeOut(element, delay) {
        element.style.backgroundColor = `rgba(0, 0, 0, ${backgroundOpacity})`;

        if (backgroundOpacity > 0) {
            setTimeout(() => {
                backgroundOpacity -= 0.05;
                fadeOut(element, delay);
            }, delay);
        }
    }

    if (fadeOutMain !== null) {
        setTimeout(() => {
            fadeOut(fadeOutMain, 50);
            mainBody.style.backgroundImage = `url(${rootPath}images/vfx/Background.png)`;
        }, 500)
    }

    /* direction = 1: Fade Out. direction = -1: Fade In.  */
    setTimeout(() => {
        setInterval(() => {
            fadeBackground(fadeOutSub, fadePauseDuration, 1);
        }, fadeInterval);
    }, fadeInterval);
}

let homePage = homePageInstance();
