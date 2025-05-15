<!DOCTYPE html>
<html>

<head>
    <?php require('../../partials/header.php') ?>
    <title>Project Leo</title>
    <link rel="stylesheet" href="pages/projects/project-leo/project-leo.css">
</head>

<body>
    <div class="background">
        <div>
            <span class="circuit" id="v1"></span>
        </div>

        <div id="glow-orbs">
            <img class="orb" id="pink" src="images/vfx/Pink-Glow.png" alt="">
            <img class="orb" id="blue" src="images/vfx/Blue-Glow.png" alt="">
            <img class="orb" id="purple" src="images/vfx/Purple-Glow.png" alt="">
        </div>

        <?php require('../../partials/sub-header.php') ?>

        <section class="page-body">
            <span id="overlay"></span>
            <img id="zoom-in" src="" alt="">

            <main>
                <h1 class="typewriter-v2 gradient" id="v3">&#8203;
                    <span>Project Leo</span>
                </h1>

                <p class="typewriter-v2">&#8203;
                    <span>Project Leo is a game under development by LunarFlame Studios.</span>
                </p>
            </main>

            <h1 class="typewriter-v2 gradient" id="v2">&#8203;
                <span>Latest Version</span>
            </h1>
            <div class="widget-container">
                <iframe class="widget" frameborder="0" src="https://itch.io/embed/2925472?border_width=4&amp;bg_color=0a0a30&amp;fg_color=ffffff&amp;link_color=8a2be2&amp;border_color=da88eb" width="558" height="173">
                    <a href="https://phantomforce.itch.io/project-leo-v045-download">Project Leo v0.45 (Download) by Phantomforce</a>
                </iframe>
                <a href="pages/projects/project-leo/project-leo-web.php">
                    <h3>Or play the Web Version Here!</h3>
                </a>
            </div>

            <div class="summary">
                <hr>
                <p>"They call it <strong>Nether.</strong> A monster from between worlds who devours all and leaves nothing in its path. It has infected our galaxy, and we must destroy it."</p>
                <img class="page-image interactable" src="images/screenshots/NetherSpawn.jpg" alt="">
                <p>Traverse the world of the Lunar City, Horizon. Collect coins and destroy <strong>Nether Spawns.</strong> But be careful; <strong>Nether</strong> is dangerous, and you may find yourself dragged into its world of <strong>darkness</strong> and <strong>corruption...</strong></p>
                <div class="scroll-container">
                    <img class="interactable" src="images/screenshots/PL_SS_2.png" alt="">
                    <img class="interactable" src="images/screenshots/PL_SS_3.png" alt="">
                    <img class="interactable" src="images/screenshots/PL_SS_4.png" alt="">
                </div>
            </div>
        </section>

        <?php require('../../partials/sub-footer.php') ?>
    </div>
    <?php require('../../partials/copyright.php') ?>

    <?php require('../../partials/javascript.php') ?>
</body>
