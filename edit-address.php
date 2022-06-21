<?php require_once('common/header.php'); ?>
<?php require_once('api/edit-addresses.php'); ?>
<?php require_once('api/update-addresses.php'); ?>
<?php require_once('api/cities.php'); ?>

<div class="text-center">
    <a href="index.php" class="btn btn-sm mb-2 btn-green"> VIEW ALL ADDRESSES
    </a>

    <?php require_once('common/success.php'); ?>
    <?php require_once('common/errors.php'); ?>
</div>
<div class="row container">


    <div style="background-color:white;" class="card offset-lg-3  col-lg-6 offset-md-3 col-md-6  col-sm-12">
        <div class="card-header">
            <h5 class="text-center">EDIT ADDRESS DETAILS</h5>
        </div>
        <div class="card-body">
            <?php require_once('common/success.php'); ?>
            <?php require_once('common/errors.php'); ?>

            <?php
            while ($rows = $addressDetails->fetch_assoc())
            {
            ?>
            <form action="edit-address.php" method="POST">
                <div class="form-group">
                    <label for="first_name" class="col-form-label text-md-right">First name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="first name" required value="<?php echo $rows['first_name'];?>">
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-form-label text-md-right">Last name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last name" required value="<?php echo $rows['last_name'];?>">
                </div>


                <div class="form-group">
                    <label for="email" class="col-form-label text-md-right">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email@gmail.com" required value="<?php echo $rows['email'];?>">
                </div>

                <div class="form-group">
                    <label for="street" class="col-form-label text-md-right">Street</label>
                    <input type="text" class="form-control" name="street" required  value="<?php echo $rows['street'];?>">
                </div>

                <div class="form-group">
                    <label for="zip_code" class="col-form-label text-md-right">Zip code</label>
                    <input type="number" class="form-control" name="zip_code" placeholder="30-4000" required value="<?php echo $rows['zip_code'];?>">
                </div>

                <div class="form-group">
                    <label for="city"class="col-form-label text-md-right">City</label>

                    <select  name="city_id" class="form-control" required>
                        <option value="" >Select city</option>
                        <?php

                        while($row=$cities->fetch_assoc())
                        {
                            ?>
                            <option
                                    <?php
                                    if($rows['city_id'] == $row['city_id']) {
                                        echo 'selected';
                                    }
                                    ?>
                                    value=<?php echo($row['city_id']);?> ><?php echo($row['name']);?></option>
                            <?php
                        }
                        ?>
                    </select>

                </div>

                <input class="d-none" name="id"  value="<?php echo $rows['id'];?>">


                <div class="card-footer">
                    <button   type="submit" name="update_address" class="btn btn-md btn-green">SAVE </button>
                </div>
            </form>
            <?php
            }
            ?>
        </div>

    </div>

</div>
</body>
</html>
