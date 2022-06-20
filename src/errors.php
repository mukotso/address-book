<?php
if(isset ($_SESSION['errors'])):
    ?>
    <div class=" alert alert-danger" role="alert">
        <?php
        $msgs=$_SESSION['errors'];

        echo $msgs;

        unset($_SESSION['errors']);
        ?>
    </div>
<?php endif ?>
