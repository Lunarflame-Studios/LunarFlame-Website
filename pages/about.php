<!DOCTYPE html>
<html>

<head>
    <?php require('partials/header.php')?>
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <?php require('partials/sub-header.php')?>

    <section class="page-body">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <div class="about-general">
            <h1 class="gradient blur v1">About Us</h1>
            <p>Lunarflame Studios is an independent game studio founded in 2023.</p>
            <img class="page-image gallery-img" src="../images/PL_SS_1.png" alt="">
            <p>Our studio strives to create games with thought-provoking stories, immersion for countless audiences,
                foster artistic expression, and have fun while doing it all.</p>
        </div>
        <hr>
        <h1 class="gradient blur v2">Developers</h1><br><br>
        <div class="about-devs">
            <div class="about-dev phantom">
                <div class="text-group">
                    <hr class="hr-odd">
                    <h2>Adrian</h2>
                    <h4>Phantom</h4>
                    <h5>Lead Artist, Lead Programmer</h5>
                    <p>"I've always been a huge believer in the idea that video games are the future of storytelling. 
                        I'm a jRPG fiend, some of my favorite titles include Persona, Xenoblade, and Nier.
                        I began this project because I wanted to create my own story to tell to the world."</p>
                    <!--<a href="" class="hero-btn">Read More</a>-->
                </div>
                <div class="pfp-phantom"><img src="../images/adri_pfp.jpg" alt=""></div>
            </div>
            <div class="about-dev kapeepa">
                <div class="text-group">
                    <hr class="hr-even">
                    <h2>Daniel</h2>
                    <h4>Kapeepa</h4>
                    <h5>Lead Musician, Programmer</h5>
                    <p>
                        "Certified learner. I joined the project to get good at programming and music stuff. 
                        Like Adrian, I do love me some video games---so much we can learn from them. PM sleeper agent."
                    </p>
                    <!--<a href="" class="hero-btn">Read More</a>-->
                </div>
                <div class="pfp-kapeepa"><img src="../images/dan_pfp.png" alt=""></div>
            </div>
            <br><br>
        </div>
    </section>

    <?php require('partials/sub-footer.php')?>
    <?php require('partials/copyright.php')?>

    <?php require('partials/javascript.php')?>
</body>

</html>