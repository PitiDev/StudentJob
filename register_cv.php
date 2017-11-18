    <?php require 'config.php' ?>
    <title>Register-Jobs</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/box.css">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="lao/style.css">

   <div class="well">
       <div style="text-align: center;">
            <h3 style="color: #64DD17"><b>ລົງທະບຽນຝາກຊີວະປະຫວັດ CV ຂອງນັກສືກສາເພື່ອຮັບວຽກເຮັດ</b></h3>
       </div>
   </div>

   <div class="">
       <div class="col-xs-12 col-md-6 ">
           <div class="well">
               <form action="insert/insert-cv.php" method="post" enctype="multipart/form-data">
               <label>ຊື່ ແລະ ນາມສະກຸນ</label><br>
               <input type="text" name="name" class="form-control" placeholder="ຊື່ ແລະ ນາມສະກຸນ" required>
               <label>ທີ່ຢູ່</label><br>
               <input type="text" name="ban" class="form-control" placeholder="ທີ່ຢູ່" required>
               <label>ວຽກທີ່ຮັບເຮັດ</label><br>
               <input type="text" name="work" class="form-control" placeholder="ວຽກທີ່ຮັບເຮັດ" required>
               <label>ຄະນະສາຍຮຽນ</label><br>
               <input type="text" name="study" class="form-control" placeholder="ສາຂາຮຽນ">
               <label>Facebook</label><br>
               <input type="text" name="facebook" class="form-control" placeholder="ຊື່ Facebook" required>
               <label>Email</label><br>
               <input type="email" name="email" class="form-control" placeholder="email" required>
               <label>ເບີໂທ ຫຼື Whatsapp</label><br>
               <input type="text" name="phone" class="form-control" placeholder="ເບີໂທລະສັບ" required>
               <label>ອະທິບາຍກ່ຽວກັບຕົນເອງ</label>
               <textarea class="form-control" name="text" rows="3" placeholder="ອະທິບາຍກ່ຽວກັບຕົນເອງ" required></textarea>
               <label>ສິ່ງທີ່ເຈົ້າມັກເຮັດ</label>
               <textarea class="form-control" name="love" rows="3" placeholder="ສິ່ງທີ່ເຈົ້າມັກເຮັດ" required></textarea>
               <label>ເລັກບັນຊີທະນາຄານ</label><br>
               <input type="text" name="money" class="form-control" placeholder="ເລກບັນຊີທະນາຄານ" required>
               <label>ຮູບໂປຣຟຣາຍ</label><br><br>
               <input type="file" name="img_menu" id="src_img" required><br>
               <img src="img/profile.png" width="20%">
               <button class="btn btn-info" style="margin-left: 100px"><h2>ລົງທະບຽນ</h2></button>
               
           </form>
           </div>
       </div>

<div class="col-md-6 col-xs-12">
  <div class="img-thumbnail">
    <center><img src="img/logo.png" class="img-responsive"></center>
  </div>
</div>
<div class="col-md-6 col-xs-12">
  <div class="img-thumbnail">
    <img src="img/bcel.jpg" class="img-responsive">
  </div>
</div>
</div>