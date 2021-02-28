<?php

require_once("include/initialize.php");
$content = 'home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
    case '1' :
        $title = "Home";
        $content = 'home.php';
        break;
    case '2' :
        $title = "Capstone Projects and Title";
        $content = 'capstone.php';
        break;
    case '3' :
        $title = "About Us";
        $content = 'about.php';
        break;
    case '4' :
        $title = "Single Post";
        $content = 'single_post.php';
        break;
    case '5' :
        $title = "Contact";
        $content = 'contact.php';
        break;
    default :
        $title = "Home";
        $content = 'home.php';
}

require_once 'theme/officialTemp.php';
?>
