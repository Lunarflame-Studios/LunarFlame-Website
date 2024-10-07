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
        populateRecentPosts();
        populateBlogEntries();

        // console.log(pages);

    }).catch(error => {
        console.error('There was a problem fetching the RSS feed: ' + error);
    })

/**
 * @function colorShadow
 * @description Adds a randomly colored box shadow to an element when it is hovered over.
 * @param {HTMLElement} box - The element to add the box shadow to.
 */
function colorShadow(box) {
    /**
     * @function getRandomIndex
     * @description Returns a random index within a given range.
     * @param {number} min - The minimum value of the range.
     * @param {number} max - The maximum value of the range.
     * @returns {number} A random index within the range.
     */
    const getRandomIndex = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;

    /**
     * @function getRandomColor
     * @description Returns a random color from the colors array.
     * @returns {string} A random color in the format "#xxxxxx".
     */
    const getRandomColor = () => colors[getRandomIndex(0, colors.length - 1)];

    /**
     * @listens box#mouseenter
     * @description Sets the box shadow of the element to a random color when it is hovered over.
     */
    box.addEventListener("mouseenter", () => {
        box.style.boxShadow = `0px 0px 50px ${getRandomColor()}`;
    });

    /**
     * @listens box#mouseleave
     * @description Resets the box shadow of the element when it is no longer hovered over.
     */
    box.addEventListener("mouseleave", () => {
        box.style.boxShadow = "0px 0px 50px #00000000";
    });
}

/**
 * @function populateBlogEntries
 * @description Populates the blog page with all available blog posts.
 */
function populateBlogEntries() {
    /**
     * @var {HTMLElement} blogBody - The container element for all blog posts.
     */
    var blogBody = document.querySelector(".blog-body");

    if (blogBody != null) {
        /**
         * @var {Array} pages - The array of all blog posts, where each element is an array of [title, link, description, pubDate, author, category, image].
         */
        blogBody.innerHTML = '';

        pages.forEach(function(entry, index) {
            /**
             * @var {HTMLElement} blogBox - The container element for a single blog post.
             */
            var blogBox = document.createElement("div");
            blogBox.classList.add("blog-box");
            blogBox.id = "blog-box-" + (index + 1);

            /**
             * @var {HTMLElement} link - The link element that wraps the blog post.
             */
            var link = document.createElement("a");
            link.href = entry[1].substring(29, entry[1].length);
            link.id = "link";

            /**
             * @var {HTMLElement} imgContainer - The container element for the blog post image.
             */
            var imgContainer = document.createElement("div");
            imgContainer.classList.add("blog-img-container");

            /**
             * @var {HTMLElement} img - The image element for the blog post.
             */
            var img = document.createElement("img");
            img.classList.add("blog-img");
            img.src = entry[6].substring(29, entry[6].length);
            img.alt = "blog img";
            imgContainer.appendChild(img);

            /**
             * @var {HTMLElement} blogText - The container element for the blog post text.
             */
            var blogText = document.createElement("div");
            blogText.classList.add("blog-text");

            /**
             * @var {HTMLElement} category - The element for the category of the blog post.
             */
            var category = document.createElement("h2");
            category.id = "category";
            category.textContent = entry[0];

            /**
             * @var {HTMLElement} title - The element for the title of the blog post.
             */
            var title = document.createElement("h3");
            title.id = "title";
            title.textContent = entry[5];

            /**
             * @var {HTMLElement} description - The element for the description of the blog post.
             */
            var description = document.createElement("p");
            description.id = "description";
            description.textContent = entry[2];

            /**
             * @var {HTMLElement} blogAuthor - The container element for the author and date of the blog post.
             */
            var blogAuthor = document.createElement("div");
            blogAuthor.classList.add("blog-author");

            /**
             * @var {HTMLElement} blogAuthorText - The container element for the text of the author and date of the blog post.
             */
            var blogAuthorText = document.createElement("div");
            blogAuthorText.classList.add("blog-author-text");

            /**
             * @var {HTMLElement} author - The element for the author of the blog post.
             */
            var author = document.createElement("strong");
            author.id = "author";
            author.textContent = entry[4];

            /**
             * @var {HTMLElement} pubDate - The element for the date of the blog post.
             */
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


/**
 * @function populateRecentPosts
 * @description Populates the "Recent Posts" section of the blog page with the latest three blog posts.
 */
function populateRecentPosts() {
    /**
     * @var {NodeList} recentPostBlocks - The array of elements for the "Recent Posts" section.
     */
    var recentPostBlocks = document.querySelectorAll(".recent-box");

    if (recentPostBlocks != null) {
        /**
         * @var {Array} recentPosts - The array of the latest three blog posts.
         */
        var recentPosts = pages.slice(0, 3);

        recentPostBlocks.forEach(function(recentPostBlock, index) {
            recentPostBlock.innerHTML = '';

            /**
             * @var {Array} post - The current blog post in the loop.
             */
            var post = recentPosts[index];

            /**
             * @var {HTMLElement} link - The link element that wraps the blog post.
             */
            var link = document.createElement("a");
            link.href = post[1].substring(29, post[1].length);

            /**
             * @var {HTMLElement} imgContainer - The container element for the blog post image.
             */
            var imgContainer = document.createElement("div");
            imgContainer.classList.add("recent-img-container");

            /**
             * @var {HTMLElement} img - The image element for the blog post.
             */
            var img = document.createElement("img");
            img.classList.add("blog-img");
            img.src = post[6].substring(29, post[6].length);
            img.alt = "blog img";
            imgContainer.appendChild(img);

            /**
             * @var {HTMLElement} recentText - The container element for the blog post text.
             */
            var recentText = document.createElement("div");
            recentText.classList.add("recent-text");

            /**
             * @var {HTMLElement} category - The element for the category of the blog post.
             */
            var category = document.createElement("h2");
            category.textContent = post[5];

            /**
             * @var {HTMLElement} title - The element for the title of the blog post.
             */
            var title = document.createElement("h3");
            title.textContent = post[0];

            /**
             * @var {HTMLElement} description - The element for the description of the blog post.
             */
            var description = document.createElement("p");
            description.textContent = post[2];

            /**
             * @var {HTMLElement} blogAuthor - The container element for the author and date of the blog post.
             */
            var blogAuthor = document.createElement("div");
            blogAuthor.classList.add("blog-author");

            /**
             * @var {HTMLElement} blogAuthorText - The container element for the text of the author and date of the blog post.
             */
            var blogAuthorText = document.createElement("div");
            blogAuthorText.classList.add("blog-author-text");

            /**
             * @var {HTMLElement} author - The element for the author of the blog post.
             */
            var author = document.createElement("strong");
            author.textContent = post[4];

            /**
             * @var {HTMLElement} pubDate - The element for the date of the blog post.
             */
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
