<?php
    function metadata($title) {
        return <<<HTML
            <base href="/">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>

            <link rel="stylesheet" href="styles/style.css">
            <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
            <link rel="stylesheet" href="assets/devicon/devicon.min.css">
            <link rel="stylesheet" href="styles/animations.css">
            <link rel="shortcut icon" href="images/LunarFlame-Logo-Simplified.ico" type="image/x-icon"/>
        HTML;
    }

    function stylesheet($path) {
        if ($path == "blog") {
            return <<<HTML
                <link rel="stylesheet" href="pages/blog/blog-page.css">
                <link rel="stylesheet" href="pages/blog/blog-main.css">
            HTML;
        }

        return <<<HTML
            <link rel="stylesheet" href="$path">
        HTML;
    }
?>

