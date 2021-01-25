<?php 
session_start();
ob_start();
if(empty($_SESSION['id']))
header("location:login.php");


?>
<head>
    <title>Add Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body  style="background-image:url(img/slider-2.jpg); background-size: cover;">
<header role="banner">
  <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
       
          </div>
        </div>
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" style="color: #00f;font-weight: bold;" href="index.php"><strong> Hospital management</strong> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="admin.php"  style="color: blue;font-weight: bold;">Home</a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link" href="dm.php"  style="color: blue;font-weight: bold;"> <i class="fa fa-user"></i> Doctors</a>
              </li>
                   <li class="nav-item">
                <a class="nav-link" href="adddoc.php"  style="color: blue;font-weight: bold;"><i class="fa fa-user"></i> Add Doctor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rm.php "  style="color: blue;font-weight: bold;"><i class="fa fa-home"></i> Clinc</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addclinc.php"  style="color: blue;font-weight: bold;"><i class="fa fa-home"></i>Add Clinc</a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="pm.php"  style="color: blue;font-weight: bold;"><i class="fa fa-user"></i> Patients</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="login.php"  style="color: blue;font-weight: bold;"> Sign Out</a>
              </li>
               <li class="nav-item active">
                 
                <a class="nav-link"  style="background-color: #6685ff;color: #fff; font-weight: bold; href="#"><?php echo $_COOKIE['name']  ?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div id="login_form" class="well log2">
    <h2 style="color: white;font-family: cursive;" class="bg-info"><center><span class="glyphicon glyphicon-lock"></span> Clinc Information</center></h2>
    <hr>
    <form method="POST" action="addclinc.php">
    Clinc name: <input type="text" placeholder="enter clinc name" name="n" class="form-control" required>
    <div style="height: 20px;"></div> 
     Clinc Description: <input type="text" placeholder="enter clinc description" name="d" class="form-control" required> <br>
     
    <div style="height: 10px;"></div>
    <div class="row">
      <div class="col-md-3"></div>
    <button type="submit" style="width: 300px;" name="addclinc" class="btn btn-primary btn-lg"><span class=""></span> add Clinc</button>
   </div>
    </form>
    <?php include'conn.php';
    $rname=(isset($_POST['n']))?$_POST['n']:'';
    $rdes=(isset($_POST['d']))?$_POST['d']:'';
   
    if(isset($_POST['addclinc']))
    {
     $run= mysqli_query($conn,"insert into room (rname,des) values(
        '".$rname."',
        '".$rdes."'
       
       )");
     if(isset($run))
     {
      echo'<script>
alert("add done");
      </script>';
     }

    }
   
    ?>
  </div>
  </body>
<?php  ob_end_flush(); ?>