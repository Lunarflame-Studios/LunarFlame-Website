let pages = [];
var colors = ['#0b54fe', '#fc0fc0', '#a129d7', '#633be7'];
var recentBoxes = document.querySelectorAll(".page-body .recent-body .recent-box");
recentBoxes.forEach(function(box) { colorShadow(box) });

fetch('/rss.xml')
    .then(response => {
        if (!response.ok) {
            console.log("There was an error parsing the XML");
        }
        else {
            return response.text();
        }
    }).then(XmlData => {
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(XmlData, 'text/xml');

        const items = xmlDoc.getElementsByTagName('item');

        for (let i = 0; i < items.length; i++) {
            const title = items[i].getElementsByTagName('title')[0].textContent;
            const link = items[i].getElementsByTagName('link')[0].textContent;
            const description = items[i].getElementsByTagName('description')[0].textContent;
            const pubDate = items[i].getElementsByTagName('pubDate')[0].textContent;
            const author = items[i].getElementsByTagName('author')[0].textContent;
            const category = items[i].getElementsByTagName('category')[0].textContent;
            const image = items[i].getElementsByTagName('image')[0].textContent;

            const itemArray = [title, link, description, pubDate, author, category, image];
            pages.push(itemArray);
        }
        console.log(pages);
        populateRecentPosts();
        populateBlogEntries();

    }).catch(error => {
        console.error('There was a problem fetching the RSS feed: ' + error);
    })

function colorShadow(box) {
    function generateRandomColor() {
        var index = getRandomInt(0, colors.length - 1);
        return colors[index];
    }

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    box.addEventListener("mouseenter", function() {
        box.style.boxShadow = "0px 0px 50px " + generateRandomColor();
    });

    box.addEventListener("mouseleave", function() {
        box.style.boxShadow = "0px 0px 50px #00000000";
    });
}

function populateBlogEntries() {
    var blogBody = document.querySelector(".blog-body");

    if (blogBody != null) {
        blogBody.innerHTML = '';

        pages.forEach(function(entry, index) {
            var blogBox = document.createElement("div");
            blogBox.classList.add("blog-box");
            blogBox.id = "blog-box-" + (index + 1);

            var link = document.createElement("a");
            link.href = entry[1];
            link.id = "link";

            var imgContainer = document.createElement("div");
            imgContainer.classList.add("blog-img-container");

            var img = document.createElement("img");
            img.classList.add("blog-img");
            img.src = entry[6];
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
}


function populateRecentPosts() {
    var recentPostBlocks = document.querySelectorAll(".recent-box");

    if (recentPostBlocks != null) {
        var recentPosts = pages.slice(0, 3);

        recentPostBlocks.forEach(function(recentPostBlock, index) {
            recentPostBlock.innerHTML = '';

            var post = recentPosts[index];

            var link = document.createElement("a");
            link.href = post[1];

            var imgContainer = document.createElement("div");
            imgContainer.classList.add("recent-img-container");
            var img = document.createElement("img");
            img.classList.add("blog-img");
            img.src = post[6];
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
}