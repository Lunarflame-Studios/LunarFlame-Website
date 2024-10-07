<!DOCTYPE html>
<html>

<head>
    <?php require('../../../partials/header.php') ?>
    <title>Play Project Leo v0.45</title>
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
                <h1 id="title">Play Project Leo v0.45</h1>
                <h5 id="category">Project Leo</h5>
                <hr>
            </div>
            <div class="blog-subInfo">
                <h3 id="author">Kapeepa</h3>
                <h4 id="date">Aug 25, 2024</h4>
                <br>
            </div>
            <div class="blog-pageBody">
                <p id="description">Project Leo v0.45 is out! In preparation for v0.5 (which will hopefully be out later this year), we've prepared tons of new features, fixes, and other changes.</p>
                <br><br>
                <img class="page-image gallery-img" id="image" src="/images/screenshots/PL_SS_5.png" alt="">
                <br><br>

                <div>
                    <h2 id="subheader">Shop</h2>
                    <p class="margin-top">The elusive "Shop" submenu has now been given functionality. Here, players can use their accumulated currency to purchase various items that will assist them throughout the game.
                        <br>Some can be used from the new "Inventory" submenu, while most others are used during runs. These items may be assigned to the E, R, and F keys in the settings menu. Information about
                        <br>costs, uses, durations, etc. are visible in the Shop Menu.
                    </p>
                    <br>
                    <p class="margin-top">So far, the Score Magnifier, Coin Multiplier, Coin Magnet, and HP Ampule are all fully implemented. The Anti-Nether Drone, Enhanced Coin Magnet,
                        Midas Field, and Condensed Nether Core are fully functional, but unfortunately lack sprites. Check out the shop to see what they all do! Or mix and match them
                        to create unique combos!
                    </p>
                </div>

                <div>
                    <h2 id="subheader">Gameplay</h2>
                    <p class="margin-top">Considering how score can be amplified (via difficulty and items), we made it so that movement abilities (double jump, etc.) are unlocked based on distance
                        traveled instead of the score (distance traveled isn't visible to the player yet, but will be in the future).
                    </p>
                    <br>
                    <p class="margin-top">If you read "HP Ampule" in hte previous section and thought, "Wait, this game has no HP," then surprise, surprise, it does now! When missing a Nether Spawn,
                        instead of decreasing the score multiplier like in v0.4, it now decreases the player's HP bar, which will briefly flash on the screen. Players start the game with 6 HP
                        (3 hearts total), missing a Nether Spawn subtracts 2 HP (1 heart loss), and HP Ampules increase your base HP by 1 (1 half heart gained).
                    </p>
                </div>

                <div>
                    <h2 id="subheader">Leaderboard</h2>
                    <p class="margin-top">All players with accounts will have their high scores logged with their save data online. These scores are then ranked and displayed in the "Leaderboard"
                        accesible from the Main Menu. For now, the leaderboard does not clear regularly, so the all-time highest scores will be visible for the forseeable future.
                    </p>
                </div>

                <div>
                    <h2 id="subheader">Visual Changes</h2>
                    <p class="margin-top">New UI animations have been added to most menus. Since some players might find these animtions slow, there is an option to disable them in the Settings Menu.
                        Speaking of settings, new user preferences (blur, text speed, fullscreen, and V-sync) have been added as well, and are logged in the player's save data.
                    </p>
                    <br>
                    <p class="margin-top">Besides minor redesigns of some UI elements, we've also made some QoL changes. Players can now hit ESC to exit every menu and submenu. An alert (!) will show up
                        whenever missions are completed and the rewards are ready to be claimed.
                    </p>
                </div>

                <div>
                    <h2 id="subheader">Bug Fixes</h2>
                    <p class="margin-top">A lot of the work in this update has been fixing these minor bugs which made the game less consistent and thus less fun to play. Things like prematurely
                        unlocking double jump, janky floating platforms, Nether Spawns not dying, and unoptimized level generation were the target of our efforts.
                    </p>
                    <br>
                    <p class="margin-top">These were just the major changes; for a full list of changes and more specifics, be sure to check out the Review Form.</p>
                </div>
            </div>
            <br><br>

            <hr>
            <?php require('../../../partials/recent-posts.php') ?>

        </section>
    </div>

    <?php require('../../../partials/sub-footer.php') ?>
    <?php require('../../../partials/copyright.php') ?>

    <?php require('../../../partials/javascript.php') ?>
</body>

</html>