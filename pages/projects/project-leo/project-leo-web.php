<!DOCTYPE html>
<html>

<head>
    <?php
        require('../../partials/server.php');
        Head::new("Project Leo (WebGL)", "pages/projects/projects.css");
    ?>
</head>

<body>
    <style>
        .header-background {
            background-image: linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), url(images/vfx/Blue-Nebula-8-1024x1024-1.png);
            padding: 1% 0;
        }

        .page-body-background {
            background-image: linear-gradient(#00021F, #020131);
        }

        * { cursor: pointer; }

        .pointer { display: none; }

        .panner { display: none; }

        footer {
            background: linear-gradient(rgba(5, 18, 70, 0.7), rgba(59, 4, 70, 0.7)), url(images/vfx/Blue-Nebula-8-1024x1024-1.png);
        }

        h3 {
            color: #9192fc;
            line-height: 4vw;
        }
        
        @media(max-width: 700px) {
            iframe { display: none; }
            #warning { display: none; }
            #not-available { padding: 8% 8%; }
        }

        @media(min-width: 701px) {
            #not-available { display: none; }
            
            #warning {
                margin: 0;
                padding: 0% 5% 4%;
                font-size: 1.8vw;
            }

            iframe { padding-bottom: 10%; }

            .page-body h1 {
                margin: 0;
                padding: 5% 0;
            }
        }
    </style>

    <div class="header-background"><?php getHeader(); ?></div>

    <div class="page-body-background">
        <section class="page-body">
            <?php
                echo OVERLAY;
                typewriteGradient(1, "Project Leo");
            ?>
            <!--<img class="title margin-top" src="../images/NeXoSphere.png" alt="Project Leo">-->

            <h3 id="warning" class="margin-top">Epilepsy Warning: This game contains flashing visuals. If you are photosensitive, please take
                precautions before playing this game.</h3>

            <iframe frameborder="0" src="https://itch.io/embed-upload/12014743?color=051246" allowfullscreen="" width="1280" height="760">
                <a href="https://phantomforce.itch.io/project-leo-v05-webgl">Play Project Leo v0.5.1 (WebGL) on itch.io</a>
            </iframe>

            <h3 id="not-available" class="margin-top">Sorry, this WebGL game is not supported on mobile devices and small screens.
                If you're on desktop, try expanding your screen.</h3>

        </section>
        <?php getFooter(); ?>
    </div>
    <?php endPage(); ?>
</body>

</html>
