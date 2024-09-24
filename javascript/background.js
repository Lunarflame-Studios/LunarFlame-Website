var background = document.querySelector('#home-background');

let backgroundOpacity = 1;

function fadeBackground(delay) {
    background.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, ${backgroundOpacity}), rgba(0, 0, 0, ${backgroundOpacity})), url(images/Background.png)`;

    if (backgroundOpacity > 0) {
        setTimeout(() => {
            backgroundOpacity -= 0.05;
            fadeBackground(delay);
        }, delay);
    }
}

setTimeout(() => {
    fadeBackground(50);
}, 500)