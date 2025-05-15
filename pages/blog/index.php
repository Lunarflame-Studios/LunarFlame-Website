<!DOCTYPE html>
<html>

<head>
    <?php require('../partials/header.php') ?>
    <title>Blog</title>
    <link rel="stylesheet" href="pages/blog/blog-main.css">
</head>

<body>
    <div class="background">
        <div>
            <span class="circuit" id="v2"></span>
        </div>

        <div id="glow-orbs">
            <img class="orb" id="purple" src="images/vfx/Purple-Glow.png" alt="">
            <img class="orb" id="light-blue" src="images/vfx/Light-Blue-Glow.png" alt="">
            <img class="orb" id="pink" src="images/vfx/Pink-Glow.png" alt="">
        </div>

        <?php require('../partials/sub-header.php') ?>

        <section class="page-body">
            <span id="overlay"></span>
            <img id="zoom-in" src="" alt="">

            <main>
                <h1 class="typewriter-v2 gradient" id="v1">&#8203;
                    <span>Latest Posts</span>
                </h1>

                <a id="subscribe" href="rss.xml">
                    <h4>Subscribe!</h4>
                </a>
            </main>

            <div class="recent">
                <div class="post">
                    <a id="link" href="">
                        <div class="thumbnail">
                            <img class="blog-img" src="images/LunarFlame-Logo-Simplified.png" alt="blog img">
                        </div>
                        <div class="metadata">
                            <h2 id="category">Category</h2>
                            <h3 id="title">Title</h3>
                            <p id="description">Description</p>
                            <div>
                                <strong id="author">Author</strong>
                                <span id="pubDate">Jan 1, 2024</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="post">
                    <a id="link" href="">
                        <div class="thumbnail">
                            <img class="blog-img" src="images/LunarFlame-Logo-Simplified.png" alt="blog img">
                        </div>
                        <div class="metadata">
                            <h2 id="category">Category</h2>
                            <h3 id="title">Title</h3>
                            <p id="description">Description</p>
                            <div>
                                <strong id="author">Author</strong>
                                <span id="pubDate">Jan 1, 2024</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="post">
                    <a id="link" href="">
                        <div class="thumbnail">
                            <img src="images/LunarFlame-Logo-Simplified.png" alt="blog img">
                        </div>
                        <div class="metadata">
                            <h2 id="category">Category</h2>
                            <h3 id="title">Title</h3>
                            <p id="description">Description</p>
                            <div>
                                <strong id="author">Author</strong>
                                <span id="pubDate">Jan 1, 2024</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <hr id="spacing">

            <h1 class="typewriter-v2 gradient" id="v2"> &#8203;
                <span>All Posts</span>
            </h1>

            <div class="catalog">
                <div class="post">
                    <a id="link" href="">
                        <div class="thumbnail">
                            <img src="images/LunarFlame-Logo-Simplified.png" alt="blog img">
                        </div>
                        <div class="metadata">
                            <h2 id="category">Category</h2>
                            <h3 id="title">Title</h3>
                            <p id="description">Description</p>
                            <div>
                                <strong id="author">Author</strong>
                                <span id="pubDate">Jan 1, 2024</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <h1></h1>
        </section>
        
        <?php require('../partials/sub-footer.php') ?>
    </div>

    <?php require('../partials/copyright.php') ?>

    <script src="javascript/blog.js"></script>
    <?php require('../partials/javascript.php') ?>

</body>

</html>
