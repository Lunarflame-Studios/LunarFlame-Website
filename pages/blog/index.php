<!DOCTYPE html>
<html>

<head>
    <?php
        require('../partials/server.php');
        metadata("Blog");
        stylesheet("pages/blog/blog-main.css");
        $allPosts = parseRSS("../../");
    ?>
</head>

<body>
    <div class="background">
        <?php 
            circuit("v2");
            orbs("purple", "light-blue", "pink");
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
                        createBlogPost($allPosts[$i]);
                    }
                ?>
            </div>

            <hr id="spacing">

            <?php typewriteGradient(2, "All Posts"); ?>

            <div class="catalog">
                <?php
                    foreach ($allPosts as $post) {
                        createBlogPost($post);
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
