<!DOCTYPE html>
<html>
    <head>
        <?php
            require('/var/www/static.lunarflame.dev/partials/server.php');
            Head::new("Changelog - Project Leo", "projects/project-leo/project-leo.css");
        ?>
    </head>

    <?php
        $devlogs = json_decode(file_get_contents("/var/www/static.lunarflame.dev/xml-json/changelog.json"), true);

        function createChangelogItem($itemJson) : void {
            $version = $itemJson["version"];
            $date = $itemJson["date"];
            $changes = EMPTY_STRING;

            foreach ($itemJson["changes"] as $change) {
                $changes .= <<<HTML
                    <li>$change</li>
                HTML;
            }

            echo <<<HTML
                <div class="changelog-entry">
                    <h3 class="gradient">$version</h3>
                    <h4 class="gradient">$date</h4>
                    <ul>
                        $changes
                    </ul>
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
                    <?php typewriteGradient(2, "Changelogs"); ?>
                </main>

                <div class="updates">
                    <!--Use PHP to dynamically generate the changelog-->
                    <div class="content">
                        <?php
                            foreach ($devlogs as $log) {
                                createChangelogItem($log);
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
