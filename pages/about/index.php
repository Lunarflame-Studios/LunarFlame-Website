<!DOCTYPE html>
<html>

<head>
    <?php require('../partials/header.php')?>
    <title>About Us</title>
    <link rel="stylesheet" href="about/about.css">
</head>

<body>
    <?php require('../partials/sub-header.php')?>

    <!-- &#8203; is an empty ACSII character. -->

    <section class="page-body">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <div class="about-general">
            <h1 class="typewrite gradient v3" data-type='["About Us", "About Our Team", "About Our Vision"]' data-period="2000">
                <span class="wrap">&#8203;</span>
            </h1>

            <p class="typewriter-v2"> &#8203; 
                <span>Lunarflame Studios is an independent game studio founded in 2023.</span>
            </p>

            <img class="page-image gallery-img offset-border" src="../images/PL_SS_1.png" alt="">

            <p class="typewriter-v2"> &#8203;
                <span>Our studio strives to create games with thought-provoking stories, immersion for countless audiences,
                foster artistic expression, and have fun while doing it all.</span>
            </p>
        </div>

        <hr>

        <h1 class="typewriter-v2 gradient v2"> &#8203;
            <span>Developers</span>
        </h1>

        <br><br>

        <div class="about-devs">
            <div class="about-dev phantom">
                <div class="text-group">
                    <hr class="hr-odd">

                    <h2 class="typewriter-v2"> &#8203;
                        <span>Adrian</span>
                    </h2>

                    <h4 class="typewriter-v2"> &#8203;
                        <span>Phantom</span>
                    </h4>

                    <h5 class="typewriter-v2"> &#8203;
                        <span>Lead Artist, Lead Programmer</span>
                    </h5>

                    <p>"I've always been a huge believer in the idea that video games are the future of storytelling. 
                        I'm a jRPG fiend, some of my favorite titles include Persona, Xenoblade, and Nier.
                        I began this project because I wanted to create my own story to tell to the world."</p>
                    <a href="" class="hero-btn">Read More</a>
                </div>
                <div class="pfp-phantom"><img src="../images/adri_pfp.jpg" alt=""></div>
            </div>
            <div class="about-dev kapeepa">
                <div class="text-group">
                    <hr class="hr-even">

                    <h2 class="typewriter-v2"> &#8203;
                        <span>Daniel</span>
                    </h2>

                    <h4 class="typewriter-v2"> &#8203;
                        <span>Kapeepa</span>
                    </h4>

                    <h5 class="typewriter-v2"> &#8203;
                        <span>Lead Musician, Programmer</span>
                    </h5>

                    <p>
                        "Certified learner. I joined the project to get good at programming and music stuff. 
                        Like Adrian, I do love me some video games---so much we can learn from them. PM sleeper agent (!)"
                    </p>
                    <a href="" class="hero-btn">Read More</a>
                </div>
                <div class="pfp-kapeepa"><img src="../images/dan_pfp.png" alt=""></div>
            </div>
            <br><br>
        </div>
    </section>

    <?php require('../partials/sub-footer.php')?>
    <?php require('../partials/copyright.php')?>

    <?php require('../partials/javascript.php')?>
</body>

</html>