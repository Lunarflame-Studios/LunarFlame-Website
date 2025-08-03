async function loadAllDevs() {

    async function getDevInfo(name) {
        const response = await fetch(`../pages/about/${name}/${name}.about`);
        const text = await response.text();
        return text.split("\n");
    }

    const devs = await Promise.all([
        getDevInfo("adrian"),
        getDevInfo("dan"),
        getDevInfo("speedster"),
        getDevInfo("ryan")
    ]);
    return devs;
}

var aboutPageInstance = function(devInfo) {
    const frameBackground = document.querySelector('#frame-inside');

    const uiFrame = '#ui-frame-2 ';
    const heroBtn = "hero-btn button ";

    const devBoxElements = [
        document.querySelector(uiFrame + 'h2'),               /*   Title  */
        document.querySelector(uiFrame + 'h4'),               /* Nickname */
        document.querySelector(uiFrame + 'h3'),               /*   Role   */
        document.querySelector(uiFrame + 'p'),                /*   Quote  */
        document.querySelector(uiFrame + '.profile-pic img'), /*    PFP   */
        document.querySelector(uiFrame + 'a')                 /*  Button  */
    ];

    let devIndex = 0;

    function nextDev(direction) {
        /* Direction should either be 1 or -1.*/
        devIndex = (devIndex + direction) == -1 ?
            devInfo.length - 1 :
            (devIndex + direction) % devInfo.length;

        changeDev();
    }

    function changeDev() {
        for (let i = 0; i < devBoxElements.length - 2; i++) {
            cancelTypewriterEffect(devBoxElements[i]);
            applyTypewriterEffect(devBoxElements[i], devInfo[devIndex][i], 40);
        }

        devBoxElements[4].src = devInfo[devIndex][4];
        frameBackground.src = devInfo[devIndex][5];
        devBoxElements[5].className = heroBtn + devInfo[devIndex][6];

        for (let j = 0; j < 3; j++) {
            devBoxElements[j].style.color = devInfo[devIndex][8 + j];        
        }

        // Uncomment after dev pages have been created !!
        devBoxElements[5].href = devInfo[devIndex][7];
    }

    return {
        nextDev : nextDev,
    }
};

let aboutPage;

loadAllDevs().then(devs => {
    aboutPage = aboutPageInstance(devs);
});
