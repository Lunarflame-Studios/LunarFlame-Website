<!DOCTYPE html>
<html>

<head>
    <?php
        require('../../../partials/server.php');
        $currentPost = Blog::getPost("My Curiosity Moment");
        $currentPost->createHead();
    ?>
</head>

<body>
    <div class="background">
        <?php getHeader(); ?>

        <section class="page-body">
            <?php
                echo OVERLAY;
                $currentPost->createBlogTitle();
                $currentPost->createSubInfo();
            ?>

            <div class="blog-pageBody">
                <?php $currentPost->createDescription(); ?>
                <div>
                    <h2 class="subheader">1. You are part of the story.</h2>
                    <p>Books and movies can do good jobs establishing worlds and giving them life. But I think that video games excel here by making you a part of the world. You control a character, and you interact with other characters and the world around you. The stakes are more intense because now you want to preserve the world that you are so immersed in. You want to become stronger, explore, and discover more about the world through your own observations.</p>
                </div>
                <hr class="blog-break">

                <div>
                    <h2>Xenoblade Chronicles</h2>
                    <p>This is one of my favorite series of all time. The 3 games span across 2 universes, and detail the struggles of different groups of characters as they fight against a pre-determined fate and discover the meaning of human existence. </p>
                    <?php carousel(googleDrive("1K-Y7hHQ7OczR-_nLGg6WqLlTn1pEmMs2"), googleDrive("1cP5WXow4ZLB6oyStvwvW50VW26TzWhez"), googleDrive("1OpAtiqu_SzFcNLqAmmlDfFpjINqRXTuW"), googleDrive("1E6uOh7Krcs--Sr4o9F7nwwU-q8U-0uDV"), googleDrive("13CdX4NhQlgI43ujCvDEKeq7lwtfX7Ur6"), googleDrive("1X8I_gPa3xWgDCcMMWDfA2c8jhOS2A_5e"), googleDrive("13KKOeipjWuRwFDAKzvr5Q7I-dFjYlTvI")); ?> 
                </div>

                <div>
                    <h2 class="subheader">2. Your decisions can alter the story.</h2>
                    <p>I think that video games are the perfect medium for the "choose-your-own-adventure" system. Although not many titles that I have played do this, there are some, such as Octopath Traveler and Live-A-Live. However, some games take a more interesting approach; there is one clear storyline, but some player decisions can lead to early endings, or "bad endings." This style is unique because it doesn't force the player's hand, but rather gives them more freedom and lets them reconcile with their actions.</p>
                </div>
                <hr class="blog-break">

                <div>
                    <h2>NieR: Automata</h2>
                    <p>NieR: Automata is an open-world game set in a post-apocalyptic Earth that has been taken over by aliens and their force of machines. A special squadron of androids, known as YorHa, is tasked with defeating them. NieR: Automata is famous for having 26 different endings. However, only 5 of those endings are canonical. The rest are a result of the player choosing or failing to complete important story objectives.</p>
                    <?php carousel(googleDrive("1Qm8lziXK4L4uBMwY249qnFBqRwSbvdwy"), googleDrive("1-cop4RzffPPcn_UoCxe878Z7Yl_b99Av"), googleDrive("1G9kU1Sy55Ruminz2hdiUdUe3fjX3_JFi"), googleDrive("1A39-D_SuJ0P1VMNCka6jVhjEVkaQvVfW")); ?>
                </div>

                <div>
                    <h2 class="subheader">3. There is more artistic expression.</h2>
                    <p>Some video games can capture and define their own unique identity through visuals, artwork, and music. Doing so makes the themes and motifs of the game more memorable. Animation and graphics can bring worlds to life and create detailed characters that may not be as easy to portray through just words.</p>
                </div>
                <hr class="blog-break">

                <div>
                    <h2>Persona 5 Royal</h2>
                    <p>Persona 5 takes place in Tokyo, Japan, and centers around a high-school student who goes by the codename "Joker." His reputation was ruined after being falsely accused of a crime. After discovering a world called the Metaverse, where the corrupted cognitions of people manifest, he uncovers a special power known as a Persona. He forms a group called the Phantom Thieves of Hearts, Persona-users who traverse the metaverse and defeat the shadows of the malevolent adults to make them repent for their sins in the real world.</p>
                    <?php carousel(googleDrive("16qPwBv3VjSKhtkxntmKAwcEJmp8F03bJ"), googleDrive("1agGjOY4eFNRrG6IgWESpYvyzi5sNNdbf"), googleDrive("1CIazfobGQu3bKhdhGjAX_7Y9BnSqBV0P"), googleDrive("1EYORweCsFFgYHtuD51Vce2PD0lAuUGw7")); ?>
                </div>

                <div>
                    <h2 class="subheader">4. Images can evoke strong emotions.</h2>
                    <p>Not all stories have to have incredibly complex storylines or plot twists to be powerful. Sometimes simplicity is key and works all the same. However, simplicity alone doesn't attract an audience, which is why video games can make simple stories work. Beautiful graphics, music, and world-building can make a game memorable.</p>
                </div>
                <hr class="blog-break">

                <div>
                    <h2>Ori and the Blind Forest</h2>
                    <p>Ori and the Blind Forest takes place in the forest of Nibel, which is withering away without the influence of its great Spirit Tree. Ori, a guardian spirit, fell from the tree as a newborn and was taken in by a creature named Naru, who raised Ori as her own. The decaying of the Great Tree causes a famine in the forest, and Naru dies of starvation to feed her child. Afterwards, Ori meets a small spirit named Sein, who guides Ori on a journey to restore the forest.</p>
                    <p>The sequel, Will of the Wisps, takes place in the forest of Niwen, where Ori and his owl friend Ku have been stranded and separated after an accident in a storm. Like Nibel, Niwen is in decay after the deterioration of its great tree. Ori must traverse and restore the land of Niwen in order to rescue Ku.</p>
                    <?php carousel(googleDrive("1nfK0kka8CZfQWPL5lOOGaflFrt3kswQj"), googleDrive("1NB4EgXaeCmrOl5JnwZIT8JD8BQdBetEj"), googleDrive("1MEFAzobR0-pnlEqbwjPOr0THhDydwdWU"), googleDrive("1QXGWALTSB_wo_MD4JzGCDAVNOltj9sIj"), googleDrive("1J3l36pUYvM48uBuzgdS-C2rV38V5dtoS"), googleDrive("1lzF2JFVdAAbRqqJNkSz5UlGNL0A0jhvU")); ?>
                </div>

                <div>
                    <h2 class="subheader">5. A great story doesn't have to be explicitly told.</h2>
                    <p>Going back to the theme of open-world and being immersed in the story, sometimes stories don't have to be directly in your face. Some great stories are left untold, to be discovered or interpreted by the player. Games like Sky: Children of the Light and Minecraft have very subtle stories that may even fly under some players' heads. But those who have an open mind and are open to interpretation may observe the subtle complexities of these games.</p>
                </div>
                <hr class="blog-break">

                <div>
                    <h2>Minecraft</h2>
                    <p>Minecraft is an open-world sandbox game in which the entire world is made of blocks. Players can choose to play in Creative Mode, where they have unlimited building materials and completely free movement, or Survival Mode, where players must gather materials, food, and tools, survive against monsters, and traverse different dimensions.</p>
                    <?php carousel(googleDrive("1m2za6Ob_bQJTxHFv6xVy4z9ld_Z-vL3N"), googleDrive("1P8qXZR7k7rJrSDlLneQbqbDI_9UgUgVz"), googleDrive("1YBCZSznlxjZE5sSoBQCiHzfzZBh2mW4b"), googleDrive("1js7O111d_xkZbf9OfTI-3iOLiDoabAGE")); ?>
                </div>

                <p>All of these games have influenced me in profound ways. From provoking my creativity to posing existential and philosophical questions, I truly believe that video games are overlooked as forms of storytelling, both by younger audiences that downplay them as mere entertainment, or by older audiences that consider them mind-numbing wastes of time. I hope that through our own endeavors to create games, we can change the minds of people who pass off these remarkable experiences.</p>
            </div>
            <hr class="blog-end">
            <?php getRecentPosts(); ?>
        </section>
        <?php getFooter(); ?>
    </div>
    <?php endPage(); ?>
</body>

</html>
