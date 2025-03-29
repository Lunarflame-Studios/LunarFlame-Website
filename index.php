<!DOCTYPE html>
<html>

<head>
    <?php require('pages/partials/header.php') ?>
    <title>Lunarflame Studios</title>
</head>

<body>
    <section class="home-header home-background">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <div id="fade-out-sub"></div>

        <nav id="home-header-nav">
            <a href=""><img src="images/Lunarflame_Logo.png"></a>
            <div class="nav-links header" id="navLinks">
                <i class="bx bx-x" onclick="hideMenu()"></i>
                <ul>
                    <li><a class="hover-effect light-blue" href="">HOME</a></li>
                    <li><a class="hover-effect purple" href="pages/about">ABOUT</a></li>
                    <li><a class="hover-effect blue" href="pages/projects">PROJECTS</a></li>
                    <li><a class="hover-effect pink" href="pages/blog">BLOG</a></li>
                </ul>
            </div>
            <i class="bx bx-menu" onclick="showMenu()"></i>
        </nav>

        <div id="main-content" class="text-box">
            <h1 class="light-effect">Welcome to LunarFlame Studios</h1>
            <p>We strive to create fun and innovative stories.</p>
            <a href="pages/projects/project-leo" class="button pulse hero-btn main">Play Project Leo</a>
        </div>

        <div class="center-container">
            <div id="ui-frame">
                <img src="images/vfx/UI_Frame.png" alt="">
            </div>

            <div id="center-circle">
                <div id="circle-v1" class="circle"><img src="images/vfx/Inner Circle.png" alt=""></div>
                <div id="circle-v2" class="circle"><img src="images/vfx/Outer Circle.png" alt=""></div>
                <div id="circle-v3" class="circle"><img src="images/vfx/Outer Circuits.png" alt=""></div>
            </div>

            <div id="outer-circle">
                <div id="circle-v4" class="circle"><img src="images/vfx/Outer Ring.png" alt=""></div>
                <div id="circle-v5" class="circle"><img src="images/vfx/Outer Ring 2.png" alt=""></div>
                <div id="circle-v6" class="circle"><img src="images/vfx/Outer Ring 2.png" alt=""></div>
            </div>
        </div>

        <div id="fade-out-all"></div>

    </section>

    <?php require('pages/partials/copyright.php') ?>

    <script src="javascript/home.js" defer></script>
    <?php require('pages/partials/javascript.php') ?>

</body>

</html>
