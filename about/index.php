<!DOCTYPE html>
<html>

<head>
    <?php
        require('../assets/partials/server.php');
        require('about.php');
        Head::new("About Us", "about/about.css");
    ?>
</head>

<body>
    <style>
        #frame-outside {
            width: 70%;
            left: 50%;
        }

        #frame-inside {
            mask-image: url("../<?=VFX?>/ui-frame-2-fill-in.svg");
            mask-size: 90%;
            mask-repeat: no-repeat;

            width: 77%;
            left: 54%;
            opacity: 0.4;
        }


        .dev-box.adrian {
            background-image: url("../<?=DEVS?>/Minimal.jpg");
            right: 7%;
            z-index: 4;
        }

        .dev-box.dan {
            background-image: url("../<?=DEVS?>/Nordic.jpg");
            z-index: 5;
            left: 5%;
            margin: -6% 0;
        }

        .dev-box.speedster {
            background-image: 
                linear-gradient(#72ab948f, #b6ddac83),
                url("../<?=DEVS?>/cosmic_cove.png");

            z-index: 6;
            margin: -3% 0;
            height: 115vw;
        }

        .dev-box.ryan {
            background-image: 
                linear-gradient(#1C48F669, #1D2BF266),
                url("../<?=DEVS?>/deep-blue-sky.png");
            z-index: 7;
            left: 8%;
            margin: -6% 0;
        }
    </style>

    <div class="background">
        <?php
            circuit("v2");
            orbs(LIGHT_BLUE, PINK, PURPLE); 
            getHeader();
        ?>

        <!-- <?= EMPTY_CHAR ?> is an empty ACSII character. -->

        <section class="page-body">
            <?= OVERLAY; ?>
            <h1 style="display: none;">About Us</h1>

            <main>
                <div>
                    <div>
                        <?php 
                            multiTypewriteGradient(2, "About Us", "About Our Team", "About Our Vision");
                            typewrite("Lunarflame Studios is an independent game studio founded in 2023.");
                        ?>
                        <hr>
                    </div>

                    <?php borderImage(screenshots("PL_SS_1.png")) ?>
                </div>

                <?php typewrite("Our studio strives to create games with thought-provoking stories, immersion for countless audiences, foster artistic expression, and have fun while doing it all."); ?>
            </main>

            <hr>
            
            <?php typewriteGradient(2, "Developers"); ?>
            <div class="dev-slideshow">
                <div>
                    <img id="left-arrow" src="<?=VFX?>/Back_Arrow.png" onclick="backDev()" alt="">
                        <img id="left-arrow-circle" src="<?=VFX?>/arrow_circle.png" alt="">

                        <img id="abt-inner-circle" src="<?=VFX?>/Outer Ring.png" alt="">
                        <img id="abt-outer-circle" src="<?=VFX?>/Outer Ring 2.png" alt="">

                    <div id="ui-frame-2">
                            <img id="frame-inside" src="<?=DEVS?>/Minimal.jpg" alt="">
                            <img id="frame-outside" src="<?=VFX?>/UI_Frame_2.png" alt="">

                        <div>
                            <h2>Adrian</h2>
                            <h4>Phantom</h4>
                            <h3>Lead Artist, Lead Programmer</h3>

                            <hr>

                            <p>
                                "I've always been a huge believer in the idea that video games are the future of storytelling.
                                I'm a jRPG fiend, some of my favorite titles include Persona, Xenoblade, and Nier.
                                I began this project because I wanted to create my own story to tell to the world."
                            </p>

                            <div class="profile-pic">
                                    <img src="<?=DEVS?>/adri_pfp.jpg" alt="">
                            </div>

                            <a class="hero-btn button raise" href="https://adrian.lunarflame.dev">Read More</a>
                        </div>
                    </div>

                        <img id="right-arrow" src="<?=VFX?>/Forward_Arrow.png" onclick="forwardDev()" alt="">
                        <img id="right-arrow-circle" src="<?=VFX?>/arrow_circle.png" alt="">
                </div>
            </div>

            <!------------------------------------------------------------------------------------>

            <div class="dev-boxes">
                <?php 
                    devBox("adrian");
                    devBox("dan", "reverse");
                    devBox("speedster");
                    devBox("ryan", "reverse");
                ?>                
            </div>
        </section>
        <?php getFooter(); ?>
    </div>

    <script>
        function forwardDev() { aboutPage.nextDev(1); }
        function backDev() { aboutPage.nextDev(-1); }
    </script>
    <script src="<?=JS?>/about.js"></script>
    <?php endPage(); ?>
</body>

</html>
