<!DOCTYPE html>
<html>

<head>
    <?php
        $partials = '../../../partials/';
        require($partials . 'server.php');
        $currentPost = getPost("Play Project Leo v0.45");
        echo $currentPost->createHead();
    ?>
</head>

<body>
    <div class="background">
        <?php require($partials . 'header.php') ?>

        <section class="page-body">
            <?php 
                echo OVERLAY;
                echo $currentPost->createBlogTitle();
                echo $currentPost->createSubInfo();
            ?>

            <div class="blog-pageBody">
                <?php echo $currentPost->createDescription(); ?>

                <div>
                    <h2 class="subheader">Shop</h2>
                    <p>The elusive "Shop" submenu has now been given functionality. Here, players can use their accumulated currency to purchase various items that will assist them throughout the game.
                        <br>Some can be used from the new "Inventory" submenu, while most others are used during runs. These items may be assigned to the E, R, and F keys in the settings menu. Information about
                        <br>costs, uses, durations, etc. are visible in the Shop Menu.</p>

                    <p>So far, the Score Magnifier, Coin Multiplier, Coin Magnet, and HP Ampule are all fully implemented. The Anti-Nether Drone, Enhanced Coin Magnet, Midas Field, and Condensed Nether Core are fully functional, but unfortunately lack sprites. Check out the shop to see what they all do! Or mix and match them to create unique combos!</p>
                </div>

                <div>
                    <h2 class="subheader">Gameplay</h2>
                    <p>Considering how score can be amplified (via difficulty and items), we made it so that movement abilities (double jump, etc.) are unlocked based on distance traveled instead of the score (distance traveled isn't visible to the player yet, but will be in the future).</p>
                    <p>If you read "HP Ampule" in the previous section and thought, "Wait, this game has no HP," then surprise, surprise, it does now! When missing a Nether Spawn, instead of decreasing the score multiplier like in v0.4, it now decreases the player's HP bar, which will briefly flash on the screen. Players start the game with 6 HP (3 hearts total), missing a Nether Spawn subtracts 2 HP (1 heart loss), and HP Ampules increase your base HP by 1 (1 half heart gained).</p>
                </div>

                <div>
                    <h2 class="subheader">Leaderboard</h2>
                    <p>All players with accounts will have their high scores logged with their save data online. These scores are then ranked and displayed in the "Leaderboard" accesible from the Main Menu. For now, the leaderboard does not clear regularly, so the all-time highest scores will be visible for the forseeable future.</p>
                </div>

                <div>
                    <h2 class="subheader">Visual Changes</h2>
                    <p>New UI animations have been added to most menus. Since some players might find these animtions slow, there is an option to disable them in the Settings Menu. Speaking of settings, new user preferences (blur, text speed, fullscreen, and V-sync) have been added as well, and are logged in the player's save data.</p>
                    <p>Besides minor redesigns of some UI elements, we've also made some QoL changes. Players can now hit ESC to exit every menu and submenu. An alert (!) will show up whenever missions are completed and the rewards are ready to be claimed.</p>
                </div>

                <div>
                    <h2 class="subheader">Bug Fixes</h2>
                    <p>A lot of the work in this update has been fixing these minor bugs which made the game less consistent and thus less fun to play. Things like prematurely unlocking double jump, janky floating platforms, Nether Spawns not dying, and unoptimized level generation were the target of our efforts.</p>
                    <p>These were just the major changes; for a full list of changes and more specifics, be sure to check out the Review Form.</p>
                </div>
            </div>
            <hr class="blog-end">
            <?php require($partials . 'recent-posts.php') ?>
        </section>
        <?php require($partials . 'footer.php') ?>
    </div>
    <?php 
        require($partials . 'copyright.php');
        require($partials . 'javascript.php'); 
    ?>
</body>

</html>
