<!DOCTYPE html>
<html>

<head>
    <?php require('pages/partials/header.php') ?>
    <title>Lunarflame Studios</title>
    <script src="javascript/home.js" defer></script>
</head>

<body>
    <section class="home-header">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <nav>
            <a href="index.php"><img src="images/Lunarflame_Logo.png"></a>
            <div class="nav-links header" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="pages/about.php">ABOUT</a></li>
                    <li><a href="pages/projects.php">PROJECTS</a></li>
                    <li><a href="pages/blog.php">BLOG</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1 class="light-effect">Welcome to LunarFlame Studios</h1>
            <p>We strive to create fun and innovative stories.</p>
            <a href="pages/project-leo.php" class="light-effect hero-btn">Play Project Leo</a>
        </div>
    </section>

    <?php require('pages/partials/copyright.php') ?>

    <!------JavaScript for Toggle Menu---->
    <?php require('pages/partials/javascript.php') ?>

</body>

</html>