<?php require 'login.php' ?>

    <link rel="stylesheet" type="text/css" href="style_login.css">
    <link rel="stylesheet" type="text/css" href="lao/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.main.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<div class="signin-form">
	<div class="container">
       <form class="form-signin" method="post" id="login-form">

        <h2 class="form-signin-heading" style="text-align:center">ເຂົ້າສູ່ລະບົບ</h2><hr />

        <?php
		if(isset($msg)){
			echo $msg;
		}
		?>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>

     	<hr />

        <div class="form-group">
          <center>
						<button type="submit" class="btn btn-info" name="btn-login" id="btn-login">
							<span class="glyphicon glyphicon-log-in"></span> &nbsp; ເຂົ້າສູ່ລະບົບ
					 </button>
					</center>
            <!-- <a href="register.php" class="btn btn-default" style="float:right;">Sign In</a> -->
        </div>
      </form>
    </div>
</div>

