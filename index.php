<!DOCTYPE html>
<html>

<head>
    <?php 
        require('/var/www/static.lunarflame.dev/partials/server.php');
        Head::new("LunarFlame Studios", "home.css");
    ?>
</head>

<span>
    <?php
        function circle($ver, $src) {
            $vfx = VFX;
            echo <<<HTML
                <div class="circle" id="v{$ver}"><img src="{$vfx}/{$src}.png" alt=""></div>
            HTML;
        }
    ?>
</span>

<body>
    <style>
        .main-content {
            background-image: linear-gradient(black, black), url("<?=VFX?>/Background.png"); 
            z-index: 0;

            min-height: 100vh;
            width: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }
    </style>

    <section class="main-content">
        <?= OVERLAY; ?>

        <span id="fade-out-sub"></span>

        <?php getHeader(); ?>

        <main>
            <h1 class="light">Welcome to LunarFlame Studios</h1>
            <p>We strive to create fun and innovative stories.</p>
            <a href="<?=PAGE_ROOT?>projects/project-leo" class="button pulse hero-btn main">Play Project Leo</a>
        </main>

        <div class="center-container">
            <span id="ui-frame">
                    <img src="<?=VFX?>/UI_Frame.png" alt="">
            </span>

            <div id="center-circle">
                <?php 
                    circle(1, "Inner_Circle");
                    circle(2, "Outer_Circle");
                    circle(3, "Outer_Circuits");
                ?>
            </div>

            <div id="outer-circle">
                <?php 
                    circle(4, "Outer_Ring");
                    circle(5, "Outer_Ring_2");
                    circle(6, "Outer_Ring_2");
                ?>
            </div>
        </div>

        <span id="fade-out-all"></span>
    </section>
    <script src="<?=JS?>/home.js" defer></script>
    <?php endPage(); ?>
</body>

</html>
