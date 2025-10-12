<!DOCTYPE html>
<html>
    <head>
        <?php
            require('/var/www/static.lunarflame.dev/partials/server.php');
            Head::new("Projects", "projects/projects.css");
        ?>
    </head>

    <body>
        <style>
            /* CSS elements that use urls should be placed here to use PHP variables. */
            #project-leo { 
                background-image: 
                    linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), 
                    url("<?=SS?>/PL_SS_5.png"); }
        </style>

        <div class="background">
            <?php
                orbs(BLUE, PURPLE, PINK);
                getHeader();
            ?>

            <section class="page-body">
                <?= OVERLAY; ?>

                <main>
                    <?php
                        typewriteGradient(5, "Projects");
                        typewrite("A collection of LunarFlame Studios' current projects.");
                    ?>
                </main>

                <div class="project-links">
                    <nav>
                        <ul>
                            <a href="<?=PAGE_ROOT?>projects/project-leo">
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
