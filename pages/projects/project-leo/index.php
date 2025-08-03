<!DOCTYPE html>
<html>

<head>
    <?php
        require('../../partials/server.php');
        Head::new("Project Leo", "pages/projects/project-leo/project-leo.css");
    ?>
</head>

<body>
    <div class="background">
        <?php
            circuit("v1");
            orbs(PINK, BLUE, PURPLE);
            getHeader();
        ?>

        <section class="page-body">
            <?php echo OVERLAY; ?>

            <main>
                <?php
                    typewriteGradient(2, "Project Leo");
                    typewrite("Project Leo is a game under development by LunarFlame Studios.");
                ?>
            </main>

            <?php typewriteGradient(2, "Latest Version") ?>
            <div class="widget-container">
                <iframe class="widget" frameborder="0" src="https://itch.io/embed/2925472?border_width=4&amp;bg_color=0a0a30&amp;fg_color=ffffff&amp;link_color=8a2be2&amp;border_color=da88eb" width="558" height="173">
                    <a href="https://phantomforce.itch.io/project-leo-v05-download">Project Leo v0.5 (Download) by Phantomforce</a>
                </iframe>
                <a href="pages/projects/project-leo/project-leo-web.php">
                    <h3>Or play the Web Version Here!</h3>
                </a>

                <p>Epilepsy Warning: This game contains flashing visuals. If you are photosensitive, please take precautions before playing this game.</p>
            </div>

            <div class="summary">
                <hr>
                <p>"They call it <strong>Nether.</strong> A monster from between worlds who devours all and leaves nothing in its path. It has infected our galaxy, and we must destroy it."</p>
                <?php pageImage(screenshots("NetherSpawn.jpg")); ?>
                <p>Traverse the world of the Lunar City, Horizon. Collect coins and destroy <strong>Nether Spawns.</strong> But be careful; <strong>Nether</strong> is dangerous, and you may find yourself dragged into its world of <strong>darkness</strong> and <strong>corruption...</strong></p>
                <?php carousel(screenshots("PL_SS_2.png"), screenshots("PL_SS_3.png"), screenshots("PL_SS_4.png")); ?>
            </div>
        </section>
        <?php getFooter(); ?>
    </div>
    <?php endPage(); ?>
</body>

</html>
