<?php

include "radish_lib.php";

$location = "home";
$description = "Radish Books lets you put you and your friends in classic literature, right in the middle of the action. Re-experience Pride and Prejudice, except this time the love story is about you. Solve amazing mysteries as Sherlock Holmes, or give your friend a copy of Jane Eyre where she&rsquo;s the star!";

include "header.php";

?>

<!-- Promo -->
<div id="col-top"></div>
<div id="col" class="box">

    <div id="ribbon"></div> <!-- /ribbon (design/ribbon.gif) -->
    
    <!-- Screenshot in browser (replace tmp/browser.gif) -->
    <div id="col-showcase"><a href="#"><img src="images/sample_books.png" alt="" /></a></div> 
    
    <div id="col-text">
        <h2 id="slogan">Custom Personalized Books</h2>
        <p>Radish Books lets you put you and your friends in classic literature, right in the middle of the action. Re-experience <u>Pride and Prejudice</u>, except this time the love story is about you. Solve amazing mysteries as Sherlock Holmes, or give your friend a copy of <u>Jane Eyre</u> where she&rsquo;s the star!</p>
        <p>Our books are custom printed with full color covers on beautiful paper just for you. Give the perfect gift or add a unique work to your bookshelf!</p>
        <p id="btns">
            <a href="about.php"><img src="design/btn-tell.gif" alt="Tell Me More" /></a>
            <a href="books.php"><img src="design/btn-purchase.gif" alt="Purchase" /></a>
        </p>

    </div> <!-- /col-text -->

</div> <!-- /col -->
<div id="col-bottom"></div>

<hr class="noscreen" />

<!-- 3 columns -->
<div id="cols3-top"></div>
<div id="cols3" class="box">
    <!-- Column I. -->
    <div class="col">
        <h3><a href="book.php?book=sherlock_holmes">Sherlock Holmes</a></h3>
        <p class="t-center"><a href="book.php?book=sherlock_holmes"><img src="books/sherlock_holmes/sherlock_holmes_cover_110.png" alt="The Adventures of Sherlock Holmes" class="cover" /></a></p>
        <div class="col-text">
            <p>The brilliant Sherlock Holmes will charm you as he and his partner Watson solve mysteries throughout London. Rename Holmes, his love interest Irene Adler, and Watson!</p>
            <ul class="ul-01">
                <li>Twelve Short Stories</li>
                <li>Mystery and Suspense</li>
                <li>Classic Crime Solving</li>
            </ul>
        </div> <!-- /col-text -->
        <div class="col-more"><a href="book.php?book=sherlock_holmes"><img src="design/cols3-more.gif" alt="" /></a></div>
    </div> <!-- /col -->

    <hr class="noscreen" />

    <!-- Column II. -->
    <div class="col">
        <h3><a href="book.php?book=pride_and_prejudice">Pride and Prejudice</a></h3>
        <p class="t-center"><a href="book.php?book=pride_and_prejudice"><img src="books/pride_and_prejudice/pride_and_prejudice_cover_110.png" alt="Pride and Prejudice" class="cover"/></a></p>
        <div class="col-text">
            <p><u>Pride and Prejudice</u> follows Elizabeth Bennet as she learns about manners, marriage, and morals in 19th century England. Miss Bennet falls for Mister Darcy, a charming gentlemen visiting town. Replace Mister Darcy, Elizabeth Bennet, and her sisters!</p>
            <ul class="ul-01">
                <li>Classic Romance Story</li>
                <li>19th Century England</li>
                <li>Intrigue!</li>
            </ul>
        </div> <!-- /col-text -->
        <div class="col-more"><a href="book.php?book=pride_and_prejudice"><img src="design/cols3-more.gif" alt="" /></a></div>
    </div> <!-- /col -->

    <hr class="noscreen" />

    <!-- Column III. -->
    <div class="col last">
        <h3><a href="book.php?book=jane_eyre">Jane Eyre</a></h3>
        <p class="t-center"><a href="book.php?book=jane_eyre"><img src="books/jane_eyre/jane_eyre_cover_110.png" alt="Jane Eyre" class="cover" /></a></p>
        <div class="col-text">
            <p>A darker novel following the trials and tribulations of an orphan, <u>Jane Eyre</u> has a strong sense of morality as we watch Jane grow older and fall in love. Replace Jane and her beloved Mr. Rochester.</p>
            <ul class="ul-01">
                <li>Classic Literature</li>
                <li>Engaging Plot</li>
                <li>Strong Social Commentary</li>
            </ul>
        </div> <!-- /col-text -->
        <div class="col-more"><a href="book.php?book=jane_eyre"><img src="design/cols3-more.gif" alt="" /></a></div>
    </div> <!-- /col -->

    <hr class="noscreen" />

</div> <!-- /cols3 -->
<div id="cols3-bottom"></div>

<? include "footer.php" ?>
