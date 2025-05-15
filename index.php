<!DOCTYPE html>
<html>

<head>
    <?php require('pages/partials/header.php') ?>
    <link rel="stylesheet" href="home.css">
    <title>Lunarflame Studios</title>
</head>

<body>
    <section class="home-header home-background">
        <span id="overlay"></span>
        <img id="zoom-in" src="" alt="">

        <span id="fade-out-sub"></span>

        <nav>
            <a href=""><img src="images/Lunarflame_Logo.png"></a>
            <div class="nav-links header">
                <i class="bx bx-x" onclick="hideMenu()"></i>
                <ul>
                    <li><a class="hover" id="light-blue" href="">HOME</a></li>
                    <li><a class="hover" id="purple" href="pages/about">ABOUT</a></li>
                    <li><a class="hover" id="blue" href="pages/projects">PROJECTS</a></li>
                    <li><a class="hover" id="pink" href="pages/blog">BLOG</a></li>
                </ul>
            </div>
            <i class="bx bx-menu" onclick="showMenu()"></i>
        </nav>

        <main>
            <h1 class="light">Welcome to LunarFlame Studios</h1>
            <p>We strive to create fun and innovative stories.</p>
            <a href="pages/projects/project-leo" class="button pulse hero-btn main">Play Project Leo</a>
        </main>

        <div class="center-container">
            <div id="ui-frame">
                <img src="images/vfx/UI_Frame.png" alt="">
            </div>

            <div id="center-circle">
                <div class="circle" id="v1" ><img src="images/vfx/Inner Circle.png" alt=""></div>
                <div class="circle" id="v2" ><img src="images/vfx/Outer Circle.png" alt=""></div>
                <div class="circle" id="v3" ><img src="images/vfx/Outer Circuits.png" alt=""></div>
            </div>

            <div id="outer-circle">
                <div class="circle" id="v4"><img src="images/vfx/Outer Ring.png" alt=""></div>
                <div class="circle" id="v5"><img src="images/vfx/Outer Ring 2.png" alt=""></div>
                <div class="circle" id="v6"><img src="images/vfx/Outer Ring 2.png" alt=""></div>
            </div>
        </div>

        <span id="fade-out-all"></span>

    </section>

    <?php require('pages/partials/copyright.php') ?>

    <script src="javascript/home.js" defer></script>
    <?php require('pages/partials/javascript.php') ?>

</body>

</html>
