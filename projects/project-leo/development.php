<!DOCTYPE html>
<html>
    <head>
        <?php
            require('/var/www/static.lunarflame.dev/partials/server.php');
            Head::new("In Development - Project Leo", "projects/project-leo/project-leo.css");
        ?>
    </head>

    <?php
        $devlogs = json_decode(file_get_contents("/var/www/static.lunarflame.dev/xml-json/development.json"), true);

        function createDevlogItem($itemJson) : void {
            $title = $itemJson["title"];
            $category = $itemJson["category"];
            $desc = $itemJson["description"];

            $images = Image::carousel(...$itemJson["images"]);

            echo <<<HTML
                <div class="devlog-entry">
                    <div class="text">
                        <h3 class="gradient">$title</h3>
                        <h4 class="gradient">$category</h4>
                        <p>$desc</p>
                    </div>
                    $images
                </div>
            HTML;
        }
    ?>

    <body>
        <style>
            .updates { padding: 3vw 0; }
        </style>

        <div class="background">
            <?php
                circuit("v1");
                getHeader();
            ?>

            <section class="page-body">
                <?= OVERLAY; ?>

                <main>
                    <?php typewriteGradient(2, "In Development"); ?>
                </main>

                <div class="updates">
                    <div class="content">
                        <?php
                            foreach ($devlogs as $log) {
                                createDevlogItem($log);
                            }
                        ?>
                    </div>
                </div>
            </section>
            <?php getFooter(); ?>
        </div>
        <?php endPage(); ?>
    </body>
</html>
