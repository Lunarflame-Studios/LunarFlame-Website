<!DOCTYPE html>
<html>

<head>
    <?php require('partials/header.php') ?>
    <title>Project Leo (Browser)</title>
    <link rel="stylesheet" href="projects.css">
</head>

<body>
    <?php require('partials/sub-header.php')?>

    <section class="page-body">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <img class="title margin-top" src="../images/NeXoSphere.png" alt="Project Leo">

        <iframe frameborder="0" src="https://itch.io/embed-upload/9815481?color=051246" allowfullscreen="" width="960" height="620">
            <a href="https://phantomforce.itch.io/project-leo-v04-webgl">Play Project Leo v0.4.2 (WebGL) on itch.io</a>
        </iframe>
        <h3 id="not-available" class="margin-top">Sorry, this WebGL game is not supported on mobile devices and small screens. 
            If you're on desktop, try expanding your screen.</h3>
            
        <style>
            @media(max-width: 700px) {
                iframe { display: none; }
            }

            @media(min-width: 701px) {
                h3 { display: none; }
            }
        </style>
        <br><br>
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