<!DOCTYPE html>
<html>

<head>
    <?php 
        require('pages/partials/server.php');
        metadata("Lunarflame Studios");
        stylesheet("home.css");
    ?>
</head>

<span>
    <?php
        function circle($ver, $src) {
            echo <<<HTML
                <div class="circle" id="v{$ver}"><img src="images/vfx/{$src}.png" alt=""></div>
            HTML;
        }
    ?>
</span>

<body>
    <section class="main-content">
        <?php echo OVERLAY; ?>

        <span id="fade-out-sub"></span>

        <?php getHeader(); ?>

        <main>
            <h1 class="light">Welcome to LunarFlame Studios</h1>
            <p>We strive to create fun and innovative stories.</p>
            <a href="pages/projects/project-leo" class="button pulse hero-btn main">Play Project Leo</a>
        </main>

        <div class="center-container">
            <span id="ui-frame">
                <img src="images/vfx/UI_Frame.png" alt="">
            </span>

            <div id="center-circle">
                <?php 
                    circle(1, "Inner Circle");
                    circle(2, "Outer Circle");
                    circle(3, "Outer Circuits");
                ?>
            </div>

            <div id="outer-circle">
                <?php 
                    circle(4, "Outer Ring");
                    circle(5, "Outer Ring 2");
                    circle(6, "Outer Ring 2");
                ?>
            </div>
        </div>

        <span id="fade-out-all"></span>
    </section>
    <script src="javascript/home.js" defer></script>
    <?php endPage(); ?>
</body>

</html>
