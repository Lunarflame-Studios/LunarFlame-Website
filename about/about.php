<?php
    $devData = json_decode(file_get_contents("devs.json"), true);

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
        global $devData;
        
        $id = -1;
        switch ($name) {
            case "adrian":
                $id = 0;
            break;
            case "dan":
                $id = 1;
            break;
            case "speedster":
                $id = 2;
            break;
            case "ryan":
                $id = 3;
            break;
        }
        
        $about = $devData[$id];

        $elements = $order == "reverse" 
            ? array(profilePic($about['profile']), devName($about['name'], $about['nickname']))
            : array(devName($about['name'], $about['nickname']), profilePic($about['profile']));

        $roles = $about['roles'];
        $desc = $about['description'];
        $btn = $about['button'];
        $link = $about['link'];

        echo <<<HTML
            <div class="dev-box $name">
                <div>
                    <div>
                        $elements[0]
                        $elements[1]
                    </div>
                    <h3>$roles</h3>
                    <p>$desc</p>
                    <a class="hero-btn button {$btn}" href="$link">Read More</a>
                </div>
            </div>
        HTML;
    } 
?>
