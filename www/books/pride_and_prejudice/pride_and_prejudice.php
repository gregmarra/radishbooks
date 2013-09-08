<?

$title = "Pride and Prejudice - ";
$location = "books";
$description = "Completely custom printed Pride and Prejudice by Jane Austen. Replace Elizabeth Bennet and Mister Darcy with yourself and friends!";

include "header.php";

?>

<!-- Promo -->
<div id="col-top"></div>
<div id="col" class="box">
    <div id="col-showcase" class="book_image"><a href="#"><img src="books/pride_and_prejudice/pride_and_prejudice_cover.png" alt="Pride and Prejudice" /></a></div> 
    <div id="col-text">
        <h2 id="slogan">Pride and Prejudice</h2>
        <p><u>Pride and Prejudice</u>, by Jane Austen, follows Elizabeth Bennet as she learns about manners, marriage, and morals in 19th century England. Miss Bennet falls for Mister Darcy, a charming gentlemen visiting town. Replace Mister Darcy and Elizabeth Bennet!</p>        
        <div id="stylized" class="customizations_form product">
            <form id="form" name="form">
                <input type="hidden" class="product-title" value="Pride and Prejudice" />
                <input type="hidden" class="product-price" value="29.99" />
                <input type="hidden" class="product-image" value="http://radishbooks.com/books/pride_and_prejudice/pride_and_prejudice_cover_110.png" />
                
                <h1>Order Custom Pride and Prejudice</h1>
                <p>Let us know what you want changed in <u>Pride and Prejudice</u>. Leave anything blank to leave it unmodified from the original text.</p>
                
                <fieldset>
                    <legend>Elizabeth Bennet</legend>
                    <p>Elizabeth Bennet is the female protagonist, who falls in love with Fitzwilliam Darcy.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="elizabeth_firstname">First Name</label></td>
                            <td><label for="elizabeth_nickname">Nickname</label></td>
                            <td><label for="elizabeth_last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Elizabeth"</td>
                            <td>"Lizzy"</td>
                            <td>"Bennet"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-elizabeth_first_name" name="elizabeth_first_name" /></td>
                            <td><input class="product-attr-elizabeth_nickname" name="elizabeth_nickname" /></td>
                            <td><input class="product-attr-elizabeth_last_name" name="elizabeth_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                
                <fieldset>
                    <legend>Fitzwilliam Darcy</legend>
                    <p>Fitzwilliam Darcy is the male protagonist.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="darcy_first_name">First Name</label></td>
                            <td><label for="darcy_last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Fitzwilliam"</td>
                            <td>"Darcy"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-darcy_first_name" name="darcy_first_name" /></td>
                            <td><input class="product-attr-darcy_last_name" name="darcy_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                
                <label>Book Style
                    <span class="small">Type of Book</span>
                </label>
                <select class="product-attr-book_type">
                    <option value="Paperback" googlecart-set-product-price="29.99" selected="selected">Paperback - $29.99</option>
                    <option value="Hardcover" googlecart-set-product-price="49.99">Hardcover - $49.99</option>
                </select>
                
                <div class="googlecart-add-button button" tabindex="0" role="button" title="Add to cart"></div>
                <div class="spacer"></div>
            </form>
        </div>
    </div> <!-- /col-text -->
</div>
<div id="col-bottom"></div>
<hr class="noscreen" />

<? include "footer.php" ?>