<!DOCTYPE html>
<html>

<head>
    <?php
        $partials = '../../../partials/';
        require($partials . 'server.php');
        $currentPost = getPost("Hello World; An Introduction");
        echo $currentPost->createHead();
    ?>
</head>

<body>
    <?php require($partials . 'header.php'); ?>

    <section class="page-body">
        <?php echo beginBlogPage($currentPost); ?>

        <div class="blog-pageBody">
            <?php echo $currentPost->createDescription(); ?>

            <p>Our studio began with a simple passion: We wanted to make a great video game. Although our studio began in August 2023, our first project, "Project Leo", began development in December 2021. However, as the project evolved from being developed solo, we felt the need to create a brand to present our work. After some long nights of discussion, we decided on the name "Lunarflame" (We don't actually have any physical studios, it's just part of the name).</p>
            <p>In the far future, we plan to release games onto Steam. However, having only one project right now in development, we release periodically on itch.io. Please stay tuned for our beta releases!</p>
        </div>
        <hr class="blog-end">
        <?php require($partials . 'recent-posts.php'); ?>
    </section>
    <?php endPage(); ?>
</body>

</html>
