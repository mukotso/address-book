<?php require('src/header.php');?>
<?php include_once ('src/api/server.php'); ?>
<style>
    .container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 20px;

    }
    .container >.card{
        background-color: rgba(154, 235, 235, 0.855);
        padding: 15px;
    }
    .fa-user{
        font-size: 24px;
    }
    .btn-green{
        background-color:#00a082;
        color:white
    }
    .fa-plus-circle{
        color:#fff;
        font-size:25px;
    }
</style>
  <div class="text-center" >
      <a  href="src/add.php" class="btn btn-sm mb-2 btn-green"><span class="fa fa-plus-circle"> </span> New address
      </a>

      <a  href="src/exports/xml.php" class="btn btn-sm mb-2 btn-success"> Export to XML</a>

      <a  href="src/exports/json.php" class="btn btn-sm mb-2 btn-secondary"> Export to JSON</a>
</div>
<div id='app'>




    <div class="container">


        <?php include_once('src/success.php'); ?>
        <?php include_once('src/errors.php'); ?>

        <?php
        while($rows=$addresses->fetch_assoc())
        {

        ?>
        <div class="card">

            <h5><span class="fa fa-user"> </span> <b class="ml-3"><?php echo $rows['last_name'];?></b></h5>
                <p>Email: <?php echo $rows['email'];?></p>
                <p>Street: <?php echo $rows['street'];?></p>
                <p>Zip-code/City: <?php echo $rows['zip_code'];?> - <?php echo $rows['name'];?></p>

            <a href="src/edit.php?id=<?php echo $rows['id'];?>" name="edit_address"  type="submit"  class="btn btn-sm mb-2" style="background-color:#00a082; color:white;">Edit details</a>


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