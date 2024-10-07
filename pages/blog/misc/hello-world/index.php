<!DOCTYPE html>
<html>

<head>
    <?php require('../../../partials/header.php') ?>
    <title>Hello World - Blog</title>
    <link rel="stylesheet" href="/pages/blog/blog-page.css">
    <link rel="stylesheet" href="/pages/blog/blog-main.css">
</head>

<body>
    <div class="background">
        <?php require('../../../partials/sub-header.php') ?>

        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <div class="blog-title">
                <h1 id="title">Hello World; An Introduction</h1>
                <h5 id="category">Misc.</h5>
                <hr>
            </div>
            <div class="blog-subInfo">
                <h3 id="author">Phantom</h3>
                <h4 id="date">Feb 4, 2024</h4>
                <br>
            </div>
            <div class="blog-pageBody">
                <p id="description">What is LunarFlame Studios? A little bit about us and our goals.</p>
                <br><br>
                <img class="page-image gallery-img" id="image" src="/images/devs/Minimal.jpg" alt="">
                <br><br>

                <p class="margin-top">Our studio began with a simple passion: We wanted to make a great video game. Although our studio began in August 2023, our first project, "Project Leo", began development in December 2021. However, as the project evolved from being developed solo, we felt the need to create a brand to present our work. After some long nights of discussion, we decided on the name "Lunarflame" (We don't actually have any physical studios, it's just part of the name).</p>
                <br><br>
                <p class="margin-top">In the far future, we plan to release games onto Steam. However, having only one project right now in development, we release periodically on itch.io. Please stay tuned for our beta releases!</p>
                <br><br>
            </div>

            <hr>
            <?php require('../../../partials/recent-posts.php') ?>

        </section>
    </div>

    <?php require('../../../partials/sub-footer.php') ?>
    <?php require('../../../partials/copyright.php') ?>

    <?php require('../../../partials/javascript.php') ?>

</body>

</html>