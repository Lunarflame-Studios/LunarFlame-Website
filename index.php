<!DOCTYPE html>
<html>

<head>
    <?php require('pages/partials/header.php') ?>
    <title>Lunarflame Studios</title>
</head>

<body>
    <section id="home-background" class="home-header">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <nav id="subheader-nav">
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

        <div id="main-content" class="text-box">
            <h1 class="light-effect">Welcome to LunarFlame Studios</h1>
            <p>We strive to create fun and innovative stories.</p>
            <a href="pages/project-leo.php" class="light-effect hero-btn">Play Project Leo</a>
        </div>

        <div class="center-container">
            <div id="ui-frame">
                <img src="images/UI_Frame.png" alt="">
            </div>

            <div id="center-circle">
                <div id="circle-v1" class="circle"><img src="images/Inner Circle.png" alt=""></div>
                <div id="circle-v2" class="circle"><img src="images/Outer Circle.png" alt=""></div>
                <div id="circle-v3" class="circle"><img src="images/Outer Circuits.png" alt=""></div>
            </div>

            <div id="outer-circle">
                <div id="circle-v4" class="circle"><img src="images/Outer Ring.png" alt=""></div>
                <div id="circle-v5" class="circle"><img src="images/Outer Ring 2.png" alt=""></div>
                <div id="circle-v6" class="circle"><img src="images/Outer Ring 2.png" alt=""></div>
            </div>
        </div>

    </section>

    <?php require('pages/partials/copyright.php') ?>

    <script src="javascript/background.js"></script>
    <script src="javascript/home.js" defer></script>
    <?php require('pages/partials/javascript.php') ?>

</body>

</html>