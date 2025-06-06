<!DOCTYPE html>
<html>

<head>
    <?php
        $partials = '../../partials/';
        require($partials . 'server.php');
        echo metadata("Project Leo");
        echo stylesheet("pages/projects/project-leo/project-leo.css");
    ?>
</head>

<body>
    <?php
        echo circuit("v1");
        echo orbs("pink", "blue", "purple");
        require($partials . 'header.php');
    ?>

    <section class="page-body">
        <?php echo OVERLAY; ?>

        <main>
            <?php 
                echo typewriteGradient(0, "Project Leo");
                echo typewrite("Project Leo is a game under development by LunarFlame Studios.");
            ?>
        </main>

        <?php echo typewriteGradient(0, "Latest Version"); ?>
        <div class="widget-container">
            <iframe class="widget" frameborder="0" src="https://itch.io/embed/2925472?border_width=4&amp;bg_color=0a0a30&amp;fg_color=ffffff&amp;link_color=8a2be2&amp;border_color=da88eb" width="558" height="173">
                <a href="https://phantomforce.itch.io/project-leo-v045-download">Project Leo v0.45 (Download) by Phantomforce</a>
            </iframe>
            <a href="pages/projects/project-leo/project-leo-web.php">
                <h3>Or play the Web Version Here!</h3>
            </a>
        </div>

        <div class="summary">
            <hr>
            <p>"They call it <strong>Nether.</strong> A monster from between worlds who devours all and leaves nothing in its path. It has infected our galaxy, and we must destroy it."</p>
            <img class="page-image interactable" src="images/screenshots/NetherSpawn.jpg" alt="">
            <p>Traverse the world of the Lunar City, Horizon. Collect coins and destroy <strong>Nether Spawns.</strong> But be careful; <strong>Nether</strong> is dangerous, and you may find yourself dragged into its world of <strong>darkness</strong> and <strong>corruption...</strong></p>
            <div class="scroll-container">
                <img class="interactable" src="images/screenshots/PL_SS_2.png" alt="">
                <img class="interactable" src="images/screenshots/PL_SS_3.png" alt="">
                <img class="interactable" src="images/screenshots/PL_SS_4.png" alt="">
            </div>
        </div>
    </section>
    <?php endPage(); ?>
</body>

</html>
