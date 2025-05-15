<!DOCTYPE html>
<html>

<head>
    <?php 
        require('../partials/metadata.php');
        echo metadata("About Us");
        echo stylesheet("pages/about/about.css");
    ?>
</head>

<span>
    <?php require('../partials/constants.php') ?>
</span>

<body>
    <div class="background">
        <?php 
            echo circuit("v2");
            echo orbs("light-blue", "pink", "purple"); 

            require('../partials/header.php');
        ?>

        <!-- <?php echo EMPTY_CHAR ?> is an empty ACSII character. -->

        <section class="page-body">
            <?php echo OVERLAY; ?>

            <h1 style="display: none;">About Us</h1>

            <main>
                <div>
                    <div>
                        <h1 class="typewrite gradient" id="v2" data-type='["About Us", "About Our Team", "About Our Vision"]' data-period="2000">
                            <span class="wrap"><?php echo EMPTY_CHAR ?></span>
                        </h1>

                        <p class="typewriter-v2"><?php echo EMPTY_CHAR ?>
                            <span>Lunarflame Studios is an independent game studio founded in 2023.</span>
                        </p>
                        <hr>
                    </div>

                    <img class="page-image interactable offset-border" id="light-blue" src="images/screenshots/PL_SS_1.png" alt="">
                </div>

                <p class="typewriter-v2"><?php echo EMPTY_CHAR ?>
                    <span>Our studio strives to create games with thought-provoking stories, immersion for countless audiences,
                        foster artistic expression, and have fun while doing it all.</span>
                </p>
            </main>

            <hr>

            <h1 class="typewriter-v2 gradient" id="v2"><?php echo EMPTY_CHAR ?>
                <span>Developers</span>
            </h1>

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
                
                <div class="dev-box adri">
                    <div>
                        <div>
                            <div class="dev-name">
                                <h2>Adrian</h2>
                                <h4>Phantom</h4>
                            </div>

                            <div class="profile-pic">
                                <img src="images/devs/adri_pfp.jpg" alt="">
                            </div>
                        </div>

                        <h3>Lead Artist, Lead Programmer</h3>

                        <p>
                            "I've always been a huge believer in the idea that video games are the future of storytelling.
                            I'm a jRPG fiend, some of my favorite titles include Persona, Xenoblade, and Nier.
                            I began this project because I wanted to create my own story to tell to the world."
                        </p>

                        <a class="hero-btn button raise" href="#">Read More</a>
                    </div>
                </div>

                <div class="dev-box dan">
                    <div>
                        <div>
                            <div class="profile-pic">
                                <img src="images/devs/dan_pfp.png" alt="">
                            </div>

                            <div class="dev-name">
                                <h2>Daniel</h2>
                                <h4>Kapeepa</h4>
                            </div>
                        </div>

                        <h3>Lead Musician, Programmer</h3>

                        <p>
                            "Certified learner. I joined the project to get good at programming and music stuff.
                            Like Adrian, I do love me some video games---so much we can learn from them. PM sleeper agent (!)",
                        </p>

                        <a class="hero-btn button offset" href="#">Read More</a>
                    </div>
                </div>

                <div class="dev-box speedster">
                    <div>
                        <div>
                            <div class="dev-name">
                                <h2>Speedster101</h2>
                                <h4><?php echo EMPTY_CHAR ?></h4>
                            </div>

                            <div class="profile-pic">
                                <img src="images/devs/speedster_pfp.jpg" alt="">
                            </div>
                        </div>

                        <h3>Assistant Artist, Programmer</h3>

                        <p>
                            "Growing up on Nintendo consoles and Saturday Morning Cartoons, I've always maintained a love for art and gaming and found 
                            joining the Lunarflame team the perfect expression of this interest. 
                            Whether it was learning C# or getting to gripes with Unity (I love collision detection), 
                            I appreciate how much opportunity being on the team gives me to learn new things and push my ambition and work ethic."
                        </p>

                        <a class="hero-btn button slide" href="#">Read More</a>
                    </div>
                </div>

                <div class="dev-box ryan">
                    <div>
                        <div>
                            <div class="profile-pic">
                                <img src="images/devs/ryan_pfp.jpg" alt="">
                            </div>

                            <div class="dev-name">
                                <h2>Ryan</h2>
                                <h4>Ry</h4>
                            </div>
                        </div>

                        <h3>Programmer</h3>

                        <p>
                            "I've always been an avid gamer and fascinated by the design and technical aspects behind it; 
                            there was no better project than this one for me to refine my technical skills and express myself in a world of our design."
                        </p>

                        <a class="hero-btn button up" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <?php require('../partials/footer.php'); ?>
    </div>

    <script>
        function forwardDev() { aboutPage.nextDev(1); }
        function backDev() { aboutPage.nextDev(-1); }
    </script>
    <script src="javascript/about.js"></script>

    <?php
        require('../partials/copyright.php');
        require('../partials/javascript.php');
    ?>
</body>

</html>