async function loadAllDevs() {
    try {
        const response = await fetch("/about/devs.json");
        if (!response.ok) {
            throw new Error(`HTTP error. Status: ${response.ok}`);
        }

        const jsonData = await response.json();

        if (!Array.isArray(jsonData) || typeof jsonData[0] !== 'object') {
            throw new Error("Invalid JSON structure: expected an array of objects");
        }

        const keys = Object.keys(jsonData[0]);
        const result = [];

        for (const item of jsonData) {
            const row = keys.map(key => String(item[key] ?? ""));
            result.push(row);
        }

        return result;
    } catch (error) {
        console.log(`Error fetching or processing JSON: ${error}`);
        return [];
    }
}

var aboutPageInstance = function(devInfo) {
    const frameBackground = document.querySelector('#frame-inside');

    const uiFrame = document.querySelector('#ui-frame-2');

    const devBoxElements = [
        uiFrame.querySelector('h2'),               /*   Title  */
        uiFrame.querySelector('h4'),               /* Nickname */
        uiFrame.querySelector('h3'),               /*   Role   */
        uiFrame.querySelector('p'),                /*   Quote  */
        uiFrame.querySelector('.profile-pic img'), /*    PFP   */
        uiFrame.querySelector('a')                 /*  Button  */
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

        devBoxElements[4].src = DEVS + devInfo[devIndex][4];
        frameBackground.src = DEVS + devInfo[devIndex][5];
        devBoxElements[5].className = "hero-btn button " + devInfo[devIndex][6];

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
