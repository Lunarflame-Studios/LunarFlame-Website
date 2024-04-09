<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
</head>

<body>

    <?php require('partials/sub-header.php')?>

    <section class="page-body">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <h1>Latest Posts</h1>
        <a id="subscribe" href="../rss.xml"><h4>Subscribe!</h4></a>

        <div class="recent-body">

            <div class="recent-box" id="recent-box-1">
                <a id="link" href="">
                    <div class="recent-img-container">
                        <img id="image" class="blog-img" src="../images/LunarFlame-Logo-Simplified.png" alt="blog img">
                    </div>
                    <div class="recent-text">
                        <h2 id="category">Category</h2>
                        <h3 id="title">Title</h3>
                        <p id="description">Description</p>
                        <div class="blog-author">
                            <div class="blog-author-text">
                                <strong id="author">Author</strong>
                                <span id="pubDate">Jan 1, 2024</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="recent-box" id="recent-box-1">
                <a id="link" href="">
                    <div class="recent-img-container">
                        <img id="image" class="blog-img" src="../images/LunarFlame-Logo-Simplified.png" alt="blog img">
                    </div>
                    <div class="recent-text">
                        <h2 id="category">Category</h2>
                        <h3 id="title">Title</h3>
                        <p id="description">Description</p>
                        <div class="blog-author">
                            <div class="blog-author-text">
                                <strong id="author">Author</strong>
                                <span id="pubDate">Jan 1, 2024</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr id="spacing">

        <h1>All Posts</h1>

        <div class="blog-body">

            <div class="blog-box" id="blog-box-1">
                <a id="link" href="">
                    <div class="blog-img-container">
                        <img id="image" class="blog-img" src="../images/LunarFlame-Logo-Simplified.png" alt="blog img">
                    </div>
                    <div class="blog-text">
                        <h2 id="category">Category</h2>
                        <h3 id="title">Title</h3>
                        <p id="description">Description</p>
                        <div class="blog-author">
                            <div class="blog-author-text">
                                <strong id="author">Author</strong>
                                <span id="pubDate">Jan 1, 2024</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <h1></h1>
    </section>

    <?php require('partials/sub-footer.php')?>

    <?php require('partials/copyright.php')?>

    <script src="../javascript/blog.js"></script>
    <script>
        var navLinks = document.getElementById("navLinks");
        var socialLinks = document.getElementById("socialLinks");
        function showMenu() {
            navLinks.style.right = "0";
            socialLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
            socialLinks.style.right = "-200px";
        }
    </script>
</body>

</html>