<!DOCTYPE html>
<html>
    <head>
        <?php require('../partials/header.php')?>
        <title>Play Nexopshere v0.4</title>
        <link rel="stylesheet" href="blog-page.css">
        <link rel="stylesheet" href="../blog.css">
    </head>
    <body>
       <section class="sub-header">
            <nav>
                <a href="../../index.html"><img src="../../images/Lunarflame_Logo.png"></a>
                <div class="nav-links header" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="../../index.html">HOME</a></li>
                        <li><a href="../about.html">ABOUT</a></li>
                        <li><a href="../projects.html">PROJECTS</a></li>
                        <li><a href="../blog.html">BLOG</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </section>

        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <div class="blog-title">
                <h1 id="title">Play Nexosphere v0.4</h1>
                <h5 id="category">Nexosphere</h5>
                <hr>
            </div>
            <div class="blog-subInfo">
                <h3 id="author">Phantom</h3>
                <h4 id="date">Apr 08, 2024</h4>
            </div>

            <hr>
            <?php require('../partials/recent-posts.php')?>
        </section>

        <?php require('../partials/sub-footer.php')?>
        <?php require('../partials/copyright.php')?>
    </body>
</html>