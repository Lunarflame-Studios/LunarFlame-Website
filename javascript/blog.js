const pages = [
    [
        'Hello World; An Introduction',
        'hello-world.html',
        'What is LunarFlame Studios? A little bit about us and our goals.',
        'Feb 4, 2024',
        'Phantom',
        'Misc.',
        'Nordic.jpg'
    ],
    [
        'My Curiosity Moment',
        'curiosity-moment.html',
        'My name is Adrian Cervera, and this is my curiosity moment.',
        'Mar 19, 2024',
        'Phantom',
        'Misc.',
        'Minimal.jpg'
    ]
];

const items = ['title', 'link', 'description', 'pubDate', 'author', 'category', 'image'];

function updateRecent(parent, index) {
    if (index < 0 || index >= pages.length ) {
        return "Index out of range";
    }

    const div = document.getElementById(parent);
    
    for (let i = 0; i < 7; i++) {
        let str = items[i];
        const element = div.querySelector('#' + str);

        switch (str) {
            case 'title':
                element.textContent = pages[index][0];
                break;
            case 'link':
                element.href = '../pages/blog/' + pages[index][1];
                break;
            case 'description':
                element.textContent = pages[index][2];
                break;
            case 'pubDate':
                element.textContent = pages[index][3];
                break;
            case 'author':
                element.textContent = pages[index][4];
                break;
            case 'category':
                element.textContent = pages[index][5];
                break;
            case 'image':
                element.src = '../images/' + pages[index][6];
                break;
            default:
                return 'null';
        }
    }


}