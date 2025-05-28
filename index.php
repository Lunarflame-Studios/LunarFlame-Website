<!DOCTYPE html>
<html>

<span>
    <?php
        $partials = 'pages/partials/';
        require($partials . 'server.php');
    ?>
</span>

<head>
    <?php 
        require($partials . 'metadata.php'); 
        echo metadata("Lunarflame Studios");
        echo stylesheet("home.css");
    ?>
</head>

<body>
    <section class="home-header home-background">
        <?php echo OVERLAY; ?>

        <span id="fade-out-sub"></span>

        <?php require($partials . 'header.php'); ?>

        <main>
            <h1 class="light">Welcome to LunarFlame Studios</h1>
            <p>We strive to create fun and innovative stories.</p>
            <a href="pages/projects/project-leo" class="button pulse hero-btn main">Play Project Leo</a>
        </main>

        <div class="center-container">
            <div id="ui-frame">
                <img src="images/vfx/UI_Frame.png" alt="">
            </div>

            <div id="center-circle">
                <div class="circle" id="v1" ><img src="images/vfx/Inner Circle.png" alt=""></div>
                <div class="circle" id="v2" ><img src="images/vfx/Outer Circle.png" alt=""></div>
                <div class="circle" id="v3" ><img src="images/vfx/Outer Circuits.png" alt=""></div>
            </div>

            <div id="outer-circle">
                <div class="circle" id="v4"><img src="images/vfx/Outer Ring.png" alt=""></div>
                <div class="circle" id="v5"><img src="images/vfx/Outer Ring 2.png" alt=""></div>
                <div class="circle" id="v6"><img src="images/vfx/Outer Ring 2.png" alt=""></div>
            </div>
        </div>

        <span id="fade-out-all"></span>
    </section>
    <script src="javascript/home.js" defer></script>
    <?php 
        require($partials . 'copyright.php');
        require($partials . 'javascript.php'); 
    ?>
</body>

</html>
