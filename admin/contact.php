<?php require 'header.php' ?>
<?php require '../config.php' ?>
    <link rel="stylesheet" type="text/css" href="css/Searchname.css">
    <link rel="stylesheet" href="css/box.css">
<div class="user-dashboard">
<h1 style="text-align: center;">Contact</h1>

<section>
	<div class="row">
		<div class="col-md-12">
		  <form style="text-align: center;" action="insert/insert-portfolio.php" method="post" enctype="multipart/form-data">
		  	<input type="text" name="name" placeholder="ຄົ້າຫານຊື່.....">
		  </form>
		</div>
	</div>
</section>


   <table class="table table-hover" style="margin-top: 20px">
                            <tr style="background-color: #E3F2FD">
                            <th>ລຳດັບ</th>
                                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                <th>Facebook</th>
                                <th>ອີເມວ</th>
                                <th>ຂໍ້ຄວາມ</th>
                                <th>ລົບລາຍຊື່</th>
                            </tr>
                            <?php

$query = "SELECT * FROM `contact`" ;
$result = mysqli_query($conn, $query);
$rows=0;
if($result->num_rows > 0 ){
  while($row = $result->fetch_assoc()) {
    if ($rows == 0){
        echo "<div class='row'>";
     }
?>
                            <tr style="background-color: #ffffff">
                                <td><?php echo $row["ct_id"]; ?></td>
                                <td><?php echo $row["ct_name"]; ?></td>
                                <td><?php echo $row["ct_phone"]; ?></td>
                                <td><?php echo $row["ct_email"]; ?></td>
                                <td><?php echo $row["ct_post"]; ?></td>
                                <td><a href="insert/delete-contact.php? ct_id=<?php echo $row["ct_id"]; ?>">ລົບ</a></td>
                            </tr>


<?php
  if($rows == 3){
       echo '</div>';

       $rows = -1;
    }
    $rows++; ?>

  <?php } }?>
                            </table>

                            <?php require 'footer.php' ?>
