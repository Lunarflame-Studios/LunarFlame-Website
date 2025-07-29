<!DOCTYPE html>
<html>
    <head>
        <?php
            require('../../partials/server.php');
            require('about-adri.php');
            echo metadata("About Adrian - Lunarflame Studios");
            echo stylesheet("pages/about/adrian/about-adri.css");
        ?>
    </head>

    <body>
        <div class="adri-background">
            <?php getHeader(); ?>

            <section class="page-body">
                <?php 
                    echo OVERLAY;
                    typewriteGradient(1, "Adrian Cervera");
                ?>

                <main>
                    <?php mainContent(); ?>
                    <a href=""><h3>View My Resume</h3></a>
                </main>

                <?php 
                    adriSkills();
                    typewriteGradient(5, "My Role and Projects");
                ?>

                <div class="adri-projects">
                    <h2>Project Leo</h2>
                    <div class="artwork">
                        <?php
                            loadWorlds();
                            loadChars();
                            loadMisc();
                            loadDev();
                        ?>
                    </div>

                    <div class="code">
                        <h3 style="color: #C8E9EF;">Code</h3>
                        <div>

                        </div>
                    </div>
                </div>

            </section>
            <?php getFooter(); ?>
        </div>
        <?php endPage(); ?>
    </body>
</html>
