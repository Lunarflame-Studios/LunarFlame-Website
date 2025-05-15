<!DOCTYPE html>
<html>

<head>
    <?php
        require('../partials/metadata.php');
        echo metadata("Blog");
        echo stylesheet("pages/blog/blog-main.css");
    ?>
</head>

<span>
    <?php require('../partials/constants.php'); ?>
</span>

<body>
    <div class="background">
        <?php 
            echo circuit("v2");
            echo orbs("purple", "light-blue", "pink");
            require('../partials/header.php');
        ?>

        <section class="page-body">
            <?php echo OVERLAY; ?>

            <main>
                <h1 class="typewriter-v2 gradient" id="v1"><?php echo EMPTY_CHAR ?>
                    <span>Latest Posts</span>
                </h1>

                <a id="subscribe" href="rss.xml">
                    <h4>Subscribe!</h4>
                </a>
            </main>

            <div class="recent">
                <?php
                    echo RECENT_POST;
                    echo RECENT_POST;
                    echo RECENT_POST;
                ?>
            </div>

            <hr id="spacing">

            <h1 class="typewriter-v2 gradient" id="v2"><?php echo EMPTY_CHAR ?>
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
        
        <?php require('../partials/footer.php') ?>
    </div>
    <script src="javascript/blog.js"></script>
    <?php 
        require('../partials/copyright.php');
        require('../partials/javascript.php');
    ?>
</body>

</html>
