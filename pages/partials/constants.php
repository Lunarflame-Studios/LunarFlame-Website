<?php 

    define('OVERLAY', <<<HTML
        <span id="overlay"></span>
        <img id="zoom-in" src="" alt="">
    HTML);

    define('EMPTY_CHAR', '&#8203;');

    define('RECENT_POST', <<<HTML
        <div class="post">
            <a id="link" href="">
                <div class="thumbnail">
                    <img class="blog-img" src="images/LunarFlame-Logo-Simplified.png" alt="blog img">
                </div>
                <div class="metadata">
                    <h2 id="category">Category</h2>
                    <h3 id="title">Title</h3>
                    <p id="description">Description</p>
                    <div>
                        <strong id="author">Author</strong>
                        <span id="pubDate">Jan 1, 2024</span>
                    </div>
                </div>
            </a>
        </div>
    HTML);
?>

<?php
    function orbs(...$colors) {
        // Start the wrapper div
        $html = '<div id="glow-orbs">' . PHP_EOL;
        $fileName = "";

        // Loop through each color argument
        foreach ($colors as $color) {
            // Skip empty strings or nulls
            if (trim($color) === '')
                continue;

            switch($color) {
                case "pink":
                    $fileName = "Pink";
                    break;
                case "blue":
                    $fileName = "Blue";
                    break;
                case "light-blue":
                    $fileName = "Light-Blue";
                    break;
                case "purple":
                    $fileName = "Purple";
                    break;
                default:
                    $fileName = "error";
            }
        
            // Append the orb image tag
            $html .= '    <img class="orb" id="' . htmlspecialchars($color) . '" src="images/vfx/' . htmlspecialchars($fileName) . '-Glow.png" alt="">' . PHP_EOL;
        }

        // Close the wrapper div
        $html .= '</div>' . PHP_EOL;

        return $html;
    }

    function circuit($version) {
        return <<<HTML
            <div>
                <span class="circuit" id="$version"></span>
            </div>
        HTML;
    }
?>
