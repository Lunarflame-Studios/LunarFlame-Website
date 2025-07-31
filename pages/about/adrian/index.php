<!DOCTYPE html>
<html>
    <head>
        <?php
            // Get URL parameters
            $show = isset($_GET['show']) && $_GET['show'] === 'true';
        
            require('../../partials/server.php');
            require('about-adri.php');
            Head::new("About Adrian", "pages/about/adrian/about-adri.css");
        ?>
    </head>

    <body>
        <div class="adri-background">
            <?php getHeader(); ?>

            <section class="page-body">
                <?php 
                    echo OVERLAY;
                    multiTypewriteGradient(1, "Adrian Cervera", "Phantom");
                    Adrian::mainContent($show);
                    Adrian::skills();
                    typewriteGradient(5, "My Role and Projects");
                ?>

                <div class="adri-projects">
                    <h2>Project Leo</h2>
                    <?php
                        ProjectLeo::artwork($show);
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
