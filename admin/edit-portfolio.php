<?php require 'header.php';
      require '../config.php';
 ?>


 <?php

 $p_id = $_GET['p_id'];
 $query = "SELECT * FROM portfolio WHERE p_id='$p_id'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC );
  ?>

<div class="" style="text-align:center">
  <h2>ແກ້ໄຂຂໍ້ມູນ</h2>
</div>
    <div class="col-md-8" style="margin-left:200px">
      <form  action="insert/update-portfolio.php" method="post">
        <input type="text" class="form-control" name="p_id" value="<?php echo $row["p_id"]; ?>">
        <br>
        <input type="text" class="form-control" name="p_name" value="<?php echo $row["p_name"]; ?>">
        <br>
        <input type="text" class="form-control" name="p_post" value="<?php echo $row["p_post"]; ?>">
        <br>
        <input type="file"  name="p_img" value="<?php echo $row["p_img"]; ?>" name="img_menu"   accept="image/*">
         <br>
         <img src="<?php echo '/' . str_replace("../", "", $row["p_img"]); ?>"  alt="Responsive image" class="img-thumbnail">
         <br>
         <hr>
         <input type="hidden" name="p_id" value="<?php echo $row["p_id"]; ?>">
        <center>
          <button type="submit" name="submit" class="btn btn-info"><h2>ອັບເດດ</h2></button>
        </center>
      </form>
    </div>




 <?php require 'footer.php' ?>
