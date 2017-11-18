<?php require 'config.php' ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ຜູ່ໃຫ້ບໍລິການທາງດ້ານວຽກງານ Graphice Design ແລະ Website design">
    <meta name="author" content="laomodern-design">
    <meta name="keyword" content="ລາວ design">
    <link rel="icon" type="img/png" href="img/logoi.png" />

    <title>Modern-Jobs</title>
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
 

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> ເມນູ <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><!-- <img class="img-responsive" src="img/logohome.png" alt="" width="100%"> --><p style="text-shadow: 6px 3px 6px #424242;"><b style="color: #37474F;">Student </b>Jobs</p></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.php"></a>
                    </li>
                     <li class="page-scroll">
                        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>   ໜ້າຫຼັກ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php"><i class="fa fa-folder-open" aria-hidden="true"></i>   ບໍລິການ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php"><i class="glyphicon glyphicon-user"></i>   ກ່ຽວກັບພວກເຮົາ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php"><i class="glyphicon glyphicon-xbt"></i>   ອັດຕາຄ່າບໍລິການ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="cv.php"><i class="glyphicon glyphicon-file"></i>   ຝາກປະຫວັດຮັບວຽກເຮັດ</a>
                    </li>
                      <li class="page-scroll">
                        <a href="#"><i class="glyphicon glyphicon-comment"></i>   ບົດຄວາມ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php"><i class="glyphicon glyphicon-envelope"></i>   ຕິດຕໍ່</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

 <link rel="stylesheet" type="text/css" href="css/cv.css">

 <div class="container">
 	<div style="text-align: center;margin-top: 70px">
 	<h3><b>ບຸກຄົນຝາກປະຫວັດເພື່ອຮັບວຽກເຮັດທັງໝົດ</b></h3>
 	</div>
 </div><br>

    <div class="container">
		<div class="row">
			<div class="col-md-9 col-xs-12">

  <?php
     $query = "SELECT * FROM `user`" ;
  $result = mysqli_query($conn, $query);
  $rows=0;
  if($result->num_rows > 0 ){
    while($row = $result->fetch_assoc()) {
      if ($rows == 0){
          echo "";
       }
    ?>
				<ul class="event-list">
					<li>
						<img alt="Independence Day" src="<?php echo str_replace("../", "", $row["user_img"]); ?>" />
						<div class="info">
							<h2 class="title"  style="margin-top: 5px"><?php echo $row["user_name"]; ?> <a href="cvprofile.php?user_id=<?php echo $row["user_id"]; ?>">( ຂໍ້ມູນຜູ່ກ່ຽວ )</a></h2>
							<p class="desc">ທີ່ຢູ່: <?php echo $row["user_ban"]; ?></p>
							<p class="desc">ຮັບວຽກ: <?php echo $row["user_work"]; ?></p>
                            <p class="desc">ສາຂາຮຽນ: <?php echo $row["user_study"]; ?></p>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>
				</ul>
                  <?php
    if($rows == 5){
         echo '</div>';

         $rows = -1;
      }
      $rows++; ?>

    <?php } }?>
			</div>

            <div class="col-md-3 hidden-xs">
               <div class="well">
                   <center><a href="register_cv.php" target="_blank" class="btn btn-info">ລົງທະບຽນຝາກຊີວະປະຫວັດ</a></center>
               </div>
           </div>
           <div class="col-md-3 hidden-xs">
               <div class="well">
                   <center><img src="img/logo.png" class="img-responsive"></center>
               </div>
           </div>
           <div class="col-md-3 hidden-xs">
               <div class="well">
                   <center><img src="img/bcelone.png" class="img-responsive"></center>
                    <center><img src="img/bcel.jpg" class="img-responsive img-rounded"></center>
               </div>
           </div>

		</div>
	</div>
    <div class="container">
      
    </div>

<?php require 'footer.php'; ?>
