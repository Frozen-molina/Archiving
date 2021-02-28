<?php 

require_once("include/initialize.php");
    $BOOKID = $_GET['bid'];
    $book = New Books();
    $singlebook = $book->single_book($BOOKID);

     $filename = "admin/capstone/".$singlebook->LOCATION;

    if (file_exists($filename)) {
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="'.basename($filename).'"');
        header('Content-Length: ' . filesize($filename));

        flush();
        readfile($filename);
        // delete file
        //unlink($filename);
    

    }

?>
