<!DOCTYPE html>
<html>

<head>
    <?php require('../../partials/header.php') ?>
    <title>Project Leo (Browser)</title>
    <link rel="stylesheet" href="/pages/projects/projects.css">
</head>

<body>
    <style>
        * { cursor: pointer; }

        .pointer { display: none; }

        .panner { display: none; }

        @media(max-width: 700px) {
            iframe { display: none; }
        }

        @media(min-width: 701px) {
            #not-available { display: none; }
            iframe { padding-bottom: 10%; }
        }
    </style>

    <div class="sub-header-background">
        <?php require('../../partials/sub-header.php') ?>
    </div>

    <div class="page-body-background">
        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <h1 class="typewriter-v2 gradient v1"> &#8203;
                <span>Project Leo</span>
            </h1>
            <!--<img class="title margin-top" src="../images/NeXoSphere.png" alt="Project Leo">-->

            <iframe frameborder="0" src="https://itch.io/embed-upload/11312434?color=051246" allowfullscreen="" width="1280" height="760">
                <a href="https://phantomforce.itch.io/project-leo-v045-webgl">Play Project Leo v0.45.1 (WebGL) on itch.io</a>
            </iframe>

            <h3 id="not-available" class="margin-top">Sorry, this WebGL game is not supported on mobile devices and small screens.
                If you're on desktop, try expanding your screen.</h3>

        </section>
    </div>

    <?php require('../../partials/sub-footer.php') ?>
    <?php require('../../partials/copyright.php') ?>

    <?php require('../../partials/javascript.php') ?>

</body>

</html>