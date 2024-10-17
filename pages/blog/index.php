<!DOCTYPE html>
<html>

<head>
    <?php require('../partials/header.php') ?>
    <title>Blog</title>
    <link rel="stylesheet" href="/pages/blog/blog-main.css">
</head>

<body>
    <div class="background">
        <div id="glow-orbs">
            <img id="orb-purple" src="/images/vfx/Purple-Glow.png" alt="">
            <img id="orb-light-blue" src="/images/vfx/Light-Blue-Glow.png" alt="">
            <img id="orb-pink" src="/images/vfx/Pink-Glow.png" alt="">
        </div>

        <?php require('../partials/sub-header.php') ?>

        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <h1 class="typewriter-v2 gradient v1"> &#8203;
                <span>Latest Posts</span>
            </h1>

            <a id="subscribe" href="/rss.xml">
                <h4>Subscribe!</h4>
            </a>

            <div class="recent-body">

                <div class="recent-box">
                    <a id="link" href="">
                        <div class="recent-img-container">
                            <img id="image" class="blog-img" src="/images/LunarFlame-Logo-Simplified.png" alt="blog img">
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

                <div class="recent-box">
                    <a id="link" href="">
                        <div class="recent-img-container">
                            <img id="image" class="blog-img" src="/images/LunarFlame-Logo-Simplified.png" alt="blog img">
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

                <div class="recent-box">
                    <a id="link" href="">
                        <div class="recent-img-container">
                            <img id="image" class="blog-img" src="/images/LunarFlame-Logo-Simplified.png" alt="blog img">
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

            <h1 class="typewriter-v2 gradient v2"> &#8203;
                <span>All Posts</span>
            </h1>

            <div class="blog-body">
                <div class="blog-box" id="blog-box-1">
                    <a id="link" href="">
                        <div class="blog-img-container">
                            <img id="image" class="blog-img" src="/images/LunarFlame-Logo-Simplified.png" alt="blog img">
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
    </div>

    <?php require('../partials/sub-footer.php') ?>
    <?php require('../partials/copyright.php') ?>

    <script src="/javascript/blog.js"></script>
    <?php require('../partials/javascript.php') ?>

</body>

</html>