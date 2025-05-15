<!DOCTYPE html>
<html>

<head>
    <?php
        require('../../partials/metadata.php');
        echo metadata("Project Leo (WebGL)");
        echo stylesheet("pages/projects/projects.css");
    ?>
</head>

<span>
    <?php require('../../partials/constants.php'); ?>
</span>

<body>
    <style>
        .sub-header-background {
            background-image: linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), url(images/vfx/Blue-Nebula-8-1024x1024-1.png);
            padding: 1% 2%;
        }

        .sub-header-background nav {
            margin: 0;
        }

        .page-body-background {
            background-image: linear-gradient(#00021F, #020131);
        }

        * { cursor: pointer; }

        .pointer { display: none; }

        .panner { display: none; }

        .sub-footer {
            background: linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), url(images/vfx/Blue-Nebula-8-1024x1024-1.png);
        }
        
        @media(max-width: 700px) {
            iframe { display: none; }
        }

        @media(min-width: 701px) {
            #not-available { display: none; }
            iframe { padding-bottom: 10%; }
            .page-body h1 {
                margin: 0;
                padding: 5% 0;
            }

        }
    </style>

    <div class="sub-header-background">
        <?php require('../../partials/header.php'); ?>
    </div>

    <div class="page-body-background">
        <section class="page-body">
            <?php echo OVERLAY ?>

            <h1 class="typewriter-v2 gradient v1"><?php echo EMPTY_CHAR ?>
                <span>Project Leo</span>
            </h1>
            <!--<img class="title margin-top" src="../images/NeXoSphere.png" alt="Project Leo">-->

            <iframe frameborder="0" src="https://itch.io/embed-upload/12014743?color=051246" allowfullscreen="" width="1280" height="760">
                <a href="https://phantomforce.itch.io/project-leo-v045-webgl">Play Project Leo v0.45.3 (WebGL) on itch.io</a>
            </iframe>

            <h3 id="not-available" class="margin-top">Sorry, this WebGL game is not supported on mobile devices and small screens.
                If you're on desktop, try expanding your screen.</h3>

        </section>
        <?php require('../../partials/footer.php') ?>
    </div>
    <?php
        require('../../partials/copyright.php');
        require('../../partials/javascript.php');
    ?>
</body>

</html>
