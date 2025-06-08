<h1 class="typewriter-v2 gradient" id="v1"><?php echo EMPTY_CHAR; ?>
    <span>Recent Posts</span>
</h1>

<div class="recent">
    <?php
        for ($i = 0; $i < 3; $i++) {
            echo createBlogPost($allPosts[$i]);
        }
    ?>

    <script src="javascript/blog.js"></script>
</div>
