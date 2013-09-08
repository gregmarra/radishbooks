<?

$AVAILABLE_BOOKS = array("sherlock_holmes","pride_and_prejudice","jane_eyre");

function echo_nav_location($test_location) {
    global $location;
    if ($location == $test_location) echo " id=\"nav-active\"";
}

function echo_tray_location($test_location) {
    global $location;
    if ($location == $test_location) echo " id=\"tray-active\"";
}


?>