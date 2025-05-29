<!DOCTYPE html>
<html>

<head>
    <?php
        $partials = '../partials/';
        require($partials . 'server.php');
        echo metadata("Blog");
        echo stylesheet("pages/blog/blog-main.css");
        $allPosts = parseRSS("../../");
    ?>
</head>

<body>
    <div class="background">
        <?php 
            echo circuit("v2");
            echo orbs("purple", "light-blue", "pink");
            require($partials . 'header.php');
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
                    for ($i = 0; $i < 3; $i++) {
                        echo createBlogPost($allPosts[$i]);
                    }
                ?>
            </div>

            <hr id="spacing">

            <h1 class="typewriter-v2 gradient" id="v2"><?php echo EMPTY_CHAR ?>
                <span>All Posts</span>
            </h1>

            <div class="catalog">
                <?php
                    foreach ($allPosts as $post) {
                        echo createBlogPost($post);
                    }
                ?>
            </div>
            <h1></h1>
        </section>
        
        <?php require($partials . 'footer.php') ?>
    </div>
    <script src="javascript/blog.js"></script>
    <?php 
        require($partials . 'copyright.php');
        require($partials . 'javascript.php');
    ?>
</body>

</html>