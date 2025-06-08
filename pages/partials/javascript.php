<div class="panner" data-cursor="stretch"></div>
<div class="pointer"></div>

<div class="js-links">
    <script src="javascript/global.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>

    <script src="javascript/typewrite.js"></script>

    <script src="javascript/images.js"></script>
    <script src="javascript/animations.js"></script>

    <script src="javascript/cursor.js"></script>
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