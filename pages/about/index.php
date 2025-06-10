<!DOCTYPE html>
<html>

<head>
    <?php
        require('../partials/server.php');
        metadata("About Us");
        stylesheet("pages/about/about.css");
    ?>
</head>

<span>
    <?php
        function devName($name, $nickname) {
            return <<<HTML
                <div class="dev-name">
                    <h2>$name</h2>
                    <h4>$nickname</h4>
                </div>
            HTML;
        }

        function profilePic($path) {
            return <<<HTML
                <div class="profile-pic">
                    <img src="$path" alt="">
                </div>
            HTML;
        }

        function devBox($name, $order = "normal") {
            $about = explode("\n", file_get_contents($name . "/" . $name . ".about"));
            $elements = $order == "reverse" 
                ? array(profilePic($about[4]), devName($about[0], $about[1]))
                : array(devName($about[0], $about[1]), profilePic($about[4]));

            echo <<<HTML
                <div class="dev-box $name">
                    <div>
                        <div>
                            $elements[0]
                            $elements[1]
                        </div>
                        <h3>$about[2]</h3>
                        <p>$about[3]</p>
                        <a class="hero-btn button {$about[6]}" href="$about[7]">Read More</a>
                    </div>
                </div>
            HTML;
        } 
    ?>
</span>

<body>
    <div class="background">
        <?php
            circuit("v2");
            orbs("light-blue", "pink", "purple"); 
            getHeader();
        ?>

        <!-- <?php echo EMPTY_CHAR ?> is an empty ACSII character. -->

        <section class="page-body">
            <?php echo OVERLAY; ?>

            <h1 style="display: none;">About Us</h1>

            <main>
                <div>
                    <div>
                        <?php multiTypewriteGradient(2, "About Us", "About Our Team", "About Our Vision") ?>

                        <?php typewrite("Lunarflame Studios is an independent game studio founded in 2023."); ?>
                        <hr>
                    </div>

                    <?php borderImage("images/screenshots/PL_SS_1.png") ?>
                </div>

                <?php typewrite("Our studio strives to create games with thought-provoking stories, immersion for countless audiences, foster artistic expression, and have fun while doing it all."); ?>
            </main>

            <hr>
            
            <?php typewriteGradient(2, "Developers"); ?>
            <div class="dev-slideshow">
                <div>
                    <img id="left-arrow" src="images/vfx/Back_Arrow.png" onclick="backDev()" alt="">
                    <img id="left-arrow-circle" src="images/vfx/arrow_circle.png" alt="">

                    <img id="abt-inner-circle" src="images/vfx/Outer Ring.png" alt="">
                    <img id="abt-outer-circle" src="images/vfx/Outer Ring 2.png" alt="">

                    <div id="ui-frame-2">
                        <img id="frame-inside" src="images/devs/Minimal.jpg" alt="">
                        <img id="frame-outside" src="images/vfx/UI_Frame_2.png" alt="">

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
                                <img src="images/devs/adri_pfp.jpg" alt="">
                            </div>

                            <a class="hero-btn button raise" href="#">Read More</a>
                        </div>
                    </div>

                    <img id="right-arrow" src="images/vfx/Forward_Arrow.png" onclick="forwardDev()" alt="">
                    <img id="right-arrow-circle" src="images/vfx/arrow_circle.png" alt="">
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
    <script src="javascript/about.js"></script>
    <?php endPage(); ?>
</body>

</html>
