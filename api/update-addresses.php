<?php
require_once('db_connection.php');

if (isset($_POST['update_address'])) {
    try{
        // receive all input values from the form
        $id = mysqli_real_escape_string($db, $_POST['id']);
        $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $street = mysqli_real_escape_string($db, $_POST['street']);
        $city_id = mysqli_real_escape_string($db, $_POST['city_id']);
        $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);

        // validate $id against a whitelist
        if (is_numeric($id) == true) {
            $query = "UPDATE addresses
        SET first_name='$first_name', last_name='$last_name', email='$email', street='$street', city_id='$city_id', zip_code='$zip_code'
        WHERE id =  $id";
        }
        if (mysqli_query($db, $query)) {
            $_SESSION['success'] = "You have Successfully updated address";
            header('Location: index.php');
        } else {
            $_SESSION['errors'] = "There was an error please try again";
            header('Location: edit-address.php');
        }
    }catch(Exception $e){
        $_SESSION['errors'] = "Error processing bad or malformed request";
        header('Location: edit-address.php');
    }

}

?>