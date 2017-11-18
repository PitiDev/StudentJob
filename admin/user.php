<?php require 'header.php' ?>
<?php require '../config.php' ?>
<link rel="stylesheet" type="text/css" href="css/Searchname.css">
<h1 style="text-align: center;">User-Admin</h1>

<section>
	<div class="row">
		<div class="col-md-12">
		  <form style="text-align: center;" action="insert/insert-admin.php" method="post" enctype="multipart/form-data">
		  	<input type="text" name="username" placeholder="User" required>
		  	<input type="email" name="email" placeholder="E-mail" required>
		  	<input type="password" name="password" placeholder="Password" required>
		  	 <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-check-circle-o" aria-hidden="true"></i>     ເພີ່ມ Admin</button>
		  </form>
		</div>
	</div>
</section>

<table class="table table-bordered" style="margin-top: 60px">
  <tr>
    <th>No</th>
    <th>User</th>
    <th>E-mail</th>
    <th>password</th>
    <th>Edite</th>
    <td>Delete</td>
  </tr>

	<?php

	$query = "SELECT * FROM `admin`" ;
	$result = mysqli_query($conn, $query);
	$rows=0;
	if($result->num_rows > 0 ){
	  while($row = $result->fetch_assoc()) {
	    if ($rows == 0){
	        echo "<div class='row'>";
	     }
	?>


  <tr>
  	<td><?php echo $row["user_id"]; ?></td>
  	<td><?php echo $row["username"]; ?></td>
  	<td><?php echo $row["email"]; ?></td>
  	<td><?php echo $row["password"]; ?></td>
    <td  style="text-align: center;"><a href="edite/edit-admin.php">ແກ້ໄຂ</a></td>
    <td  style="text-align: center;"><a href="insert/delete-admin.php? user_id=<?php echo $row["user_id"]; ?>">ລົບ</a></td>
  </tr>

	<?php
  if($rows == 3){
       echo '</div>';
       $rows = -1;
    }
    $rows++; ?>

  <?php } }
  ?>
</table>

<?php require 'footer.php' ?>
