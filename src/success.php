<?php
if(isset ($_SESSION['success_messages'])):
    ?>
    <div class=" alert alert-success" role="alert">
        <?php
        $msgs=$_SESSION['success_messages'];

        echo $msgs;

        unset($_SESSION['success_messages']);
        ?>
    </div>
<?php endif ?>