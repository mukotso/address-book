<?php
try {
    // connect to database
    $db = mysqli_connect('localhost', 'root', '', 'address_book');
    session_start();
    $_SESSION['errors']="";
    $_SESSION['success']="";

} catch (Exception $e) {
    http_response_code(500);
    die('Error establishing connection with database');
}
?>
