
<?php
 include('connection.php');
 ?>
<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin </title>
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>

                    <h3 class="menu-title">Subjects</h3><!-- /.menu-title -->
                    <li class="active"><a href="add-hotel.php"> <i class="menu-icon fa fa-plus-square"></i>Add Subjects</a></li>
                    <li><a href="delete-hotel.php"> <i class="menu-icon ti-trash"></i>Delete Subjects</a></li>
                    <li><a href="show-hotel.php"> <i class="menu-icon fa fa-table"></i>Edit Subjects</a></li>

                    <h3 class="menu-title">Doctors</h3><!-- /.menu-title -->
                    <li><a href="add-room.php"> <i class="menu-icon fa fa-plus-square"></i>Add Doctors</a></li>
                    <li><a href="delete-hotel.php"> <i class="menu-icon ti-trash"></i>Delete Doctors</a></li>


                    <h3 class="menu-title">Controls</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Show</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-table"></i><a href="show-user.php">Show Doctors</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="show-reviews.php">Show Subjects</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="show-reservations.php"> Show Students</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="show-r.php"> Show Schedule</a></li>

                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header" style="display: inline-block;">

            <div class="header-menu">

                <div class="col-sm-7">
                  <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                    <a href="../index.php"><button type="submit"  class="btn btn-primary px-4">Logout</button></a>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Home</li>
                            <li><a href="#">Subjects</a></li>
                            <li class="active">Add Subjects</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
      <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Form Add Subjects</strong>
                            </div>
                            <div class="card-body">
                              <div>
                              <form  method="post">

                                <div class="form-group">
                                  <lable>Subjects Name</label>
                                  <input type="text" name="name_subject" class="form-control px-3 py-3" >
                                </div>
                                <div class="form-group">
                                  <lable>Units</label>
                                  <input type="text" name="units_subject" class="form-control px-3 py-3">
                                </div>
                                <div class="form-group">
                                  <lable>Prerequisites</label>
                                  <input type="text" name="prerequisites" class="form-control px-3 py-3" >
                                </div>
                                <div class="form-group">
                                  <button type="submit" name="submit" id="submit"  class="btn btn-primary py-3 px-5">ADD
                                </button>
                                </div>
                              </form>
                            </div>
                           </div>

                           <?php
                           if (isset($_POST['submit'])) {

                             $sql = "insert into  subject (name,units,prerequisites)

                              VALUES ('".$_POST['name_subject']."','".$_POST['units_subject']."','".$_POST['prerequisites']."')";

                         //$result = $connect->query($query);
                             $query= mysqli_query($con,$sql);
                             //eeror in the connection
                             if($query)
                             echo "<script>alert('Add Subject to database');</script>";
                           else
                           echo "<script>alert('Can Not Add Subject');</script>";
                         }
                              ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

</body>

</html>
<?php
include('colseConnaction.php');
 ?>
