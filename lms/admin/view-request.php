<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
    if (strlen($_SESSION['ldaid']==0)) {
  header('location:logout.php');
  } else{


  if(isset($_POST['submit']))
  {
    
     $cid=$_GET['editid'];
     $adstatus=$_POST['status'];
    
     
   $query=mysqli_query($con, "update  tbllaundryreq set Status='$adstatus' where ID='$cid'");
    if ($query) {
    $msg="status has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

  ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LMS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

 

    <!-- Navbar -->
    
<?php include('include/header.php');?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>


<?php
$cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tbllaundryreq where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<table border="1" class="table table-bordered mg-b-0">
<tr>
    <th>Date of Laundry</th>
    <td><?php  echo $row['DateofLaundry'];?></td>
  </tr>


<tr>
    <th>Top Wear</th>
    <td><?php  echo $row['TopWear'];?></td>
  </tr>
   <tr>
    <th>Bootom Wear</th>
    <td><?php  echo $row['BootomWear'];?></td>
  </tr>
 
<tr>
    <th>Woolen Cloth</th>
    <td><?php  echo $row['WoolenCloth'];?></td>
  </tr>
  
 <tr>
    <th>Others</th>
    <td><?php  echo $row['Other'];?></td>
  </tr>
 
  <tr>
    <th>Service</th>
    <td><?php  echo $row['Service'];?></td>
  </tr>
  <tr>
    <th>Pickup Address</th>
    <td><?php  echo $row['PickupAddress'];?></td>
  </tr>
  <tr>
    <th>Contact Person</th>
    <td><?php  echo $row['ContactPerson'];?></td>
  </tr>
  <tr>
    <th>Description</th>
    <td><?php  echo $row['Description'];?></td>
  </tr>

<tr>
    <th>Payment Method</th>
    <td><?php  echo $row['PaymentType'];?></td>
  </tr>
  
<tr>
    <th>Record Status</th>
    <td> <?php  
if($row['Status']=="0")
{
  echo "New";
}
if($row['Status']=="1")
{
  echo "Accept";
}
if($row['Status']=="2")
{
  echo "Inprocess";
}
if($row['Status']=="3")
{
  echo "Finish";
}

     ;?></td>
  </tr>
  
 <tr>


</table>

  



<?php } ?>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include('include/footer.php');?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
<?php }  ?>