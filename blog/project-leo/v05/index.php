<!DOCTYPE html>
<html>
<head>
    <?php
        require('/var/www/static.lunarflame.dev/partials/server.php');
        $currentPost = Blog::getPost("Play Project Leo v0.5");
        $currentPost->createHead();
    ?>
</head>

<body>
    <div class="background">
        <?php getHeader(); ?>
        <section class="page-body">
            <?php $currentPost->createFields(); ?>
            <div class="blog-content">
                <?php $currentPost->createDescription(); ?>
                <div>
                    <h2>A Whole New World</h2>
                    <p>The new world, Sylvalia, is available in the world select menu before entering a run. With a stunning new backdrop and two new tracks, we hope to create an aesthetic identity for this luscious, green planet. For now, it functions identically to Horizon, in that the existing level components were given reskins—a fresh coat of paint—but we'll be looking into providing more unique gameplay features to Sylvalia in the future.</p>
                <?php pageImage(googleDrive("1XNHbH6717AyzOsvbv-KXJW-sjUtW2khS")); ?>
                </div>
                <hr class="blog-break">

                <div>
                    <h2>Visual Changes</h2>
                    <p>After starting a run, you will have probably noticed that the basic, blue player model has been swapped out for an original character design. After months of running, he's finally being retired for the new kid on the block, Soren, who will be our first playable character—and the eventual protagonist—of Project Leo. Our artists have been hard at work on implementing the new spritework and animations, so we hope you enjoy them!</p>
                    <?php carousel(googleDrive("1uYG-2lsEBnc3_FgEVoUXlx4Mv2Lii_Av"), googleDrive("1kJ3fL7pJlmb8H9oqUVlDEUImQhEcAa9d"), googleDrive("1L4b41TML7diiHuj1IlsEUesVlfc4YMmj")); ?>
                    <p>Speaking of protagonists, we've begun laying the groundwork for integrating a narrative into the game. If you replay the tutorial, you'll be in for a pleasant surprise: the plain text-on-the-screen instructions have been replaced by a new visual novel-style UI overlay, featuring additional spritework of a mysterious second character. We intend to use this system to create additional dialogue-events, which we will use to tell the grand, overarching story of Project Leo.</p>
                    <p>Besides that, we overhauled a certain visual transition present after reaching a certain score threshold (if you know, you know).</p>
                </div>
                <hr class="blog-break">

                <div>
                    <h2>Last Bits</h2>
                    <p>To conclude this version report, we've added some new missions, added a daily/weekly reset-timer to the missions menu, updated the error handler to notify users of internet-related issues (e.g. outdated game version), and rolled out other minor UI changes, optimizations, and bug fixes.</p>
                    <p>Have fun with v0.5, and we'll see you all in v0.6!</p>
                </div>
            </div>
            <hr class="blog-end">
            <?php getRecentPosts(); ?>
        </section>
        <?php getFooter(); ?>
    </div>
    <?php endPage(); ?>
</body>
</html>
