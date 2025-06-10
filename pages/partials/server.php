<?php 
    $allPosts = null;

    define('OVERLAY', <<<HTML
        <span id="overlay"></span>
        <img id="zoom-in" src="" alt="">
    HTML);

    define('EMPTY_CHAR', '&#8203;');

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
?>

<?php
    class BlogPost {
        public $title;
        public $description;
        public $author;
        public $pubDate;
        public $category;
        public $link;
        public $thumbnail;

        function __construct($title, $description, $author, $pubDate, $category, $link, $thumbnail) {
            $this->title = htmlspecialchars($title);
            $this->description = htmlspecialchars($description);
            $this->author = htmlspecialchars($author);
            $this->pubDate = htmlspecialchars($pubDate);
            $this->category = htmlspecialchars($category);
            $this->link = htmlspecialchars($link);
            $this->thumbnail = htmlspecialchars($thumbnail);
        }

        function createHead() {
            $metadata = metadata($this->title . " - Blog");
            $style = stylesheet("blog");
            echo <<<HTML
                $metadata
                $style
            HTML;
        }

        function createBlogTitle() {
            echo <<<HTML
                <div class="blog-title">
                    <h1 id="title">$this->title</h1>
                    <h5 id="category">$this->category</h5>
                    <hr class="blog-begin">
                </div>
            HTML;
        }

        function createSubInfo() {
            echo <<<HTML
                <div class="blog-subInfo">
                    <h3 id="author">$this->author</h3>
                    <h4 id="date">$this->pubDate</h4>
                </div>
            HTML;
        }

        function createDescription() {
            $colors = ['pink', 'blue', 'light-blue', 'purple'];

            echo <<<HTML
                <p id="description">$this->description</p>
                <img class="page-image interactable offset-border" id="{$colors[array_rand($colors)]}" src="$this->thumbnail" alt="">
            HTML;
        }
    }

    /**
     * Parses the RSS feed from the specified directory and returns an array of BlogPost objects.
     *
     * @param string $directory The directory where the RSS feed is located.
     * @return BlogPost[] An array of BlogPost objects parsed from the RSS feed.
     * @throws Exception If the RSS feed cannot be loaded or parsed.
     */
    function parseRSS($directory = '../../../../') {

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

    function getPost($title) {
        global $allPosts;
        $allPosts = parseRSS();
        // Loop through the posts to find the post with the given title
        foreach ($allPosts as $post) {
            if ($post->title === $title) {
                return $post; // Return the post if found
            }
        }
        return null; // Return null if not found
    }

    /**
     * Generates HTML for a blog post.
     *
     * @param BlogPost $post The blog post object containing the details of the post.
     * @return string The generated HTML string for the blog post.
     * @throws InvalidArgumentException If the provided post is not an instance of BlogPost.
     */
    function createBlogPost($post) {
        // Ensure the post is an instance of BlogPost
        if (!$post instanceof BlogPost) {
            throw new InvalidArgumentException('Expected an instance of BlogPost');
        }

        // Return the HTML for the recent post
        echo str_replace(
            ['{link}', '{category}', '{title}', '{description}', '{author}', '{pubDate}', '{thumbnail}'],
            [$post->link, $post->category, $post->title, $post->description, $post->author, $post->pubDate, $post->thumbnail],
            BLOG_POST
        );
    }

    /**
     * Generates HTML for a set of glowing orbs based on the provided colors.
     *
     * @param string ...$colors The colors for the orbs. Valid values are "pink", "blue", "light-blue", and "purple".
     * @return string The generated HTML string containing the orbs.
     */
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
                    break;
            }

            // Append the orb image tag
            $html .= '    <img class="orb" id="' . htmlspecialchars($color) . '" src="images/vfx/' . htmlspecialchars($fileName) . '-Glow.png" alt="">' . PHP_EOL;
        }

        // Close the wrapper div
        $html .= '</div>' . PHP_EOL;

        echo $html;
    }

    /**
     * Generates HTML for a circuit element with a given version.
     *
     * @param string $version The version of the circuit to display.
     * @return string The generated HTML string containing the circuit element.
     */
    function circuit($version) {
        echo <<<HTML
            <div>
                <span class="circuit" id="$version"></span>
            </div>
        HTML;
    }

    function metadata($title) {
        echo <<<HTML
            <base href="/">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>

            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
            <link rel="stylesheet" href="assets/devicon/devicon.min.css">
            <link rel="shortcut icon" href="images/LunarFlame-Logo-Simplified.ico" type="image/x-icon"/>
        HTML;
    }

    function stylesheet($path) {
        if ($path == "blog") {
            echo <<<HTML
                <link rel="stylesheet" href="pages/blog/blog-page.css">
                <link rel="stylesheet" href="pages/blog/blog-main.css">
            HTML;
        }
        else {
            echo <<<HTML
                <link rel="stylesheet" href="$path">
            HTML;
        }
    }

    function getHeader() {
        require('header.php');
    }

    function getFooter() {
        require('footer.php');
    }

    function endPage() {
        require('copyright.php');
        require('javascript.php');
    }

    function getRecentPosts() {
        require('recent-posts.php');
    }

    function typewrite($content) {
        $empty = EMPTY_CHAR; 
        echo <<<HTML
            <p class="typewriter-v2">$empty
                <span>$content</span>
            </p>
        HTML;
    }

    function gradient($ver, $content) {
        $ver = $ver == -1 ? rand(1, 5) : $ver;
        echo <<<HTML
            <h1 class="gradient" id="v{$ver}">$content</h1>
        HTML;
    }

    function typewriteGradient($ver, $content) {
        $empty = EMPTY_CHAR; 
        $ver = $ver == -1 ? rand(1, 5) : $ver;
        echo <<<HTML
            <h1 class="typewriter-v2 gradient" id="v{$ver}">$empty
                <span>$content</span>
            </h1>
        HTML;
    }

    function multiTypewriteGradient($ver, ...$contents) {
        $empty = EMPTY_CHAR;
        $ver = $ver == -1 ? rand(1, 5) : $ver;
        
        $dataType = '[';
        $numContents = func_num_args() - 1;

        $i = 1;
        foreach ($contents as $content) {
            $end = $i == $numContents ? '"]' : '", ';
            $dataType .= '"' . $content . $end ;
            $i++;
        }

        echo <<<HTML
            <h1 class="typewrite gradient" id="v{$ver}" data-type='$dataType' data-period="2000">
                <span class="wrap">$empty</span>
            </h1>
        HTML;
    }
    
    function borderImage($src, $color = "") {
        $colors = ['pink', 'blue', 'light-blue', 'purple'];
        $color = $color == "" ? array_rand($colors) : $color;
        echo <<<HTML
            <img class="page-image interactable offset-border" id="$color" src="$src" alt="">
        HTML;
    }

    function carousel(...$images) {
        $html = '<div class="carousel">' . PHP_EOL;
        foreach ($images as $src) {
            $html .= '    <img class="interactable" src="' . $src . '" alt="">';
        }
        $html .= '</div>';
        echo $html;
    }
    

    function googleDrive($id) {
        return "https://drive.google.com/thumbnail?id=" . $id . "&sz=w1000";
    }
?>
