<!DOCTYPE html>
<html>

<head>
    <?php require('../../../partials/header.php') ?>
    <title>Play Project Leo v0.4</title>
    <link rel="stylesheet" href="/pages/blog/blog-page.css">
    <link rel="stylesheet" href="/pages/blog/blog-main.css">
</head>

<body>
    <div class="background">
        <?php require('../../../partials/sub-header.php') ?>

        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <div class="blog-title">
                <h1 id="title">Play Project Leo v0.4</h1>
                <h5 id="category">Project Leo</h5>
                <hr>
            </div>
            <div class="blog-subInfo">
                <h3 id="author">Phantom</h3>
                <h4 id="date">Apr 08, 2024</h4>
            </div>
            <div class="blog-pageBody">
                <p id="description">Project Leo v0.4 is out, and there's a lot of new features.</p>
                <br><br>
                <img class="page-image gallery-img offset-border light-blue" id="image" src="/images/screenshots/PL_SS_3.png" alt="">
                <br><br>
                <div>
                    <h2 id="subheader">Cloud Save Data</h2>
                    <p class="margin-top">Players can now choose to create accounts and store their data online. This allows players to load their data across multiple devices and preserve their data in future updates.
                        <br>Players who choose not to create accounts can use guest accounts. These are anonymous, locally stored accounts that can allow you to play the game quickly or without internet access. However, certain features will not be available to guest accounts during future updates.
                    </p>
                </div>

                <div>
                    <h2 id="subheader">Missions</h2>
                    <p class="margin-top">Players are able to access side missions by going to Character Customization and selecting "Missions." There are 4 different categories of missions: Daily and Weekly, each of which resets periodically, Record, benchmark missions that track your total progress, and Story, for notable accomplishments in the game's soon-to-be-implemented story. Missions reward in-game currency that will be used for purchases in the shop, coming soon in update v0.5.<br>
                        <br>(Note that due to web limitations, Missions are not available on the Web Version).
                    </p>
                </div>

                <div>
                    <h2 id="subheader">Tutorials</h2>
                    <p class="margin-top">All new accounts are greeted with a tutorial on basic controls. This tutorial is designed to ease the player experience and help them get used to the game's physics and mechanics. Tutorials can be disabled via the Main Menu settings, under Tutorials.<br>
                        <br>Speaking of which, the Tutorials Menu also comes with an "Archives" menu, letting players read up on important or interesting information about the game. From Controls, to Currency, to Story Synopsis, there is a lot included. <br>
                        <br>(Note that due to web limitations, Archives are not available on the Web Version).
                    </p>
                </div>

                <div>
                    <h2 id="nether">Nether</h2>
                    <p class="margin-top">Nether is a creature from between worlds that devours space-time and turns its surroundings into a corrosive, uninhabitable hellscape. Nether will stop at nothing until it has nothing left to consume. It must be completely destroyed in order to save the galaxy.<br>
                        <br>Nether Spawns are a primitive form of Nether that appear occasionally in worlds under its influence. They are normally invisible to the human eye, but can be seen when in close contact, or with the help of special contact lenses made by EDEN. Nether spawns can be destroyed through player interaction, and reward Nether Cores upon being slain. Nether Cores are a valuable currency in the galaxy that can be used for premium goods.
                    </p>
                    <style>
                        #nether {
                            color: #800000;
                            font-size: 3vw;
                        }
                    </style>
                </div>

                <div>
                    <h2 id="subheader">Visual Changes</h2>
                    <p class="margin-top">Horizon has been revamped with a ton of new artwork and visual adjustments. New animations were also added to several menus, including the Main Menu and In-game menus.</p>
                </div>

                <div>
                    <h2 id="subheader">Bug Fixes and Physics Changes</h2>
                    <p class="margin-top">Various QoL fixes and changes were made to optimize the visual, musical, and gameplay experience, such as jump buffering, platform adjustments, and gravity adjustments. We always try to adapt to player feedback.</p>
                </div>
            </div>

            <br><br>
            <hr>
            <?php require('../../../partials/recent-posts.php') ?>
        </section>
        <?php require('../../../partials/sub-footer.php') ?>
    </div>

    <?php require('../../../partials/copyright.php') ?>

    <?php require('../../../partials/javascript.php') ?>
</body>

</html>