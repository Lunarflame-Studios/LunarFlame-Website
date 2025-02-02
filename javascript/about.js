const frameBackground = document.querySelector('#frame-inside');

const uiFrame = '#ui-frame-2 ';
const baseImagePath = 'images/devs/';
const baseURLPath = 'pages/about/';
const heroBtn = "hero-btn button ";

const devBoxElements = [
    document.querySelector(uiFrame + 'h2'),               /*   Title  */
    document.querySelector(uiFrame + 'h4'),               /* Nickname */
    document.querySelector(uiFrame + 'h3'),               /*   Role   */
    document.querySelector(uiFrame + 'p'),                /*   Quote  */
    document.querySelector(uiFrame + '.profile-pic img'), /*    PFP   */
    document.querySelector(uiFrame + 'a')                 /*  Button  */
];

const devInfo = [
    [
        'Adrian',
        'Phantom',
        'Lead Artist, Lead Programmer',
        '\"I\'ve always been a huge believer in the idea that video games are the future of storytelling. I\'m a jRPG fiend, some of my favorite titles include Persona, Xenoblade, and Nier. I began this project because I wanted to create my own story to tell to the world.\"',
        baseImagePath + 'adri_pfp.jpg',
        baseImagePath + 'Minimal.jpg',
        "raise",
        ['#3A5A81', '#773F64', '#A6294F'], /* Title Color, Nickname Color, Role Color */
        baseURLPath + 'about-adrian.php'
    ],
    [
        'Daniel',
        'Kapeepa',
        'Lead Musician, Programmer',
        '\"Certified learner. I joined the project to get good at programming and music stuff. Like Adrian, I do love me some video games---so much we can learn from them. PM sleeper agent (!)\"',
        baseImagePath + 'dan_pfp.png',
        baseImagePath + 'Nordic.jpg',
        "offset",
        ['#1D71F2', '#19C3FB', '#1C9CF6'],
        baseURLPath + 'about-dan.php'
    ],

    [
        'Speedster101',
        '',
        'Assistant Artist, Programmer',
        '\"Growing up on Nintendo consoles and Saturday Morning Cartoons, I\'ve always maintained a love for art and gaming and found joining the Lunarflame team the perfect expression of this interest. Whether it was learning C# or getting to gripes with Unity (I love collision detection), I appreciate how much opportunity being on the team gives me to learn new things and push my ambition and work ethic.\"',
        baseImagePath + 'speedster_pfp.jpg',
        baseImagePath + 'cosmic_cove.png',
        "slide",
        ['#72AB94', '#fff', '#A3D6F0'],
        baseURLPath + 'about-speedster.php'
    ],
    [
        'Ryan',
        'Ry',
        'Programmer',
        '\"I\'ve always been an avid gamer and fascinated by the design and technical aspects behind it; there was no better project than this one for me to refine my technical skills and express myself in a world of our design\".',
        baseImagePath + 'ryan_pfp.jpg',
        baseImagePath + 'deep-blue-sky.png',
        "up",
        ['#BDFCFE', '#98F4F4', '#66D9D1'],
        baseURLPath + 'about-ryan.php'
    ]
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
        devBoxElements[j].style.color = devInfo[devIndex][7][j];        
    }

    // Uncomment after dev pages have been created !!
    //devBoxElements[5].href = devInfo[devIndex][8];
}