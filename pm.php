<?php  
 session_start();
 ob_start();
if(empty($_SESSION['id']))
header("location:login.php");


?>
<head>
    <title>Patients Management</title>
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
  <body  style="background-image:url(img/slider-2.jpg); background-size: cover;"">
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
    <div class="container">
<h2 style="color: white;">Patients Management </h2>
<hr>
      <table class="table" border="6" style="margin-top: 10px; color: white;border:solid #fff;">
        <th class="bg-info" style="padding: 10px;border:solid #fff;">Patient ID</th>
          <th class="bg-info" style="padding: 10px;border:solid #fff;">Patient Name</th>
          <th class="bg-info" style="padding: 10px;border:solid #fff;">Patient password</th>
            <th class="bg-info" style="padding: 10px;border:solid #fff;">Patient status</th>
              <th class="bg-info" style="padding: 10px;border:solid #fff;">Clinc ID</th>
               <th class="bg-info" style="padding: 10px;border:solid #fff;">Doctor ID</th>
               <th class="bg-info" style="padding: 10px;border:solid #fff;">Doctor report</th>
               <th class="bg-info" style="padding: 10px;border:solid #fff;"> day</th>
               <th class="bg-info" style="padding: 10px;border:solid #fff;"> time</th>
              <th class="bg-info" style="padding: 10px;border:solid #fff;">Delete</th>
              <?php include'conn.php';
             
              $run=mysqli_query($conn,"select * from pat");
              while($row=mysqli_fetch_array($run))
              {?>
                <tr style="padding: 10px;border:solid #fff; font-weight: bold;">
                  <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['pid'];  ?></td>
                   <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['pname'];  ?></td>
                       <td class="bg-info" style="padding: 10px;border:solid #fff;"><?php echo $row['ppass'];  ?></td>
                    <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['pstatus'];  ?></td>
                     <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['rid'];  ?></td>
                     <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['docid'];  ?></td>
                     <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['docreport'];  ?></td>
                        <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['day'];  ?></td>
                          <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['time'];  ?></td>
                      <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><a href="pm.php?pid= <?php echo $row['pid'] ?>" class="btn btn-danger btn-lg"><i class="fa fa-trash"></i> Delete</a></td>

                </tr>



             <?php }

             if(isset($_GET['pid']))
              {$pid=$_GET['pid'];
           $run1= mysqli_query($conn,"delete from pat where pid='$pid'");
            if(isset($run1))
            {
             ## header("location:pm.php");
              echo ' <meta http-equiv="refresh" content=0.1;URL=pm.php>';
           
            }


            }
              ?>
            
      </table>
    </div>
  </body>
<?php ob_end_flush(); ?>