<?php

include "radish_lib.php";

$title = "Custom Personalized Book Selection - ";
$location = "books";
$description = "Radish Books lets you put you and your friends in classic literature, right in the middle of the action. Re-experience Pride and Prejudice, except this time the love story is about you. Solve amazing mysteries as Sherlock Holmes, or give your friend a copy of Jane Eyre where she&rsquo;s the star!";

include "header.php";

?>

<!-- Promo -->
<div id="col-top"></div>
<div id="col" class="box">
    <div id="col-showcase"><a href="book.php?book=sherlock_holmes"><img src="books/sherlock_holmes/sherlock_holmes_cover_110.png" alt="The Adventures of Sherlock Holmes" /></a></div> 
    <div id="col-text">
        <h2 id="slogan">The Adventures of Sherlock Holmes</h2>
        <p>The brilliant Sherlock Holmes will charm you as he and his partner Watson solve mysteries throughout London. Rename Holmes, his love interest Irene Adler, and Watson!</p>
        <p id="btns">
            <a href="book.php?book=sherlock_holmes"><img src="design/btn-tell.gif" alt="" /></a>
            <a href="book.php?book=sherlock_holmes"><img src="design/btn-purchase.gif" alt="" /></a>
        </p>
    </div> <!-- /col-text -->
</div>
<div id="col-bottom"></div>

<div id="col-top"></div>
<div id="col" class="box">
    <div id="col-showcase"><a href="book.php?book=pride_and_prejudice"><img src="books/pride_and_prejudice/pride_and_prejudice_cover_110.png" alt="Pride and Prejudice" /></a></div> 
    <div id="col-text">
        <h2 id="slogan">Pride and Prejudice</h2>
        <p><u>Pride and Prejudice</u> follows Elizabeth Bennet as she learns about manners, marriage, and morals in 19th century England. Miss Bennet falls for Mister Darcy, a charming gentlemen visiting town. Replace Mister Darcy and Elizabeth Bennet!</p>
        <p id="btns">
            <a href="book.php?book=pride_and_prejudice"><img src="design/btn-tell.gif" alt="" /></a>
            <a href="book.php?book=pride_and_prejudice"><img src="design/btn-purchase.gif" alt="" /></a>
        </p>
    </div> <!-- /col-text -->
</div>
<div id="col-bottom"></div>
    
<div id="col-top"></div>
<div id="col" class="box">
    <div id="col-showcase"><a href="book.php?book=jane_eyre"><img src="books/jane_eyre/jane_eyre_cover_110.png" alt="Jane Eyre" /></a></div> 
    <div id="col-text">
        <h2 id="slogan">Jane Eyre</h2>
        <p>A darker novel following the trials and tribulations of an orphan, <u>Jane Eyre</u> has a strong sense of morality as we watch Jane grow older and fall in love. Replace Jane and her beloved Mr. Rochester.</p>
        <p id="btns">
            <a href="book.php?book=jane_eyre"><img src="design/btn-tell.gif" alt="" /></a>
            <a href="book.php?book=jane_eyre"><img src="design/btn-purchase.gif" alt="" /></a>
        </p>
    </div> <!-- /col-text -->
</div> <!-- /col -->
<div id="col-bottom"></div>

<hr class="noscreen" />

<? include "footer.php" ?>
