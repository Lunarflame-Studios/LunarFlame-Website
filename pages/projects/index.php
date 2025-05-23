<!DOCTYPE html>
<html>

<head>
    <?php 
        require('../partials/metadata.php');
        echo metadata("Projects");
        echo stylesheet("pages/projects/projects.css");
    ?>
</head>

<span>
    <?php require('../partials/constants.php'); ?>
</span>

<body>
    <div class="background">
        <?php
            echo orbs("blue", "purple", "pink");

            require('../partials/header.php');
        ?>

        <section class="page-body">
            <?php echo OVERLAY; ?>

            <main>
                <h1 class="typewriter-v2 gradient" id="v5"><?php echo EMPTY_CHAR ?>
                    <span>Projects</span>
                </h1>

                <p class="typewriter-v2"><?php echo EMPTY_CHAR ?>
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
        
        <?php require('../partials/footer.php'); ?>
    </div>
    <?php 
        require('../partials/copyright.php');
        require('../partials/javascript.php');
    ?>
</body>

</html>