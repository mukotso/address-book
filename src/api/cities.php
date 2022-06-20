<?php
require_once('db_connection.php');

$query = "SELECT * FROM cities ";
$cities = mysqli_query($db, $query);

?>