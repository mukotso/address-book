<?php
require_once ('db_connection.php');
session_start();
$first_name = "";
$last_name = "";
$email = "";
$street = "";
$city_id = "";
$zip_code = "";
$errors = array();



// ADD NEW  ADDRESS
if (isset($_POST['add_address'])) {
    // receive all input values from the form
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $street = mysqli_real_escape_string($db, $_POST['street']);
    $city_id = mysqli_real_escape_string($db, $_POST['city_id']);
    $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);


    // add address if there is no errors

        $query = "INSERT INTO addresses (first_name,last_name,email,street,city_id,zip_code) 
					  VALUES('$first_name','$last_name','$email','$street','$city_id','$zip_code')";

        if (mysqli_query($db, $query)) {

            $_SESSION['success_messages'] = "You have Successfully Created an address";
            header('Location: ../index.php');
        } else {
            $_SESSION['error_messages'] = "there was an error try again";
        }




}
        $query = "SELECT * 
        FROM addresses 
        INNER JOIN  cities ON addresses.city_id=cities.city_id";
        $addresses = mysqli_query($db, $query);


        ?>




