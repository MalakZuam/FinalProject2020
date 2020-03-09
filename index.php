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
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <script src="stylesheet" href="assets\js\init-scripts\chart-js/chartjs-init.js"></script>



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
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>

                    <h3 class="menu-title">Subjects</h3><!-- /.menu-title -->
                    <li><a href="add-sub.php"> <i class="menu-icon fa fa-plus-square"></i>Add Subjects</a></li>
                    <li><a href="delete-hotel.php"> <i class="menu-icon ti-trash"></i>Delete Subjects</a></li>
                    <li><a href="show-hotel.php"> <i class="menu-icon fa fa-table"></i>Edit Subjects</a></li>

                    <h3 class="menu-title">Doctors</h3><!-- /.menu-title -->
                    <li><a href="add-instructer.php"> <i class="menu-icon fa fa-plus-square"></i>Add Doctors</a></li>
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
                        </ol>
                    </div>
                </div>
           </div>
        </div> <!-- .content -->

    <div class="content mt-3">

          <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-flat-color-1" style="height:150px;">
                  <div class="card-body pb-0">


                    <h4 class="mb-0">
                      <span class = "count"> <?php echo "$c"?></span>
                    </h4>
                    <p class="text-light">Number Of Users</p>

                  </div>
                </div>
              </div> <!--/.col 1-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2" style="height:150px;">
                    <div class="card-body pb-0">

                      <h4 class="mb-0">
                        <span class = "count"> <?php echo "$c"?></span>
                      </h4>
                      <p class="text-light">Number Of Hotel</p>

                    </div>
                  </div>
                </div><!--/.col 2-->
              <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-3" style="height:150px;">
                        <div class="card-body pb-0">

                          <h4 class="mb-0">
                            <span class = "count"> <?php echo "$c"?></span>
                          </h4>
                          <p class="text-light">Number Of Rooms Available</p>

                        </div>
                      </div>
                    </div><!--/.col 3-->
                  <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-4" style="height:150px;">
                            <div class="card-body pb-0">

                              <h4 class="mb-0">
                                <span class = "count"> <?php echo "$c"?></span>
                              </h4>
                              <p class="text-light">Number Of Rooms Reserved</p>

                            </div>
                          </div>
                        </div><!--/.col 4-->


                        <!-- chart hotels -->
                  <div class="col-sm-6 col-lg-12" style= "width: 50%; max-width: 50%;">
                    <div id ="chartContainer" style="height: 370px; width: 100%;"></div>
                  </div>

                  <!-- chart users -->
                  <div class="col-sm-6 col-lg-12" style= "width: 50%; max-width: 50%;">
                    <div id ="chartContainer2" style="height: 370px; width: 100%;"></div>
                  </div>


                  <script>
                //  مخطط يوضح نسبة المستخدمين بالنسبة للدول

                  window.onload = function () {

                    var chart = new CanvasJS.Chart("chartContainer", {
                      animationEnabled: true,
                      exportEnabled: true,
                      title:{
                        text: "Percentage of hotel "
                      },
                      data: [{
                      type: "pie",
                      showInLegend: "true",
                      legendText: "{label}",
                      indexLabelFontSize: 16,
                      indexLabel: " #percent%",
                      yValueFormatString: "##0",
                      dataPoints:
                    }]
                  });
                  chart.render();
                  //مخطط يوضح نسبة الفنادق بناءا علي الدول
                  var chart2 = new CanvasJS.Chart("chartContainer2", {
                    animationEnabled: true,
                    exportEnabled: true,

                    title: {
                      text: "Percentage of users"
                    },
                    data: [{
                      type: "doughnut",
                      indexLabel: "#percent%",
                      yValueFormatString: "##0",
                      indexLabelFontSize: 16,
                      showInLegend: "true",
                      legendText: "{label2}",
                      dataPoints:
                    }]
                  });
                     chart2.render();
                  }
                  </script>
            </div>

    </div><!-- /#right-panel -->


    <!-- Right Panel -->


    <script src="assets/js/canvasjs.min.js"></script>">
    <script src="assets/js/jquery.canvasjs.min.js"></script>">

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>


</body>

</html>
<?php
include('colseConnaction.php');
 ?>
