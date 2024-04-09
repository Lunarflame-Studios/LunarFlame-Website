<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="projects.css">
    <script src="javascript/projects.js" defer></script>
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
                    <li class="nexosphere">
                        <a href="nexosphere.php"><img src="../images/NeXoSphere.png" alt="Nexosphere"></a>
                    </li>
                    <li class="moonshadow">
                        <h2>Project Moonshadow</h2>
                    </li><br>
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