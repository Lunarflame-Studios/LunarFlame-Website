<!DOCTYPE html>
<html>

<head>
    <?php 
        require('../../../partials/metadata.php');
        echo metadata("ACBLOT: Programming with C - Blog");
        echo stylesheet("blog");
    ?>
</head>

<span>
    <?php require('../../../partials/constants.php'); ?>
</span>

<body>
    <div class="background">
        <?php require('../../../partials/header.php'); ?>
        <section class="page-body">
            <?php echo OVERLAY; ?>

            <div class="blog-title">
                <h1 id="title">ACBLOT: Programming with C</h1>
                <h5 id="category">Misc.</h5>
                <hr class="blog-begin">
            </div>
            <div class="blog-subInfo">
                <h3 id="author">Phantom</h3>
                <h4 id="date">Apr 09, 2025</h4>
            </div>
            <div class="blog-pageBody">
                <p id="description">I spent some time making a C script to automate making blog posts. Here's what I learned.</p>
                <img class="page-image interactable offset-border" id="purple" src="images/blog/C_programming.png" alt="">
                <div>
                    <h2>Why Learn C?</h2>
                    <p>During my first year of uni, I took a course on low-level systems programming using C and C++. It was my first time being exposed to the languages, as prior I had only used higher level languages such as Java, C#, and Javascript. However, I found myself taking a liking to C very quickly. Its syntax was familiar enough to other languages that I didn't feel like I was adopting a totally new style (a bit ironic since it's really the other way around: C was the basis for all the other languages described above), and yet it introdcued a bevy of new operations and challenges.</p>
                    <p>C is an incredibly minimalist language compared to modern programming standards. It lacks types that I took for granted, such as booleans and strings. The language has very little safeguards against common human errors such as bounds checking on arrays and accessing invalid memory. It puts a heavy emphasis on direct interaction between the programmer and the machine by allowing (and in most cases, requiring) techniques such as manual memory allocation and deallocation, and being able to store memory addresses to data inside of "pointer" variables.</p>
                </div>
                <hr class="blog-break">

                <p>Despite the challenges of using C, I wanted to learn more. I spent a few hours thinking about a program I could build that was both useful to me and feasible to create given the language I was working with. I remembered a friend who uses shell scripts in order to generate html for his blog posts, and that's where the idea hit me. I was getting a bit tired of pasting HTML code every time I wanted to create a post, so I decided to make a C script that could take a .txt file with content that I wrote and make into a full HTML document that could be immediately deployed without any changes. This post here is the first to be made using this script.</p>
                <p>I immediately went into the brainstorming phase, and I hit a few roadblocks. I realized that I needed to make my own markup system for txt files that was both robust enough to suit my purposes, and simple enough to not just be HTML all over again. I decided on a system where the first six lines of the text file would be the field data used by the Javascript and RSS feed to display information. After that, the parser would read every line as a paragraph, unless the line contains only three hyphens, signaling a horizontal rule (hr), or if the line has an image file extension or a google drive link, in which case it is an image (img).</p>
                <div class="image-container">
                    <img class="page-image interactable" src="https://drive.google.com/thumbnail?id=17hbpdpeXZlP5Ci9bnZ1xv0fEVtEY04Yr&sz=w1000">
                </div>
                <p>However, I needed something more robust. I wanted to be able to insert image carousels, give custom classes to header tags, and separate sections of a post into div blocks. So I created a system where by creating a line with a bracket pair, and inside the bracket pair, a list of HTML elements, the parser will create a div block and place the next "n" elements inside the div block. The parser assigns the element type of the line based on the values in the brackets. To create an image carousel, I can simply put a digit after an "img" element in the brackets (Ex. "img5" creates a carousel with 5 images), then insert the number of image links required to complete the carousel.</p>
                <p>When the parser is done, the entire HTML document is stored in the program memory as a string, which then gets stored in a php file. Lastly, the program takes the field data and generates a file called "rss.out" which stores an RSS feed entry with all the fields included, but an incomplete website link.</p>
                <hr class="blog-break">

                <div>
                    <h2>Integrating the RSS Feed</h2>
                    <p>Next, I make a new C program that would take the category and name of the blog post as arguments, and would use those to complete the RSS entry link, then append the new RSS feed entry to the "rss.xml" file. This script, at about 250 lines, was not nearly as long as the blog post parser, which was about 750 lines, both with code comments included.</p>
                    <p>Lastly, I made a Makefile, and a shell script that would automate recompiling the scripts, copying the "rss.xml" file from the LunarFlame-Website repository, appending the new entry, and copying it back along with the new blog post into the website repo. After some testing, it worked exactly as planned. Thus, "Adrian Cervera's Blog for Lunar Origination Tool" (a.k.a. "ACBLOT") was complete!</p>
                </div>
                <p>Developing this project was a lot of fun, and in the process I learned a lot about how intrinsic pointers and memory management are to low-level programming. It has helped me become more aware of memory-consuming processes that I commonly deploy in higher level programming projects, such as Project Leo. This is only the beginning of my adventure with the C programming language; through both future classes I will take and an ongoing project with a friend to develop a video call app in C, I am sure that I will learn a lot more about becoming a better systems programmer.</p>
            </div>
            <hr class="blog-end">
            <?php require('../../../partials/recent-posts.php'); ?>
        </section>
        <?php require('../../../partials/footer.php'); ?>
    </div>
    <?php
        require('../../../partials/copyright.php'); 
        require('../../../partials/javascript.php');
    ?>
</body>
</html>
