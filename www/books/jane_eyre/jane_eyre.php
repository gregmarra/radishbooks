<?

$title = "Jane Eyre - ";
$location = "books";
$description = "Completely custom printed Jane Eyre by Charlotte Bront&euml;. Replace Jane Eyre and Mr. Rochester with yourself and friends!";

include "header.php";

?>

<!-- Promo -->
<div id="col-top"></div>
<div id="col" class="box">
    <div id="col-showcase" class="book_image"><a href="#"><img src="books/jane_eyre/jane_eyre_cover.png" alt="Jane Eyre" /></a></div> 
    <div id="col-text">
        <h2 id="slogan">Jane Eyre</h2>
        <p>A darker novel following the trials and tribulations of an orphan, <u>Jane Eyre</u> by Charlotte Bront&euml; has a strong sense of morality as we watch Jane grow older and fall in love. Replace Jane and her beloved Mr. Rochester.</p>
        
        <div id="stylized" class="customizations_form product">
            <form id="form" name="form">
                <input type="hidden" class="product-title" value="Jane Eyre" />
                <input type="hidden" class="product-price" value="29.99" />
                <input type="hidden" class="product-image" value="http://radishbooks.com/books/jane_eyre/jane_eyre_cover_110.png" />
                
                <h1>Order Custom Jane Eyre</h1>
                <p>Let us know what you want changed in <u>Jane Eyre</u>. Leave anything blank to leave it unmodified from the original text.</p>
                <fieldset>
                    <legend>Jane Eyre</legend>
                    <p>Jane Eyre is the protagonist of the novel and the title character.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="jane_eyre_first_name">First Name</label></td>
                            <td><label for="jane_eyre_full_first_name">Full First Name</label></td>
                            <td><label for="jane_eyre_last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Jane"</td>
                            <td>"Janet"</td>
                            <td>"Eyre"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-jane_eyre_first_name" name="jane_eyre_first_name" /></td>
                            <td><input class="product-attr-jane_eyre_full_first_name" name="jane_eyre_full_first_name" /></td>
                            <td><input class="product-attr-jane_eyre_last_name" name="jane_eyre_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Mr. Rochester</legend>
                    <p>Mr. Rochester makes an unfortunate first marriage before he meets Jane.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="rochester_first_name">First Name</label></td>
                            <td><label for="rochester_last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Edward"</td>
                            <td>"Rochester"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-rochester_first_name" name="rochester_first_name" /></td>
                            <td><input class="product-attr-rochester_last_name" name="rochester_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Mr. Brocklehurst</legend>
                    <p>Mr. Brocklehurst is the clergyman headmaster of a school whose mistreatment of the students is eventually exposed.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="brocklehurst-last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Brocklehurst"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-brocklehurst_last_name" name="brocklehurst_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                <label for="book_style">Book Style
                    <span class="small">Type of Book</span>
                </label>
                <select class="product-book_type" name="book_style">
                    <option value="Paperback" googlecart-set-product-price="29.99" selected="selected">Paperback - $29.99</option>
                    <option value="Hardcover" googlecart-set-product-price="49.99">Hardcover - $49.99</option>
                </select>
                
                <div class="googlecart-add-button button" tabindex="0" role="button" title="Add to cart"></div>
                <div class="spacer"></div>
            </form>
        </div>
        <p>Character descriptions <a href="http://en.wikipedia.org/wiki/Jane_Eyre#Characters">from Wikipedia</a>.</p>
    </div> <!-- /col-text -->
</div>
<div id="col-bottom"></div>
<hr class="noscreen" />

<? include "footer.php" ?>