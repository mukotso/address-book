<?php
require_once('../api/db_connection.php');

$query = "SELECT * FROM addresses ";
$results = mysqli_query($db, $query);

$string = '<videos><updated>2022-06-10T00:00:00Z</updated><video>';

while($row=$results->fetch_assoc()) {
    $id=$row['id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $email=$row['email'];
    $street=$row['street'];
    $city=$row['city_id'];
    $zip_code=$row['zip_code'];
    $string .='<id>'.$id.'</id>';
    $string .='<first_name>'.$first_name.'</first_name>';
    $string .='<last_name>'.$last_name.'</last_name>';
    $string .='<email>'.$email.'</email>';
    $street .='<street>'.$street.'</street>';
    $zip_code .='<zip_code>'.$zip_code.'</zip_code>';
}
$string .='</video></videos>';
$xml = new SimpleXMLElement($string);
Header('Content-type: text/xml');
echo $xml->asXML();
?>