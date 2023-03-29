<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../sessionOut.php");
}
$msg="";
include '../connection.php';

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
  $page_no = $_GET['page_no'];
} else {
  $page_no = 1;
}
$total_records_per_page = 10;
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2"; 

$result_count = mysqli_query($con,"SELECT COUNT(*) As id FROM tbl_items LEFT JOIN tbl_history ON tbl_items.ItemCode = tbl_history.ItemCode WHERE tbl_items.is_available='0' AND tbl_items.is_transferred='1'");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['id'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
  $second_last = $total_no_of_pages - 1; // total page minus 1


  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <style>
     @font-face{
       src: url(../Poppins-Regular.ttf);
       font-family: Poppins;
     }
     .line1 {width:80%; background: #afafaf;}

   </style>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Inventory System</title>

   <script type="text/javascript" src="js/scripts.js"></script>
   <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <!-- Theme style -->
   <link rel="stylesheet" href="../dist/css/adminlte.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
   <!-- summernote -->
   <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
   <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

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

           <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
            <a href="../dashboard" class="nav-link">
              <span class="iconify" data-icon="ic:round-dashboard" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>

              <p>
                DASHBOARD
              </p>
            </a>
          </li>

          <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
            <a href="#" class="nav-link active" style="background-color: #670001;">
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
            <a href="#" class="nav-link">
              <span class="iconify" data-icon="fa:print" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>
             
              <p>
                PRINT DOCUMENTS
                 <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview" style="color: #afafaf; font-family: Poppins;">
              <li class="nav-item">
                <a href="../print-documents" class="nav-link">
                 
                  <p>APE</p>
                </a>
              </li>
              <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
                <a href="../print_ppe" class="nav-link">
                 
                  <p>PPE</p>
                </a>
              </li>
               <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
                <a href="summary-report" class="nav-link">
                 
                  <p>Summary Report</p>
                </a>
              </li>
            </ul>
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
        <a href="#" class="nav-link">
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
          <h1 class="m-0" style="color: #afafaf; font-family: Poppins; font-weight: bold;">&nbsp;View Items</h1>
          <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
        </div><!-- /.col -->
        

        <!--TABLE STARTS -->
        <section class="content" style="width:98%; margin-left: 1%; margin-right: 1%; font-family: Poppins; ">
          <div>
            <h5 style="font-family: Poppins; color:#afafaf; margin-bottom: 20px; margin-top: 20px; margin-left:4px;">Total Items Value: &nbsp;<a style="color: #10bc2d; font-size: 30px;">901,219</a></h5>


          </div>
          <div class="container-fluid">
            <div class="row" >
              <div class="col-12" >


                <div class="card" style="background-color: #f9f9f9;">
                  <!-- /.card-header -->
                  <div class="card-body" >

                    <table id="example1" class="table table-bordered table-striped" style="background-color: #f9f9f9;">

                     <div class="search-bar" style="float:right; position: relative; margin-bottom: 15px; width: 25%;">
                      <input type="text" id="searchBar" class="" placeholder="Search" style="width: 100%">
                     
                    </div>

                    <thead>

                      <tr style="background-color: #c5c5c5; color: #3e3e3e; text-align: center;">
                        <th>#</th>
                        <th>Code #</th>
                        <th>Item Name</th>
                        <th>Property #</th>
                        <th>Reveiver Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>


                    <?php 


              // $sql = "SELECT * FROM tbl_items WHERE is_available='0' AND is_transferred='1'";
              // $res_data = $con->query($sql);
              // $sql2 = "SELECT * FROM tbl_history WHERE is_available='0' AND is_transferred='1'";
              // $res_data2 = $con->query($sql2);

                    $sql = "SELECT * FROM tbl_items LEFT JOIN tbl_history ON tbl_items.ItemCode = tbl_history.ItemCode WHERE tbl_items.is_available='0' AND tbl_items.is_transferred='1' ORDER BY tbl_items.id DESC LIMIT $offset, $total_records_per_page";
                    $res_data = $con->query($sql);
                    while($row = mysqli_fetch_array($res_data)){
                      $id = $row['id'];
                      $ItemCode = $row['ItemCode'];
                      $item_name = $row['ItemName'];
                      $property_num = $row['PropertyNumber'];
                      $classification = $row['Classification'];
                      $sof = $row['SourceOfFund'];
                      $unit_value = $row['UnitValue'];
                      $date_acq = $row['DateAcquired'];

                      $rcvrName= $row['receiverName'];

                      ?>


                      <tbody style="color:#626867; text-align: center;" id="tableInfo">

                       <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ItemCode; ?></td>
                        <td><?php echo $item_name; ?></td>                   
                        <td><?php echo $property_num; ?></td>

                        <td><?php echo $rcvrName; ?></td>

                        <td>
                          <form action="../Item_history" method="GET">
                            <button class="btn btn-info btn-sm" name="itemCode" value="<?php echo $ItemCode;?>" style=" width: auto;"><i class="fa fa-eye" aria-hidden="true"></i>&nbspView history</button>
                          </form>
                      <!-- <form action="../view" method="GET">
                        <button class="btn btn-primary btn-xs" name="viewId" value="<?php echo $ItemCode;?>" style="border-radius: 7px; border-color:  #44d18f; background-color: #44d18f;  width: 60px;">View</button>
                      </form> -->
                    </td>
                  </tr>


                  <?php

                }
                ?>

              </tbody>
            </table>

            <?php include 'paging.php'; ?>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>



<!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
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
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->

<script>
  // $(function () {
  //   $("#example1").DataTable({
  //     "responsive": true, "lengthChange": false, "autoWidth": false,
  //     "buttons": [""]

  //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  //   $('#example2').DataTable({
  //     "paging": true,
  //     "lengthChange": false,
  //     "searching": false,
  //     "ordering": true,
  //     "info": true,
  //     "autoWidth": false,
  //     "responsive": true,
  //   });
  // });


  $(document).ready(function(){
  $("#searchBar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tableInfo tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
</body>
</html>
