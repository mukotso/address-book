<?php
require_once('../api/db_connection.php');

$query = "SELECT * FROM addresses ";
$results = mysqli_query($db, $query);
$addresses = $results->fetch_all(MYSQLI_ASSOC);

echo json_encode($addresses);
?>
