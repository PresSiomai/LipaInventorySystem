
<?php
session_start();
if(!isset($_SESSION["admin"]))
{
	session_destroy();
	header("location:../sessionOut.php");
}
include '../connection.php';

$sql = "SELECT id FROM tbl_items";
$result=mysqli_query($con,$sql);
$ItemCount=mysqli_num_rows($result);
$ItemCount++;

$itemCode=date("Ymd-His-") . 0 .$ItemCount;

$sql_sum = "SELECT sum(UnitValue) FROM tbl_items  WHERE is_available='1'";
$sum=mysqli_query($con,$sql_sum);
$row_sum = mysqli_fetch_array($sum);

$sql = "SELECT id FROM tbl_items";
$result=mysqli_query($con,$sql);
$regItemCount=mysqli_num_rows($result);

$sql = "SELECT id FROM tbl_archive";
$result=mysqli_query($con,$sql);
$archiveItem=mysqli_num_rows($result);


if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
} else {
	$page_no = 1;
}
$total_records_per_page = 5;
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2"; 

$result_count = mysqli_query($con,"SELECT COUNT(*) As id FROM `tbl_action_log`");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['id'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

	
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="../Lipa_City_Seal.svg" type="image/x-icon" />
		
		<script type="text/javascript" src="js/scripts.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <title>Inventory System</title>
  </head>


  <body class="hold-transition sidebar-mini layout-fixed" onload="renderTime(); "style="background-color: #3e3e3e;">
    <div class="wrapper" style="font-family: Poppins;">
     
     <?php include 'sidebar.php';?>
  



     <div class="content-wrapper"
     style="background-color: #3e3e3e; height: auto;">

     <div class="content-header">
      <div class="container-fluid">
       <div class="row mb-2">
        <div class="col-sm-6" style="margin-top: 10px;" >
         <h1 class="m-0"
         style="color: #afafaf;
         font-weight: bold;">&nbspDASHBOARD</h1>
         <hr style="width:200%;
         background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
       </div>
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>


 <div class="dashboard-body">

  <div class="dashboard-cards-section">

   <div class="small-box bg-info" style="border-radius: 7px; width: 100%;">
    <div class="inner style=" style="background-color: #b82e2e; font-family: Poppins; border-radius: 7px; " >
     <h3 style="margin-top: 20px; margin-left: 20px; font-size: 50px"><?php echo $regItemCount;?></h3>

     <p style="display: block; margin-top: 10px; margin-left: 20px; margin-bottom: 15px;"><i>Total items recorded</i></p>
   </div>
   <div class="icon">
     <i class="fa fa-book" ></i>
   </div>
 </div>


 <div class="small-box bg-success" style="border-radius: 7px; width: 100%;">
  <div class="inner" style="background-color: #2eb881; font-family: Poppins; border-radius: 7px;">
   <h3 style="margin-top: 20px; margin-left: 20px; font-size: 50px"><?php echo number_format($row_sum[0]);?></h3>

   <p style="display: block; margin-top: 10px; margin-left: 20px; margin-bottom: 15px;"><i>Total Value of all items</i></p>
 </div>
 <div class="icon">
   <span class="iconify" data-icon="fa-solid:money-bill-wave-alt"></span>
 </div>
</div>


<div class="small-box bg-primary" style="border-radius: 7px; width: 100%;">
  <div class="inner" style="background-color: #3873a1; font-family: Poppins; border-radius: 7px;">
   <h3 style="margin-top: 20px; margin-left: 20px; font-size: 50px"><?php echo $archiveItem;?></h3>

   <p style="display: block; margin-top: 10px; margin-left: 20px; margin-bottom: 15px;"><i>Total Unserviceable items</i></p>
 </div>
 <div class="icon">
   <i class="iconify" data-icon="mdi:laptop-off"></i>
 </div>

</div>

</div><!-- dashboard-cards-section -->





<div class="dashboard-cards-section2">

 <div class="dashboard-table-section">

  <div class="card card-info" style=" margin: auto;">

   <table id="example1" class="table table-bordered">
    <thead>
     <tr style="background-color: #626867; font-family: Poppins; color: #afafaf;">
      <th>RECENT ACTIVITY
       <i style='font-size: 9pt;  float:right;' >Page <?php echo $page_no." of ".$total_no_of_pages; ?></i></th>

     </tr>
   </thead>   
   <tbody>	
    <?php 
    $result = mysqli_query($con,"SELECT * FROM `tbl_action_log` ORDER BY id DESC LIMIT $offset, $total_records_per_page  ");
    while($row = mysqli_fetch_array($result)){
     echo "	<tr style='font-family: Poppins; font-weight: bold; color: #626867; height:80px'>
     <td> ".$row['itemName']." - ".$row['ItemCode']."<br>
     <i style='font-weight:normal'>".$row['author']." - ".$row['action']."  - ".$row['dateCommitted']."</i>
     </td>

     </tr>";
   }
   mysqli_close($con);
   ?>





 </tbody>  

</table>
<?php 	include 'paging.php'; ?>


</div>

</div>

</div>


</div><!-- dashboard-cards-section2 -->





</div>
<h1 id="clockDisplay" 
style="font-family: Poppins; 
color: #ffffff; 
/*font-weight: bold; */
font-size: 50px; 
text-align: right; 
margin-right: 100px; 
margin-top: -120px;"></h1>

<i><h5 id="dateDisplay" style="font-family: Poppins; color: #afafaf; text-align: right; margin-right: 100px;"></h5></i>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../dist/js/adminlte.js"></script>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>