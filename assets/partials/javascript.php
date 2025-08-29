<span class="panner" data-cursor="stretch"></span>
<span class="pointer"></span>

<div class="js-links">
    <script src="<?=JS?>/global.js"></script>
    <script src="<?=I_JS?>/tweenmax.min.js"></script>

    <script src="<?=JS?>/typewrite.js"></script>
    <script src="<?=JS?>/images.js"></script>
    <script src="<?=JS?>/cursor.js"></script>
</div>
<script>
    var navLinks = document.querySelector("header .nav-links");
    var socialLinks = document.querySelector(".social-links");

    function showMenu() {
        navLinks.style.right = "0";
        socialLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-50vw";
        socialLinks.style.right = "-50vw";
    }
</script>
