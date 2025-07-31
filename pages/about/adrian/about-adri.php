<?php

    function devIcon($class) {
        $rand = rand(1, 5);
        return <<<HTML
            <span class="icon" id="v$rand">
                <i class="devicon-$class"></i>
            </span>
        HTML;
    }

    class Adrian {

        static function social($name, $link, $bx) {
            return <<<HTML
                <li>
                    <a class="icon $name" href="$link" target="_blank">
                        <i class="bx bxl-$bx"></i>
                    </a>
                </li>
            HTML;
        }

        public static function mainContent($showResume = false) {
            ob_start();
            typewrite("Hi! I'm a computer Science Major at WPI. I like playing video games and making video games!");
            $typewrite = ob_get_clean();

            $socials = implode(PHP_EOL, [
                self::social("github", "https://github.com/phantomforce260", "github"),
                self::social("discord", "https://discord.gg/khKCJyjKSm", "discord-alt"),
                self::social("instagram", "https://www.instagram.com/phantomforce26/", "instagram")
            ]);

            $resumeLink = $showResume ? <<<HTML
                <a href=""><h3>View My Resume</h3></a>
            HTML : '';

            echo <<<HTML
                <main>
                    <div>
                        <span id="profile-pic">
                            <img id="adri-pfp" src="images/devs/adri_pfp.jpg">
                        </span>
                        <div>
                            {$typewrite}
                            <div class="reverse social-links" id="socialLinks">
                                <ul>$socials</ul>
                            </div>
                        </div>
                    </div>
                    $resumeLink
                </main>
            HTML;
        }

        static function iconRow(...$items) {
            $row = '<div class="icon-row">' . PHP_EOL;
            foreach ($items as $item) {
                $row .= $item . PHP_EOL;
            }
            $row .= '</div>' . PHP_EOL;
            return $row;
        }

        public static function skills() {
            echo <<<HTML
                <hr>
            HTML;

            typewriteGradient(5, "Tools and Languages");

            $rows = implode(PHP_EOL, [
                self::iconRow(
                    devIcon("java-plain-wordmark"),
                    devIcon("c-plain"),
                    devIcon("cplusplus-plain"),
                    devIcon("csharp-plain"),
                    devIcon("python-plain-wordmark"),
                    devIcon("html5-plain-wordmark"),
                    devIcon("css3-plain-wordmark")
                ),

                self::iconRow(
                    devIcon("javascript-plain"),
                    devIcon("typescript-plain"),
                    devIcon("php-plain"),
                    devIcon("svelte-plain"),
                    devIcon("react-original"),
                    devIcon("git-plain-wordmark")
                ),

                self::iconRow(
                    devIcon("github-original"),
                    devIcon("unity-plain"),
                    devIcon("vscode-plain"),
                    devIcon("visualstudio-plain"),
                    devIcon("neovim-plain-wordmark"),
                    devIcon("photoshop-plain"),
                    devIcon("illustrator-plain")
                ),

                self::iconRow(
                    devIcon("premierepro-plain"),
                    devIcon("aftereffects-plain"),
                    devIcon("bun-plain"),
                    devIcon("nginx-original"),
                    devIcon("debian-plain-wordmark"),
                    devIcon("ubuntu-plain-wordmark"),
                )
            ]);

            echo <<<HTML
                <div class="adri-skills">
                    $rows
                </div>
                <hr>
            HTML;
        }
    }

    class ProjectLeo {

        public static function artwork($includeDev = false) {
            $categories = implode(PHP_EOL, [
                self::loadWorlds(),
                self::loadChars(),
                self::loadMisc(),
                $includeDev ? self::loadDev() : ''
            ]);

            echo <<<HTML
                <div class="artwork">
                    $categories
                </div>
                <hr>
            HTML;
        }

        static function loadWorlds() {
            ob_start();
            carousel(
                // Horizon
                googleDrive("1po0KakJbpNqgJ-mXcC3N7iTRi8mqp9EC"),
                googleDrive("1UbV03CcfifPtxNjDnsnk0HOpgbfK0Zk1"),
                googleDrive("1t4KGKGLSXe4iMSsFCXr8z4M38rOZGCoO"),

                // Sylvalia
                googleDrive("1XNHbH6717AyzOsvbv-KXJW-sjUtW2khS"),
                googleDrive("11N3ghRA_W0hp1Vn3F8HEgDbWgzzRxhs7")
            );
            $worlds = ob_get_clean();

            return <<<HTML
                <h3 style="color: #C8E9EF;">Worlds</h3>
                $worlds
            HTML;

        }

        static function loadChars() {
            ob_start();
            carousel(
                // Soren
                googleDrive("1lq2jkkx3hPlpzYt9H59Hrk8VMRdIzWZQ"),
                googleDrive("1b4Tm0db0SWFqx4JvfISenMfQnsqFDpMJ"),
                googleDrive("1XjnNDSqiqF5f1tVVHqoYUEJYLepaKtq3"),

                // Strata
                googleDrive("1e7cCGIH9rGb0PUwqZNf3ubRHel4Opjx3"),
                googleDrive("1pTeYD8FcoA07bwAEtGPIpOPPFkYwyDXW")
            );
            $chars = ob_get_clean();

            return <<<HTML
                <h3 style="color: #E0E1ED;">Characters</h3>
                $chars
            HTML;

        }

        static function loadMisc() {
            ob_start();
            carousel(
                googleDrive("1szeyVjvJM3GQk8mYUz3AsaDseJlTfXSf")
            );
            $misc = ob_get_clean();

            return <<<HTML
                <h3 style="color: #E0E1ED;">Misc.</h3>
                $misc
            HTML;
        }

        public static function loadDev() {
            ob_start();
            carousel(
                // Alioth
                googleDrive("1fwtXeNMFmKErR2picxdYtlpX1IkJToNX"),
                
                // Maverick
                googleDrive("1VV3VrMeJGNzobWEEeyILS1klZjrXMu81"),

                // Shino
                googleDrive("1i8nc7K6TsnBkXKeCMrst7ikihnIp2ynD"),

                // Vex
                googleDrive("1J8klWYcvi2444VrZ9Pvsvy4337ssItUO"),

                // Morgan
                googleDrive("1WCk7eTBsaoFL7A_cwyyysGHVWzVJhPKb")
            );
            $devs = ob_get_clean();

            return <<<HTML
                <h3 style="color: #C8E9EF;">In Development</h3>
                $devs
            HTML;

        }

        static function codeContentInstance($color, $title, $description, $image, $reversed) {
            ob_start();
            borderImage($image);
            $borderImage = ob_get_clean();
            $class = $reversed ? "code-content reverse" : "code-content";

            return <<<HTML
                <div>
                    <h4 style="color: $color;">$title</h4>
                    <div class="$class">
                        <p>$description</p>
                        {$borderImage}
                    </div>
                </div>
            HTML;
        }

        public static function codeContent() {
            $codeContent = implode(PHP_EOL, [
                self::codeContentInstance(
                    "#B4A0C8",
                    "Core Gameplay Mechanics",
                    "Implemented the core gameplay mechanics of Project Leo, including player movement, obstacle generation, and level progression. Utilized Unity's physics engine to create a responsive and engaging gameplay experience.",
                    "/images/screenshots/PL_SS_1.png",
                    false
                ),
                self::codeContentInstance(
                    "#A9DAE4",
                    "Shop, Currency, and Inventory",
                    "Developed the shop system, allowing players to purchase upgrades and items using in-game currency. Implemented an inventory system to manage player items and upgrades.",
                    "/images/screenshots/PL_SS_2.png",
                    true
                ),
                self::codeContentInstance(
                    "#B193C4",
                    "Missions",
                    "Designed and implemented the mission system, providing players with objectives to complete for rewards. Integrated mission tracking and completion feedback into the user interface.",
                    "/images/screenshots/PL_SS_3.png",
                    false
                ),
                self::codeContentInstance(
                    "#CDCDE0",
                    "Cloud and Local Saves",
                    "Implemented cloud saving functionality to ensure player progress is saved across sessions. Developed local save systems for offline play, allowing players to continue their progress without an internet connection.",
                    "/images/screenshots/PL_SS_4.png",
                    true
                )
            ]);

            echo <<<HTML
                <div class="code">
                    <h3 style="color: #C8E9EF;">Code</h3>
                    <div>
                        $codeContent
                    </div>
                </div>
                <hr>
            HTML;
        }
    }

    class Website {
        public static function codeContent() {
            echo <<<HTML
                <h3 style="color: #E0E1ED;">Code</h3>
                <p>
                    This website was built from the ground up using HTML and CSS.
                    It utilizes servers-side scripting, as well as javascript for dynamic content and animations.
                </p>
                <hr>
            HTML;
        }
    }
?>