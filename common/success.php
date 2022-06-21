<?php
if( isset($_SESSION['success']) && $_SESSION['success'] != ""){
    ?>
    <div class=" alert alert-success" role="alert">
        <?php
        $msgs=$_SESSION['success'];
            echo $msgs;
        unset($_SESSION['success']);
        ?>
    </div>
<?php } ?>