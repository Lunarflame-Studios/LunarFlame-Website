<!DOCTYPE html>
<html>

<head>
    <?php
        $partials = '../partials/';
        require($partials . 'server.php');
        echo metadata("Projects");
        echo stylesheet("pages/projects/projects.css");
    ?>
</head>

<body>
    <?php
        echo orbs("blue", "purple", "pink");
        require($partials . 'header.php');
    ?>

    <section class="page-body">
        <?php echo OVERLAY; ?>

        <main>
            <?php 
                echo typewriteGradient(0, "Projects");
                echo typewrite("A collection of LunarFlame Studios' current projects.");
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
    <?php endPage(); ?>
</body>

</html>
