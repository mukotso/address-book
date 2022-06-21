<?php
require_once('db_connection.php');

$query = "SELECT * FROM cities ";
if(mysqli_query($db, $query)){
    $cities = mysqli_query($db, $query);
}else{
    $_SESSION['errors'] = "There was an error try again";
    header('Location: ../add-address.php');
}


?>