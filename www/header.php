<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="all,follow" />

    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="custom books, personalized books, custom printed books, books, custom literature, literature, custom classics, book gifts" />

    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
    
    <link rel="stylesheet" type="text/css" href="css/added.css" />
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
    
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    
    <script type="text/javascript" src="scripts/cart_tweaks.js"></script>

    <title><?php echo $title ?>Custom Personalized Classic Books - Radish Books</title>
</head>
<body>
<div id="main">
    <div id="header">
        <h1 id="logo"><a href="./" title="Radish Books"><img src="images/logo_header.png" alt="" /></a></h1>
        <hr class="noscreen" />
        <div id="nav">
            <a href="./"<?php echo_nav_location("home")?>>Home</a> <span>|</span>
            <a href="books.php"<?php echo_nav_location("books")?>>Books</a> <span>|</span>
            <a href="about.php"<?php echo_nav_location("about")?>>About Radish</a> <span>|</span>
            <a href="#">Support</a> <span>|</span>
            <a href="contact.php"<?php echo_nav_location("contact")?>>Contact</a>
        </div>
    </div> <!-- /header -->
    
    <div id="tray">
        <ul>
            <li<?php echo_tray_location("home")?>><a href="./">Home</a></li>
            <li<?php echo_tray_location("books")?>><a href="books.php">Books</a></li>
            <li<?php echo_tray_location("printing")?>><a href="printing.php">Printing Process</a></li>
            <li<?php echo_tray_location("about")?>><a href="about.php">About Radish</a></li>
            <li<?php echo_tray_location("samples")?>><a href="samples.php">Samples</a></li>
            <li><a href="books.php">Purchase</a></li>
        </ul>
        
        <!--<div id="search" class="box">
            <form action="#" method="get">
                <div class="box">
                    <div id="search-input"><span class="noscreen">Search:</span><input type="text" size="30" name="" value="Search" /></div>
                    <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>
        </div> --> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->
