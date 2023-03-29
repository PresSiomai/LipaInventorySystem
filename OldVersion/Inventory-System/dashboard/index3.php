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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
   .line1 {width:80%; background: #afafaf;}

 </style>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Inventory System</title>

 <link rel="stylesheet" href="../css/style.css" type="text/css"/>
 <script type="text/javascript" src="js/scripts.js"></script>
 <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
 <!-- Google Font: Source Sans Pro -->
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
 <!-- Google icons -->
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
 <!-- Ionicons -->
 <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
 <!-- Tempusdominus Bootstrap 4 -->
 <!-- <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
 <!-- iCheck -->
 <!-- <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
 <!-- JQVMap -->
 <!-- Theme style -->
 <link rel="stylesheet" href="../dist/css/adminlte.min.css">
 <!-- overlayScrollbars -->
 <!-- <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
 <!-- Daterange picker -->
 <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
 <!-- summernote -->
 <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
 
</head>


<body class="hold-transition sidebar-mini layout-fixed" onload="renderTime();">
  <div class="wrapper">

   <?php include '../navbar.php';?>

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #343434;">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #343434;">
      <!-- Sidebar user panel (optional) -->

      <div class="image">
        <img src="../Lipa_City_Seal.svg" width="110" alt="User Image" style="display: block; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 10px;">   </div>
        <div class="info" style="color: #afafaf; font-family: Poppins; text-align: center;">
          <a href="#" class="d-block">INVENTORY SYSTEM</a>
          <hr style="width:80%; background: #afafaf; margin-bottom: 40px; height: 30%;">

        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2" >
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item menu-open" style="color: #afafaf; font-family: Poppins; ">
            <a href="../dashboard" class="nav-link active" style="background-color: #670001;">
              <span class="iconify" data-icon="ic:round-dashboard" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>

          <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
            <a href="#" class="nav-link">
             <span class="iconify" data-icon="charm:layout-list" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>
             <p>
              ITEMS
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>

          <ul class="nav nav-treeview" style="color: #afafaf; font-family: Poppins;">
            <li class="nav-item">
              <a href="../view_items" class="nav-link">
                <p>View Items</p>
              </a>
            </li>

            <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
              <a href="../add_items" class="nav-link">

                <p>Add Items</p>
              </a>
            </li>
          </ul>

        </li>

        <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
          <a href="../print-documents" class="nav-link">
            <span class="iconify" data-icon="fa:print" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>

            <p>
              PRINT DOCUMENTS
            </p>
          </a>
        </li>

        <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
          <a href="../unserviseable-items" class="nav-link">
           <span class="iconify" data-icon="mdi:laptop-off" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>
           <p>
             UNSERVICEABLE ITEMS
           </p>
         </a>
       </li>

       <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
        <a href="../activity-log" class="nav-link">
          <span class="iconify" data-icon="radix-icons:activity-log" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>

          <p>
           ACTIVITY LOG
         </p>
       </a>
     </li>



   </ul>
 </nav>


 <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #3e3e3e;">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6" style="margin-top: 10px;" >
          <h1 class="m-0" style="color: #afafaf; font-family: Poppins; font-weight: bold;">&nbsp;DASHBOARD</h1>
          <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-6" >
          <!-- small box -->
          <div class="small-box bg-info" style="border-radius: 7px; margin-left: 7px;">
            <div class="inner style=" style="background-color: #b82e2e; font-family: Poppins; border-radius: 7px; " >
              <h3 style="margin-top: 20px; margin-left: 20px; font-size: 50px">150</h3>

              <p style="display: block; margin-top: 10px; margin-left: 20px; margin-bottom: 15px;"><i>Total items recorded</i></p>
            </div>
            <div class="icon">
              <i class="fa fa-book" ></i>
            </div>
          </div>
        </div>


        <div class="card card-info" style="width: 48.9%; margin-left: 7px; border-radius: 7px;">
         <div class="col-md-12">
          <table id="example1" class="table table-bordered">
           <thead>
            <tr style="background-color: #626867; font-family: Poppins; color: #afafaf;">
             <th>RECENT ACTIVITY</th>
           </tr>
         </thead>      


         <tr style="font-family: Poppins; font-weight: bold; color: #626867; height:200px">
          <td> Transfer Aircon-Koppel 2.0hp widow type <br><i><h7 style="font-weight: normal;">March 13, 2022</h7></i> </td>
        </tr>

      </table>
    </div>
  </div>
  <!-- ./col -->
</div>


<!-- /.row -->
<!-- Main row -->
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>





<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">

     <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success" style="border-radius: 7px; margin-left: 7px;">
        <div class="inner" style="background-color: #2eb881; font-family: Poppins; border-radius: 7px;">
          <h3 style="margin-top: 20px; margin-left: 20px; font-size: 50px"><?php echo number_format($row_sum[0]);?></h3>

          <p style="display: block; margin-top: 10px; margin-left: 20px; margin-bottom: 15px;"><i>Total Value of all items</i></p>
        </div>
        <div class="icon">
          <span class="iconify" data-icon="fa-solid:money-bill-wave-alt"></span>
        </div>

      </div>
    </div>

  </div>
  <!-- /.row -->
  <!-- Main row -->
  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>



<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">

     <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary" style="border-radius: 7px; margin-left: 7px; ">
        <div class="inner" style="background-color: #3873a1; font-family: Poppins; border-radius: 7px;">
          <h3 style="margin-top: 20px; margin-left: 20px; font-size: 50px">53</h3>

          <p style="display: block; margin-top: 10px; margin-left: 20px; margin-bottom: 15px;"><i>Total Unserviceable items</i></p>
        </div>
        <div class="icon">
          <i class="iconify" data-icon="mdi:laptop-off"></i>
        </div>

      </div>
    </div>

  </div>
  <!-- /.row -->
  <!-- Main row -->
  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>

<!-- CLOCK -->
<h1 id="clockDisplay" 
style="font-family: Poppins; 
color: #ffffff; 
/*font-weight: bold; */
font-size: 50px; 
text-align: right; 
margin-right: 100px; 
margin-top: -120px;"></h1>

<i><h5 id="dateDisplay" style="font-family: Poppins; color: #afafaf; text-align: right; margin-right: 100px;"></h5></i>






<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
<!-- <ul class="pagination pagination-sm" style="margin-top:-10px; justify-content: center;">
                    <?php  if($page_no > 1){ echo "<li class='page-item'><a class='page-link' href='?page_no=1'>First Page</a></li>"; } ?>

                    <li <?php if($page_no <= 1){ echo "class='page-item disabled'"; } ?>>
                      <a class='page-link' <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
                    </li>

                    <?php 
                    if ($total_no_of_pages <= 10){     
                      for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                        if ($counter == $page_no) {
                          echo "<li class='page-item disabled'><a class='page-link' href='#'>$counter</a></li>";  
                        }else{
                          echo "<li class='page-item' ><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                        }
                      }
                    }
                    elseif($total_no_of_pages > 10){

                      if($page_no <= 4) {     
                        for ($counter = 1; $counter < 8; $counter++){    
                          if ($counter == $page_no) {
                            echo "<li class='active'><a>$counter</a></li>"; 
                          }else{
                            echo "<li class='paginate_button page-item'><a href='?page_no=$counter'>$counter</a></li>";
                          }
                        }
                        echo "<li><a>...</a></li>";
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                      }

                      elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {    
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=1'>1</a></li>";
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=2'>2</a></li>";
                        echo "<li class='page-item' ><a class='page-link'>...</a></li>";
                        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {     
                          if ($counter == $page_no) {
                            echo "<li class='page-item' ><a class='page-link'>$counter</a></li>"; 
                          }else{
                            echo "<li class='page-item' ><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                          }                  
                        }
                        echo "<li class='page-item' ><a class='page-link'>...</a></li>";
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                      }

                      else {
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=1'>1</a></li>";
                        echo "<li class='page-item' ><a class='page-link' href='?page_no=2'>2</a></li>";
                        echo "<li class='page-item' ><a class='page-link'>...</a></li>";

                        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                          if ($counter == $page_no) {
                            echo "<li class='page-item' ><a class='page-link'>$counter</a></li>"; 
                          }else{
                            echo "<li class='page-item' ><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                          }                   
                        }
                      }
                    }
                    ?>

                    <li <?php if($page_no >= $total_no_of_pages){ echo "class='page-item disabled'"; } ?>>
                      <a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
                    </li>
                    <?php if($page_no < $total_no_of_pages){
                      echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                    } ?>
                  </ul> -->