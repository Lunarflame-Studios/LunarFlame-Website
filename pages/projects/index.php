<!DOCTYPE html>
<html>

<head>
    <?php
        require('../partials/server.php');
        metadata("Projects");
        stylesheet("pages/projects/projects.css");
    ?>
</head>

<body>
    <div class="background">
        <?php
            orbs("blue", "purple", "pink");
            getHeader();
        ?>

        <section class="page-body">
            <?php echo OVERLAY; ?>

            <main>
                <?php
                    typewriteGradient(5, "Projects");
                    typewrite("A collection of LunarFlame Studios' current projects.");
                ?>
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
        <?php getFooter(); ?>
    </div>
    <?php endPage(); ?>
</body>

</html>
