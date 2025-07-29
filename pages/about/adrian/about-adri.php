<?php
    function adriSocial($name, $link, $bx) {
        return <<<HTML
            <li>
                <a class="icon $name" href="$link" target="_blank">
                    <i class="bx bxl-$bx"></i>
                </a>
            </li>
        HTML;
    }

    function devIcon($class) {
        $rand = rand(1, 5);
        return <<<HTML
            <span class="icon" id="v$rand">
                <i class="devicon-$class"></i>
            </span>
        HTML;
    }

    function iconRow(...$items) {
        $row = '<div class="icon-row">' . PHP_EOL;
        foreach ($items as $item) {
            $row .= $item . PHP_EOL;
        }
        $row .= '</div>' . PHP_EOL;
        return $row;
    }

    function mainContent() {

        ob_start();
        typewrite("Hi! I'm a computer Science Major at WPI. I like playing video games and making video games!");
        $typewrite = ob_get_clean();

        $socials = implode(PHP_EOL, [
            adriSocial("github", "https://github.com/phantomforce260", "github"),
            adriSocial("discord", "https://discord.gg/khKCJyjKSm", "discord-alt"),
            adriSocial("instagram", "https://www.instagram.com/phantomforce26/", "instagram")
        ]);


        echo <<<HTML
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
        HTML;
    }

    function adriSkills() {
        typewriteGradient(5, "Tools and Languages");

        $rows = [
            iconRow(
                devIcon("java-plain-wordmark"),
                devIcon("c-plain"),
                devIcon("cplusplus-plain"),
                devIcon("csharp-plain"),
                devIcon("python-plain-wordmark"),
                devIcon("html5-plain-wordmark"),
                devIcon("css3-plain-wordmark")
            ),

            iconRow(
                devIcon("javascript-plain"),
                devIcon("typescript-plain"),
                devIcon("php-plain"),
                devIcon("svelte-plain"),
                devIcon("react-original"),
                devIcon("git-plain-wordmark")
            ),

            iconRow(
                devIcon("github-original"),
                devIcon("unity-plain"),
                devIcon("vscode-plain"),
                devIcon("visualstudio-plain"),
                devIcon("neovim-plain-wordmark"),
                devIcon("photoshop-plain"),
                devIcon("illustrator-plain")
            ),

            iconRow(
                devIcon("premierepro-plain"),
                devIcon("aftereffects-plain"),
                devIcon("bun-plain"),
                devIcon("nginx-original"),
                devIcon("debian-plain-wordmark"),
                devIcon("ubuntu-plain-wordmark"),
            )
        ];

        echo <<<HTML
            <div class="adri-skills">
                {$rows[0]}
                {$rows[1]}
                {$rows[2]}
                {$rows[3]}
            </div>
        HTML;
    }

    function loadWorlds() {
        echo <<<HTML
            <h3 style="color: #C8E9EF;">Worlds</h3>
        HTML;

        carousel(
            // Horizon
            googleDrive("1po0KakJbpNqgJ-mXcC3N7iTRi8mqp9EC"),
            googleDrive("1UbV03CcfifPtxNjDnsnk0HOpgbfK0Zk1"),
            googleDrive("1t4KGKGLSXe4iMSsFCXr8z4M38rOZGCoO"),

            // Sylvalia
            googleDrive("1XNHbH6717AyzOsvbv-KXJW-sjUtW2khS"),
            googleDrive("11N3ghRA_W0hp1Vn3F8HEgDbWgzzRxhs7")
        ); 
    }

    function loadChars() {
        echo <<<HTML
            <h3 style="color: #E0E1ED;">Characters</h3>
        HTML;

        carousel(
            // Soren
            googleDrive("1lq2jkkx3hPlpzYt9H59Hrk8VMRdIzWZQ"),
            googleDrive("1b4Tm0db0SWFqx4JvfISenMfQnsqFDpMJ"),
            googleDrive("1XjnNDSqiqF5f1tVVHqoYUEJYLepaKtq3"),

            // Strata
            googleDrive("1e7cCGIH9rGb0PUwqZNf3ubRHel4Opjx3"),
            googleDrive("1pTeYD8FcoA07bwAEtGPIpOPPFkYwyDXW")
        );
    }

    function loadMisc() {
        echo <<<HTML
            <h3 style="color: #E0E1ED;">Misc.</h3>
        HTML;

        carousel(
            googleDrive("1szeyVjvJM3GQk8mYUz3AsaDseJlTfXSf")
        );
    }

    function loadDev() {
        echo <<<HTML
            <h3 style="color: #C8E9EF;">In Development</h3>
        HTML;

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
    }
?>