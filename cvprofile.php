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
                <a class="navbar-brand" href="#page-top"><p style="text-shadow: 6px 3px 6px #424242;"><b style="color: #37474F;">Student </b>Jobs</p></a></a>
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
 <?php

 $user_id = $_GET['user_id'];
 $query = "SELECT * FROM user WHERE user_id='$user_id'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC );

  ?>
  <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
    <div class="container" style="margin-top: 120px">
      <div class="col-md-6">
        <div class="well" style="text-align: center;">
          <img class="img-responsive" src="<?php echo str_replace("../", "", $row["user_img"]); ?>">
        </div>
      </div>
       <div class="col-md-6">
        <div class="well">
          <p><b>ຊື່ ແລະ ນາມສະກຸນ : </b><?php echo $row["user_name"]; ?></p>
          <p><b>ຮັບວຽກ :</b><?php echo $row["user_work"]; ?></p>
          <p><b>ສາຂາຮຽນ :</b><?php echo $row["user_study"]; ?></p>
          <p><b>ທີ່ຢູ່ :</b><?php echo $row["user_ban"]; ?></p>
          <p><b>Facebook :</b><?php echo $row["user_facebook"] ?></p>
          <p><b>Mail :</b><?php echo $row["user_email"] ?></p>
          <p><b>Phone :</b><?php echo $row["user_phone"] ?></p>
          <p><b>ກ່ຽວກັບຕົນເອງ :</b><?php echo $row["user_text"] ?></p>
          <p><b>ສິ່ງທີ່ມັກ :</b><?php echo $row["user_love"] ?></p>
        </div>
      </div>
	</div>

<?php require 'footer.php' ?>
