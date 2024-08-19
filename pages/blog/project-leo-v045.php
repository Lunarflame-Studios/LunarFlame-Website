<!DOCTYPE html>
<html>
    <head>
        <?php require('../partials/header.php')?>
        <title>Blank Page</title>
        <link rel="stylesheet" href="blog-page.css">
        <link rel="stylesheet" href="../blog.css">
    </head>
    <body>
        <?php require('../partials/sub-header.php') ?>
        
        <section class="page-body">
            <div id="overlay"></div>
            <img id="zoom-in" src="" alt="">

            <div class="blog-title">
                <h1 id="title">Blog Title</h1>
                <h5 id="category">Category</h5>
                <hr>
            </div>
            <div class="blog-subInfo">
                <h3 id="author">Author</h3>
                <h4 id="date">MM dd, yyyy</h4>
                <br>
            </div>
            <div class="blog-pageBody">
                <p id="description">This is a short description of the contents of the article.</p>
                <br><br>
                <img class="page-image" id="image" src="../../images/Minimal.jpg" alt="">
                <br><br>

                <p class="margin-top">This is a paragraph, containing the contents of the blog post.</p>
                <br><br>
                <p class="margin-top">This is a paragraph, containing the contents of the blog post. </p>
                <br><br>
            </div>

            <hr>
            <?php require('../partials/recent-posts.php') ?>

        </section>

        <?php require('../partials/sub-footer.php')?>

        <?php require('../partials/copyright.php')?>

        <script src="../../javascript/images.js"></script>
        <script>
            var navLinks = document.getElementById("navLinks");
            var socialLinks = document.getElementById("socialLinks");
            function showMenu() {
                navLinks.style.right = "0";
                socialLinks.style.right = "0";
            }
            function hideMenu() {
                navLinks.style.right = "-200px";
                socialLinks.style.right = "-200px";
            }
        </script>
    </body>
</html>