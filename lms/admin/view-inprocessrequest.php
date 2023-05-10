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
     $othrprice=$_POST['otherprice'];
    $adstatus=$_POST['status'];
     
   $query=mysqli_query($con, "update  tbllaundryreq set Othercharges='$othrprice', Status='$adstatus' where ID='$cid'");
    if ($query) {
  echo '<script>alert("Details updated successfully.")</script>';
    echo "<script>window.location.href ='finish-request.php'</script>";
  }
  else
    {
      echo '<script>alert("Something went wrong.Please try again.")</script>';
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


  <span style="float:left" ><i class="fa fa-print fa-2x" aria-hidden="true" OnClick="CallPrint(this.value)" style="cursor:pointer" title="Print the Report"></i></span> 
<?php
$cid=$_GET['editid'];
//Getting Prices
$query=mysqli_query($con,"select * from tblpricelist");
while ($rw=mysqli_fetch_array($query)) {
$twp=$rw['TopWear'];
$bwp=$rw['BottomWear'];
$wwp=$rw['Woolen'];
}

$ret=mysqli_query($con,"select * from tbllaundryreq join tbluser on tbluser.id=tbllaundryreq.UserID where tbllaundryreq.ID='$cid' and tbllaundryreq.Status='2'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<div id="print">
<table border="1" class="table table-bordered mg-b-0" width="100%">
<tr>
    <th>Date of Laundry</th>
    <td><?php  echo $row['DateofLaundry'];?></td>
       <th>Posting Date</th>
    <td><?php  echo $row['postingDate'];?></td>
  </tr>


<tr>
    <th>Top Wear</th>
    <td><?php  echo $twqty=$row['TopWear']?></td>

    <th>Bootom Wear</th>
    <td><?php  echo $bwqty=$row['BootomWear'];?></td>
  </tr>
 
<tr>
    <th>Woolen Cloth</th>
    <td><?php  echo $wcqty=$row['WoolenCloth'];?></td>

    <th>Others</th>
    <td><?php  echo $thrqyty=$row['Other'];?></td>
  </tr>
 
  <tr>
    <th>Service</th>
    <td><?php  echo $row['Service'];?></td>

    <th>Pickup Address</th>
    <td><?php  $padd=$row['PickupAddress'];
if($padd==''):
echo "NA";
else:
echo $padd;
endif;  
?></td>
  </tr>
  <tr>
    <th>Contact Person</th>
    <td><?php  echo $row['ContactPerson'];?></td>

    <th>Description</th>
    <td><?php  echo $row['Description'];?></td>
  </tr>
<tr>
    <th>Payment Method</th>
    <td><?php  echo $row['PaymentType'];?></td>
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
</table>
<table border="1" class="table table-bordered mg-b-0" width="100%">
  <tr>
  <th colspan="5" style="color:red">Invoice of the Above Laundary request</th>
  </tr>

<tr>
  <th>#</th>
<th>Clothes</th>
<th>Qty</th>
<th>Per Price</th>
<th>Total</th>
</tr> 

<tr>
<td>1</td>
<td>Top Wear</td>
<td><?php echo $twqty;?></td>
<td><?php echo $twp;?></td>
<td><?php echo $twqty*$twp;?></td>
</tr> 


<tr>
<td>2</td>
<td>Bottom Wear</td>
<td><?php echo $bwqty;?></td>
<td><?php echo $bwp;?></td>
<td><?php echo $bwqty*$bwp;?></td>
</tr> 

<tr>
<td>3</td>
<td>Woolen Wear</td>
<td><?php echo $wcqty;?></td>
<td><?php echo $wwp;?></td>
<td><?php echo $wcqty*$wwp;?></td>
</tr> 

<tr>
<td>4</td>
<td>Others</td>
<td><?php echo $thrqyty;?></td>
<td>Other charge will be added by admin</td>
<td><?php echo $otchpr= $row['Othercharges'];?></td>
</tr> 
<tr>
  <th colspan="2">Total</th>
  <th><?php echo $twqty+$bwqty+$wcqty+$thrqyty;?></th>
    <td></td>
      <th><?php echo $twqty*$twp+$bwqty*$bwp+$wcqty*$wwp+$otchpr;?></th>
</tr>
</table>
</div>
<tr>

  <form method="post">
    <th><h5>Status</h5> </th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     
     <option value="3">Finish</option>
   </select></td>
  </tr><hr />
 <p style="text-align: center;">   <button type="submit" name="submit" class="btn btn-primary btn-block">Update</button></p>
 </form>
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
<script>
    $(function () {
    $("[data-toggle=tooltip]").tooltip();
    });
function CallPrint(strid) {
var prtContent = document.getElementById("print");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
}
</script>
</body>

</html>
<?php }  ?>