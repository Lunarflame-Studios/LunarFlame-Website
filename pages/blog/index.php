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
    <?php 
        echo circuit("v2");
        echo orbs("purple", "light-blue", "pink");
        require($partials . 'header.php');
    ?>

    <section class="page-body">
        <?php echo OVERLAY; ?>

        <main>
            <?php echo typewriteGradient(0, "Latest Posts"); ?>

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

        <?php echo typewriteGradient(0, "All Posts"); ?>

        <div class="catalog">
            <?php
                foreach ($allPosts as $post) {
                    echo createBlogPost($post);
                }
            ?>
        </div>
    </section>
    <script src="javascript/blog.js"></script>
    <?php endPage(); ?>
</body>

</html>
