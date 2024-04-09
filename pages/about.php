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
            <h1>About Us</h1>
            <p>Lunarflame Studios is an independent game studio founded in 2023.</p>
            <img class="page-image gallery-img" src="../images/Nexo_SS_1.png" alt="">
            <p>Our studio strives to create games with thought-provoking stories, immersion for countless audiences,
                foster artistic expression, and have fun while doing it all.</p>
        </div>
        <hr>
        <h1>Developers</h1><br><br>
        <div class="about-devs">
            <div class="about-dev phantom">
                <div class="text-group">
                    <hr class="hr-odd">
                    <h2>Adrian</h2>
                    <h4>Phantom</h4>
                    <h5>Lead Artist, Lead Programmer</h5>
                    <h3>"Video Games are more than just entertainment. They're a form of art."</h3>
                    <p>When I began my first project in 2021, I was firmly grounded in this principle. My goal is to
                        create games with inspiring stories.</p>
                    <a href="" class="hero-btn">Read More</a>
                </div>
                <div class="pfp-phantom"><img src="../images/adri_pfp.jpg" alt=""></div>
            </div>
            <div class="about-dev kapeepa">
                <div class="text-group">
                    <hr class="hr-even">
                    <h2>Daniel</h2>
                    <h4>Kapeepa</h4>
                    <h5>Lead Musician, Programmer</h5>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
                    <a href="" class="hero-btn">Read More</a>
                </div>
                <div class="pfp-kapeepa"><img src="../images/dan_pfp.png" alt=""></div>
            </div>
            <br><br>
        </div>
    </section>

    <?php require('partials/sub-footer.php')?>

    <?php require('partials/copyright.php')?>

    <script src="../javascript/images.js"></script>
    <script>
        var navLinks = document.getElementById("navLinks");
        var socialLinks = document.getElementById("socialLinks");
        function showMenu() {
            navLinks.style.right = "0";
            socialLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
            socialLinks.style.right = "-200px";
        }
    </script>
</body>

</html>