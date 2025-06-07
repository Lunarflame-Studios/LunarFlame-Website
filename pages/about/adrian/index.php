<!DOCTYPE html>
<html>
    <head>
        <?php
            $partials = '../../partials/';
            require($partials . 'server.php');
            echo metadata("About Adrian - Lunarflame Studios");
            echo stylesheet("pages/about/adrian/about-adri.css");
        ?>
    </head>

    <span>
        <?php
            
        ?>
    </span>

    <body>
        <div class="adri-background">
            <?php require($partials . 'header.php') ?>

            <section class="page-body">
                <?php echo OVERLAY; ?>

                <h1>Adrian Cervera</h1>
                <main>
                    <div id="profile-pic">
                        <img id="adri-pfp" src="images/devs/adri_pfp.jpg">
                    </div>
                    <div id="adri-general-box">
                        <p>Hi! I'm a Computer Science Major at WPI. I like playing video games and making video games!</p>
                        <div class="reverse social-links" id="socialLinks">
                            <ul>
                                <li>
                                    <a class="icon github" href="https://github.com/Lunarflame-Studios" target="_blank">
                                        <i class="bx bxl-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="icon discord" href="https://discord.gg/khKCJyjKSm" target="_blank">
                                        <i class="bx bxl-discord-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="icon instagram" href="https://www.instagram.com/phantomforce26/" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="icon soundcloud" href="https://soundcloud.com/k4p33p4" target="_blank">
                                        <i class="bx bxl-soundcloud"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </main>


                <h1>Tools and Languages</h1>
                <div class="adri-skills">
                    <div class="icon-row">
                        <span class="icon"><i class=""></i></span>
                    </div>
                </div>
            </section>

            <?php require($partials . 'footer.php'); ?>
        </div>
        <?php 
            require($partials . 'copyright.php');
            require($partials . 'javascript.php'); 
        ?>
    </body>
</html>
