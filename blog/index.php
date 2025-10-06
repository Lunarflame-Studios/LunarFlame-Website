<!DOCTYPE html>
<html>

<head>
    <?php
        require('/var/www/static.lunarflame.dev/partials/server.php');
        Head::new("Blog", "blog/blog-main.css");
        $allPosts = Blog::parseRSS();
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
            <?= OVERLAY; ?>

            <main>
                <?php typewriteGradient(1, "Latest Posts"); ?>

                    <a id="subscribe" href="<?=STATIC_URL?>/rss.xml">
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
    <script src="<?=JS?>/blog.js"></script>
    <?php endPage(); ?>
</body>

</html>
