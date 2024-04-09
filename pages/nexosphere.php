<!DOCTYPE html>
<html>
<head>
    <?php require('partials/header.php')?>
    <title>Nexosphere</title>
    <link rel="stylesheet" href="projects.css">
</head>
<body>
    <?php require('partials/sub-header.php')?>

    <section class="page-body">
        <div id="overlay"></div>
        <img id="zoom-in" src="" alt="">

        <img class="title margin-top" src="../images/NeXoSphere.png" alt="Nexosphere">
        <p>Nexosphere, codenamed "Project Leo", is a game under development by LunarFlame Studios.</p>

        <h1>Latest Version</h1>
        <div class="widget-container">
            <iframe class="widget" frameborder="0" 
                src="https://itch.io/embed/2535297?linkback=true&amp;border_width=4&amp;bg_color=0a0a30&amp;fg_color=ffffff&amp;link_color=8a2be2&amp;border_color=ed88ff" 
                width="558" height="173"><a href="https://phantomforce.itch.io/project-leo-v04">Project Leo v0.4.2 (Download) by Phantomforce</a></iframe>
                <a href="nexosphere-web.php"><h3>Or play the Web Version Here!</h3></a>
        </div>

        <div class="nexosphere-summary">
            <hr>
            <p class="summary">"They call it <strong>Nether.</strong> A monster from between worlds who devours all and leaves nothing in its path. It has infected our galaxy, and we must destroy it."</p>
            <img class="page-image gallery-img" src="../images/NetherSpawn.jpg" alt="">
            <p class="summary">Traverse the world of the Lunar City, Horizon. Collect coins and destroy <strong>Nether Spawns.</strong> But be careful; <strong>Nether</strong> is dangerous, and you may find yourself dragged into its world of <strong>darkness</strong> and <strong>corruption...</strong></p>
            <div class="scroll-container">
                <img class="gallery-img" src="../images/Nexo_SS_5.png" alt="">
                <img class="gallery-img" src="../images/Nexo_SS_4.png" alt="">
                <img class="gallery-img" src="../images/Nexo_SS_3.png" alt="">
            </div>
        </div>

        <div class="release-logs">
            <h1>Release Logs</h1><br>
            <hr>
            <nav>
                <ul>
                    <!--0.4 Dropdown-->
                    <li>
                        <div class="dropdown">
                            <button class="drop-btn"><h2>v. 0.4.1 (Latest)</h2></button>
                                <div class="dropdown-content">
                                    <a href="https://phantomforce.itch.io/project-leo-v04"><h2>Download</h2></a>
                                    <a href="https://phantomforce.itch.io/project-leo-v04-webgl"><h2>Web</h2></a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <a href="https://phantomforce.itch.io/project-leo-v03"><h2>v. 0.3</h2></a>
                    </li>
                    <li>
                        <a href="https://phantomforce.itch.io/project-leo-beta-v02"><h2>v. 0.2</h2></a>
                    </li>
                    <li>
                        <a href="https://phantomforce.itch.io/project-leo-beta-v01"><h2>v. 0.1.1</h2></a>
                    </li><br><br>
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