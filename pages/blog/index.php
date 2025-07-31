<!DOCTYPE html>
<html>

<head>
    <?php
        require('../partials/server.php');
        Head::new("Blog", "pages/blog/blog-main.css");
        $allPosts = Blog::parseRSS("../../");
    ?>
</head>

<body>
    <div class="background">
        <?php 
            circuit("v2");
            orbs(PURPLE, LIGHT_BLUE, PINK);
            getHeader();
        ?>

        <section class="page-body">
            <?php echo OVERLAY; ?>

            <main>
                <?php typewriteGradient(1, "Latest Posts"); ?>

                <a id="subscribe" href="rss.xml">
                    <h4>Subscribe!</h4>
                </a>
            </main>

            <div class="recent">
                <?php
                    for ($i = 0; $i < 3; $i++) {
                        Blog::createPostHTML($allPosts[$i]);
                    }
                ?>
            </div>

            <hr id="spacing">

            <?php typewriteGradient(2, "All Posts"); ?>

            <div class="catalog">
                <?php
                    foreach ($allPosts as $post) {
                        Blog::createPostHTML($post);
                    }
                ?>
            </div>
        </section>
        
        <?php getFooter(); ?>
    </div>
    <script src="javascript/blog.js"></script>
    <?php endPage(); ?>
</body>

</html>
