<?

$title = "The Adventures of Sherlock Holmes - ";
$location = "books";
$description = "Completely custom printed Sherlock Holmes by Sir Arthur Conan Doyle. Replace Sherlock Holmes and Watson with yourself and friends!";

include "header.php";

?>

<!-- Promo -->
<div id="col-top"></div>
<div id="col" class="box">
    <div id="col-showcase" class="book_image"><a href="#"><img src="books/sherlock_holmes/sherlock_holmes_cover.png" alt="The Adventures of Sherlock Holmes" /></a></div> 
    <div id="col-text">
        <h2 id="slogan">The Adventures of Sherlock Holmes</h2>
        <p>The brilliant Sherlock Holmes will charm you as he and his partner Watson solve mysteries throughout London. Take Sir Arthur Conan Doyle's classic and rename Holmes, his love interest Irene Adler, and Watson!</p>

        <div id="stylized" class="customizations_form product">
            <form id="form" name="form">
                <input type="hidden" class="product-title" value="Sherlock Holmes" />
                <input type="hidden" class="product-price" value="29.99" />
                <input type="hidden" class="product-image" value="http://radishbooks.com/books/sherlock_holmes/sherlock_holmes_cover_110.png" />
                
                <h1>Order Custom Sherlock Holmes</h1>
                <p>Let us know what you want changed in <u>The Adventures of Sherlock Holmes</u>. Leave anything blank to leave it unmodified from the original text.</p>
                
                <fieldset>
                    <legend>Sherlock Holmes</legend>
                    <p>Sherlock Holmes is the male protagonist.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="holmes_first_name">First Name</label></td>
                            <td><label for="holmes_last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Sherlock"</td>
                            <td>"Holmes"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-holmes_first_name" name="holmes_first_name" /></td>
                            <td><input class="product-attr-holmes_last_name" name="holmes_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                
                <fieldset>
                    <legend>Irene Adler</legend>
                    <p>Sherlock Holmes is in love with Irene Adler.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="irene_first_name">First Name</label></td>
                            <td><label for="irene_last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Irene"</td>
                            <td>"Adler"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-irene_first_name" name="irene_first_name" /></td>
                            <td><input class="product-attr-irene_last_name" name="irene_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                
                <fieldset>
                    <legend>Watson</legend>
                    <p>Watson is Holmes' crime-solving sidekick.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="watson_last_name">Last Name</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Watson"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-watson_last_name" name="watson_last_name" /></td>
                        </tr>
                    </table>
                </fieldset>
                
                <fieldset>
                    <legend>221B Baker Street</legend>
                    <p>Holmes lives at 221B Baker Street, London.</p>
                    <table class="customizations">
                        <tr class="replacement_name">
                            <td><label for="baker_street_name">Residence Name</label></td>
                            <td><label for="baker_street_number">Residence Number</label></td>
                        </tr>
                        <tr class="replacement_example">
                            <td>"Baker Street"</td>
                            <td>"221B"</td>
                        </tr>
                        <tr>
                            <td><input class="product-attr-baker_street_name" name="baker_street_name" /></td>
                            <td><input class="product-attr-baker_street_number" name="baker_street_number" /></td>
                        </tr>
                    </table>
                </fieldset>
                
                <label>Book Style
                    <span class="small">Type of Book</span>
                </label>
                <select class="product-book_type">
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