<?php
try {
    // connect to database
    $db = mysqli_connect('localhost', 'root', '', 'address_book');

} catch (Exception $e) {
    http_response_code(500);
    die('Error establishing connection with database');
}
?>