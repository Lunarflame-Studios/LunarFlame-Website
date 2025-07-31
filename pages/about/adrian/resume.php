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
                    Adrian::mainContent(true);
                    Adrian::skills();
                    typewriteGradient(5, "My Role and Projects");
                ?>

                <div class="adri-projects">
                    <h2>Project Leo</h2>
                    <?php
                        ProjectLeo::artwork(true);
                        ProjectLeo::codeContent();
                    ?>

                    <h2>Website</h2>
                    <?php Website::codeContent(); ?>
                </div>

            </section>
            <?php getFooter(); ?>
        </div>
        <?php endPage(); ?>
    </body>
</html>
