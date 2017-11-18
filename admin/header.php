<!DOCTYPE html PUBLIC>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="lao/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.main.js"></script>

</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
 <?php require 'admin.php'; ?>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="index.html"><img src="img/admin.png" alt="merkery_logo" class="img-circle">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                        <li ><a href="student-cv.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Student-Jobs</span></a></li>
                        <li ><a href="post.php"><i class="fa fa-pencil" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Post</span></a></li>
                        <li><a href="portfolio.php"><i class="fa fa-camera" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Portfolio</span></a></li>
                        <li><a href="service.php"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Service</span></a></li>
                        <li><a href="about.php"><i class="fa fa-send" aria-hidden="true"></i><span class="hidden-xs hidden-sm">About</span></a></li>
                        <li><a href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Contact</span></a></li>
                        <li ><a href="user.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">User</span></a></li>
                        <li ><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary"></span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/admin.png" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>Piti Admin</span>
                                                    <p class="text-muted small">
                                                        Piti@admin.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="logout.php?logout">
                <button class="btn btn-info">
                    <i class="fa fa-download" aria-hidden="true"></i>     ອອກຈາກລະບົບ
                </button>
            </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
