<?php require 'header.php' ?>
<?php require '../config.php' ?>
    <link rel="stylesheet" type="text/css" href="css/Searchname.css">
    <link rel="stylesheet" href="css/box.css">
<div class="user-dashboard">
<h1 style="text-align: center;">Service</h1>

<section>
	<div class="row">
		<div class="col-md-12">
		  <form style="text-align: center;" action="insert/insert-service.php" method="post" enctype="multipart/form-data">
		  	<input type="text" name="name" placeholder="ຊື່ບໍລິການ">
		  	<input type="text" name="post" placeholder="ລາຄາ + ກີບ">
		  	 <button id="chooseimg" class="btn btn-info"><a href=""><i class="fa fa-file-image-o" aria-hidden="true"></i>     ເລືອກຮູບ</a></button>

         <input type="file" name="img_menu" id="src_img" style="display: none;" accept="image/*">

		  	 <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-check-circle-o" aria-hidden="true"></i>     ເພີ່ມ</button>
		  </form>
		</div>
	</div>
</section>

<section >
 <div style="text-align: center; margin-top: 30px; background-color:#ffffff">
   <center>
     <div >
       <form style="margin-top:20px" >
       <input type="text" id="myInput" onkeyup="myFunction()" placeholder="ຄົ້ນຫາ.." title="Type in a name">

    </form>
     </div>
     <table class="table table-bordered"  id="myTable">
       <tr>
         <th>#</th>
         <th>ຊື່ບໍລິການ</th>
         <th>ຄຳອະທິບາຍ</th>
         <th>ຮູບພາບ</th>
         <th>ຈັດການ</th>
       </tr>

       <?php
          $query = "SELECT * FROM `service`" ;
       $result = mysqli_query($conn, $query);
       $rows=0;
       if($result->num_rows > 0 ){
         while($row = $result->fetch_assoc()) {
           if ($rows == 0){
               echo "<div class='row'>";
            }
         ?>

       <tr>
         <td><?php echo $row["s_id"]; ?></td>
         <td><?php echo $row["s_name"]; ?></td>
         <td><?php echo $row["s_post"]; ?></td>
         <td class="col-md-1"><img src="<?php echo '/' .  str_replace("../", "", $row["s_img"]); ?>" alt="Responsive image" class="img-responsive"></td>
         <td style="text-align:center">
           <a href="insert/delete-service.php? s_id=<?php echo $row["s_id"]; ?>">
           <i class="fa fa-times" aria-hidden="true"></i>ລົບ</a>
           |
           <a href="edit-service.php?s_id=<?php echo $row["s_id"]; ?>">
           <i class="fa fa-pencil" aria-hidden="true"></i>ແກ້ໄຂ</a>
         </td>
       </tr>

       <?php
         if($rows == 5){
              echo '</div>';

              $rows = -1;
           }
           $rows++; ?>

         <?php } }?>
     </table>
</center>
 </div>
</section>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


<script type="text/javascript">
  $('#chooseimg').click(function(e){
      $('#src_img').trigger('click');
      e.preventDefault();
  });
</script>

<?php require 'footer.php' ?>
