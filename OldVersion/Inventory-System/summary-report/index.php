<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../sessionOut.php");
}
include '../connection.php';

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
  <title>Inventory-System-Add-Items</title>

  <!-- Google Font: Source Sans Pro -->
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

<style type="text/css">
   .column {
    float: left;
    width:30%;
    color: white;
  }

  /* Clear floats after the columns */
.footer-ape{
  display: flex;
  flex-direction: row;
}
th{
    padding-left: 10px;
    padding-right: 10px;
    width: 6%px;
    border: solid 1px;
    font-size: 8px;
  }
  td{
    border: solid 1px;
    padding-left: 10px;
    padding-right: 10px;
    font-size:8px;
  }
</style>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-red navbar-light" style="background-color: #670001; height: 60px;">
    <!-- Left navbar links -->

  <ul class="navbar-nav">
      <li class="nav-item" >
       <h4 style="color: #fff; display: block; margin-top: 10px; margin-left: 15px; font-family: Poppins;"><?= $_SESSION['admin']?> <span class="iconify" data-icon="fa:user" style="color: #fff; margin-bottom: 10px; margin-left: 15px;"></span></h4>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"  >
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item" >
        <a class="nav-link" data-widget="fullscreen" href="#" style="color: #afafaf;" role="button">
          <i class="fas fa-expand-arrows-alt" style="margin-left: 20px; margin-top: 15px; color: #fff;"></i>
        </a>
      </li>
      
       <li class="nav-item" style="color: #fff; font-family: Poppins;">

        <button style="border-radius: 20px; height: 70%; margin-top: 10px; margin-right: -30px; background-color:  #b82e2e; border-color: #fff; ">
            <a href="../sessionOut.php" class="nav-link" style="color: #fff; margin-top: -5px;">
              <p>
                <span class="iconify" data-icon="fa-solid:sign-out-alt" style="color: #fff; margin-right: 5px; margin-top: -3px;"></span> LOGOUT
              </p>
            </a>
            </button>
          </li>

    </ul>

           <ul >
         
          </ul>
       </nav>
  <!-- /.navbar -->

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
            <a href="../print-documents" class="nav-link active" style="background-color: #670001;">
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
                <a href="../summary-report" class="nav-link">
                 
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

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
           <div class="col-sm-6" style="margin-top: 10px;" >
            <h1 class="m-0" style="color: #afafaf; font-family: Poppins; font-weight: bold;">&nbsp;SUMMARY REPORT</h1>
            <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
          </div><!-- /.col -->
          
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
   <section class="content" style="width:98%; margin-left: 1%; margin-right: 1%; font-family: Poppins; ">


    <div style="margin-left:6px;">
      <div class="column">
       <label>Date from</label>
      <input type="date" name=""  style="padding:5px; border-radius:5px; border: 0; width: 300px; margin-right:20px;"> 
    </div>
     <div class="column">
   <label>Date to</label>
      <input type="date" name=""  style="padding:5px; border-radius:5px; border: 0; width: 300px; margin-right:20px;"> 
    </div>
    <div class="column">  
      <label>Select SOF</label>
     <select name="" id="" style="padding:5px; border-radius:5px; border: 0; width: 300px; margin-right:20px;">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select>
    </div>
    </div>

    <br>
    <br>
    <br>
   
    <table style="background-color:white;padding:5px;">

      <thead>
      <tr style=" color: #3e3e3e; text-align: center;">
        <th style="width: 2%;">Item No.</th>
        <th style="width: 5%;">Name Of Office</th>
        <th style="width: 5%;">  Office Equipment</th>
        <th style="width: 5%;">Furniture And Fixtures</th>
        <th style="width: 5%;">IT Equipment And Software</th>
        <th style="width: 5%;">Agri, Fishery, And Forestry Equipt</th>
        <th style="width: 5%;">Communication Equipment</th>
        <th style="width: 5%;">Construction And Heavy Equipment</th>
        <th style="width: 5%;">Disaster Response & Rescue Equipt</th>
        <th style="width: 5%;">Military, Police & Security Equipt</th>
        <th style="width: 5%;">Medical Equipment</th>
        <th style="width: 5%;">Printing Equipment</th>
        <th style="width: 5%;">Sports Equipment</th>
        <th style="width: 5%;">Other Machinery & Equipment</th>
        <th style="width: 5%;">Motor Vehicles</th>
        <th style="width: 5%;">Library Books</th>
        <th style="width: 5%;">Water Crafts</th>
        <th style="width: 5%;">Other Property Plant & Equipt</th>
       
      </tr>
      </thead>

      <tbody style="color:#626867; text-align: center;">

      <tr>
        <td>1</td>
        <td>2022-876-02-001</td>
       <td>2022-876-02-001</td>
        <td>Aircon-Koppel Window Type</td>   
        <td>
              09/02/2011
        </td>                
        <td>10000</td>
        <td>20000</td>
         <td>10705020</td>
         <td>1</td>
        <td>2022-876-02-001</td>
       <td>2022-876-02-001</td>
        <td>Aircon-Koppel Window Type</td>   
        <td>
              09/02/2011
        </td>                
        <td>10000</td>
        <td>20000</td>
         <td>10705020</td>
          <td>20000</td>
         <td>10705020</td>
      </tr>

      <tr>
       <td>1</td>
        <td>2022-876-02-001</td>
       <td>2022-876-02-001</td>
        <td>Aircon-Koppel Window Type</td>   
        <td>
              09/02/2011
        </td>                
        <td>10000</td>
        <td>20000</td>
         <td>10705020</td>
         <td>1</td>
        <td>2022-876-02-001</td>
       <td>2022-876-02-001</td>
        <td>Aircon-Koppel Window Type</td>   
        <td>
              09/02/2011
        </td>                
        <td>10000</td>
        <td>20000</td>
         <td>10705020</td>
          <td>20000</td>
         <td>10705020</td>

      </tbody>
    </table>
    <br>
    <div style="float: right">
                 <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ape-modal"style=" border-radius: 7px;  background-color:#45cece; border-color: #45cece;  width: 140px; height: 30px; font-size: 14px; "> 
                  <span class="iconify" data-icon="fa:print" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>PROCEED</a>
                 </div>
      <!-- /.container-fluid -->
    </section>

                 

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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [""]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
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
