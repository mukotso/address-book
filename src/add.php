<?php require('header.php');?>
<?php include_once ('api/server.php'); ?>
<?php include_once ('api/cities.php'); ?>
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
    <a  href="../index.php" class="btn btn-sm mb-2 btn-green"> VIEW ALL ADDRESSES
    </a>

    <?php include_once('success.php'); ?>
    <?php include_once('errors.php'); ?>
</div>
<div class="row container">



     <div style="background-color:white;" class="card offset-lg-3  col-lg-6 offset-md-3 col-md-6  col-sm-12">
       <div class="card-header">
<h5 class="text-center">ADD NEW ADDRESS</h5>
       </div>
       <div class="card-body">

        <form action="add.php" method="post">
          <div class="form-group">
            <label for="first_name"class="col-form-label text-md-right">First name</label>
                <input  type="text" class="form-control" name="first_name"placeholder="first name" required>
        </div>

        <div class="form-group">
          <label for="last_name"class="col-form-label text-md-right">Last name</label>
              <input  type="text" class="form-control" name="last_name"placeholder="Last name" required>
      </div>
        

      <div class="form-group">
        <label for="email"class="col-form-label text-md-right">Email</label>
            <input  type="email" class="form-control" name="email"placeholder="email@gmail.com" required>
    </div>

    <div class="form-group">
      <label for="street"class="col-form-label text-md-right">Street</label>
          <input  type="text" class="form-control" name="street" required>
  </div>

  <div class="form-group">
    <label for="zip_code"class="col-form-label text-md-right">Zip code</label>
        <input  type="number" class="form-control" name="zip_code"placeholder="30-4000" required>
</div>

<div class="form-group">
  <label for="city"class="col-form-label text-md-right">City</label>
  
      <select  name="city_id" class="form-control" required>
          <option value="" >Select city</option>
          <?php

          while($rows=$cities->fetch_assoc())
          {
              ?>
              <option value=<?php echo($rows['id']);?> ><?php echo($rows['name']);?></option>
              <?php
          }
          ?>
      </select>

</div>
        
<div class="card-footer">
  <button   type="submit" name="add_address" class="btn btn-md btn-green">SAVE </button>
 </div>
        </form>
       </div>
      
    </div>

</div>
</body>
</html>
