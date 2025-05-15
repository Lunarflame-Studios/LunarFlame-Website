document.querySelectorAll(".circuit#v1").forEach(element => {
    element.style.maskImage = `url(${rootPath}images/vfx/Circuit_1.svg)`;
});

document.querySelectorAll(".circuit#v2").forEach(element => {
    element.style.maskImage = `url(${rootPath}images/vfx/Circuit_2.svg)`;
});

let animationsInstance = function() {

    let backgroundOpacity = 0.8;

    const fadeOutMain = document.querySelector('#fade-out-all');
    const mainHeader = document.querySelector('.home-header');

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
            mainHeader.style.backgroundImage = `url(${rootPath}images/vfx/Background.png)`;
        }, 500)
    }
}

let animator = animationsInstance();
