const fadeOutMain = document.querySelector('#fade-out-all');
const mainHeader = document.querySelector('.home-header');

let backgroundOpacity = 0.8;

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
        mainHeader.style.backgroundImage = 'url(images/vfx/Background.png)';
    }, 500)
}

const styleSheet = Array.from(document.styleSheets).find(
    styleSheet => styleSheet.href && styleSheet.href.includes('animations.css'));

document.addEventListener("DOMContentLoaded", () => {
    const typewriters = document.querySelectorAll(".typewriter");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('paused');
                entry.target.classList.add('animate');

                entry.target.addEventListener('animatonend', () => {
                    entry.target.classList.remove('animate');
                    entry.target.classList.add('paused');
                });
            }
        });
    });

    typewriters.forEach((typewriter) => observer.observe(typewriter));

});

function applyBlurAnimation() {
    const blurRadius = 20;

    const elements = document.querySelectorAll('.blur.v1, .blur.v2, .blur.v3, .blur.v4, .blur.v5');

    elements.forEach(element => {
        let colors = [];
        let gradientNumber = 0;

        if (element.classList.contains('v1')) {
            colors = ['#FA7FFF', '#B98EFC', '#B55DE8', '#8DA0FE', '#C490FF', '#FA7FFF'];
            gradientNumber = 1;
        } else if (element.classList.contains('v2')) {
            colors = ['#01AEF3', '#464CE7', '#A818D4', '#D80D9A', '#6A5FC7', '#01AEF3'];
            gradientNumber = 2;
        } else if (element.classList.contains('v3')) {
            colors = ['#7303C0', '#4B0DBE', '#3204E7', '#B105F4', '#FF0066', '#7303C0'];
            gradientNumber = 3;
        } else if (element.classList.contains('v4')) {
            colors = ['#0A52F2', '#5A06F5', '#A40BF3', '#FF0A94', '#E40DAF', '#0A52F2'];
            gradientNumber = 4;
        } else if (element.classList.contains('v5')) {
            colors = ['#0710E8', '#4D05E1', '#8A00D4', '#C600A6', '#FF0056', '#0710E8'];
            gradientNumber = 5;
        }

        const keyframes = `
            @keyframes dynamic-blur-color-${gradientNumber} {
                0% {
                    text-shadow: ${colors[0]} 0 0 ${blurRadius}px;
                }
                20% {
                    text-shadow: ${colors[1]} 0 0 ${blurRadius / 1.5}px;
                }
                40% {
                    text-shadow: ${colors[2]} 0 0 ${blurRadius / 2}px;
                }
                60% {
                    text-shadow: ${colors[3]} 0 0 ${blurRadius / 2}px;
                }
                80% {
                    text-shadow: ${colors[4]} 0 0 ${blurRadius / 1.5}px;
                }
                100% {
                    text-shadow: ${colors[5]} 0 0 ${blurRadius}px;
                }
            }
            `;

        if (styleSheet) {
            styleSheet.insertRule(keyframes, styleSheet.cssRules.length);
        }

        element.style.animation = 'dynamic-blur-color-' + gradientNumber + ' infinite 12s';

    })
}

applyBlurAnimation();

function combineAnimations() {
    const elements = document.querySelectorAll('.light-effect.gradient');

    elements.forEach(element => {
        element.style.animation = 'gradient 12s linear infinite, lights 5s 750ms linear infinite';
    })
}

combineAnimations();

