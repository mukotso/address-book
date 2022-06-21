<?php require_once('common/header.php');?>
<?php require_once('api/addresses.php'); ?>

<div class="text-center" >
    <a href="add-address.php" class="btn btn-sm mb-2 btn-green"><span class="fa fa-plus-circle"> </span> New address </a>
    <a href="exports/xml.php" class="btn btn-sm mb-2 btn-success"> Export to XML</a>
    <a  href="exports/json.php" class="btn btn-sm mb-2 btn-secondary"> Export to JSON</a>
</div>
<div id='app'>
    <div class="container">
                <?php include_once('common/success.php'); ?>
                <?php include_once('common/errors.php'); ?>

        <?php
        while($rows=$addresses->fetch_assoc())
        {
            ?>
            <div class="card">
                <h5><span class="fa fa-user"> </span> <b class="ml-3"><?php echo $rows['first_name'];?>   <?php echo $rows['last_name'];?></b></h5>
                <p>Email: <?php echo $rows['email'];?></p>
                <p>Street: <?php echo $rows['street'];?></p>
                <p>Zip-code/City: <?php echo $rows['zip_code'];?> - <?php echo $rows['name'];?></p>
                <a href="edit-address.php?id=<?php echo $rows['id'];?>" name="edit_address" type="submit" class="btn btn-sm mb-2" style="background-color:#00a082; color:white;">Edit details</a>
            </div>

            <?php
        }
        ?>

    </div>


    </br>


</div>

</div>


</body>
</html>
