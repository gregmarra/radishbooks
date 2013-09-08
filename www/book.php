<?php

include "radish_lib.php";

$book = $_REQUEST["book"];
if (in_array($book, $AVAILABLE_BOOKS)) {
    include "books/" . $book . "/" . $book . ".php";
} else {
    header( 'Location: /' ) ;
}

?>