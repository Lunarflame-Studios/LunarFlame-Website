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
        'My name is Adrian, and this is my curiosity moment.',
        'Mar 19, 2024',
        'Phantom',
        'Misc.',
        'Horizon_Skyline_1.png'
    ]
];

var colors = ['#0b54fe', '#fc0fc0', '#a129d7', '#633be7'];
var recentBoxes = document.querySelectorAll(".page-body .recent-body .recent-box");

recentBoxes.forEach(function(box) { colorShadow(box) });

function colorShadow(box) {
    function generateRandomColor() {
        var index = getRandomInt(0, colors.length - 1);
        return colors[index];
    }

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    box.addEventListener("mouseenter", function () {
        box.style.boxShadow = "0px 0px 50px " + generateRandomColor();
    });

    box.addEventListener("mouseleave", function () {
        box.style.boxShadow = "0px 0px 50px #00000000";
    });
}

const items = ['title', 'link', 'description', 'pubDate', 'author', 'category', 'image'];

function populateBlogEntries() {
    var blogBody = document.querySelector(".blog-body");

    blogBody.innerHTML = '';

    pages.forEach(function (entry, index) {
        // Create elements for the blog entry
        var blogBox = document.createElement("div");
        blogBox.classList.add("blog-box");
        blogBox.id = "blog-box-" + (index + 1);

        var link = document.createElement("a");
        link.href = '../pages/blog/' + entry[1];
        link.id = "link";

        var imgContainer = document.createElement("div");
        imgContainer.classList.add("blog-img-container");
        var img = document.createElement("img");
        img.classList.add("blog-img");
        img.src = '../images/' + entry[6];
        img.alt = "blog img";
        imgContainer.appendChild(img);

        var blogText = document.createElement("div");
        blogText.classList.add("blog-text");
        var category = document.createElement("h2");
        category.id = "category";
        category.textContent = entry[0];
        var title = document.createElement("h3");
        title.id = "title";
        title.textContent = entry[5];
        var description = document.createElement("p");
        description.id = "description";
        description.textContent = entry[2];
        var blogAuthor = document.createElement("div");
        blogAuthor.classList.add("blog-author");
        var blogAuthorText = document.createElement("div");
        blogAuthorText.classList.add("blog-author-text");
        var author = document.createElement("strong");
        author.id = "author";
        author.textContent = entry[4];
        var pubDate = document.createElement("span");
        pubDate.id = "pubDate";
        pubDate.textContent = entry[3];
        blogAuthorText.appendChild(author);
        blogAuthorText.appendChild(pubDate);
        blogAuthor.appendChild(blogAuthorText);
        blogText.appendChild(category);
        blogText.appendChild(title);
        blogText.appendChild(description);
        blogText.appendChild(blogAuthor);

        link.appendChild(imgContainer);
        link.appendChild(blogText);
        blogBox.appendChild(link);

        blogBody.appendChild(blogBox);
        colorShadow(blogBox);

    });
}

function populateRecentPosts() {
    var recentPostBlocks = document.querySelectorAll(".recent-box");

    var recentPosts = pages.slice(0, 3);

    recentPostBlocks.forEach(function(recentPostBlock, index) {
        recentPostBlock.innerHTML = '';

        var post = recentPosts[index];

        var link = document.createElement("a");
        link.href = '../pages/blog/' + post[1];

        var imgContainer = document.createElement("div");
        imgContainer.classList.add("recent-img-container");
        var img = document.createElement("img");
        img.classList.add("blog-img");
        img.src = '../images/' + post[6]; 
        img.alt = "blog img";
        imgContainer.appendChild(img);

        var recentText = document.createElement("div");
        recentText.classList.add("recent-text");
        var category = document.createElement("h2");
        category.textContent = post[5]; 
        var title = document.createElement("h3");
        title.textContent = post[0]; 
        var description = document.createElement("p");
        description.textContent = post[2]; 
        var blogAuthor = document.createElement("div");
        blogAuthor.classList.add("blog-author");
        var blogAuthorText = document.createElement("div");
        blogAuthorText.classList.add("blog-author-text");
        var author = document.createElement("strong");
        author.textContent = post[4]; 
        var pubDate = document.createElement("span");
        pubDate.textContent = post[3];
        blogAuthorText.appendChild(author);
        blogAuthorText.appendChild(pubDate);
        blogAuthor.appendChild(blogAuthorText);
        recentText.appendChild(category);
        recentText.appendChild(title);
        recentText.appendChild(description);
        recentText.appendChild(blogAuthor);

        link.appendChild(imgContainer);
        link.appendChild(recentText);
        recentPostBlock.appendChild(link);
    });
}

populateRecentPosts();
populateBlogEntries();