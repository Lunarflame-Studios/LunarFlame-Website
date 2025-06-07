<?php echo typewriteGradient(1, "Recent Posts"); ?>

<div class="recent">
    <?php
        for ($i = 0; $i < 3; $i++) {
            echo createBlogPost($allPosts[$i]);
        }
    ?>

    <script src="javascript/blog.js"></script>
</div>
