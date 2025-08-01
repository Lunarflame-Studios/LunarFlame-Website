<?php 
    $allPosts = null;

    define('OVERLAY', <<<HTML
        <span id="overlay"></span>
        <img id="zoom-in" src="" alt="">
    HTML);

    define('EMPTY_CHAR', '&#8203;');
    define('EMPTY_STRING', '');

    define('BLOG_POST', <<<HTML
        <div class="post">
            <a id="link" href="{link}">
                <div class="thumbnail">
                    <img class="blog-img" src="{thumbnail}" alt="blog img">
                </div>
                <div class="metadata">
                    <h2 id="category">{category}</h2>
                    <h3 id="title">{title}</h3>
                    <p id="description">{description}</p>
                    <div>
                        <strong id="author">{author}</strong>
                        <span id="pubDate">{pubDate}</span>
                    </div>
                </div>
            </a>
        </div>
    HTML);

    define('H1', 'h1');
    define('H2', 'h2');
    define('H3', 'h3');
    define('H4', 'h4');
    define('P', 'p');

    define('PINK', 'pink');
    define('BLUE', 'blue');
    define('LIGHT_BLUE', 'light-blue');
    define('PURPLE', 'purple');

    define('DEFAULT_PARAGRAPH', P);
    define('DEFAULT_HEADER', H1);

    function getHeader() : void {
        require('header.php');
    }

    function getFooter() : void{
        require('footer.php');
    }

    function endPage() : void {
        require('copyright.php');
        require('javascript.php');
    }

    function getRecentPosts() : void {
        require('recent-posts.php');
    }

    function gradient($color, $content) : void {
        echo Text::gradient($color, DEFAULT_HEADER, $content);
    }

    function typewrite($content) : void {
        echo Text::typewrite(DEFAULT_PARAGRAPH, $content);
    }

    function typewriteGradient($color, $content) : void {
        echo Text::typewriteGradient($color, DEFAULT_HEADER, $content);
    }

    function multiTypewriteGradient(string $color, string ...$contents) : void {
        echo Text::multiTypewriteGradient($color, DEFAULT_HEADER, ...$contents);
    }

    function borderImage($src, $color = EMPTY_STRING) : void {
        echo Image::border($src, $color);
    }

    function pageImage($src) : void {
        echo Image::standard($src);
    }

    function carousel(...$images) : void {
        echo Image::carousel(...$images);
    }

    function orbs(string ...$colors) : void {
        // Start the wrapper div
        $html = '<div id="glow-orbs">' . PHP_EOL;
        $fileName = "";

        // Loop through each color argument
        foreach ($colors as $color) {
            // Skip empty strings or nulls
            if (trim($color) === '')
                continue;

            switch($color) {
                case PINK:
                    $fileName = "Pink";
                    break;
                case BLUE:
                    $fileName = "Blue";
                    break;
                case LIGHT_BLUE:
                    $fileName = "Light-Blue";
                    break;
                case PURPLE:
                    $fileName = "Purple";
                    break;
                default:
                    $fileName = "error";
                    break;
            }

            // Append the orb image tag
            $html .= '    <img class="orb" id="' . htmlspecialchars($color) . '" src="images/vfx/' . htmlspecialchars($fileName) . '-Glow.png" alt="">' . PHP_EOL;
        }

        // Close the wrapper div
        $html .= '</div>' . PHP_EOL;
        echo $html;
    }

    function circuit($version) {
        echo <<<HTML
            <div>
                <span class="circuit" id="$version"></span>
            </div>
        HTML;
    }

    //-----------------------------------------------------------------------------------------------------------------

    class BlogPost {
        public string $title;
        public string $description;
        public string $author;
        public string $pubDate;
        public string $category;
        public string $link;
        public string $thumbnail;

        function __construct($title, $description, $author, $pubDate, $category, $link, $thumbnail) {
            $this->title = htmlspecialchars($title);
            $this->description = htmlspecialchars($description);
            $this->author = htmlspecialchars($author);
            $this->pubDate = htmlspecialchars($pubDate);
            $this->category = htmlspecialchars($category);
            $this->link = htmlspecialchars($link);
            $this->thumbnail = htmlspecialchars($thumbnail);
        }

        function createHead() : void {
            $metadata = Head::metadata($this->title . " - Blog");
            $style = Head::stylesheet("blog");
            echo <<<HTML
                $metadata
                $style
            HTML;
        }

        function createBlogTitle() : void {
            echo <<<HTML
                <div class="blog-title">
                    <h1 id="title">$this->title</h1>
                    <h5 id="category">$this->category</h5>
                    <hr class="blog-begin">
                </div>
            HTML;
        }

        function createSubInfo() : void {
            echo <<<HTML
                <div class="blog-subInfo">
                    <h3 id="author">$this->author</h3>
                    <h4 id="date">$this->pubDate</h4>
                </div>
            HTML;
        }

        function createDescription() : void {
            $colors = [PINK, BLUE, LIGHT_BLUE, PURPLE];

            echo <<<HTML
                <p id="description">$this->description</p>
                <img class="page-image interactable offset-border" id="{$colors[array_rand($colors)]}" src="$this->thumbnail" alt="">
            HTML;
        }
    }

    //-----------------------------------------------------------------------------------------------------------------

    class Blog {

        public static function parseRSS(string $directory = '../../../../') : array {

            $rss = simplexml_load_file($directory . 'rss.xml');
            $domainLength = strlen('https://lunarflamestudios.com/');

            if (!$rss) {
                throw new Exception('Failed to load RSS feed.');
            }

            $posts = [];
            foreach ($rss->channel->item as $item) {
                $post = new BlogPost(
                    (string) $item->title,
                    (string) $item->description,
                    (string) $item->author,
                    (string) $item->pubDate,
                    (string) $item->category,
                    substr((string) $item->link, $domainLength), // Remove the domain part from the link
                    substr((string) $item->thumbnail, $domainLength) // Remove the domain part from the thumbnail URL
                );
                $posts[] = $post;
            }

            return $posts;
        }

        public static function getPost(string $title) : ?BlogPost {
            global $allPosts;
            $allPosts = self::parseRSS();
            // Loop through the posts to find the post with the given title
            foreach ($allPosts as $post) {
                if ($post->title === $title) {
                    return $post; // Return the post if found
                }
            }
            return null; // Return null if not found
        }

        public static function createPostHTML(BlogPost $post) : void {
            // Return the HTML for the recent post
            echo str_replace(
                ['{link}', '{category}', '{title}', '{description}', '{author}', '{pubDate}', '{thumbnail}'],
                [$post->link, $post->category, $post->title, $post->description, $post->author, $post->pubDate, $post->thumbnail],
                BLOG_POST
            );
        }
    }

    //-----------------------------------------------------------------------------------------------------------------

    class Head {

        public static function new(string $title, string ...$stylesheets) : void {

            // Generate the metadata and stylesheets
            $stylesheetsHtml = EMPTY_STRING;
            foreach ($stylesheets as $stylesheet) {
                $stylesheetsHtml .= self::stylesheet($stylesheet);
            }

            echo implode(
                PHP_EOL,
                [
                    self::metadata($title),
                    $stylesheetsHtml
                ]
            );
        }

        static function metadata(string $title) : string {
            return <<<HTML
                <base href="/">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>$title</title>

                <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
                <link rel="stylesheet" href="assets/devicon/devicon.min.css">
                <link rel="shortcut icon" href="images/LunarFlame-Logo-Simplified.ico" type="image/x-icon"/>
            HTML;
        }

        static function stylesheet(string $path) : string {
            if ($path == "blog") {
                return <<<HTML
                    <link rel="stylesheet" href="pages/blog/blog-page.css">
                    <link rel="stylesheet" href="pages/blog/blog-main.css">
                HTML;
            }
            else {
                return <<<HTML
                    <link rel="stylesheet" href="$path">
                HTML;
            }
        }
    }

    //-----------------------------------------------------------------------------------------------------------------

    class Text {

        public static function typewrite(string $textVer, string $content) : string {
            $empty = EMPTY_CHAR; 
            return <<<HTML
                <$textVer class="typewriter-v2">$empty
                    <span>$content</span>
                </$textVer>
            HTML;
        }

        public static function gradient(string $color, string $headerVer, string $content) : string {
            $color = $color == -1 ? rand(1, 5) : $color;
            return <<<HTML
                <$headerVer class="gradient" id="v{$color}">$content</$headerVer>
            HTML;
        }

        public static function typewriteGradient(string $color, string $headerVer, string $content) : string {
            $empty = EMPTY_CHAR; 
            $color = $color == -1 ? rand(1, 5) : $color;
            return <<<HTML
                <$headerVer class="typewriter-v2 gradient" id="v{$color}">$empty
                    <span>$content</span>
                </$headerVer>
            HTML;
        }

        public static function multiTypewriteGradient(string $color, string $headerVer, string ...$contents) : string {
            $empty = EMPTY_CHAR;
            $color = $color == -1 ? rand(1, 5) : $color;
            
            $dataType = '[';
            $numContents = func_num_args() - 2; // Exclude the first two arguments (color and headerVer)

            $i = 1;
            foreach ($contents as $content) {
                $end = $i == $numContents ? '"]' : '", ';
                $dataType .= '"' . $content . $end ;
                $i++;
            }

            return <<<HTML
                <$headerVer class="typewrite gradient" id="v{$color}" data-type='$dataType' data-period="2000">
                    <span class="wrap">$empty</span>
                </$headerVer>
            HTML;
        }
    }

    //-----------------------------------------------------------------------------------------------------------------

    class Image {

        public static function border(string $src, string $color = "") : string {
            $colors = ['pink', 'blue', 'light-blue', 'purple'];
            $color = $color == "" ? $colors[array_rand($colors)] : $color;
            return <<<HTML
                <img class="page-image interactable offset-border" id="$color" src="$src" alt="">
            HTML;
        }

        public static function standard(string $src) : string{
            return <<<HTML
                <div class="image-container">
                    <img class="page-image interactable" src="$src" alt="">
                </div>
            HTML;
        }

        public static function carousel(string ...$images) : string {
            $html = '<div class="carousel">' . PHP_EOL;
            foreach ($images as $src) {
                $html .= '    <img class="interactable" src="' . $src . '" alt="">';
            }
            $html .= '</div>';
            return $html;
        }
    }

    //-----------------------------------------------------------------------------------------------------------------
    
    function googleDrive(string $id) : string {
        return "https://drive.google.com/thumbnail?id=" . $id . "&sz=w1000";
    }

    function screenshots(string $img) : string {
        return "images/screenshots/" . $img;
    }
?>
