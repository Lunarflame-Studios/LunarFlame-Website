<!DOCTYPE html>
<html>

<head> 
    <?php require('partials/header.php')?>
    <title>Projects</title>
    <link rel="stylesheet" href="projects.css">
</head>

<body>
    <?php require('partials/sub-header.php')?>

    <section class="page-body">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <h1>Projects</h1>
        <p>A collection of LunarFlame Studios' current projects.</p>
        <div class="project-links">
            <nav>
                <ul>
                    <a href="project-leo.php"><li id="project-leo" class="project">
                        <h2>Project Leo</h2>
                    </li></a>
                    <br>
                </ul>
            </nav>
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