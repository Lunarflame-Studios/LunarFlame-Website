<!DOCTYPE html>
<html>

<head>
    <?php 
        $partials = 'pages/partials/';
        require($partials . 'server.php');
        echo metadata("Lunarflame Studios");
        echo stylesheet("home.css");
    ?>
</head>

<span>
    <?php
        function circle($ver, $img) {
            return <<<HTML
                <span class="circle" id="v$ver"><img src="images/vfx/{$img}.png" alt=""></span>
            HTML;
        }
    ?>
</span>

<body>
    <span class="main-content">
        <?php echo OVERLAY; ?>

        <span id="fade-out-sub"></span>

        <?php require($partials . 'header.php'); ?>

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
                    echo circle(1, "Inner Circle");
                    echo circle(2, "Outer Circle");
                    echo circle(3, "Outer Circuits");
                ?>
            </div>

            <div id="outer-circle">
                <?php
                    echo circle(4, "Outer Ring");
                    echo circle(5, "Outer Ring 2");
                    echo circle(6, "Outer Ring 2");
                ?>
            </div>
        </div>

        <span id="fade-out-all"></span>
    </span>
    <script src="javascript/home.js" defer></script>
    <?php 
        require($partials . 'copyright.php');
        require($partials . 'javascript.php'); 
    ?>
</body>

</html>
