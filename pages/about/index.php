<!DOCTYPE html>
<html>

<head>
    <?php require('../partials/header.php') ?>
    <title>About Us</title>
    <link rel="stylesheet" href="/pages/about/about.css">
</head>

<body>
    <div class="background">
        <?php require('../partials/sub-header.php') ?>

        <!-- &#8203; is an empty ACSII character. -->

        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <div class="about-general">
                <div id="flex-container">
                    <div class="about-general-text">
                        <h1 class="typewrite gradient v3" data-type='["About Us", "About Our Team", "About Our Vision"]' data-period="2000">
                            <span class="wrap">&#8203;</span>
                        </h1>

                        <p class="typewriter-v2"> &#8203;
                            <span>Lunarflame Studios is an independent game studio founded in 2023.</span>
                        </p>
                        <hr>
                    </div>

                    <img class="page-image gallery-img offset-border" src="/images/screenshots/PL_SS_1.png" alt="">
                </div>

                <p id="about-general-bottom" class="typewriter-v2"> &#8203;
                    <span>Our studio strives to create games with thought-provoking stories, immersion for countless audiences,
                        foster artistic expression, and have fun while doing it all.</span>
                </p>
            </div>

            <hr>

            <h1 class="typewriter-v2 gradient v2"> &#8203;
                <span>Developers</span>
            </h1>


            <div class="dev-slideshow">
                <div class="about-devs">
                    <img id="left-arrow" src="/images/vfx/Back_Arrow.png" onclick="backDev()" alt="">
                    <img id="left-arrow-circle" src="/images/vfx/arrow_circle.png" alt="">

                    <img id="abt-inner-circle" src="/images/vfx/Outer Ring.png" alt="">
                    <img id="abt-outer-circle" src="/images/vfx/Outer Ring 2.png" alt="">

                    <div id="ui-frame-2">
                        <img id="frame-inside" src="/images/devs/Minimal.jpg" alt="">
                        <img id="frame-outside" src="/images/vfx/UI_Frame_2.png" alt="">

                        <div class="text-content">
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
                                <img src="/images/devs/adri_pfp.jpg" alt="">
                            </div>

                            <a class="hero-btn button raise" href="#">Read More</a>
                        </div>
                    </div>

                    <img id="right-arrow" src="/images/vfx/Forward_Arrow.png" onclick="forwardDev()" alt="">
                    <img id="right-arrow-circle" src="/images/vfx/arrow_circle.png" alt="">
                </div>
            </div>

            <!------------------------------------------------------------------------------------>

            <div class="dev-boxes">
                <div class="dev-box adri">
                    <div class="margin">
                        <div class="dev-flex-container">
                            <div class="dev-title-text">
                                <h2>Adrian</h2>
                                <h4>Phantom</h4>
                            </div>

                            <div class="profile-pic">
                                <img src="/images/devs/adri_pfp.jpg" alt="">
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
                    <div class="margin">
                        <div class="dev-flex-container">
                            <div class="profile-pic">
                                <img src="/images/devs/dan_pfp.png" alt="">
                            </div>

                            <div class="dev-title-text">
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

                <div class="dev-box pape">
                    <div class="margin">
                        <div class="dev-flex-container">
                            <div class="dev-title-text">
                                <h2>Pape</h2>
                                <h4>Speedster</h4>
                            </div>

                            <!-- TODO: Replace with actual profile picture -->
                            <div class="profile-pic">
                                <img src="/images/LunarFlame-Logo-Simplified.png" alt="">
                            </div>
                        </div>

                        <h3>Assistant Artist, Programmer</h3>

                        <!-- TODO: Replace with real data -->
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
                    <div class="margin">
                        <div class="dev-flex-container">
                            <!-- TODO: Replace with actual profile picture -->
                            <div class="profile-pic">
                                <img src="/images/LunarFlame-Logo-Black.png" alt="">
                            </div>

                            <div class="dev-title-text">
                                <h2>Ryan</h2>
                                <h4>Ry</h4>
                            </div>
                        </div>

                        <h3>Programmer</h3>

                        <!-- TODO: Replace with real data -->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <a class="hero-btn button up" href="#">Read More</a>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <?php require('../partials/sub-footer.php') ?>
    <?php require('../partials/copyright.php') ?>

    <script>
        function forwardDev() {
            nextDev(1);
        }

        function backDev() {
            nextDev(-1);
        }
    </script>
    <script src="/javascript/about.js"></script>

    <?php require('../partials/javascript.php') ?>
</body>

</html>