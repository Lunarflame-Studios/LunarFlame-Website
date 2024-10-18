<!DOCTYPE html>
<html>

<head>
    <?php require('../partials/header.php') ?>
    <title>Projects</title>
    <link rel="stylesheet" href="/pages/projects/projects.css">
</head>

<body>
    <div class="background">
        <div id="glow-orbs">
            <img id="orb-blue" src="/images/vfx/Blue-Glow.png" alt="">
            <img id="orb-purple" src="/images/vfx/Purple-Glow.png" alt="">
            <img id="orb-pink" src="/images/vfx/Pink-Glow.png" alt="">
        </div>

        <?php require('../partials/sub-header.php') ?>

        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <h1 class="typewriter-v2 gradient v5">&#8203;
                <span>Projects</span>
            </h1>

            <p class="typewriter-v2">&#8203;
                <span>A collection of LunarFlame Studios' current projects.</span>
            </p>

            <div class="project-links">
                <nav>
                    <ul>
                        <a href="/pages/projects/project-leo">
                            <li id="project-leo" class="project">
                                <h2>Project Leo</h2>
                            </li>
                        </a>
                        <br>
                    </ul>
                </nav>
            </div>
        </section>
        
        <?php require('../partials/sub-footer.php') ?>
    </div>

    <?php require('../partials/copyright.php') ?>

    <?php require('../partials/javascript.php') ?>
</body>

</html>