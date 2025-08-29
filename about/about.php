<?php
    function devName(string $name, string $nickname) : string {
        return <<<HTML
            <div class="dev-name">
                <h2>$name</h2>
                <h4>$nickname</h4>
            </div>
        HTML;
    }

    function profilePic(string $path) : string {
        $devs = DEVS; 
        return <<<HTML
            <div class="profile-pic">
                <img src="{$devs}/{$path}" alt="">
            </div>
        HTML;
    }

    function devBox(string $name, string $order = "normal") : void {
        $about = explode("\n", file_get_contents($name . ".about"));
        $elements = $order == "reverse" 
            ? array(profilePic($about[4]), devName($about[0], $about[1]))
            : array(devName($about[0], $about[1]), profilePic($about[4]));

        echo <<<HTML
            <div class="dev-box $name">
                <div>
                    <div>
                        $elements[0]
                        $elements[1]
                    </div>
                    <h3>$about[2]</h3>
                    <p>$about[3]</p>
                    <a class="hero-btn button {$about[6]}" href="$about[7]">Read More</a>
                </div>
            </div>
        HTML;
    } 
?>
