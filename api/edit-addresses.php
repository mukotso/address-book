<?php
require_once('db_connection.php');

$id = $_GET['id'];
try {
    if (is_numeric($id) == true) {
        $query = "SELECT * FROM addresses WHERE id=$id";
        $addressDetails = mysqli_query($db, $query);
    }
} catch (Exception $e) {
    $_SESSION['errors'] = "There was an error try again";
    header('Location: ../edit-address.php');
}


?>