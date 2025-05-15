<!DOCTYPE html>
<html>

<head>
    <?php require('../partials/header.php') ?>
    <title>Projects</title>
    <link rel="stylesheet" href="pages/projects/projects.css">
</head>

<body>
    <div class="background">
        <div id="glow-orbs">
            <img class="orb" id="blue" src="images/vfx/Blue-Glow.png" alt="">
            <img class="orb" id="purple" src="images/vfx/Purple-Glow.png" alt="">
            <img class="orb" id="pink" src="images/vfx/Pink-Glow.png" alt="">
        </div>

        <?php require('../partials/sub-header.php') ?>

        <section class="page-body">
            <span id="overlay"></span>
            <img id="zoom-in" src="" alt="">

            <main>
                <h1 class="typewriter-v2 gradient" id="v5">&#8203;
                    <span>Projects</span>
                </h1>

                <p class="typewriter-v2">&#8203;
                    <span>A collection of LunarFlame Studios' current projects.</span>
                </p>
            </main>

            <div class="project-links">
                <nav>
                    <ul>
                        <a href="pages/projects/project-leo">
                            <li id="project-leo" class="project">
                                <h2>Project Leo</h2>
                            </li>
                        </a>
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
